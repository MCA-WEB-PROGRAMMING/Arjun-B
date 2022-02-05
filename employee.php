<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
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
</head>
<body>
<h2 style="text-align: center;">EMPLOYEE DETAILS</h2>
    <form action="#" method="POST">
        <table>
            <tr>
                <th>emp ID</th>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <th>Emp Name</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>Job Name</th>
                <td><input type="text" name="jname"></td>
            </tr>
            <tr>
                <th>Manager ID</th>
                <td><input type="number" name="mid"></td>
            </tr>
            <tr>
                <th>Salery</th>
                <td><input type="text" name="salary"></td>
            </tr>
           
            <tr>
                <th colspan="2"><input type="submit" name="submit"></th>
            </tr>
        </table>
    </form> 
    <form action="" method="POST">
        <table>
            <tr>
                <th>Enter the salary Limit</th>
            </tr>
            <tr>
                <td> <input type="text" name="limit"></td>
            </tr>
            <tr>
                <td><input type="submit" name="salary_btn"></td>
            </tr>
        </table> 
    </form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","php-programs");
if(!$conn){
    die("connection failed".mysqli_connect_error());
}

if(isset($_POST["submit"])){
    $id=$_POST["id"];
    $empname=$_POST["name"];
    $jobname=$_POST["jname"];
    $mngid=$_POST["mid"];
    $salary=$_POST["salary"];

    $sql="INSERT INTO emp_details(empId,empName,jobName,managerId,salary)VALUES(' $id','$empname','$jobname','$mngid','$salary')";
    if(mysqli_query($conn,$sql)){
        echo"<script>alert('detials inserted successfully!!!!!');</script>";
    }
    else{
        echo"error".$sql."<br>".mysqli_error();
    }
}

if(isset($_POST['salary_btn'])){
    //$sl=$_POST['limit'];
    $sql2="SELECT empName,salary FROM emp_details WHERE salary<35000";
    $result=mysqli_query($conn,$sql2);
    if($result->num_rows>0){
        echo"<table align='center' cellpadding='8' width='50%' border>
        <tr><th colspan='2'>Employee List whose salary >35000</th></tr>";
        echo"<tr><th>Emplyee Name</th><th>Salary</th></tr>";

        while($res=mysqli_fetch_assoc($result)){
            echo"<tr><td>".$res['empName']."</td><td>".$res['salary']."</td></tr>";
        }
        echo"</table>";
    }
    else
    {
        echo "Error: " . $sqlreturn . "<br>" . mysqli_error($conn);
    }
}


?>