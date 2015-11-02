<?php


$username = $_POST["username"];
$password = $_POST["password"];


if ($username =="Luke" && $password =="1104983") {
    echo "Hi " . $username . ", login was successful.";
}
    else {
        echo "Login was unsuccessful, User '" . $username . "'not recognised";
    }
