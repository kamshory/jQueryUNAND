<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery Unand Demo</title>
<style type="text/css">
body{
	margin:0px;
	padding:0px;
}
.emul{
	width:437px;
	height:945px;
	margin:20px auto;
	background:url(360.png) no-repeat left top;
}
#image{
	display:none;
}
#iframe{
	padding-top:162px;
	padding-left:40px;
}
iframe#web{
	width:360px;
	height:512px;
	background-color:#FFF;
}
</style>
<script language="javascript">
function enterURL()
{
	var url = document.getElementById('web').src;
	//url = prompt('Enter URL', url);
	document.getElementById('web').src = url;
	document.getElementById('image').style.display = 'none';
	document.getElementById('iframe').style.display = 'block';
}
</script>
</head>

<body>
<div class="emul">
	<div id="image">
    	<img src="360.png" border="0" usemap="#Map" />
        <map name="Map">
          <area shape="rect" coords="230,583,296,674" href="javascript:enterURL();">
        </map>
    </div>
    <div id="iframe">
    	<iframe src="http://agrimp.com" id="web" name="web" marginheight="0" marginwidth="0" scrolling="auto" hspace="0" vspace="0" frameborder="0"></iframe>
    </div>
</div>
</body>
</html>
