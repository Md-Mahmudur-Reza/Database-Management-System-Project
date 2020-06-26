<?php
$id=$_POST['id'];
$name=$_POST['name'];
$ctg = $_POST['ctg'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$date = $_POST['date'];
echo "$id $name $ctg $gender $age $date";


$host = "localhost" ;
$username = "root" ;
$password ="";
$database = "animals";

try 
{
    
    $con = new PDO("mysql:host=$host;dbname=$database;" , $username , $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql ="Insert into animal(`A_ID`,`Animal Name`,`Catagory`,`Gender`,`Age`,`import date`) 
    values ('$id' , '$name' , '$ctg', '$gender' , '$age','$date');";
    
    $con->exec($sql);
    
}
catch(PDOException $ex)
{
    echo  $sql. "<br>" . $ex->getMessage();
}
$con = null ;
?>
