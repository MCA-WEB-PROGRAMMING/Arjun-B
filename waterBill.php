<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>water bill</title>
</head>
<body>
    <h1 style="color:green;text-align:center;">WATER BILL</h1>
    <form action="" method="POST">
    <table align="center" border>
    <tr>
    <th>Enter your consumer no:</th>
    <td><input type="text" name="consno" id=""></td>
    </tr>
    <tr>
    <th>Enter your unit per kl</th>
    <td><input type="text" name="unit" id=""></td>
    </tr>
    <tr>
    <th>Select your tariff:</th>
    <td>
    <select name="tariff" id="">
    <option value="select">---select--</option>
    <option value="0-15/kl">0-15/kl</option>
    <option value="6-30/kl">16-30/kl</option>
    <option value="31-60/kl">31-60/kl</option>
    <option value="above60/kl">above60/kl</option>
    </select></td>
    </tr>
    <tr>
    <th colspan="2"><input type="submit" name="submit" value="submit" style="font-size:larger;cursor:pointer;color:black;background-color:green;"></th>
    </tr>
    </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$no=$_POST['consno'];
$tariff=$_POST['tariff'];
$unit=$_POST['unit'];
$pay=0;

if($tariff=='0-15/kl'){
   if($unit>0  && $unit<15){
        $pay=$unit*3;

   }
}
if($tariff=='16-30/kl'){
        if($unit>30  && $unit<16){
            $pay=$unit*6;
    
        }
    }
if($tariff=='31-60/kl'){
    if($unit>31  && $unit<60){
        $pay=$unit*12;
        
    }
}
if($tariff=='above60/kl'){
    if($unit>60){
        $pay=$unit*24;
        
    }
}
echo"<div style='align:center'>";
echo"<h1>----WATER BILL----</h1>";
echo"<br>";
echo"consumer number:".$no;
echo"<br>";
echo"unit used:".$unit;
echo"<br>";
echo"your tariff:".$tariff;
echo"<br>";
echo"Amount to be pay:".$pay;
echo"</div>";
}
?>