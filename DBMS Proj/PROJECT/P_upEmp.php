<!DOCTYPE html>
<html>
<head>
    <title>Employee</title>
</head>

<body style = "background : grey">
<h1>Input employee</h1>
    
    <form method="post" action="P_Update.php" id="form">
        <b>Employee ID : </b><br>
        <input type = "text" id = "id" name="id" Placeholder = "Update ID"><br>
        <b>Password : </b><br>
        <input type = "password" id = "pass" name = "pass" Placeholder = "Update Password"><br>
        <b>Employee Name : </b><br>
        <input type = "text" id = "name" name="name" Placeholder = "Update Name"><br>
        <b>Employee Designation : </b><br>
        <input type = "text" id = "desig" name="desig" Placeholder = "Update Designation"><br>
        <b>Employee Contact Number : </b><br>
        <input type = "text" id = "number" name="number" Placeholder = "Update Designation"><br>
        <b>Employee Salary : </b><br>
        <input type = "text" id = "salary" name="salary" Placeholder = "Update Salary"><br>
        
        
        <input type = "submit" value = "Update" id = "submit">
    </form>
</body>

</html>