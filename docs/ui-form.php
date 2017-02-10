<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Form</h1>
<p>Custom style form.</p>



  
  <h2>Responsive Form with Filedset and Table</h2>
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
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('*');
    }
    &lt;/script&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;

    &lt;form name="form1" method="post"&gt;
        
    &lt;fieldset data-fieldset-responsiev="true"&gt;
    &lt;legend&gt;Personal Data&lt;/legend&gt;
    
    &lt;table width="100%" border="0" cellspacing="0" cellpadding="0" data-table-type="two-cols" data-table-responsive="true"&gt;
      &lt;tr&gt;
        &lt;td&gt;Name&lt;/td&gt;
        &lt;td&gt;&lt;input type="text" name="name" id="name" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Email&lt;/td&gt;
        &lt;td&gt;&lt;input type="email" name="email" id="email" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Password&lt;/td&gt;
        &lt;td&gt;&lt;input type="password" name="password" id="password" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;URL&lt;/td&gt;
        &lt;td&gt;&lt;input type="url" name="url" id="url" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Gender&lt;/td&gt;
        &lt;td&gt;&lt;label&gt;&lt;input type="radio" name="radio" id="gender" value="M"&gt; Man&lt;/label&gt; &lt;label&gt;&lt;input type="radio" name="radio" id="gender" value="W"&gt; Woman&lt;/label&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Birth Day&lt;/td&gt;
        &lt;td&gt;&lt;input type="date" name="birthday" id="birthday"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Address&lt;/td&gt;
        &lt;td&gt;&lt;textarea name="address" id="address" data-full-width="true"&gt;&lt;/textarea&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Country&lt;/td&gt;
        &lt;td&gt;&lt;select name="country" id="country"&gt;
          &lt;option value="-"&gt;Select&lt;/option&gt;
          &lt;option value="ID"&gt;Indonesia&lt;/option&gt;
        &lt;/select&gt;&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/table&gt;
    
    &lt;/fieldset&gt;

    &lt;fieldset data-fieldset-responsiev="true"&gt;
    &lt;legend&gt;Check Box&lt;/legend&gt;
    &lt;div&gt;&lt;label&gt;&lt;input data-rel="check-all" data-target-selector=".chk1" type="checkbox" name="check-all" value="1" /&gt; Check All&lt;/label&gt;&lt;/div&gt;
    &lt;div&gt;&lt;label&gt;&lt;input class="chk1" type="checkbox" name="check1" value="1" /&gt; Check 1&lt;/label&gt;&lt;/div&gt;
    &lt;div&gt;&lt;label&gt;&lt;input class="chk1" type="checkbox" name="check2" value="1" /&gt; Check 2&lt;/label&gt;&lt;/div&gt;
    &lt;div&gt;&lt;label&gt;&lt;input class="chk1" type="checkbox" name="check3" value="1" /&gt; Check 3&lt;/label&gt;&lt;/div&gt;
    &lt;/fieldset&gt;

    
    &lt;div data-role="button-set"&gt;
    &lt;input type="submit" name="submit" value="Submit" /&gt;
    &lt;input type="reset" name="reset" value="Reset" /&gt;
    &lt;input type="button" name="login" value="Login" data-rel="popup" href="#popup1" /&gt;
    &lt;/div&gt;
    
    &lt;/form&gt;
    &lt;/div&gt;
    
    
    
    &lt;div data-role="popup" data-section="popup1" data-modal="true" data-title="Login Form" data-close-icon="true"&gt;
    &lt;form id="form1" name="form1" method="post" action=""&gt;
        &lt;div data-display="block"&gt;Email&lt;/div&gt;
        &lt;div data-display="block"&gt;&lt;input type="email" name="email" data-display="block" required="required" placeholder="Type your email" data-full-width="true" /&gt;&lt;/div&gt;
        &lt;div data-display="block"&gt;Password&lt;/div&gt;
        &lt;div data-display="block"&gt;&lt;input type="password" name="password" data-display="block" required="required" placeholder="Type your password" data-full-width="true" /&gt;&lt;/div&gt;
        &lt;div data-role="button-set"&gt;
        &lt;input type="submit" name="login" value="Login" /&gt;
        &lt;input type="button" name="cancel" value="Close" onClick="javascript:mui.closePopUp('popup1')" /&gt;
        &lt;/div&gt;
    &lt;/form&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>Responsive Form with Fieldset without Table</h2>
  <h3>Code</h3>
<div class="code-container">
<pre id="pre1" class="code">&lt;!DOCTYPE html&gt;
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
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('*');
    }
    &lt;/script&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;

   
    &lt;form name="form1" method="post"&gt;
    
    
    &lt;fieldset data-fieldset-responsiev="true"&gt;
    &lt;legend&gt;Personal Data&lt;/legend&gt;
    
    &lt;div data-role="field-label"&gt;Name&lt;/div&gt;
    &lt;div data-role="field-input"&gt;&lt;input type="text" name="name" id="name" data-full-width="true"&gt;&lt;/div&gt;
    &lt;div data-role="clear"&gt;&lt;/div&gt;
    
    &lt;div data-role="field-label"&gt;Email&lt;/div&gt;
    &lt;div data-role="field-input"&gt;&lt;input type="email" name="email" id="email" data-full-width="true"&gt;&lt;/div&gt;
    &lt;div data-role="clear"&gt;&lt;/div&gt;
    
    &lt;div data-role="field-label"&gt;Password&lt;/div&gt;
    &lt;div data-role="field-input"&gt;&lt;input type="password" name="password" id="password" data-full-width="true"&gt;&lt;/div&gt;
    &lt;div data-role="clear"&gt;&lt;/div&gt;
    
    
    &lt;/fieldset&gt;
    
    &lt;div data-role="button-set"&gt;
    &lt;input type="submit" name="submit" value="Submit" /&gt;
    &lt;input type="reset" name="reset" value="Reset" /&gt;
    &lt;input type="button" name="login" value="Login" data-rel="popup" href="#popup1" /&gt;
    &lt;/div&gt;
    
    &lt;/form&gt;
    &lt;/div&gt;

    &lt;div data-role="popup" data-section="popup1" data-modal="true" data-title="Login Form" data-close-icon="true"&gt;
    &lt;form id="form1" name="form1" method="post" action=""&gt;
        &lt;div data-display="block"&gt;Email&lt;/div&gt;
        &lt;div data-display="block"&gt;&lt;input type="email" name="email" data-display="block" required="required" placeholder="Type your email" data-full-width="true" /&gt;&lt;/div&gt;
        &lt;div data-display="block"&gt;Password&lt;/div&gt;
        &lt;div data-display="block"&gt;&lt;input type="password" name="password" data-display="block" required="required" placeholder="Type your password" data-full-width="true" /&gt;&lt;/div&gt;
        &lt;div data-role="button-set"&gt;
        &lt;input type="submit" name="login" value="Login" /&gt;
        &lt;input type="button" name="cancel" value="Close" onClick="javascript:mui.closePopUp('popup1')" /&gt;
        &lt;/div&gt;
    &lt;/form&gt;
    &lt;/div&gt;
    
&lt;/body&gt;</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>Full Page Form</h2>
  <h3>Code</h3>
  <div class="code-container">
<pre id="pre2" class="code">&lt;!DOCTYPE html&gt;
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
    &lt;script type="text/javascript"&gt;
    var mui;
    window.onload = function()
    {
        mui = new mobileUI('*');
    }
    &lt;/script&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;

   
    &lt;form name="form1" method="post"&gt;
    
    
    &lt;fieldset data-fieldset-responsiev="true"&gt;
    &lt;legend&gt;Personal Data&lt;/legend&gt;
    
    &lt;div&gt;Name&lt;/div&gt;
    &lt;div&gt;&lt;input type="text" name="name" id="name" data-full-width="true"&gt;&lt;/div&gt;
    
    &lt;div&gt;Email&lt;/div&gt;
    &lt;div&gt;&lt;input type="email" name="email" id="email" data-full-width="true"&gt;&lt;/div&gt;
    
    &lt;div&gt;Password&lt;/div&gt;
    &lt;div&gt;&lt;input type="password" name="password" id="password" data-full-width="true"&gt;&lt;/div&gt;
    
    
    &lt;/fieldset&gt;
    
    &lt;div data-role="button-set"&gt;
    &lt;input type="submit" name="submit" value="Submit" /&gt;
    &lt;input type="reset" name="reset" value="Reset" /&gt;
    &lt;input type="button" name="login" value="Login" data-rel="popup" href="#popup1" /&gt;
    &lt;/div&gt;
    
    &lt;/form&gt;
    &lt;/div&gt;

    &lt;div data-role="popup" data-section="popup1" data-modal="true" data-title="Login Form" data-close-icon="true"&gt;
    &lt;form id="form1" name="form1" method="post" action=""&gt;
        &lt;div data-display="block"&gt;Email&lt;/div&gt;
        &lt;div data-display="block"&gt;&lt;input type="email" name="email" data-display="block" required="required" placeholder="Type your email" data-full-width="true" /&gt;&lt;/div&gt;
        &lt;div data-display="block"&gt;Password&lt;/div&gt;
        &lt;div data-display="block"&gt;&lt;input type="password" name="password" data-display="block" required="required" placeholder="Type your password" data-full-width="true" /&gt;&lt;/div&gt;
        &lt;div data-role="button-set"&gt;
        &lt;input type="submit" name="login" value="Login" /&gt;
        &lt;input type="button" name="cancel" value="Close" onClick="javascript:mui.closePopUp('popup1')" /&gt;
        &lt;/div&gt;
    &lt;/form&gt;
    &lt;/div&gt;
    
&lt;/body&gt;</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
