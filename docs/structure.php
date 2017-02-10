<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>
  Document Structure of jQuery Unand
</h1>
<p>The document structure of jQuery Unand is similar to the document structure of the classic web page. It containing the HTML, CSS, both internal and external, and JavaScript, both internal and external. jQuery Unand documents that must be included in the document are as follows:</p>
<ol>
  <li>CSS Document</li>
  <li>JavaScript Document</li>
</ol>
<p>To initialize the framework, a global object from the <strong>mobileUI</strong> must be created. This object can be used as an Application Programming Interface (API). The <strong>mobileUI</strong> object must be a global variable.</p>
<p>Example:</p>
<pre>var mui = new mobileUI('*');</pre>
<p>See <a href="api-functions.php">API Functions</a></p>
<h2>Using CSS Only</h2>
<p>This is the document without JavaScript and icon.</p>
<pre>&lt;!DOCTYPE html&gt;
&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;&gt;
&lt;head&gt;
    &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot; /&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, minimum-scale=1.0, maximum-scale=1.0&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/style.css&quot; /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/ie.css&quot; /&gt;
    &lt;![endif]--&gt;
&lt;/head&gt;&lt;body&gt;
&lt;div data-role=&quot;header&quot; data-theme=&quot;a&quot; data-gradien=&quot;true&quot;&gt; 
&lt;h1&gt;Application Title&lt;/h1&gt;
&lt;/div&gt;&lt;div data-role=&quot;content&quot;&gt;
&lt;h1&gt;Page Title&lt;/h1&gt;
&lt;p&gt;Page content here&lt;/p&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
<h2>Using CSS and Icon</h2>
<p>This is the document without JavaScript.</p>
<pre>&lt;!DOCTYPE html&gt;
&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;&gt;
&lt;head&gt;
    &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot; /&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, minimum-scale=1.0, maximum-scale=1.0&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/style.css&quot; /&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/font/icon.css&quot; /&gt;
    &lt;!--[if IE]&gt;
    &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/ie.css&quot; /&gt;
    &lt;![endif]--&gt;
&lt;/head&gt;&lt;body&gt;
&lt;div data-role=&quot;header&quot; data-theme=&quot;a&quot; data-gradien=&quot;true&quot;&gt; 
&lt;h1&gt;Application Title&lt;/h1&gt;
&lt;/div&gt;&lt;div data-role=&quot;content&quot;&gt;
&lt;h1&gt;Page Title&lt;/h1&gt;
&lt;p&gt;Page content here&lt;/p&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;&nbsp;</pre>
<h2>Using CSS, Icon, and JavaScript</h2>
<p>This is the full function document of jQuery Unand.</p>
<pre>&lt;!DOCTYPE html&gt;
  &lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;&gt;
  &lt;head&gt;
  &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot; /&gt;
  &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, minimum-scale=1.0, maximum-scale=1.0&quot;&gt;
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/style.css&quot; /&gt;
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/font/open-sans/index.css&quot; /&gt;
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/font/icon.css&quot; /&gt;
  &lt;!--[if IE]&gt;
  &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/ie.css&quot; /&gt;
  &lt;![endif]--&gt;
  &lt;script type=&quot;text/javascript&quot; src=&quot;assets/js/jquery.min.js&quot;&gt;&lt;/script&gt;
  &lt;script type=&quot;text/javascript&quot; src=&quot;assets/js/jquery.unand.js&quot;&gt;&lt;/script&gt;
  &lt;script type=&quot;text/javascript&quot;&gt;
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
  &lt;a href=&quot;#menu1&quot; data-role=&quot;toolbar-icon&quot; data-position=&quot;float-left&quot; data-rel=&quot;menu&quot;&gt;&lt;span class=&quot;icon menu icon-24&quot;&gt;&lt;/span&gt;&lt;/a&gt;
  &lt;a href=&quot;#menu2&quot; data-role=&quot;toolbar-icon&quot; data-position=&quot;float-right&quot; data-rel=&quot;menu&quot;&gt;&lt;span class=&quot;icon cog icon-24&quot;&gt;&lt;/span&gt;&lt;/a&gt;
  &lt;h1&gt;Page Header&lt;/h1&gt;
  &lt;/div&gt;
  
  &lt;ul data-role=&quot;menu&quot; data-section=&quot;menu1&quot;&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon icon-24 home&quot;&gt;&lt;/span&gt; Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon icon-24 user&quot;&gt;&lt;/span&gt; Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon icon-24 cog&quot;&gt;&lt;/span&gt; Setting&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span data-role=&quot;menu-tip&quot;&gt;28&lt;/span&gt; &lt;span class=&quot;icon icon-24 star&quot;&gt;&lt;/span&gt; Favourite&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon icon-24 search&quot;&gt;&lt;/span&gt; Search&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span data-role=&quot;menu-tip&quot;&gt;24&lt;/span&gt; &lt;span class=&quot;icon icon-24 envelope&quot;&gt;&lt;/span&gt; Message&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span data-role=&quot;menu-tip&quot;&gt;45&lt;/span&gt; &lt;span class=&quot;icon icon-24 time&quot;&gt;&lt;/span&gt; History&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon icon-24 refresh&quot;&gt;&lt;/span&gt; Reload&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;  
  
  &lt;ul data-role=&quot;menu&quot; data-section=&quot;menu2&quot;&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon icon-24 cogs&quot;&gt;&lt;/span&gt; Preference&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon icon-24 user&quot;&gt;&lt;/span&gt; Customize&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;icon icon-24 edit&quot;&gt;&lt;/span&gt; Edit XML&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;  

  &lt;div data-role=&quot;content&quot;&gt;
  &lt;h1&gt;Page Title&lt;/h1&gt;
  &lt;p&gt;Example of menu&lt;/p&gt;
  &lt;/div&gt;

  &lt;/body&gt;
  &lt;/html&gt;</pre>  
<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
