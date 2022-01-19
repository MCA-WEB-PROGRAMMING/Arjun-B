<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting using asort() & arsort()</title>
</head>
<body>
<?php
$a=array('Arjun','Amal','Gopan','zakaria');
echo"<h2>Array</h2>";
print_r($a);
asort($a);
echo"<h2>Ascending order</h2>";
print_r($a);
echo"<br>";
arsort($a);
echo"<h2>Descending order</h2>";
print_r($a);
?>
</body>
</html>