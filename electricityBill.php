<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSEB bill Calculator</title>
</head>
<body>
    <form action="" method="POST">
    <table>
        <tr>
            <td>
                enter consumer no:
            </td>
            <td>
                <input type="text" name="num">
            </td>
        </tr>
            <tr>
            <td>
                enter the unit used:
            </td>
            <td>
                <input type="text" name="unit">
            </td>
        </tr>
        
        <tr>
            <td>category:</td>
            <td>
                <select  name="tariff">
                    <option value="">---select---</option>
                    <option value="Rural">Rural</option>
                    <option value="Commercial">Commercial</option>
                    <option value="Residential">Residential</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="submit">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $consno=$_POST['num'];
    $unit=$_POST['unit'];
    $tariff=$_POST['tariff'];
    $pay=0;
    if($tariff=='Rural'){
        if($unit>0&&$unit<=50){
            $ec=10;
            $pay=(($unit*.25)+$ec);

        }
        elseif($unit>50&&$unit<=100){
            $ec=10;
            $pay=(($unit*.50)+$ec);

        }
        elseif($unit>100&&$unit<=200){
            $ec=10;
            $pay=(($unit*1)+$ec);

        }
        elseif($unit>500&&$unit<=1000){
            $ec=10;
            $pay=(($unit*5)+$ec);

        }
    }
    if($tariff=='Commercial'){
        if($unit>0&&$unit<=50){
            $ec=30;
            $pay=( $unit*1)+$ec;

        }
        elseif($unit>50&&$unit<=100){
            $ec=30;
            $pay=(($unit*2)+$ec);

        }
        elseif($unit>100&&$unit<=200){
            $ec=30;
            $pay=(($unit*4)+$ec);

        }
        elseif($unit>500&&$unit<=1000){
            $ec=30;
            $pay=(($unit*10)+$ec);
        }
        
    }
    if($tariff=='Residential'){
        if($unit>0&&$unit<=50){
            $ec=25;
            $pay=(($unit*.5)+$ec);

        }
        elseif($unit>50&&$unit<=100){
            $ec=25;
            $pay=(($unit*1)+$ec);

        }
        elseif($unit>100&&$unit<=200){
            $ec=25;
            $pay=(($unit*2)+$ec);
        }
        elseif($unit>500&&$unit<=1000){
            $ec=25;
            $pay=(($unit*5)+$ec);

        }  
    }
    echo"**Electricity Bill**";
    echo"<br>";
    echo"Consumer Number:".$consno;
    echo"<br>";
    echo"Meter Reading:".$unit;
    echo"<br>";
    echo"your tariff:".$tariff;
    echo"<br>"; 
    echo"Amount to be pay:$pay";
    echo"<br>";   

}
?>