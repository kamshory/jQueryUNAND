<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>
API Functions
</h1>


      <h2>Constructor</h2>
      <h3>Prototype</h3>
      <p><strong>mobileUI</strong>(String resources, Object option)</p>
      <h3>Parameters</h3>
      <p>resources, string containing resources to be used.</p>
      <p>Possible values:</p>
      <ol>
        <li>null, for no resource</li>
        <li>one or more resource below: checkbox dropdown-menu popup-menu   menu popup aside tab accordion slideshow (separated by white space)</li>
        <li>string "-all-" for using all of resources</li>
      </ol>
      <p>option, object to set up the mobileUI.</p>
      <p>Attributes</p>
      <ol>
        <li>animDelay, integer number with minimum value is 0. If this   attribute is not specified, the default value is 200. This attribute   will set the animation delay in milisecond.</li>
      </ol>
      <h3>Example 1</h3>
<p>Using "menu" only</p>
      <pre>&lt;script type=&quot;text/javascript&quot;&gt;
var mui = new mobileUI('menu');
&lt;/script&gt;</pre>
<p>Using "menu" and "aside"</p>
      <pre>&lt;script type=&quot;text/javascript&quot;&gt;
var mui = new mobileUI('menu aside');
&lt;/script&gt;</pre>
<p>Using all</p>
      <pre>&lt;script type=&quot;text/javascript&quot;&gt;
var mui = new mobileUI('-all-');
&lt;/script&gt;</pre>
<p>or</p>
      <pre>&lt;script type=&quot;text/javascript&quot;&gt;
var mui = new mobileUI('*');
&lt;/script&gt;</pre>
<h3>Example 2</h3>
<p>Using all resources and define animation delay in miliseconds.</p>
<pre>&lt;script type=&quot;text/javascript&quot;&gt;
var mui = new mobileUI('*', {animDelay:100});
&lt;/script&gt;</pre>
<h1>Member Functions</h1>
<h3>Prototype</h3>
      <p><strong>init</strong>(String resources)</p>
      <h3>Parameters</h3>
      <p>resources, string containing resources to be used.</p>
      <p>Possible values:</p>
      <ol>
        <li>null, for no resource</li>
        <li>one or more resource below: checkbox dropdown-menu popup-menu   menu popup aside tab accordion slideshow (separated by white space)</li>
        <li>string "-all-" for using all of resources </li>
      </ol>
      <p>This function is called automaticaly when object is contructed.</p>
      <p><strong>update</strong>(String resource)</p>
      <p>resources, string containing resources to be used.</p>
      <p>Possible values:</p>
      <ol>
        <li>null</li>
        <li>one or more resource below: checkbox dropdown-menu popup-menu   menu popup aside tab accordion slideshow (separated by white space)</li>
        <li>string "-all-" for using all of resources </li>
      </ol>
      <p>If the resources is not specified or null, the resource given by <strong>init</strong> function will be used.</p>
      <h3>Example</h3>
      <pre>&lt;script type=&quot;text/javascript&quot;&gt;
var mui = new mobileUI();
mui.init('-all-');
&lt;/script&gt;</pre>
<h1>UI API Functions</h1>
      <h2>Aside</h2>
      <ol>
        <li>showAside(section_name)</li>
        <li>closeAside([section_name])<br>
          If section_name is specified, close aside by section name. If section_name is  not specified, close all asides</li>
        <li>toggleAside([section_name])<br>
          If section_name is specified, toggle aside by section name. If section_name is  not specified, close all asides</li>
      </ol>
      <pre>&lt;script type=&quot;text/javascript&quot;&gt;
var mui = new mobileUI('aside');
mui.showAside('aside1');
setTimeout(function(){
mui.closeAside('aside1');
}, 5000);
&lt;/script&gt;</pre>
<h2>Menu</h2>
      <ol>
        <li>showMenu(section_name)<br>
          Show menu by section name</li>
        <li>closeMenu([section_name])<br>
          If section_name is specified, close pop up by  section name. If section_name is not specified, close all pop ups</li>
      </ol>
      <h3>Example</h3>
      <pre>&lt;script type=&quot;text/javascript&quot;&gt;
var mui = new mobileUI('menu');
mui.showMenu('menu1');
setTimeout(function(){
mui.closeMenu('menu1');
}, 5000);
&lt;/script&gt;</pre>
<h2>Pop Up</h2>
      <ol>
        <li>showPopUp(section_name)<br>
          Show pop up by section name</li>
        <li>closePopUp([section_name])<br>
          If section_name is specified, close pop up by  section name. If section_name is not specified, close all pop ups</li>
      </ol>
      <h3>Example</h3>
<pre>&lt;script type=&quot;text/javascript&quot;&gt;
var mui = new mobileUI('popup');
mui.showPopUp('popup1');
setTimeout(function(){
mui.closePopup('popup1');
}, 5000);
&lt;/script&gt;</pre>
<h2>Pop Up Menu</h2>
      <ol>
        <li>showPopUpMenu(section_name)<br>
          Show pop up menu by section name</li>
        <li>closePopUpMenu([section_name])<br>
          If section_name is specified, close pop up menu by  section name. If section_name is not specified, close all pop up menus</li>
      </ol>
      <h3>Example</h3>
      <pre>&lt;script type=&quot;text/javascript&quot;&gt;
var mui = new mobileUI('popup'); 
mui.showPopUpMenu('popup1'); 
setTimeout(function(){
mui.closePopup('popup1'); 
}, 5000);
&lt;/script&gt;</pre>
<h2>Swipe Page</h2>
<ol>
  <li>wipePageGoTo(selector, index)<br>
    Wipe page and show specified index<br>
    selector is the element selector according to jQuery rule. index is the index of swipe page <span id="result_box2" lang="en">starts from 0, 1, 2, 3 and so on</span>. If index is not specified, section 0 is <span id="result_box" lang="en">assumed</span>.</li>
  <li>wipePageTo(selector, index)<br>
    Alias of 
  wipePageGoTo</li>
  <li>wipePageNext(selector)<br>
    Wipe to next page<br>
    selector is the element selector according to jQuery rule. index is the index of swipe page <span id="result_box3" lang="en">starts from 0, 1, 2, 3 and so on</span>. If index is not specified, section 0 is <span id="result_box4" lang="en">assumed</span>.<br>
  </li>
  <li>wipePagePrev(selector)<br>
    Wipe to previous page    <br>
selector is the element selector according to jQuery rule. index is the index of swipe page <span id="result_box5" lang="en">starts from 0, 1, 2, 3 and so on</span>. If index is not specified, section 0 is <span id="result_box6" lang="en">assumed</span>.<br>
  </li>
</ol>
<h3>Example</h3>
<pre>&lt;script type=&quot;text/javascript&quot;&gt;
var mui = new mobileUI('swipe-page');
mui.wipePageGoTo('.swipe1', 3);
mui.wipePageNext('.swipe1');
&lt;/script&gt;</pre>


<h2>Swipe List</h2>
<ol>
  <li>wipeListGoTo(selector, index)<br>
    Wipe list and put the index 
  at the first. The index starts from 0, 1, 2, 3 and so on</li>
  <li>wipeListTo(selector, index)<br>
    Alias of wipeListGoTo(selector, index)</li>
  <li>wipeListNext(selector)<br>
    Wipe list to next index
  </li>
  <li>wipeListPrev(selector)<br>
    Wipe list to previous index
  </li>
</ol>
<h3>Example</h3>
<pre>&lt;script type=&quot;text/javascript&quot;&gt;
var mui = new mobileUI('swipe-list');

mui.wipeListGoTo($('.swipe-list1'), 3);
// wipe list and put the index of 3 to the left end

mui.wipeListNext($('.swipe-list1'));
// wipe list to next index

mui.wipeListPrev($('.swipe-list1'));
// wipe list to previous index
&lt;/script&gt;</pre>
	  
<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
