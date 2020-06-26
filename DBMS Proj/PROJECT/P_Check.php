<?php
	$uname="";
	$pass="";
	
    if(isset($_POST['uname'])) $uname = $_POST['uname'];
    if(isset($_POST['pass'])) $pass = $_POST['pass'];
    
    if(!empty($uname) && !empty($pass))
    {
        $host = "localhost" ;
        $username = "root";
        $password = "";
        $database = "animals";
    

        try 
        {
            $con = new PDO("mysql:host=$host;dbname=$database" , $username , $password);
        
            $sql = "SELECT * FROM employees where E_ID LIKE '$uname' and password LIKE '$pass' ";
            $returnobject=$con->query($sql);
        
            
        
            if($returnobject->rowCount()==1)
            {
				echo "<script>window.location.assign('P_Home.php')</script>";
			}
			else{
				echo "<script>window.location.assign('P_Login.php?status=wrongdata')</script>";
			}
        }
        catch(PDOException $ex)
        {
            echo "<script>window.location.assign('P_Login.php?status=dberror')</script>";
        }
    }
    else{
		echo "<script>window.location.assign('P_Login.php?status=invalid')</script>";
	}
?>