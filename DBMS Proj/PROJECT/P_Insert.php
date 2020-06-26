<?php
$id=$_POST['id'];
$pass=$_POST['pass'];
$name = $_POST['name'];
$desig = $_POST['desig'];
$number = $_POST['number'];
$salary = $_POST['salary'];
echo "$id $pass $name $desig $number $salary";


$host = "localhost" ;
$username = "root" ;
$password ="";
$database = "animals";

try 
{
    
    $con = new PDO("mysql:host=$host;dbname=$database;" , $username , $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql ="Insert into Employees(`E_ID`,`password`,`Name`,`Designation`,`Contact number`,`Salary`) values ('$id' , '$pass' , '$name', '$desig' , '$number','$salary');";
    
    $con->exec($sql);
    
}
catch(PDOException $ex)
{
    echo  $sql. "<br>" . $ex->getMessage();
}
$con = null ;
?>
