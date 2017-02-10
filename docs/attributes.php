<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
    <h1>Element Attribute</h1>
    <ol>
      <li>aside[data-role=aside]
        <ol>
          <li>data-section
            <ol>
              <li>{aside section}</li>
            </ol>
          </li>
          <li>data-aside-float
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
          <li>data-active
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
          <li>data-resize
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
          <li>data-transition
            <ol>
              <li>left</li>
              <li>right</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>a[data-rel=aside]
        <ol>
          <li>href
            <ol>
              <li>{aside-section}</li>
            </ol>
          </li>
          <li>data-behavior
            <ol>
              <li>trigger (default)</li>
              <li>alternate</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>div[data-role=header]</li>
      <li>div[data-role=footer]</li>
      <li>div[data-role=content]</li>
      <li>img[data-role=image]
        <ol>
          <li>data-full-width
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>a[data-role=toolbar-icon]</li>
      <li>div[data-role=button-set]</li>
      <li>div[data-role=field-label]</li>
      <li>div[data-role=field-input]</li>
      <li>div[data-role=clear]</li>
      <li>ul[data-role=menu]
        <ol>
          <li>data-section
            <ol>
              <li>{menu section} </li>
            </ol>
          </li>
        </ol>
      </li>
      <li>ul[data-role=menu-resource]</li>
      <li>div[data-role=overlay]</li>
      <li>div[data-role=popup]
        <ol>
          <li>data-section
            <ol>
              <li>{pop up section}</li>
            </ol>
          </li>
          <li>data-show
            <ol>
              <li>true</li>
              <li>false (default)</li>
            </ol>
          </li>
          <li>data-modal
            <ol>
              <li>true</li>
              <li>false (default)</li>
            </ol>
          </li>
          <li>data-location-async
            <ol>
              <li>{url}</li>
            </ol>
          </li>
          <li>data-cache
            <ol>
              <li>true</li>
              <li>false (default)</li>
            </ol>
          </li>
          <li>data-timeout
            <ol>
              <li>{timeout}</li>
            </ol>
          </li>
          <li>data-title
            <ol>
              <li>{pop up title}</li>
            </ol>
          </li>
          <li>data-close-icon 
            <ol>
              <li>true</li>
              <li>false (default)</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>nav[data-role=navbar]
        <ol>
          <li>data-mark-visited
            <ol>
              <li>true</li>
              <li>false (default)</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>div[data-role=tab]</li>
      <li>div[data-role=tab] &gt; ul &gt; li &gt; a
        <ol>
          <li>href
            <ol>
              <li>#{tab section}</li>
            </ol>
          </li>
          <li>data-active
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>div[data-role=tab-content]</li>
      <li>div[data-role=swipe-page]
        <ol>
          <li>data-prevent-default
            <ol>
              <li>true (default)</li>
              <li>false</li>
            </ol>
          </li>
          <li>data-section
            <ol>
              <li>{section for relationship}</li>
            </ol>
          </li>
          <li>data-callback
            <ol>
              <li>{callback function with index as an argument} </li>
            </ol>
          </li>
        </ol>
      </li>
      <li>ul[data-role=swipe-list]
        <ol>
          <li>data-prevent-default
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
          <li>data-ajax-location
            <ol>
              <li>{AJAX URL}</li>
            </ol>
          </li>
          <li>data-ajax-offset
            <ol>
              <li>{data offset from AJAX}</li>
            </ol>
          </li>
          <li>data-ajax-num-load
            <ol>
              <li>{number of data to be loaded from AJAX}</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>div[data-role=accordion]
        <ol>
          <li>data-navigation
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
          <li>data-collapsed
            <ol>
              <li>yes</li>
              <li>all</li>
              <li>none</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>div[data-role=accordion-content]</li>
      <li>ul[data-role=listview]
        <ol>
          <li>data-filter
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
          <li>data-filter-placeholder
            <ol>
              <li>{placeholder}</li>
            </ol>
          </li>
          <li>data-filter-focus
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>ul[data-role=inline-menu]
        <ol>
          <li>data-close-other
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>a[data-rel=popup-menu]
        <ol>
          <li>data-target
            <ol>
              <li>siblings</li>
              <li>section</li>
            </ol>
          </li>
          <li>href
            <ol>
              <li>#{section}</li>
            </ol>
          </li>
          <li>data-location-async
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
          <li>data-cache
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
          <li>data-timeout
            <ol>
              <li>{timeout}</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>ul[data-role=popup-menu]
        <ol>
          <li>data-section
            <ol>
              <li>{section}</li>
            </ol>
          </li>
          <li>data-close-other
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>ul[data-role=dropdown-menu]</li>
      <li>table[data-table-type=two-cols]
        <ol>
          <li>data-table-responsive
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>table[data-role=row-table]
        <ol>
          <li>data-filter
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
          <li>data-filter-placeholder
            <ol>
              <li>{placeholder}</li>
            </ol>
          </li>
          <li>data-filter-focus
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
        </ol>
      </li>
      <li> input
        <ol>
          <li>data-full-width
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>input[data-role=filter]</li>
      <li>input[data-role=autocomplete]
        <ol>
          <li>autocomplete
            <ol>
              <li>off</li>
            </ol>
          </li>
          <li>data-source
            <ol>
              <li>{data}</li>
              <li>{url}</li>
            </ol>
          </li>
          <li>data-min-length
            <ol>
              <li>{minimum length}</li>
            </ol>
          </li>
          <li>data-cache
            <ol>
              <li>true</li>
              <li>false (default)</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>select[data-rel=dynamic-select]
        <ol>
          <li>data-source
            <ol>
              <li>{url}</li>
            </ol>
          </li>
          <li>data-cache
            <ol>
              <li>true</li>
              <li>false</li>
            </ol>
          </li>
          <li>data-target-selector
            <ol>
              <li>{target selector} </li>
            </ol>
          </li>
          <li>data-loading-caption
            <ol>
              <li>{loading caption}</li>
            </ol>
          </li>
          <li>data-empty-caption
            <ol>
              <li>{empty caption}</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>table[data-sort=true]
        <ol>
          <li>data-sort-cols
            <ol>
              <li>{columns, starts from 1, split by coma}</li>
            </ol>
          </li>
          <li>data-case-sensitive
            <ol>
              <li>true</li>
              <li>false (default)</li>
            </ol>
          </li>
        </ol>
      </li>
      <li>table[data-filter=true]
        <ol>
          <li>data-filter-placeholder
            <ol>
              <li>{placeholder}</li>
            </ol>
          </li>
          <li>data-filter-focus
            <ol>
              <li>true</li>
              <li>false (default)</li>
            </ol>
          </li>
        </ol>
      </li>
      </ol>
	  
<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>