<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
    <h1>Element Roles</h1>
    <p>This document show you the element roles of jQuery Unand resource. You can use them to make jQuery Unand themes or the additional style of jQuery Unand.</p>
    <h2>header</h2>
    <p>The header of the page.</p>
    <p>Example:</p>
<pre>&lt;div data-role=&quot;header&quot;&gt;Application Title&lt;/div&gt;</pre>
    <h2>header-icon-area</h2>
    <p>The icon container on the page header.</p>
    <p>Example:</p>
    <pre>&lt;div data-role=&quot;header-icon-area&quot;&gt;&lt;/div&gt;</pre>
    <h2>footer</h2>
    <p>The footer of the page.</p>
    <p>Example:</p>
<pre>&lt;div data-role=&quot;footer&quot;&gt;Application Footer&lt;/div&gt;</pre>
<h2>content</h2>
<p>The content of the page.</p>
<p>Example:</p>
<pre>&lt;div data-role=&quot;content&quot;&gt;Application Content&lt;/div&gt;</pre>
<h2>image</h2>
    <h2>toolbar-icon</h2>
    <p>The toolbar icon.</p>
    <p>Example:</p>
    <pre>&lt;a href=&quot;#right-menu&quot; data-role=&quot;toolbar-icon&quot; data-position=&quot;float-right&quot; 
data-rel=&quot;menu&quot;&gt;&lt;span class=&quot;icon icon-24 menu&quot;&gt;&lt;/span&gt;&lt;/a&gt;</pre>
    <h2>button-set</h2>
    <p>The container of the buttons. This element makes the buttons centered of the page.</p>
    <p>Example:</p>
<pre>&lt;div data-role=&quot;button-set&quot;&gt;
    &lt;input type=&quot;submit&quot; name=&quot;send&quot; value=&quot;Send&quot;&gt; 
    &lt;input type=&quot;reset&quot; name=&quot;reset&quot; value=&quot;Reset&quot;&gt;
&lt;/div&gt;</pre>
    <h2>field-label</h2>
    <p>The container of the form label.</p>
    <p>Example:</p>
    <pre>&lt;div data-role=&quot;field-label&quot;&gt;Form Label&lt;/div&gt;</pre>
    <h2>field-input</h2>
    <p>The container of the form input.</p>
    <p>Example:</p>
    <pre>&lt;div data-role=&quot;field-input&quot;&gt;Form Input&lt;/div&gt;</pre>
<h2>clear</h2>
    <p>Clear the float style.</p>
    <p>Example:</p>
    <pre>&lt;div data-role=&quot;clear&quot;&gt;&lt;/div&gt;</pre>
    <p>The alternative elements might be used:</p>
    <pre>&lt;div data-clear=&quot;left&quot;&gt;&lt;/div&gt;</pre>
<p>To clear left float.</p>
    <pre>&lt;div data-clear=&quot;right&quot;&gt;&lt;/div&gt;</pre>
    <p>To clear right float.</p>
    <pre>&lt;div data-clear=&quot;both&quot;&gt;&lt;/div&gt;</pre>
    <p>To clear both left and right float.</p>
    <h2>menu</h2>
    <p>Menu</p>
    <p>Example:</p>
    <pre id="line1">&lt;ul data-role=&quot;menu&quot; data-section=&quot;right-menu&quot;&gt;  <span id="line151"> </span>	
    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;  <span id="line152"> </span>	
    &lt;li&gt;&lt;a href=&quot;about.html&quot;&gt;About&lt;/a&gt;&lt;/li&gt;  <span id="line153"> </span>	
    &lt;li&gt;&lt;a href=&quot;download.html&quot;&gt;Download&lt;/a&gt;&lt;/li&gt;  <span id="line154"> 
</span>&lt;/ul&gt;</pre>
    <h2>menu-resource</h2>
    <p>This element created automatically when menu initialized. Do not create this element manually.</p>
<p>Example:</p>
    <pre id="line2">&lt;ul data-role=&quot;menu-reasource&quot; data-section=&quot;right-menu&quot;&gt;  <span id="line3"> </span>	
    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;  <span id="line4"> </span>	
    &lt;li&gt;&lt;a href=&quot;about.html&quot;&gt;About&lt;/a&gt;&lt;/li&gt;  <span id="line5"> </span>	
    &lt;li&gt;&lt;a href=&quot;download.html&quot;&gt;Download&lt;/a&gt;&lt;/li&gt;  <span id="line6"> 
</span>&lt;/ul&gt;
</pre>
    <h2>menu-container</h2>
    <p>This element created automatically when menu initialized. Do not create this element manually.</p>
<p>Example:</p>
<pre id="line7">&lt;div data-role=&quot;menu-container&quot;&gt;
&lt;ul data-role=&quot;menu-reasource&quot; data-section=&quot;right-menu&quot;&gt;  <span id="line8"> </span>	
    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;  <span id="line9"> </span>	
    &lt;li&gt;&lt;a href=&quot;about.html&quot;&gt;About&lt;/a&gt;&lt;/li&gt;  <span id="line10"> </span>	
    &lt;li&gt;&lt;a href=&quot;download.html&quot;&gt;Download&lt;/a&gt;&lt;/li&gt;  <span id="line11"> 
</span>&lt;/ul&gt;
&lt;/div&gt;
</pre>
<h2>overlay</h2>
<p>Overlay is element to cover the others element when the popup dialog is shown. This element prevent user to click or tap the other element except the dialog resources shown. This element created automatically when popup dialog shown. </p>
<p>Example:</p>
<pre>&lt;div data-role=&quot;overlay&quot;&gt;&lt;/div&gt;</pre>
    <h2>popup</h2>
    <p>The popup dialog. Some elements might be created automatically when this popup dialog is shown.</p>
    <p>Example:</p>
    <pre id="pre0">&lt;div data-role=&quot;popup&quot; data-section=&quot;classic-popup&quot;&gt;          
    This is classic popup dialog.           
    &lt;a href=&quot;javascript:mui.closePopUp('classic-popup')&quot;&gt;Close&lt;/a&gt;      
&lt;/div&gt;</pre>
    <h2>popup-menu</h2>
    <p>See the inline-menu.</p>
    <h2>inline-menu</h2>
    <p>Inline menu. The maximum level of this menu is 2.</p>
<p>Example:</p>
    <pre>&lt;ul data-role=&quot;inline-menu&quot;&gt;
    &lt;li&gt;
        &lt;a href=&quot;#&quot; data-rel=&quot;popup-menu&quot; data-target=&quot;siblings&quot;&gt;Menu 1 &lt;span class=&quot;icon angle-down&quot;&gt;&lt;/span&gt;&lt;/a&gt;
        &lt;ul data-role=&quot;popup-menu&quot; data-section=&quot;popup-menu1&quot; data-close-other=&quot;true&quot;&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 1&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 2&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 3&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 4&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 5&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 6&lt;/a&gt;&lt;/li&gt;
       &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;a href=&quot;#&quot; data-rel=&quot;popup-menu&quot; data-target=&quot;siblings&quot;&gt;Menu 2 &lt;span class=&quot;icon angle-down&quot;&gt;&lt;/span&gt;&lt;/a&gt;
        &lt;ul data-role=&quot;popup-menu&quot; data-section=&quot;popup-menu2&quot; data-close-other=&quot;true&quot;&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 1&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 2&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 3&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 4&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 5&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 6&lt;/a&gt;&lt;/li&gt;
       &lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;
</pre>
<h2>dropdown-menu</h2>
<p>The multi level drop down menu.</p>
<p>Example:</p>
<pre>&lt;ul data-role=&quot;dropdown-menu&quot;&gt;
    &lt;li&gt;
        &lt;a href=&quot;#&quot;&gt;Menu 1&lt;/a&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 1&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 2&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 3&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 4&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 5&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 6&lt;/a&gt;
            &lt;ul&gt;
                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 11&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 12&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 13&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 14&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;/li&gt;
       &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;a href=&quot;#&quot;&gt;Menu 2&lt;/a&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 7&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 8&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 9&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Submenu 10&lt;/a&gt;&lt;/li&gt;
       &lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;</pre>
    <h2>tab</h2>
<p>Tabs of the sections. See tab-content.</p>
    <h2>tab-content</h2>
    <p>The section of the tab.</p>
    <p>Example:</p>
    <pre>&lt;div data-role=&quot;tab&quot;&gt;
    &lt;ul&gt;
        &lt;li&gt;&lt;a href=&quot;#tab1&quot;&gt;&lt;span class=&quot;icon icon-24 home&quot;&gt;&lt;/span&gt; Tab 1&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#tab2&quot;&gt;&lt;span class=&quot;icon icon-24 user&quot;&gt;&lt;/span&gt; Tab 2&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#tab3&quot;&gt;&lt;span class=&quot;icon icon-24 grid&quot;&gt;&lt;/span&gt; Tab 3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;div data-role=&quot;tab-content&quot; data-section=&quot;tab1&quot;&gt;
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
  &lt;div data-role=&quot;tab-content&quot; data-section=&quot;tab2&quot;&gt;
    &lt;h1&gt;Tab 2&lt;/h1&gt;
      &lt;p&gt;Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. 
         Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. &lt;/p&gt;
    &lt;/div&gt;
    &lt;div data-role=&quot;tab-content&quot; data-section=&quot;tab3&quot;&gt;
      &lt;h1&gt;Tab 3&lt;/h1&gt;
      &lt;p&gt;Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. 
         Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
    <p>The navigator of the tab can be flexible.</p>
<p>Example:</p>
<pre>&lt;div data-role=&quot;tab&quot; data-flexible=&quot;true&quot;&gt;
    &lt;nav data-role=&quot;tab-nav&quot;&gt;
        &lt;a href=&quot;#tab1&quot;&gt;&lt;span class=&quot;icon icon-24 home&quot;&gt;&lt;/span&gt; Tab 1&lt;/a&gt;
        &lt;a href=&quot;#tab2&quot; data-active=&quot;true&quot;&gt;&lt;span class=&quot;icon icon-24 user&quot;&gt;&lt;/span&gt; Tab 2&lt;/a&gt;
        &lt;a href=&quot;#tab3&quot;&gt;&lt;span class=&quot;icon icon-24 grid&quot;&gt;&lt;/span&gt; Tab 3&lt;/a&gt;
    &lt;/nav&gt;
    &lt;div data-role=&quot;tab-content&quot; data-section=&quot;tab1&quot;&gt;
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
  &lt;div data-role=&quot;tab-content&quot; data-section=&quot;tab2&quot;&gt;
    &lt;h1&gt;Tab 2&lt;/h1&gt;
      &lt;p&gt;Integer a tellus ut nunc elementum volutpat. Vivamus eu arcu lacus. 
         Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div data-role=&quot;tab-content&quot; data-section=&quot;tab3&quot;&gt;
      &lt;h1&gt;Tab 3&lt;/h1&gt;
      &lt;p&gt;Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. 
         Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
    <h2>navbar</h2>
    <p>The flexible navigation bar.</p>
    <pre>&lt;nav data-role=&quot;navbar&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;item-selected&quot;&gt;Tab 1&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;Tab 2&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;Tab 3&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;Tab 4&lt;/a&gt;
&lt;/nav&gt;</pre>
    <h2>swipe-page</h2>
    <p>Swipe page for device with touch screen.</p>
    <p>Example:</p>
    <pre>&lt;div data-role=&quot;swipe-page&quot;&gt;
    &lt;section&gt;
    &lt;div style=&quot;background-color:#FFF;&quot;&gt;
    &lt;h3&gt;Lorem Ipsum 1&lt;/h3&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 1&lt;/p&gt;
    &lt;p&gt;Wipe me left or right&lt;/p&gt;
    &lt;/div&gt;
    &lt;/section&gt;
    &lt;section&gt;
    &lt;div style=&quot;background-color:#F66;&quot;&gt;
    &lt;h3&gt;Lorem Ipsum 2&lt;/h3&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 2&lt;/p&gt;
    &lt;p&gt;Wipe me left or right&lt;/p&gt;
    &lt;/div&gt;
    &lt;/section&gt;
    &lt;section&gt;
    &lt;div style=&quot;background-color:#9C6;&quot;&gt;
    &lt;h3&gt;Lorem Ipsum 3&lt;/h3&gt;
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit 3&lt;/p&gt;
    &lt;p&gt;Wipe me left or right&lt;/p&gt;
    &lt;/div&gt;
    &lt;/section&gt;
&lt;/div&gt;
    </pre>
    <h2>swipe-list</h2>
    <p>Swipe list for device with touch screen.</p>
    <pre>&lt;ul data-role=&quot;swipe-list&quot;&gt;
     &lt;li&gt;
        &lt;div&gt;
        &lt;img src=&quot;images/f7427a17716e15b0573f73e425ceafac.jpg&quot; style=&quot;width:100%&quot;&gt;
        &lt;/div&gt;
     &lt;/li&gt;
        &lt;li&gt;
        &lt;div&gt;
        &lt;img src=&quot;images/35d28b598099fe7b663e20e8f44139d7.jpg&quot; style=&quot;width:100%&quot;&gt;
        &lt;/div&gt;
     &lt;/li&gt;
        &lt;li&gt;
        &lt;div&gt;
        &lt;img src=&quot;images/bf1c3a95534fcc73df95ee7ed20e40a8.jpg&quot; style=&quot;width:100%&quot;&gt;
        &lt;/div&gt;
     &lt;/li&gt;
        &lt;li&gt;
        &lt;div&gt;
        &lt;img src=&quot;images/3acc0a3fc6d66faf886dc1076a9ca6ec.jpg&quot; style=&quot;width:100%&quot;&gt;
        &lt;/div&gt;
     &lt;/li&gt;
&lt;/ul&gt;</pre>
    <h2>aside</h2>
    <p>Aside</p>
<p>Example:</p>
    <pre>&lt;aside data-role=&quot;aside&quot; data-transition=&quot;left&quot; data-section=&quot;aside1&quot;&gt;
    &lt;header data-title=&quot;Aside&quot;&gt;
    &lt;h3&gt;Aside Header&lt;/h3&gt;
    &lt;/header&gt;
    &lt;article&gt;
    &lt;div data-role=&quot;content&quot;&gt;
    Aside content here
    &lt;/div&gt;
    &lt;/article&gt;
&lt;/aside&gt;</pre>
    <h2>accordion</h2>
    <p>Accordion</p>
    <p>Example:</p>
    <pre id="pre">&lt;div data-role=&quot;accordion&quot;&gt;&lt;/div&gt;
</pre>
    <p>See: accordion-section, accordion-content</p>
    <h2>accordion-section</h2>
    <p>The section of the accordion.</p>
    <p>Example:</p>
    <pre>&lt;div data-role=&quot;accordion&quot; data-collapsed=&quot;yes&quot;&gt;
    &lt;div data-role=&quot;accordion-section&quot;&gt;
        &lt;h3&gt;&lt;a href=&quot;#&quot;&gt;Lorem Ipsum 1&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role=&quot;accordion-content&quot;&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
           Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. 
           Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. 
           Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. 
           Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div data-role=&quot;accordion-section&quot;&gt;
        &lt;h3&gt;&lt;a href=&quot;#&quot;&gt;Lorem Ipsum 2&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role=&quot;accordion-content&quot;&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
           Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. 
           Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. 
           Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. 
           Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div data-role=&quot;accordion-section&quot;&gt;
        &lt;h3&gt;&lt;a href=&quot;#&quot;&gt;Lorem Ipsum 3&lt;/a&gt;&lt;/h3&gt;
        &lt;div data-role=&quot;accordion-content&quot;&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
           Maecenas nec justo quam, id tincidunt dolor. Integer a tellus ut nunc elementum volutpat. 
           Vivamus eu arcu lacus. Phasellus eu ipsum a metus ullamcorper mollis. Sed eget ligula enim. 
           Fusce tristique ipsum a tortor molestie nec interdum dolor iaculis. 
           Nunc quis magna in odio interdum varius sed eu mauris.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
    <h2>accordion-content</h2>
<p>The content of the accordion. See: accordion-section</p>
<h2>collapsible</h2>
<p>The collapsible content. See collapsible content</p>
<h2>collapsible-header </h2>
<p>The header of the collapsible. See collapsible content</p>
<h2>collapsible-content</h2>
<p>The content of the collapsible. </p>
<p>Example:</p>
<pre>&lt;div data-role=&quot;collapsible&quot; data-collapsed=&quot;true&quot;&gt;
      &lt;div data-role=&quot;collapsible-header&quot;&gt;
          &lt;a href=&quot;#&quot;&gt;&lt;h3&gt;Collapsible&lt;/h3&gt;&lt;/a&gt;
      &lt;/div&gt;
      &lt;div data-role=&quot;collapsible-content&quot;&gt;
          &lt;p&gt;Put the content here...&lt;/p&gt;
      &lt;/div&gt;
&lt;/div&gt;</pre>
<p>&nbsp;</p>
<h2>autocomplete</h2>
    <p>Autocomplete text input</p>
    <p>Example:</p>
    <pre>&lt;input data-role=&quot;autocomplete&quot; type=&quot;text&quot; name=&quot;country&quot; 
id=&quot;country&quot; data-full-width=&quot;true&quot; autocomplete=&quot;off&quot; 
data-source=&quot;['Afghanistan','Aland Islands','Albania','Algeria','American Samoa']&quot; data-min-length=&quot;3&quot;&gt;</pre>
    <p>Note: autocomplete attribute must be set to &quot;off&quot; to remove default autocomplete from the browser.</p>
    <h2>list</h2>
    <p>List</p>
    <p>Example:</p>
    <pre><span class="code">&lt;ul data-role=&quot;list&quot;&gt;
    &lt;li&gt;
        Jagung
    &lt;/li&gt;
    &lt;li&gt;
        Kacang Tanah
    &lt;/li&gt;
    &lt;li&gt;
        Kedelai
    &lt;/li&gt;
    &lt;li&gt;
        Singkong
    &lt;/li&gt;
&lt;/ul&gt;
</span></pre>
    <h2>listgroup</h2>
    <p>Two Levels List Group</p>
    <p>Example:</p>
    <pre>&lt;ul data-role=&quot;listgroup&quot;&gt;
  &lt;li&gt;
  &lt;h3&gt;Desktop Operating System&lt;/h3&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;ul&gt;
  &lt;li&gt;Windows&lt;/li&gt;
  &lt;li&gt;Linux&lt;/li&gt;
  &lt;li&gt;OS X&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;h3&gt;Mobile Operating System&lt;/h3&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;ul&gt;
  &lt;li&gt;Windows Phone&lt;/li&gt;
  &lt;li&gt;Android&lt;/li&gt;
  &lt;li&gt;iOS&lt;/li&gt;
  &lt;li&gt;Bada&lt;/li&gt;
  &lt;li&gt;Symbian&lt;/li&gt;
  &lt;li&gt;Firefox OS&lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;h3&gt;Web Server&lt;/h3&gt;
  &lt;/li&gt;
  &lt;li&gt;
  &lt;ul&gt;
  &lt;li&gt;Apache&lt;/li&gt;
  &lt;li&gt;Internet Informastion Service&lt;/li&gt;
  &lt;li&gt;nginX &lt;/li&gt;
  &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;</pre>
    <h2>listview</h2>
    <p>The list containing title, image, and description.</p>
    <p>Example:</p>
    <pre id="pre2">&lt;ul data-role=&quot;listview&quot;&gt;      	
    &lt;li&gt;
        &lt;img src=&quot;image1.jpg&quot;&gt;
        &lt;h3&gt;Image Title 1&lt;/h3&gt;
        &lt;p&gt;Image description 1&lt;/p&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;img src=&quot;image2.jpg&quot;&gt;
        &lt;h3&gt;Image Title 2&lt;/h3&gt;
        &lt;p&gt;Image description 2&lt;/p&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;img src=&quot;image3.jpg&quot;&gt;
        &lt;h3&gt;Image Title 3&lt;/h3&gt;
        &lt;p&gt;Image description 3&lt;/p&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;img src=&quot;image4.jpg&quot;&gt;
        &lt;h3&gt;Image Title 4&lt;/h3&gt;
        &lt;p&gt;Image description 4&lt;/p&gt;
    &lt;/li&gt;
&lt;/ul&gt;</pre>
    <h2>slideshow</h2>
    <p>The slide show image containing title and description.</p>
    <p>Example:</p>
    <pre id="pre3">&lt;ul data-role=&quot;slideshow&quot;&gt;      	
    &lt;li&gt;
        &lt;img src=&quot;image1.jpg&quot;&gt;
        &lt;h3&gt;Image Title 1&lt;/h3&gt;
        &lt;p&gt;Image description 1&lt;/p&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;img src=&quot;image2.jpg&quot;&gt;
        &lt;h3&gt;Image Title 2&lt;/h3&gt;
        &lt;p&gt;Image description 2&lt;/p&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;img src=&quot;image3.jpg&quot;&gt;
        &lt;h3&gt;Image Title 3&lt;/h3&gt;
        &lt;p&gt;Image description 3&lt;/p&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;img src=&quot;image4.jpg&quot;&gt;
        &lt;h3&gt;Image Title 4&lt;/h3&gt;
        &lt;p&gt;Image description 4&lt;/p&gt;
    &lt;/li&gt;
&lt;/ul&gt;</pre>
<h2>row-table</h2>
<p>Row table is the table containing row data. The table also including the header and the footer if required. The table can be sorted or filtered by the column based on the its content.</p>
<p>Example:</p>
<pre>&lt;table width=&quot;100%&quot; border=&quot;0&quot; cellspacing=&quot;0&quot; cellpadding=&quot;0&quot; data-role=&quot;row-table&quot; 
    data-filter=&quot;true&quot; data-filter-placeholder=&quot;Type filter here&quot; data-filter-focus=&quot;true&quot; 
    data-sort=&quot;true&quot; data-sort-cols=&quot;2,3,4,5&quot; data-case-sensitive=&quot;false&quot; data-exclude-cols=&quot;1&quot;&gt;
    &lt;thead&gt;
    &lt;tr&gt;
    &lt;td width=&quot;30&quot;&gt;No&lt;/td&gt;
    &lt;td data-type=&quot;date&quot;&gt;Date&lt;/td&gt;
    &lt;td&gt;Transaction&lt;/td&gt;
    &lt;td align=&quot;right&quot; data-type=&quot;number&quot; data-number-format=&quot;.,&quot;&gt;Debit&lt;/td&gt;
    &lt;td align=&quot;right&quot; data-type=&quot;number&quot; data-number-format=&quot;.,&quot;&gt;Credit&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
    &lt;tr&gt;
    &lt;td align=&quot;right&quot;&gt;1&lt;/td&gt;
    &lt;td&gt;Jun 12, 2014&lt;/td&gt;
    &lt;td&gt;Bank Transfer&lt;/td&gt;
    &lt;td align=&quot;right&quot;&gt;39.264&lt;/td&gt;
    &lt;td align=&quot;right&quot;&gt;0&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align=&quot;right&quot;&gt;2&lt;/td&gt;
    &lt;td&gt;Jul 07, 2014&lt;/td&gt;
    &lt;td&gt;Cash&lt;/td&gt;
    &lt;td align=&quot;right&quot;&gt;34.767&lt;/td&gt;
    &lt;td align=&quot;right&quot;&gt;0&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align=&quot;right&quot;&gt;3&lt;/td&gt;
    &lt;td&gt;Aug 10, 2014&lt;/td&gt;
    &lt;td&gt;CDM&lt;/td&gt;
    &lt;td align=&quot;right&quot;&gt;0&lt;/td&gt;
    &lt;td align=&quot;right&quot;&gt;56.834&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align=&quot;right&quot;&gt;4&lt;/td&gt;
    &lt;td&gt;Mar 09, 2014&lt;/td&gt;
    &lt;td&gt;Bank Transfer&lt;/td&gt;
    &lt;td align=&quot;right&quot;&gt;0&lt;/td&gt;
    &lt;td align=&quot;right&quot;&gt;67.123&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
    &lt;td align=&quot;right&quot;&gt;5&lt;/td&gt;
    &lt;td&gt;Jan 11, 2014&lt;/td&gt;
    &lt;td&gt;ATM&lt;/td&gt;
    &lt;td align=&quot;right&quot;&gt;45.472&lt;/td&gt;
    &lt;td align=&quot;right&quot;&gt;0&lt;/td&gt;
    &lt;/tr&gt; 
    &lt;tbody&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
    &lt;tr&gt;
    &lt;td colspan=&quot;3&quot;&gt;Total&lt;/td&gt;
    &lt;td align=&quot;right&quot;&gt;119.503&lt;/td&gt;
    &lt;td align=&quot;right&quot;&gt;123.957&lt;/td&gt;
    &lt;/tr&gt;
    &lt;/tfoot&gt;
    &lt;/table&gt;</pre>
    <h2>filter</h2>
    <p>Filter is used to filter the contents of a table or list. This element is created automatically by jQuery Unand and placed on top of a table or list to be filtered.</p>
    <p>Example:</p>
    <pre>&lt;input placeholder=&quot;Type filter here&quot; data-filter-id=&quot;filter0&quot; 
data-role=&quot;filter&quot; data-full-width=&quot;true&quot; type=&quot;text&quot;&gt;</pre>
	 <p>data-filter-id is the attribute corresponding to the table or the list. These attributes have same values for one pair. No form required for this input element.</p>
	   <?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
