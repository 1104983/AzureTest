<?php


$username = $_POST["username"];
$password = $_POST["password"];


if ($username =="Luke" && $password =="1104983") {
    echo "Hi " + $username + " login was succesful";
}
    else {
        echo "Login was unsuccesful";
    }
