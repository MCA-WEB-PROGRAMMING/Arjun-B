<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<style>
    table{
    background-color:white;
    margin-left: auto;
    margin-right: auto;
    margin-top: 1rem;
    padding: 1rem;
    box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2), 0 4px 20px 0 rgba(0,0,0,0.19);
}
tr,th,td{
    padding: 1rem;
    text-align: center;
}
</style>
<body>
    <h2 style="text-align: center;">FORM VALIDATION</h2>
    <form action="#" method="POST">
        <table>
            <tr>
                <th>Name</th>
                <td><input type="text " name="name"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <th>Mob No</th>
                <td><input type="tel" name="phone"></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><input type="text" name="uname"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <th>Re-enter password</th>
                <td><input type="password" name="rpass"></td>
            </tr>
            <tr>
                <th colspan="2"><input type="submit" name="submit"></th>
            </tr>
        </table>
    </form>

<?php
if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $ph=$_POST['phone'];
        $un=$_POST['uname'];
        $pass=$_POST['pass'];
        $conn=mysqli_connect("localhost","root","","reg-form");
        if($conn){
            echo("connected successfully");
            echo"<br>";

        }
        else {
            
            echo("error");
            echo"<br>";
        }

        if($_POST['name']==""){
            echo"<script>alert('enter the name!!'')</script>";
        }
        if(!preg_match("/^[a-zA-Z ]*$/",$name)){
            echo"<script>alert('enter the name!!')</script>";

        }
        if($email==""){
            echo"<script>alert('enter the email!!'')</script>";

        }
        if($ph==""){
            echo"<script>alert('enter the phone number!!')</script>";
        }
        if(!preg_match('/^[0-9]{10}+$/', $_POST['phone'])){
            echo"<script>alert('enter the valid phone number!!'')</script>";

        }
        if($un==""){
            echo"<script>alert('enter the username!!'')</script>";

        }
        if($pass==""){
            echo"<script>alert('enter the password!!'')</script>";
        }
        if(strlen($pass)<8){
            echo "<script>alert('Your Password Must Contain At Least 8 Characters!!!')</script>";
        }
        if(!preg_match("#[0-9]+#",$pass)) {
            echo "<script>alert('Your Password Must Contain At Least 1 Number!')</script>";
        }
        if(!preg_match("#[A-Z]+#",$pass)) {
            echo "<script>alert('Your Password Must Contain At Least 1 Capital Letter!')</script>";
        }
        if(!preg_match("#[a-z]+#",$pass)) {
            echo "<script>alert('Your Password Must Contain At Least 1 Lowercase Letter!')</script>";
        } 
    $query="INSERT INTO reg_table(name,email,phone,username,password)VALUES('{$name}','{$email}','{$ph}','{$un}','{$pass}')";
    if(mysqli_query($conn,$query)){
        echo("successfully inserted");
        echo"<br>";
    }
    else {
        
        echo("insertion field");
        echo"<br>";
    }
    $search="SELECT * FROM reg_table";
    $data=mysqli_query($conn,$search);
    while($res=mysqli_fetch_assoc($data)){
        echo'<table>
        <tr><th>name</th><th>email</th><th>phone</th><th>username</th><th>password</th></tr>
        <tr><td>'.$res['name'].'</td><td>'.$res['email'].'</td><td>'.$res['phone'].'</td><td>'.$res['username'].'</td><td>'.$res['password'].'</td></tr>
        </table>';
        // echo $res['name'],' ';
        // echo $res['email'],'';
        // echo $res['phone'],'';
        // echo $res['username'],'';
        // echo $res['password'],'';
    }

    }

    ?>
</body>
</html>