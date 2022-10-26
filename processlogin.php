<?php
require_once("ValidateUser.php");
$DEBUG = 0;
if(!empty($_POST['username']) && !empty($_POST['password'])){
    $username = trim ($_POST['username']);
    $password = trim ($_POST['password']);
    if($GLOBALS['DEBUG']){
        echo "ProcessLogin - username" .$username . "password" .$password. "<br/>";
    };
    ValidateUser($username, $password); 
    // call the function
}

?>