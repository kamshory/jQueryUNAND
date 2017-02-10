<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Popup Dialog</h1>
<p>Popup dialog is element container that only shown on specific condition. On the initial conditions, the popup dialog is hidden. Programmer can make the dialog visible on initial by using an attribute.</p>
<p>The dialog may have the title or the icon that can close it. The dimension of the dialog can be defined by using external sheet style or inline style.</p>
<p>This UI require JavaScript and must be initialize.</p>
<pre>&lt;div data-role=&quot;popup&quot; data-section=&quot;modal-popup&quot; 
data-modal=&quot;true&quot; data-title=&quot;Modal Popup&quot; data-close-icon=&quot;true&quot;&gt;
    This is modal popup dialog.
&lt;/div&gt;</pre>


  
  
  <h2>Classic Popup</h2>
  <h3>Code</h3> 
  <div class="code-container">
  <pre  id="pre0" class="code">&lt;!DOCTYPE html&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/style.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/open-sans/index.css" /&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/font/icon.css&quot; /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/ie.css&quot; /&gt;
    &lt;![endif]--&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.unand.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('popup');
    }
    &lt;/script&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;

    &lt;div data-role="content"&gt;
    &lt;a href="#classic-popup" data-rel="popup"&gt;Click me!&lt;/a&gt;
    &lt;div data-role="popup" data-section="classic-popup"&gt;
        This is classic popup dialog. Thank you for clicking the button! 
        &lt;a href="javascript:mui.closePopUp('classic-popup')"&gt;Close&lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>Modal Popup</h2>
  <h3>Code</h3> 
  <div class="code-container">
  <pre  id="pre1" class="code">&lt;!DOCTYPE html&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/style.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/open-sans/index.css" /&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/font/icon.css&quot; /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/ie.css&quot; /&gt;
    &lt;![endif]--&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.unand.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('popup');
    }
    &lt;/script&gt;
    &lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;
    &lt;a href="#modal-popup" data-rel="popup"&gt;Click me!&lt;/a&gt;
    &lt;div data-role="popup" data-section="modal-popup" data-modal="true"&gt;
        This is modal popup dialog. Thank you for clicking the button! 
        &lt;a href="javascript:mui.closePopUp('modal-popup')"&gt;Close&lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   
  <h2>Modal Popup with Title</h2>
  <h3>Code</h3> 
  <div class="code-container">
  <pre id="pre9" class="code">&lt;!DOCTYPE html&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/style.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/open-sans/index.css" /&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/font/icon.css&quot; /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/ie.css&quot; /&gt;
    &lt;![endif]--&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.unand.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('popup');
    }
    &lt;/script&gt;
    &lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;
    &lt;a href="#modal-popup" data-rel="popup"&gt;Click me!&lt;/a&gt;
    &lt;div data-role="popup" data-section="modal-popup" data-modal="true" data-title=&quot;Modal Popup&quot;&gt;
        This is modal popup dialog. Thank you for clicking the button! 
        &lt;a href="javascript:mui.closePopUp('modal-popup')"&gt;Close&lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;
</pre>
  <form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   
  <h2>Modal Popup with Close Icon</h2>
  <h3>Code</h3> 
  <div class="code-container">
  <pre id="pre9" class="code">&lt;!DOCTYPE html&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/style.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/open-sans/index.css" /&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/font/icon.css&quot; /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/ie.css&quot; /&gt;
    &lt;![endif]--&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.unand.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('popup');
    }
    &lt;/script&gt;
    &lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;
    &lt;a href="#modal-popup" data-rel="popup"&gt;Click me!&lt;/a&gt;
    &lt;div data-role="popup" data-section="modal-popup" data-modal="true" data-title=&quot;Modal Popup&quot; data-close-icon=&quot;true&quot;&gt;
        This is modal popup dialog. Thank you for clicking the button! 
        &lt;a href="javascript:mui.closePopUp('modal-popup')"&gt;Close&lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;
</pre>
  <form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>Splash Popup</h2>
  <h3>Code</h3> 
  <div class="code-container">
  <pre  id="pre2" class="code">&lt;!DOCTYPE html&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/style.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/open-sans/index.css" /&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/font/icon.css&quot; /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/ie.css&quot; /&gt;
    &lt;![endif]--&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.unand.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('popup');
    }
    &lt;/script&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;
    &lt;a href="#splash-popup" data-rel="popup"&gt;Click me!&lt;/a&gt;
    &lt;div data-role="popup" data-section="splash-popup" data-modal="true" data-splash="true" data-splash-time="3000"&gt;
        This is splash popup dialog with 3000 ms live time. Thank you for clicking the button! 
        &lt;a href="javascript:mui.closePopUp('splash-popup')"&gt;Close&lt;/a&gt;
    &lt;/div&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   


  <h2>Info Popup</h2>
  <h3>Code</h3> 
  <div class="code-container">
  <pre  id="pre3" class="code">&lt;!DOCTYPE html&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/style.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/open-sans/index.css" /&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/font/icon.css&quot; /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/ie.css&quot; /&gt;
    &lt;![endif]--&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.unand.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('popup');
    }
    &lt;/script&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;
    &lt;a href="#info-popup" data-rel="popup"&gt;Click me!&lt;/a&gt;
    &lt;div data-role="popup" data-section="info-popup" data-modal="true" data-close-on-click="true"&gt;
       This is info popup dialog. Thank you for clicking the button! Click on the document to close me.
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
  </pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>Ajax Pop Up (URL on Pup Up Resource)</h2>
  <h3>Code</h3> 
  <div class="code-container">
<pre  id="pre4" class="code">&lt;!DOCTYPE html&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/style.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/open-sans/index.css" /&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/font/icon.css&quot; /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/ie.css&quot; /&gt;
    &lt;![endif]--&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.unand.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('popup');
    }
    &lt;/script&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;
    &lt;a href="#ajax-popup" data-rel="popup"&gt;Click me!&lt;/a&gt;
    &lt;div data-role="popup" data-section="ajax-popup" data-modal="true" data-close-on-click="true" data-location-async="ajax-popup.php" data-cache="false"&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
  </pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>Ajax Pop Up (URL on Trigger)</h2>
  <h3>Code</h3>
  <div class="code-container">
<pre  id="pre5" class="code">&lt;!DOCTYPE html&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
    &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/css/style.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="assets/font/open-sans/index.css" /&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/font/icon.css&quot; /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/ie.css&quot; /&gt;
    &lt;![endif]--&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="assets/js/jquery.unand.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('popup', {animDelay:50});
    }
    &lt;/script&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;
    &lt;a href="#ajax-popup" data-rel="popup" data-location-async="ajax-popup.php" data-cache="false"&gt;Click me!&lt;/a&gt;
    &lt;div data-role="popup" data-section="ajax-popup" data-modal="true" data-close-on-click="true"&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
  </pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>


<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
