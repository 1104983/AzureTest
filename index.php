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
$access_level = "standarduser";

if ($username =="Luke" && $password =="1104983") {

setcookie('access_level',$access_level);
setcookie('username',$username);

echo "Hi " . $username . ", login was successful.";
}
else if($username == "" && $password == ""){
        echo "Please login";
    }
else{
    echo "Login Failed for user '".$username. "'";
}

displayAccessLevelInformation($_COOKIE['access_level']);


function displayAccessLevelInformation($accesslevel)
{
    if ($accesslevel == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    } elseif ($accesslevel == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}
?>
</body>
</html>
