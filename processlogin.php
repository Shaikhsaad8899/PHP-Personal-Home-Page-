<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
else{

}
?>
<h1>Click here to go LOGIN PAGE</h1>

</body>
</html>