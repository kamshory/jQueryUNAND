<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Tab</h1>
<p>Tab is a set of pages covered by an element. Only one of the tab sections will be displayed. A navigation is used to select which the section will be displayed.</p>
<p>This UI require JavaScript and must be initialize.</p>
<p>Example:</p>
<pre>&lt;div data-role="tab"&gt;
    &lt;ul&gt;
        &lt;li&gt;&lt;a href="#tab1"&gt;&lt;span class="icon icon-24 home"&gt;&lt;/span&gt; Tab 1&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#tab2"&gt;&lt;span class="icon icon-24 user"&gt;&lt;/span&gt; Tab 2&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#tab3"&gt;&lt;span class="icon icon-24 grid"&gt;&lt;/span&gt; Tab 3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;div data-role="tab-content" data-section="tab1"&gt;
        &lt;h1&gt;Tab 1&lt;/h1&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
           Maecenas nec justo quam, id tincidunt dolor.&lt;/p&gt;
        &lt;ol&gt;
          &lt;li&gt;Lorem ipsum 1&lt;/li&gt;
          &lt;li&gt;Lorem ipsum 2
            &lt;ol&gt;
              &lt;li&gt;dolor sit amet 1&lt;/li&gt;
              &lt;li&gt;dolor sit amet 2&lt;/li&gt;
              &lt;li&gt;dolor sit amet 3&lt;/li&gt;
              &lt;li&gt;dolor sit amet 4&lt;/li&gt;
            &lt;/ol&gt;
          &lt;/li&gt;
          &lt;li&gt;Lorem ipsum 3&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/div&gt;
  &lt;div data-role="tab-content" data-section="tab2"&gt;
    &lt;h1&gt;Tab 2&lt;/h1&gt;
      &lt;p&gt;Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. 
         Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. &lt;/p&gt;
    &lt;/div&gt;
    &lt;div data-role="tab-content" data-section="tab3"&gt;
      &lt;h1&gt;Tab 3&lt;/h1&gt;
      &lt;p&gt;Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. 
         Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
  
  
  
  
  <h2>Default Tab</h2>
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

    &lt;div data-role="tab"&gt;
    &lt;ul&gt;
        &lt;li&gt;&lt;a href="#tab1"&gt;&lt;span class="icon icon-24 home"&gt;&lt;/span&gt; Tab 1&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#tab2"&gt;&lt;span class="icon icon-24 user"&gt;&lt;/span&gt; Tab 2&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#tab3"&gt;&lt;span class="icon icon-24 grid"&gt;&lt;/span&gt; Tab 3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;div data-role="tab-content" data-section="tab1"&gt;
        &lt;h1&gt;Tab 1&lt;/h1&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor.&lt;/p&gt;
        &lt;ol&gt;
          &lt;li&gt;Lorem ipsum 1&lt;/li&gt;
          &lt;li&gt;Lorem ipsum 2
            &lt;ol&gt;
              &lt;li&gt;dolor sit amet 1&lt;/li&gt;
              &lt;li&gt;dolor sit amet 2&lt;/li&gt;
              &lt;li&gt;dolor sit amet 3&lt;/li&gt;
              &lt;li&gt;dolor sit amet 4&lt;/li&gt;
            &lt;/ol&gt;
          &lt;/li&gt;
          &lt;li&gt;Lorem ipsum 3&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/div&gt;
  &lt;div data-role="tab-content" data-section="tab2"&gt;
    &lt;h1&gt;Tab 2&lt;/h1&gt;
      &lt;p&gt; Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. &lt;/p&gt;
    &lt;/div&gt;
    &lt;div data-role="tab-content" data-section="tab3"&gt;
      &lt;h1&gt;Tab 3&lt;/h1&gt;
      &lt;p&gt;Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>Selected Tab</h2>
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
    &lt;/div&gt;&lt;div data-role="tab"&gt;
    &lt;ul&gt;
        &lt;li&gt;&lt;a href="#tab1"&gt;&lt;span class="icon icon-24 home"&gt;&lt;/span&gt; Tab 1&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#tab2" data-active="true"&gt;&lt;span class="icon icon-24 user"&gt;&lt;/span&gt; Tab 2&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#tab3"&gt;&lt;span class="icon icon-24 grid"&gt;&lt;/span&gt; Tab 3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;div data-role="tab-content" data-section="tab1"&gt;
        &lt;h1&gt;Tab 1&lt;/h1&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor.&lt;/p&gt;
        &lt;ol&gt;
          &lt;li&gt;Lorem ipsum 1&lt;/li&gt;
          &lt;li&gt;Lorem ipsum 2
            &lt;ol&gt;
              &lt;li&gt;dolor sit amet 1&lt;/li&gt;
              &lt;li&gt;dolor sit amet 2&lt;/li&gt;
              &lt;li&gt;dolor sit amet 3&lt;/li&gt;
              &lt;li&gt;dolor sit amet 4&lt;/li&gt;
            &lt;/ol&gt;
          &lt;/li&gt;
          &lt;li&gt;Lorem ipsum 3&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/div&gt;
  &lt;div data-role="tab-content" data-section="tab2"&gt;
    &lt;h1&gt;Tab 2&lt;/h1&gt;
      &lt;p&gt; Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. &lt;/p&gt;
    &lt;/div&gt;
    &lt;div data-role="tab-content" data-section="tab3"&gt;
      &lt;h1&gt;Tab 3&lt;/h1&gt;
      &lt;p&gt;Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>Flexible Tab</h2>
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
    &lt;div data-role="tab" data-flexible="true"&gt;
    &lt;nav data-role="tab-nav"&gt;
        &lt;a href="#tab1"&gt;&lt;span class="icon icon-24 home"&gt;&lt;/span&gt; Tab 1&lt;/a&gt;
        &lt;a href="#tab2" data-active="true"&gt;&lt;span class="icon icon-24 user"&gt;&lt;/span&gt; Tab 2&lt;/a&gt;
        &lt;a href="#tab3"&gt;&lt;span class="icon icon-24 grid"&gt;&lt;/span&gt; Tab 3&lt;/a&gt;
    &lt;/nav&gt;
    &lt;div data-role="tab-content" data-section="tab1"&gt;
        &lt;h1&gt;Tab 1&lt;/h1&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec justo quam, id tincidunt dolor.&lt;/p&gt;
        &lt;ol&gt;
          &lt;li&gt;Lorem ipsum 1&lt;/li&gt;
          &lt;li&gt;Lorem ipsum 2
            &lt;ol&gt;
              &lt;li&gt;dolor sit amet 1&lt;/li&gt;
              &lt;li&gt;dolor sit amet 2&lt;/li&gt;
              &lt;li&gt;dolor sit amet 3&lt;/li&gt;
              &lt;li&gt;dolor sit amet 4&lt;/li&gt;
            &lt;/ol&gt;
          &lt;/li&gt;
          &lt;li&gt;Lorem ipsum 3&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/div&gt;
  &lt;div data-role="tab-content" data-section="tab2"&gt;
    &lt;h1&gt;Tab 2&lt;/h1&gt;
      &lt;p&gt; Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. &lt;/p&gt;
    &lt;/div&gt;
    &lt;div data-role="tab-content" data-section="tab3"&gt;
      &lt;h1&gt;Tab 3&lt;/h1&gt;
      &lt;p&gt;Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;The flexible tab might be not supported by some browsers.&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>


<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
