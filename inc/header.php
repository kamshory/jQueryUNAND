<?php

$title = "jQuery Unand";

$arr = array(
"about.php"=>"About jQuery Unand",
"browser-support.php"=>"Browser Support",
"download.php"=>"Download"
);

$bn = basename($_SERVER['PHP_SELF']);
if(in_array($bn, array_keys($arr)))
{
	$title .= " - ".$arr[$bn];
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php echo $title;?></title>
<meta name="description" content="jQuery Unand is a JavaScript and CSS framework designed to make web-based applications on mobile devices. jQuery Unand is designed to simplify source code created by programmers. jQuery Unand aims to minimize the resources used and the size of the file to be loaded by the browser so it can run on devices with lower specs.">
<link rel="stylesheet" type="text/css" href="style/style.css" />
<script language="javascript" src="example/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="script/script.js"></script>
</head>

<body>

<div class="all">
	<div class="wrapper">
    <div class="menu menu-rounded">
    	<div class="menu-inner">
          <ul>
            <li><a href="./">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="system-requirement.php">System Requirement</a></li>
            <li><a href="browser-support.php">Browser Support</a></li>
            <li><a href="docs">Documentation</a></li>
            <li><a href="demo.php" target="_blank">Online Demo</a></li>
            <li><a href="example">Example</a></li>
            <li><a href="download.php">Download</a></li>
          </ul>
       </div>
    </div>
    
	<div class="header">
    <h1>jQuery Unand</h1>
    </div>
    
    
    <div class="middle">
    	<div class="mainbar">
