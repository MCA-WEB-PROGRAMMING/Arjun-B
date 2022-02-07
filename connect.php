<?php
$conn=mysqli_connect("localhost","root","","php-programs");
if(!$conn){
    die("connection error".mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $id=$_POST['empid'];
    $name=$_POST['name'];
    $jobname=$_POST['job'];
    $managerid=$_POST['manager'];
    $salary=$_POST['salary'];

    $sql="INSERT INTO emp_table(empId,empName,jobName,managerId,salary)VALUES('$id','$name','$jobname','$managerid','$salary')";
    if(mysqli_query($conn,$sql)){
        echo"<script>alert('data inserted successfully...');</script>";
    }
    else {
        echo"error"."$sql".mysqli_error();
    }
}

?>