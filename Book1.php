<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Information</title>
    <style>
    table{
    background-color:white;
    margin-left: auto;
    margin-right: auto;
    margin-top: 1rem;
    padding: 1rem;
    box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2), 0 4px 20px 0 rgba(0,0,0,0.19);
}

</style>

</head>

<body>
    <form action="" method="POST">
        <table align="center" cellpadding="8" width="50%" border>
            <tr>
                <th colspan="2"><font style="color:red;">Book Details</font> </th>
                
            </tr>
            <tr>
                <th>Accession number</th>
                <td><input type="text" name="accessno"></td>
            </tr>
            <tr>
                <th>Title</th>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <th>Author</th>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <th>Edition</th>
                <td><input type="text" name="edition"></td>
            </tr>
            <tr>
                <th>Publisher</th>
                <td><input type="text" name="publisher"></td>
            </tr>
            <tr>
                <th colspan="2"><input type="submit" name="submit"></th>
            </tr>

        </table>
    </form>
    <br><br>
    <form action="" method="POST">
        <table align="center" cellpadding="8" width="50%" border >
            <tr>
                <th colspan="2"><font style="color:blue;">Search book</font> </th>
            </tr>
            <tr>
                <th>Enter the title</th>
                <td><input type="text" name="stitle"></td>
            </tr>
            <tr>
                <th colspan="2"><input type="submit" name="ssubmit"></th>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","php-programs");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["submit"])){

    $accessno=$_POST["accessno"];
    $title=$_POST["title"];
    $author=$_POST["author"];
    $edition=$_POST["edition"];
    $publisher=$_POST["publisher"];

    $sql="INSERT INTO book_details(accessno,title,author,edition,publisher)VALUES('$accessno','$title','$author','$edition','$publisher')";
    if(mysqli_query($conn,$sql)===TRUE){
        echo"<script>alert('successfully inserted');</script>";

    }
    else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
}
echo"<br><br><hr>";
if(isset($_POST['ssubmit']))
{

    $stitle=$_POST['stitle'];
    $sql2="SELECT * FROM `book_details` WHERE title='$stitle'";
    $data=mysqli_query($conn,$sql2);
    if($data->num_rows>0){
        while($res=mysqli_fetch_assoc($data)){
            echo"<table align='center' cellpadding='8' width='50%' border>";
            echo"<tr><th colspan='2'><center><font style='color:cyan;'>BOOK DETAILS</font></center></th></tr>";
            echo"<tr><th>Accession number</th><td>".$res["accessno"]."</td></tr>";
            echo"<tr><th>Title</th><td>".$res["title"]."</td></tr>";
            echo"<tr><th>Author</th><td>".$res["author"]."</td></tr>";
            echo"<tr><th>Editon</th><td>".$res["edition"]."</td></tr>";
            echo"<tr><th>Publisher</th><td>".$res["publisher"]."</td></tr>";
            echo"</table>";
        }
    }
    else {
        echo "<h1>OOPS..no results found</h1>";
    }
}

?>