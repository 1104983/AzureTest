
<?php
$username = $_POST["username"];
$password = $_POST["password"];
$access_level = "root";

if ($username =="Luke" && $password =="1104983") {
    displayAccessLevelInformation($_COOKIE['access_level']);

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

