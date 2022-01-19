<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array table</title>
</head>
<body>
    <?php
    $a=array('Sachin Tendulkar','Rohit Sharma','Virat Kohli',
    'Jasprit Bumrah','Suresh Raina','KL Rahul','MS Dhoni','M Shami','Kapil Dev','Shikhar Dhawan','Mandeep Singh');
    echo"<table border='1'><tr><th>SlNo</th><th>Name</th></tr>";
    foreach($a as $key=>$value){
        echo"<tr><th>",$key+1,"</th><th>$value</th></tr>";
    }

    echo"</table>";
    ?>
</body>
</html>