<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Image</h1>
<p>The custome style image.</p>



  
  
  <h2>Image on Web Page</h2>
  <h3>Code</h3>
<div class="code-container">
<pre id="pre0" class="code">&lt;!DOCTYPE html&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/style.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/open-sans/index.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/icon.css" /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/ie.css" /&gt;
    &lt;![endif]--&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.unand.js"&gt;&lt;/script&gt;
    
    &lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;<br>  &lt;h1&gt;Image&lt;/h1&gt;<br>  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;<br>  &lt;h2&gt;Original Size&lt;/h2&gt;<br>  &lt;p data-align="center"&gt;&lt;img src="../images/horticulture/tomat2.jpg" alt="Tomat"&gt;&lt;/p&gt;<br>  &lt;h2 data-align="center"&gt;With "width" and "height" Attribute&lt;/h2&gt;<br>  &lt;p data-align="center"&gt;&lt;img src="../images/horticulture/tomat2.jpg" alt="Tomat" height="300" width="400"&gt;&lt;/p&gt;<br>  &lt;h2 data-align="center"&gt;Full Width (No Border)&lt;/h2&gt;<br>  &lt;p data-align="center"&gt;&lt;img src="../images/horticulture/tomat2.jpg" alt="Tomat" data-role="image" data-full-width="true"&gt;&lt;/p&gt;<br>  &lt;h2 data-align="center"&gt;Full Width (With Border)&lt;/h2&gt;<br>  &lt;p data-align="center"&gt;&lt;img src="../images/horticulture/tomat2.jpg" alt="Tomat" data-role="image" data-full-width="true" data-border="1-2"&gt;&lt;/p&gt;<br>  &lt;p data-align="center"&gt;Maximum Width = 400px&lt;/p&gt;<br>  &lt;p data-align="center"&gt;&lt;img src="../images/horticulture/tomat2.jpg" alt="Tomat" data-role="image" data-full-width="true" data-border="1-2" style="max-width:400px;"&gt;&lt;/p&gt;<br>

&lt;/div&gt;
    
&lt;/body&gt;
&lt;/html&gt;</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
