<?php

$a=array('Gandhiji','Nethaji','Bhagat','Nehru','Tagor','K kelappan','Sarojini nayidu');
echo"<table border cellpadding='10px' cellspacing='10px'>";
echo"<tr><th>SlNo</th><th>Name</th></tr>";
foreach($a as $key=>$value){
    
    echo"<tr><td>{$key}</td><td>{$value}</td></tr>";   
}
echo"</table>";
?>