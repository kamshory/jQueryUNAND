<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Element Relationship</h1>
<ol>
  <li>aside<br />
    Link to show aside<br />
    Example: &lt;a href=&rdquo;#aside_section&rdquo; data-rel=&rdquo;aside&rdquo;&gt;Show Aside&lt;/a&gt;</li>
  <li>menu<br />
    Link to show menu<br />
    Example: &lt;a href=&rdquo;#menu_section&rdquo; data-rel=&rdquo;menu&rdquo;&gt;Show Menu&lt;/a&gt;</li>
  <li>popup<br />
    Link to show popup<br />
    Example: &lt;a href=&rdquo;#popup_section&rdquo; data-rel=&rdquo;popup&rdquo;   data-title=&quot;Pop Up Title&quot; data-close-icon=&quot;true&quot;   data-location-async=&quot;tools/ajax-form-login.php&quot; data-timeout=&quot;5000&quot;   data-cache=&quot;false&quot;&gt;Show Pop Up&lt;/a&gt;<br />
  </li>
  <li>popup-menu<br />
    Link      to show popup-menu<br />
    Example: &lt;a href=&rdquo;#popup_menu_section&rdquo; data-rel=&rdquo;popup-menu&rdquo; data-target=&quot;siblings&quot;&gt;Show Pop Up Menu&lt;/a&gt; </li>
  <li>scroll-up<br />
    Link to scroll up the document<br />
    Example: &lt;a href=&rdquo;#&rdquo; data-rel=&rdquo;scroll-up&rdquo;&gt;Scroll Up Document&lt;/a&gt;</li>
  <li>scroll-down<br />
    Link to scroll down the document<br />
    Example: &lt;a href=&rdquo;#&rdquo; data-rel=&rdquo;scroll-down&rdquo;&gt;Scroll Down Document&lt;/a&gt;</li>
  <li>back<br />
    Back to previous page<br />
    Example: &lt;a href=&rdquo;#&rdquo; data-rel=&rdquo;back&rdquo;&gt;Backward&lt;/a&gt;</li>
  <li>forward<br />
    Back to next page after back<br />
    Example: &lt;a href=&rdquo;#&rdquo; data-rel=&rdquo;forward&rdquo;&gt;Forward&lt;/a&gt;</li>
  <li>check-all<br />
    Check or uncheck all check box<br />
    Example: &lt;input data-rel=&quot;check-all&quot; data-target-selector=&quot;.chk1&quot; type=&quot;checkbox&quot; name=&quot;check-all&quot; value=&quot;1&quot; /&gt;</li>
  <li>dynamic-select<br />
    Update select option using AJAX and trigger<br />
    Example:         &lt;select name=&quot;country&quot; data-rel=&quot;dynamic-select&quot;   data-target-selector=&quot;#province&quot; data-source=&quot;prov.php&quot;   data-cache=&quot;false&quot; data-loading-caption=&quot;Wait...&quot;   data-empty-caption=&quot;Select Province&quot;&gt;&lt;option value=&quot;&quot;&gt;Select   Country&lt;/option&gt;&lt;option   value=&quot;ID&quot;&gt;Indonesia&lt;/option&gt;&lt;/select&gt;</li>
  <li>swipe-page<br />
    Select specified page from swipe page using navigation, e.g. using navbar<br />
    Example 1 (using section): &lt;nav data-role=&quot;navbar&quot;   data-rel=&quot;swipe-page&quot; href=&quot;#swipe-page-1&quot;&gt;&lt;a   href=&quot;#&quot;&gt;1&lt;/a&gt; &lt;a href=&quot;#&quot;&gt;2&lt;/a&gt; &lt;a   href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/nav&gt; <br />
    Example 2 (using selector): &lt;nav data-role=&quot;navbar&quot;   data-rel=&quot;swipe-page&quot; data-target-selector=&quot;#swipe-page-1&quot;&gt;&lt;a   href=&quot;#&quot;&gt;1&lt;/a&gt; &lt;a href=&quot;#&quot;&gt;2&lt;/a&gt; &lt;a   href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/nav&gt; </li>
</ol>
<p>&nbsp;</p>  
<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
