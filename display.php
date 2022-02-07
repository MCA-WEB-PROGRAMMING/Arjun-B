<?php
$conn=mysqli_connect("localhost","root","","php-programs");
if(!$conn){
    die("connection error".mysqli_connect_error());
}

if(isset($_POST['get'])){

    $sql1="SELECT * FROM emp_table WHERE salary > 35000";
    $data=mysqli_query($conn,$sql1);

    if($data->num_rows>0){

        echo"<table align='center' cellpadding='8' width='50%' style='background-color: gray;' border>
        <tr><th colspan='2'>Employee List whose salary >35000</th></tr>";
        echo"<tr><th>Name</th><th>salary</th></tr>";

        while($res=mysqli_fetch_assoc($data)){
            echo"<tr><td>".$res['empName']."</td><td>".$res['salary']."</td></tr>";
        }
        echo"</table>";

    }
    else {
        echo"erro".$sql1."<br>".mysqli_error();
    }
   
}
?>