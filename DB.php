<?php

header('Content-Type:application/json');

//$mysqli->set_charset('utf8mb4');

$server   ='localhost '  ;
$username ='dummy     '  ;
$password ='dumdum!123'  ;
$database ='Meatnbones'  ;

try{
    $conn = new mysqli($server,$username,$password,$database); 
    echo "You are connected.\n";
   }
catch(mysqli_sql_exception $e)
{
    echo "An error has happened, the code is: ".  $e->getCode().".\n";
    echo "The SQL State for the error is: ".  $e->getSQLState().".\n";
};

?>