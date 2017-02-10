<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Table</h1>
<p>Custom style table.</p>

  
  
  
  
  <h2>Responsive Two Columns Table</h2>
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

    
    &lt;table width="100%" border="0" cellspacing="0" cellpadding="0" data-table-type="two-cols" data-table-responsive="true"&gt;
    &lt;tr&gt;
    &lt;td&gt;Nama&lt;/td&gt;
    &lt;td&gt;Kamshory&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td&gt;Country&lt;/td&gt;
    &lt;td&gt;Indonesia&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td&gt;State&lt;/td&gt;
    &lt;td&gt;Sumatera Barat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td&gt;City&lt;/td&gt;
    &lt;td&gt;Padang&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td&gt;Website&lt;/td&gt;
    &lt;td&gt;&lt;a href="http://www.kamshory.com"&gt;http://www.kamshory.com&lt;/a&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/table&gt; 
    
        

    &lt;/div&gt;
    
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>Row Table</h2>
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

   
    &lt;table width="100%" border="0" cellspacing="0" cellpadding="0" data-role="row-table"&gt;
    &lt;thead&gt;
    &lt;tr&gt;
    &lt;td width="30"&gt;No&lt;/td&gt;
    &lt;td&gt;Date&lt;/td&gt;
    &lt;td&gt;Transaction&lt;/td&gt;
    &lt;td align="right"&gt;Debit&lt;/td&gt;
    &lt;td align="right"&gt;Credit&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;1&lt;/td&gt;
    &lt;td&gt;12 Jun 2014&lt;/td&gt;
    &lt;td&gt;Bank Transfer&lt;/td&gt;
    &lt;td align="right"&gt;39.264&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;2&lt;/td&gt;
    &lt;td&gt;14 Jul 2014&lt;/td&gt;
    &lt;td&gt;Cash&lt;/td&gt;
    &lt;td align="right"&gt;34.767&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;3&lt;/td&gt;
    &lt;td&gt;16 Aug 2014&lt;/td&gt;
    &lt;td&gt;CDM&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;td align="right"&gt;56.834&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;4&lt;/td&gt;
    &lt;td&gt;17 Sep 2014&lt;/td&gt;
    &lt;td&gt;Bank Transfer&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;td align="right"&gt;67.123&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;5&lt;/td&gt;
    &lt;td&gt;21 Dec 2014&lt;/td&gt;
    &lt;td&gt;ATM&lt;/td&gt;
    &lt;td align="right"&gt;45.472&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;/tr&gt; 
    &lt;tbody&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
    &lt;tr&gt;
    &lt;td colspan="3"&gt;Total&lt;/td&gt;
    &lt;td align="right"&gt;119.503&lt;/td&gt;
    &lt;td align="right"&gt;123.957&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/tfoot&gt;
    &lt;/table&gt;
    &lt;/div&gt;
    
&lt;/body&gt;</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>Row Table with Filter</h2>
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

   
    &lt;table width="100%" border="0" cellspacing="0" cellpadding="0" data-role="row-table" data-filter="true"&gt;
    &lt;thead&gt;
    &lt;tr&gt;
    &lt;td width="30"&gt;No&lt;/td&gt;
    &lt;td&gt;Date&lt;/td&gt;
    &lt;td&gt;Transaction&lt;/td&gt;
    &lt;td align="right"&gt;Debit&lt;/td&gt;
    &lt;td align="right"&gt;Credit&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;1&lt;/td&gt;
    &lt;td&gt;12 Jun 2014&lt;/td&gt;
    &lt;td&gt;Bank Transfer&lt;/td&gt;
    &lt;td align="right"&gt;39.264&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;2&lt;/td&gt;
    &lt;td&gt;14 Jul 2014&lt;/td&gt;
    &lt;td&gt;Cash&lt;/td&gt;
    &lt;td align="right"&gt;34.767&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;3&lt;/td&gt;
    &lt;td&gt;16 Aug 2014&lt;/td&gt;
    &lt;td&gt;CDM&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;td align="right"&gt;56.834&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;4&lt;/td&gt;
    &lt;td&gt;17 Sep 2014&lt;/td&gt;
    &lt;td&gt;Bank Transfer&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;td align="right"&gt;67.123&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;5&lt;/td&gt;
    &lt;td&gt;21 Dec 2014&lt;/td&gt;
    &lt;td&gt;ATM&lt;/td&gt;
    &lt;td align="right"&gt;45.472&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;/tr&gt; 
    &lt;tbody&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
    &lt;tr&gt;
    &lt;td colspan="3"&gt;Total&lt;/td&gt;
    &lt;td align="right"&gt;119.503&lt;/td&gt;
    &lt;td align="right"&gt;123.957&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/tfoot&gt;
    &lt;/table&gt;
    &lt;/div&gt;
    
&lt;/body&gt;</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>




  <h2>Row Table with Filter and Sort Order</h2>
  <h3>Code</h3>
  <div class="code-container">
<pre id="pre3" class="code">&lt;!DOCTYPE html&gt;
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

    &lt;table width="100%" border="0" cellspacing="0" cellpadding="0" data-role="row-table" 
    data-filter="true" data-filter-placeholder="Type filter here" data-filter-focus="true" 
    data-sort="true" data-sort-cols="2,3,4,5" data-case-sensitive="false"&gt;
    &lt;thead&gt;
    &lt;tr&gt;
    &lt;td width="30"&gt;No&lt;/td&gt;
    &lt;td data-type="date"&gt;Date&lt;/td&gt;
    &lt;td&gt;Transaction&lt;/td&gt;
    &lt;td align="right" data-type="number" data-number-format=".,"&gt;Debit&lt;/td&gt;
    &lt;td align="right" data-type="number" data-number-format=".,"&gt;Credit&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;1&lt;/td&gt;
    &lt;td&gt;Jun 12, 2014&lt;/td&gt;
    &lt;td&gt;Bank Transfer&lt;/td&gt;
    &lt;td align="right"&gt;39.264&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;2&lt;/td&gt;
    &lt;td&gt;Jul 07, 2014&lt;/td&gt;
    &lt;td&gt;Cash&lt;/td&gt;
    &lt;td align="right"&gt;34.767&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;3&lt;/td&gt;
    &lt;td&gt;Aug 10, 2014&lt;/td&gt;
    &lt;td&gt;CDM&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;td align="right"&gt;56.834&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;4&lt;/td&gt;
    &lt;td&gt;Mar 09, 2014&lt;/td&gt;
    &lt;td&gt;Bank Transfer&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;td align="right"&gt;67.123&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;5&lt;/td&gt;
    &lt;td&gt;Jan 11, 2014&lt;/td&gt;
    &lt;td&gt;ATM&lt;/td&gt;
    &lt;td align="right"&gt;45.472&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;/tr&gt; 
    &lt;tbody&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
    &lt;tr&gt;
    &lt;td colspan="3"&gt;Total&lt;/td&gt;
    &lt;td align="right"&gt;119.503&lt;/td&gt;
    &lt;td align="right"&gt;123.957&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/tfoot&gt;
    &lt;/table&gt;
    &lt;p&gt;data-type is data type of the colums. Alternate value are &amp;quot;text&amp;quot;, &amp;quot;date&amp;quot; and &amp;quot;number&amp;quot;. 
    The default value is &amp;quot;text&amp;quot;. For data-type of &amp;quot;number&amp;quot;, number format is performed 
    at data-number-format attribute. The value of data-number-format is two characters. 
    The first character is decimal separator and the second character is thousands separator.&lt;/p&gt;<br>    &lt;p&gt;Example:&lt;/p&gt;<br>    &lt;ol&gt;<br>      &lt;li&gt;&amp;lt;td data-type=&amp;quot;number&amp;quot; data-number-format=&amp;quot;.,&amp;quot;&amp;gt;Number&amp;lt;/td&amp;gt;&lt;/li&gt;<br>      &lt;li&gt;&amp;lt;td data-type=&amp;quot;number&amp;quot; data-number-format=&amp;quot;,.&amp;quot;&amp;gt;Number&amp;lt;/td&amp;gt;&lt;/li&gt;
      &lt;li&gt;&amp;lt;td data-type=&amp;quot;date&amp;quot;&amp;gt;Date&amp;lt;/td&amp;gt;&lt;/li&gt;
      &lt;li&gt;&amp;lt;td&amp;gt;Text&amp;lt;/td&amp;gt;&lt;/li&gt;<br>    &lt;/ol&gt;<br>
    &lt;p&gt;Attention!&lt;br /&gt;You must use thead for table header and tbody for table body. If you want to use table footer, use tfoot.<br>	 &lt;/p&gt;	
    &lt;/div&gt;
    
&lt;/body&gt;</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>




  <h2>Row Table with Filter and Sort Order Exclude Specified Column</h2>
  <h3>Code</h3>
  <div class="code-container">
<pre id="pre8" class="code">&lt;!DOCTYPE html&gt;
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

   
    &lt;table width="100%" border="0" cellspacing="0" cellpadding="0" data-role="row-table" 
    data-filter="true" data-filter-placeholder="Type filter here" data-filter-focus="true" 
    data-sort="true" data-sort-cols="2,3,4,5" data-case-sensitive="false" data-exclude-cols="1"&gt;
    &lt;thead&gt;
    &lt;tr&gt;
    &lt;td width="30"&gt;No&lt;/td&gt;
    &lt;td data-type="date"&gt;Date&lt;/td&gt;
    &lt;td&gt;Transaction&lt;/td&gt;
    &lt;td align="right" data-type="number" data-number-format=".,"&gt;Debit&lt;/td&gt;
    &lt;td align="right" data-type="number" data-number-format=".,"&gt;Credit&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;1&lt;/td&gt;
    &lt;td&gt;Jun 12, 2014&lt;/td&gt;
    &lt;td&gt;Bank Transfer&lt;/td&gt;
    &lt;td align="right"&gt;39.264&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;2&lt;/td&gt;
    &lt;td&gt;Jul 07, 2014&lt;/td&gt;
    &lt;td&gt;Cash&lt;/td&gt;
    &lt;td align="right"&gt;34.767&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;3&lt;/td&gt;
    &lt;td&gt;Aug 10, 2014&lt;/td&gt;
    &lt;td&gt;CDM&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;td align="right"&gt;56.834&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;4&lt;/td&gt;
    &lt;td&gt;Mar 09, 2014&lt;/td&gt;
    &lt;td&gt;Bank Transfer&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;td align="right"&gt;67.123&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align="right"&gt;5&lt;/td&gt;
    &lt;td&gt;Jan 11, 2014&lt;/td&gt;
    &lt;td&gt;ATM&lt;/td&gt;
    &lt;td align="right"&gt;45.472&lt;/td&gt;
    &lt;td align="right"&gt;0&lt;/td&gt;
    &lt;/tr&gt; 
    &lt;tbody&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
    &lt;tr&gt;
    &lt;td colspan="3"&gt;Total&lt;/td&gt;
    &lt;td align="right"&gt;119.503&lt;/td&gt;
    &lt;td align="right"&gt;123.957&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/tfoot&gt;
    &lt;/table&gt;
    &lt;p&gt;data-type is data type of the colums. Alternate value are &amp;quot;text&amp;quot;, &amp;quot;date&amp;quot; and &amp;quot;number&amp;quot;. 
    The default value is &amp;quot;text&amp;quot;. For data-type of &amp;quot;number&amp;quot;, number format is performed 
    at data-number-format attribute. The value of data-number-format is two characters. 
    The first character is decimal separator and the second character is thousands separator.&lt;/p&gt;<br>    &lt;p&gt;Example:&lt;/p&gt;<br>    &lt;ol&gt;<br>      &lt;li&gt;&amp;lt;td data-type=&amp;quot;number&amp;quot; data-number-format=&amp;quot;.,&amp;quot;&amp;gt;Number&amp;lt;/td&amp;gt;&lt;/li&gt;<br>      &lt;li&gt;&amp;lt;td data-type=&amp;quot;number&amp;quot; data-number-format=&amp;quot;,.&amp;quot;&amp;gt;Number&amp;lt;/td&amp;gt;&lt;/li&gt;
      &lt;li&gt;&amp;lt;td data-type=&amp;quot;date&amp;quot;&amp;gt;Date&amp;lt;/td&amp;gt;&lt;/li&gt;
      &lt;li&gt;&amp;lt;td&amp;gt;Text&amp;lt;/td&amp;gt;&lt;/li&gt;<br>    &lt;/ol&gt;<br>
    &lt;p&gt;Attention!&lt;br /&gt;You must use thead for table header and tbody for table body. If you want to use table footer, use tfoot.<br>	 &lt;/p&gt;	
    &lt;/div&gt;
    
&lt;/body&gt;</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this')" type="submit"></form>
</div>


<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
