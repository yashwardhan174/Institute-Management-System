<?php
session_start();
$_SESSION["umail"] = "";
unset($_SESSION["umail"]);
header('Location: index.php');
exit; 
?>
