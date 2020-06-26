<!DOCTYPE html>
<html>
<head>
    <title>Animal</title>
</head>

<body style = "background:#aaa ;">
<h1>Input new Animal</h1>
    
    <form method="post" action="P_Insert.php" id="form">
        <b>Animal ID : </b><br>
        <input type = "text" id = "id" name="id" Placeholder = "Input ID"><br>
        <b>Animal name : </b><br>
        <input type = "text" id = "name" name = "name" Placeholder = "Input Animal Name"><br>
        <b>Animal Catagory : </b><br>
        <input type = "text" id = "ctg" name="ctg" Placeholder = "Input Animal Catagory"><br>
        <b>Animal Gender : </b><br>
        <input type = "text" id = "gender" name="gender" Placeholder = "Input Animal Gender"><br>
        <b>Animal Age : </b><br>
        <input type = "text" id = "age" name="age" Placeholder = "Input Animal age"><br>
        <b>Import Date : </b><br>
        <input type = "date" id = "date" name="date" Placeholder = "Input Import date"><br>
        
        
        <input type = "submit"  id = "submit">
    </form>
</body>

</html>