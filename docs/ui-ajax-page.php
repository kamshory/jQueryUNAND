<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>AJAX Page</h1>
<p>Using the AJAX to load pages.</p>
<p>To make the AJAX link, use attributes below:</p>
<ol>
  <li>data-rel=&quot;ajax-get&quot; </li>
  <li>data-target-container=&quot;{selector}&quot;<br />
  {selector} is the valid jQuery selector</li>
  <li>data-location-async=&quot;{url}&quot;<br />
    {url} is the valid URL relative to the page URL or absolute URL but in the same server (domain or IP Address). Using Cross-origin resource sharing (CORS) is possible to load cross server page.
  </li>
</ol>
<p>This UI require JavaScript and must be initialize.</p>
<p>Example:</p>

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

    &lt;nav data-role="navbar" data-mark-visited="true"&gt;
        &lt;a href="#" data-rel="ajax-get" data-target-container="#ajax-content" data-location-async="ajax-page-01.html"&gt;&lt;span class="icon globe"&gt;&lt;/span&gt; Page 1&lt;/a&gt;
        &lt;a href="#" data-rel="ajax-get" data-target-container="#ajax-content" data-location-async="ajax-page-02.html"&gt;&lt;span class="icon mail"&gt;&lt;/span&gt; Page 2&lt;/a&gt;
        &lt;a href="#" data-rel="ajax-get" data-target-container="#ajax-content" data-location-async="ajax-page-03.html"&gt;&lt;span class="icon cog"&gt;&lt;/span&gt; Page 3&lt;/a&gt;
    &lt;/nav&gt;
    &lt;div id="ajax-content" data-role="content"&gt;

    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
  </pre>
  <form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>
<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
