<?php
$id=$_POST['id'];

echo "$id";


$host = "localhost" ;
$username = "root" ;
$password ="";
$database = "animals";

try 
{
    
    $con = new PDO("mysql:host=$host;dbname=$database;" , $username , $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql ="Delete from employees where `E_ID` = '$id';";
    
    $con->exec($sql);
    
}
catch(PDOException $ex)
{
    echo  $sql. "<br>" . $ex->getMessage();
}
$con = null ;
?>
