<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Accordion</h1>
<p>Accordion is a set of sections that displayed vertically. Each section can be collapsed or expanded. The options of the accordion are:</p>
<ol>
  <li>Collapse all sections</li>
  <li>Expand all sections</li>
  <li>Expand a section and collapse the others</li>
</ol>
<p>This UI require JavaScript and must be initialize.</p>
<p>Example:</p>
<pre>&lt;div data-role="accordion" data-collapsed="yes"&gt;
    &lt;div data-role="accordion-section"&gt;
        &lt;h3&gt;&lt;a href="#"&gt;Lorem Ipsum 1&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role="accordion-content"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
           Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. 
           Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. 
           Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. 
           Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div data-role="accordion-section"&gt;
        &lt;h3&gt;&lt;a href="#"&gt;Lorem Ipsum 2&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role="accordion-content"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
           Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. 
           Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. 
           Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. 
           Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div data-role="accordion-section"&gt;
        &lt;h3&gt;&lt;a href="#"&gt;Lorem Ipsum 3&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role="accordion-content"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
           Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. 
           Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. 
           Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. 
           Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>




  
  
  
  
  <h2>Standard Accordion</h2>
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

    &lt;aside data-transition="left" data-role="aside" data-section="aside1" data-aside-float="false" data-active="false"&gt;
	   &lt;header data-title="Aside" onclick="mui.closeAside('aside1')"&gt;
    &lt;nav data-float="right"&gt;
    &lt;a href="javascript:mui.closeAside('aside1')"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;/nav&gt;
    &lt;h3&gt;Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;a href="#aside1" data-role="toolbar-icon" data-position="float-left" data-rel="aside"&gt;&lt;span class="icon chevron-right icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;

    &lt;div data-role="content"&gt;
    Put content here
    &lt;/div&gt;

    &lt;div data-role="accordion" data-collapsed="yes"&gt;
    &lt;div data-role="accordion-section"&gt;
        &lt;h3&gt;&lt;a href="#"&gt;Lorem Ipsum 1&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role="accordion-content"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div data-role="accordion-section"&gt;
        &lt;h3&gt;&lt;a href="#"&gt;Lorem Ipsum 2&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role="accordion-content"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div data-role="accordion-section"&gt;
        &lt;h3&gt;&lt;a href="#"&gt;Lorem Ipsum 3&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role="accordion-content"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>Default Section Accordion</h2>
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

    &lt;aside data-transition="left" data-role="aside" data-section="aside1" data-aside-float="false" data-active="false"&gt;
	   &lt;header data-title="Aside" onclick="mui.closeAside('aside1')"&gt;
    &lt;nav data-float="right"&gt;
    &lt;a href="javascript:mui.closeAside('aside1')"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;/nav&gt;
    &lt;h3&gt;Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;a href="#aside1" data-role="toolbar-icon" data-position="float-left" data-rel="aside"&gt;&lt;span class="icon chevron-right icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;

    &lt;div data-role="content"&gt;
    Put content here
    &lt;/div&gt;

    &lt;div data-role="accordion" data-collapsed="yes"&gt;
    &lt;div data-role="accordion-section"&gt;
        &lt;h3&gt;&lt;a href="#"&gt;Lorem Ipsum 1&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role="accordion-content"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div data-role="accordion-section"&gt;
        &lt;h3&gt;&lt;a href="#" data-active="true"&gt;Lorem Ipsum 2&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role="accordion-content"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div data-role="accordion-section"&gt;
        &lt;h3&gt;&lt;a href="#"&gt;Lorem Ipsum 3&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role="accordion-content"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
  </pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  <h2>Expanded Accordion</h2>
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

    &lt;aside data-transition="left" data-role="aside" data-section="aside1" data-aside-float="false" data-active="false"&gt;
	   &lt;header data-title="Aside" onclick="mui.closeAside('aside1')"&gt;
    &lt;nav data-float="right"&gt;
    &lt;a href="javascript:mui.closeAside('aside1')"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;/nav&gt;
    &lt;h3&gt;Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role="content"&gt;
    Aside content here
    &lt;/div&gt;
    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;a href="#aside1" data-role="toolbar-icon" data-position="float-left" data-rel="aside"&gt;&lt;span class="icon chevron-right icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;

    &lt;div data-role="content"&gt;
    Put content here
    &lt;/div&gt;

    &lt;div data-role="accordion" data-collapsed="none"&gt;
    &lt;div data-role="accordion-section"&gt;
        &lt;h3&gt;&lt;a href="#"&gt;Lorem Ipsum 1&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role="accordion-content"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div data-role="accordion-section"&gt;
        &lt;h3&gt;&lt;a href="#" data-active="true"&gt;Lorem Ipsum 2&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role="accordion-content"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div data-role="accordion-section"&gt;
        &lt;h3&gt;&lt;a href="#"&gt;Lorem Ipsum 3&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role="accordion-content"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
  </pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

<h2>Navigation Accordion</h2>
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

    &lt;aside data-transition="left" data-role="aside" data-section="aside1" data-aside-float="false" data-active="true"&gt;
	   &lt;header data-title="Aside" onclick="mui.closeAside('aside1')"&gt;
    &lt;nav data-float="right"&gt;
    &lt;a href="javascript:mui.closeAside('aside1')"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;/nav&gt;
    &lt;h3&gt;Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
   



    &lt;div data-role="accordion" data-collapsed="yes" data-navigation="true"&gt;
    &lt;div data-role="accordion-section"&gt;
        &lt;h3&gt;&lt;a href="#"&gt;Group 1&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role="accordion-content"&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="page1.php"&gt;Page 1&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="page2.php"&gt;Page 2&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div data-role="accordion-section"&gt;
        &lt;h3&gt;&lt;a href="#"&gt;Group 2&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role="accordion-content"&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="page3.php"&gt;Page 3&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="page4.php"&gt;Page 4&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div data-role="accordion-section"&gt;
        &lt;h3&gt;&lt;a href="#"&gt;Group 3&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role="accordion-content"&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="page5.php"&gt;Page 5&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="page6.php"&gt;Page 6&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;

    &lt;/article&gt;
    &lt;/aside&gt;

    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;a href="#aside1" data-role="toolbar-icon" data-position="float-left" data-rel="aside"&gt;&lt;span class="icon chevron-right icon-24"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;

    &lt;div data-role="content"&gt;
    Put content here
    &lt;/div&gt;&lt;/body&gt;
&lt;/html&gt;
  </pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
