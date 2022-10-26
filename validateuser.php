<?php

function ValidateUser($username, $password)
{
    if($GLOBALS['DEBUG'])
    {
        echo "Validate() - username" .$username . "password" . $password. "<br/>";
        
    }
    $filename  = "usercreds.txt";
    if($file = fopen($filename, "r")){
        $creds = fread($file, filesize($filename));
        $data = explode(",", $creds);
if ($GLOBALS['DEBUG']){
    print_r($data);
}
if($data[0]= $username && $data[1]= $password){
    header("Location: https://localhost/introphp/loginsuccess.php");
}
else {
    echo "<br/><h1>Invalid Login attempt Please Try Again</h1>";
}
    }
    else {
        echo "Error opening file usercreds.txt <br/> ";
    }
}
?>