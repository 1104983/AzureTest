  <!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Deployment Test</title>
</head>
<body>
<form action="index.php" method="post">

<label>Username: </label>

<input type="text" name="username">
<br>

<label>Password: </label>

<input type="password" name="password">

<br>
<input type="submit" value ="submit">
</form>
<?php
$username = $_POST["username"];
$password = $_POST["password"];

if ($username =="Luke" && $password =="1104983") {

setcookie('access_level','standarduser');
setcookie('username',$username);

echo "Hi " . $username . ", login was successful.";
}
else {
echo "Login failed";

  ?>
</body>
</html>
