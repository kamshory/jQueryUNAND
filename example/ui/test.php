<?php
if(isset($_POST['code']))
{
	echo base64_decode(stripslashes($_POST['code']));
}
else
{
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/font/open-sans/index.css" />
    <link rel="stylesheet" type="text/css" href="assets/font/icon.css" />
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="assets/css/ie.css" />
    <![endif]-->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.unand.js"></script>
    <script type="text/javascript">
    var mui;
    window.onload = function()
    {
    }
    </script>
<title>jQuery Unand</title>
</head>
<body>
    <div data-role="header" data-theme="a" data-gradien="true"> 
    <h1>Invalid Request</h1>
    </div>
	<div data-role="content">
    <h1>Invalid Request</h1>
    <p>This page is designed to execute example source code. You must post any code to this page. <a href="./">Click here to back</a>.</p>
    </div>
</body>
</html>
<?php
}
?>