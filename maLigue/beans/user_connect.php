<?php
if (isset($_POST['loginCnx'])){
    $login=$_POST['loginCnx'];
}  else {
    $login="";
}
if(isset($_POST['passCnx'])){
    $pass=$_POST['passCnx'];
}  else {
    $pass="";
}
if ($pass!="" && $login!=""){
    $connectUser->connect($login,$pass);
}
?>