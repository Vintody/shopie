<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<?php  
include("konek.php");

?>


<h2>Login</h2>

<form action="index.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Login"> 
</form>
</body>
</html>
