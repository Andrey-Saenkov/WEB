<?php
session_start();
function redirect(){
 header('Location: /');
 exit();
}
if (isset($_POST))
{
 $_SESSION["Name"] = $_POST["Name"];
 $_SESSION["Surname"] = $_POST["Surname"];
 $_SESSION["Age"] = $_POST["Age"];
 redirect();
}