<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Collapsible</h1>
<p>Almost like accordion, collapsible is user interface that can show or hide some elements using a controller. Accordion is a set of collapsible elements that only one section can be expaned by user. Collapsible is only have one. The options of the collapsible are:</p>
<ol>
  <li>Collapsed </li>
  <li>Expanded </li>
</ol>
<p>This UI require JavaScript and must be initialize.</p>
<p>Example:</p>
<pre>&lt;div data-role=&quot;collapsible&quot; data-collapsed=&quot;true&quot;&gt;
    &lt;div data-role=&quot;collapsible-header&quot;&gt;
        &lt;a href=&quot;#&quot;&gt;&lt;h3&gt;Collapsible&lt;/h3&gt;&lt;/a&gt;
    &lt;/div&gt;
    &lt;div data-role=&quot;collapsible-content&quot;&gt;
        &lt;p&gt;Put the content here...&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>




  
  
  
  
  <h2>Standard Collapsible</h2>
  <h3>Code</h3>
<div class="code-container">
<pre class="code">&lt;!DOCTYPE html&gt;
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
    &lt;!--[if IE]&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/ie.css&quot; /&gt;
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
&lt;div data-role=&quot;header&quot; data-theme=&quot;a&quot; data-gradien=&quot;true&quot;&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
&lt;/div&gt;

&lt;div data-role=&quot;content&quot;&gt;
    
    &lt;div data-role=&quot;collapsible&quot; data-collapsed=&quot;false&quot;&gt;
       &lt;div data-role=&quot;collapsible-header&quot;&gt;
            &lt;a href=&quot;#&quot;&gt;&lt;h3&gt;Collapsible&lt;/h3&gt;&lt;/a&gt;
       &lt;/div&gt;
            &lt;div data-role=&quot;collapsible-content&quot;&gt;
            	&lt;p&gt;Put the content here...&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        
    	&lt;div data-role=&quot;collapsible&quot; data-collapsed=&quot;true&quot;&gt;
        	&lt;div data-role=&quot;collapsible-header&quot;&gt;
            	&lt;a href=&quot;#&quot;&gt;&lt;h3&gt;Collapsible&lt;/h3&gt;&lt;/a&gt;
            &lt;/div&gt;
            &lt;div data-role=&quot;collapsible-content&quot;&gt;
            	&lt;p&gt;Put the content here...&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        
    	&lt;div data-role=&quot;collapsible&quot; data-collapsed=&quot;true&quot;&gt;
        	&lt;div data-role=&quot;collapsible-header&quot;&gt;
            	&lt;a href=&quot;#&quot;&gt;&lt;h3&gt;Collapsible&lt;/h3&gt;&lt;/a&gt;
            &lt;/div&gt;
            &lt;div data-role=&quot;collapsible-content&quot;&gt;
            	&lt;p&gt;Put the content here...&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>


<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
