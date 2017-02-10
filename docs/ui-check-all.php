<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Check All</h1>
<p>Check or uncheck all checkboxes according to another input.</p>
<p>This UI require JavaScript and must be initialize.</p>
<p>Example:</p>
<pre id="pre0"><span class="code">&lt;div&gt;&lt;label&gt;&lt;input data-rel=&quot;check-all&quot; data-target-selector=&quot;.chk1&quot; type=&quot;checkbox&quot; name=&quot;check-all&quot; value=&quot;1&quot; /&gt; Check All&lt;/label&gt;&lt;/div&gt;
&lt;div&gt;&lt;label&gt;&lt;input class=&quot;chk1&quot; type=&quot;checkbox&quot; name=&quot;check1&quot; value=&quot;1&quot; /&gt; Check 1&lt;/label&gt;&lt;/div&gt;
&lt;div&gt;&lt;label&gt;&lt;input class=&quot;chk1&quot; type=&quot;checkbox&quot; name=&quot;check2&quot; value=&quot;1&quot; /&gt; Check 2&lt;/label&gt;&lt;/div&gt;
&lt;div&gt;&lt;label&gt;&lt;input class=&quot;chk1&quot; type=&quot;checkbox&quot; name=&quot;check3&quot; value=&quot;1&quot; /&gt; Check 3&lt;/label&gt;&lt;/div&gt;</span></pre>
<h2>Check or Uncheck All Checkboxes According to Another Input</h2>
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
        mui = new mobileUI('popup checkbox autocomplete');
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
        &lt;td&gt;&lt;select name="country" data-rel="dynamic-select" data-target-selector="#province" data-source="prov.php" data-cache="false" data-loading-caption="Wait..." data-empty-caption="Select Province"&gt;
               &lt;option value=""&gt;Select Country&lt;/option&gt;
               &lt;option value="ID"&gt;Indonesia&lt;/option&gt;
            &lt;/select&gt;
        &lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
      &lt;td&gt;Province&lt;/td&gt;
        &lt;td&gt;&lt;select name="province" id="province"&gt;
               &lt;option value=""&gt;Select Province&lt;/option&gt;
            &lt;/select&gt;
        &lt;/td&gt;
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
    &lt;/div&gt;
    
    &lt;/form&gt;
    &lt;/div&gt;
    
    
    
    
&lt;/body&gt;
&lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>
<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
