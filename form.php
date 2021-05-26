<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>

<form  method="GET">
	<input type="type" name="login" placeholder="login">
	<input type="password" name="pass" placeholder="password">
</br>
<br>
<button type="submit" name="submit" value="submit">Login</button>
</form>

<?php
if (isset($_GET['submit'])) {

	$result1 = $_GET['login'];
	$result2 = $_GET['pass'];

if ($result1 == "admin" && $result2 == "123") 
{
echo "Logged in successfully<br>";
}

else
{
echo "your password incorrect<br>";

}
}
?>
</body>
</html>