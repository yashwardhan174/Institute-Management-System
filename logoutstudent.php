<?php
session_start();
$_SESSION["sidx"] = "";
unset($_SESSION["sidx"]);
header('Location: index.php');
exit; // 
?>
