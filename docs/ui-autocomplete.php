<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Autocomplete</h1>
<p>Autocomplete is the input with autocomplete function. Data source can be from array, object, and AJAX.</p>
<p>This UI require JavaScript and must be initialize.</p>
<p>Example:</p>
<pre>&lt;input data-role="autocomplete" type="text" name="country" 
id="country" data-full-width="true" autocomplete="off" 
data-source="['Afghanistan','Aland Islands','Albania','Algeria','American Samoa']" data-min-length="3"&gt;</pre>



  
  
  
  
  <h2>Inline Autocomplete (Array String)</h2>
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

    &lt;form name="form1" method="post"&gt;
        
    &lt;fieldset data-fieldset-responsiev="true"&gt;
    &lt;legend&gt;Personal Data&lt;/legend&gt;
    
    &lt;table width="100%" border="0" cellspacing="0" cellpadding="0" data-table-type="two-cols" data-table-responsive="true"&gt;
      &lt;tr&gt;
        &lt;td&gt;Name&lt;/td&gt;
        &lt;td&gt;&lt;input type="text" name="name" id="name" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Email&lt;/td&gt;
        &lt;td&gt;&lt;input type="email" name="email" id="email" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Password&lt;/td&gt;
        &lt;td&gt;&lt;input type="password" name="password" id="password" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;URL&lt;/td&gt;
        &lt;td&gt;&lt;input type="url" name="url" id="url" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Gender&lt;/td&gt;
        &lt;td&gt;&lt;label&gt;&lt;input type="radio" name="radio" id="gender" value="M"&gt; Man&lt;/label&gt; &lt;label&gt;&lt;input type="radio" name="radio" id="gender" value="W"&gt; Woman&lt;/label&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Birth Day&lt;/td&gt;
        &lt;td&gt;&lt;input type="date" name="birthday" id="birthday"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Address&lt;/td&gt;
        &lt;td&gt;&lt;textarea name="address" id="address" data-full-width="true"&gt;&lt;/textarea&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Country&lt;/td&gt;
        &lt;td&gt;&lt;input type="text" name="country" id="country" data-full-width="true" data-role="autocomplete" autocomplete="off" data-source="['Afghanistan','Aland Islands','Albania','Algeria','American Samoa','AndorrA','Angola','Anguilla','Antarctica','Antigua and Barbuda','Argentina','Armenia','Aruba','Australia','Austria','Azerbaijan','Bahamas','Bahrain','Bangladesh','Barbados','Belarus','Belgium','Belize','Benin','Bermuda','Bhutan','Bolivia','Bosnia and Herzegovina','Botswana','Bouvet Island','Brazil','British Indian Ocean Territory','Brunei Darussalam','Bulgaria','Burkina Faso','Burundi','Cambodia','Cameroon','Canada','Cape Verde','Cayman Islands','Central African Republic','Chad','Chile','China','Christmas Island','Cocos (Keeling) Islands','Colombia','Comoros','Congo','Congo, The Democratic Republic of the','Cook Islands','Costa Rica','Cote D\'Ivoire','Croatia','Cuba','Cyprus','Czech Republic','Denmark','Djibouti','Dominica','Dominican Republic','Ecuador','Egypt','El Salvador','Equatorial Guinea','Eritrea','Estonia','Ethiopia','Falkland Islands (Malvinas)','Faroe Islands','Fiji','Finland','France','French Guiana','French Polynesia','French Southern Territories','Gabon','Gambia','Georgia','Germany','Ghana','Gibraltar','Greece','Greenland','Grenada','Guadeloupe','Guam','Guatemala','Guernsey','Guinea','Guinea-Bissau','Guyana','Haiti','Heard Island and Mcdonald Islands','Holy See (Vatican City State)','Honduras','Hong Kong','Hungary','Iceland','India','Indonesia','Iran, Islamic Republic Of','Iraq','Ireland','Isle of Man','Israel','Italy','Jamaica','Japan','Jersey','Jordan','Kazakhstan','Kenya','Kiribati','Korea, Democratic People\'S Republic of','Korea, Republic of','Kuwait','Kyrgyzstan','Lao People\'S Democratic Republic','Latvia','Lebanon','Lesotho','Liberia','Libyan Arab Jamahiriya','Liechtenstein','Lithuania','Luxembourg','Macao','Macedonia, The Former Yugoslav Republic of','Madagascar','Malawi','Malaysia','Maldives','Mali','Malta','Marshall Islands','Martinique','Mauritania','Mauritius','Mayotte','Mexico','Micronesia, Federated States of','Moldova, Republic of','Monaco','Mongolia','Montserrat','Morocco','Mozambique','Myanmar','Namibia','Nauru','Nepal','Netherlands','Netherlands Antilles','New Caledonia','New Zealand','Nicaragua','Niger','Nigeria','Niue','Norfolk Island','Northern Mariana Islands','Norway','Oman','Pakistan','Palau','Palestinian Territory, Occupied','Panama','Papua New Guinea','Paraguay','Peru','Philippines','Pitcairn','Poland','Portugal','Puerto Rico','Qatar','Reunion','Romania','Russian Federation','RWANDA','Saint Helena','Saint Kitts and Nevis','Saint Lucia','Saint Pierre and Miquelon','Saint Vincent and the Grenadines','Samoa','San Marino','Sao Tome and Principe','Saudi Arabia','Senegal','Serbia and Montenegro','Seychelles','Sierra Leone','Singapore','Slovakia','Slovenia','Solomon Islands','Somalia','South Africa','South Georgia and the South Sandwich Islands','Spain','Sri Lanka','Sudan','Suriname','Svalbard and Jan Mayen','Swaziland','Sweden','Switzerland','Syrian Arab Republic','Taiwan, Province of China','Tajikistan','Tanzania, United Republic of','Thailand','Timor-Leste','Togo','Tokelau','Tonga','Trinidad and Tobago','Tunisia','Turkey','Turkmenistan','Turks and Caicos Islands','Tuvalu','Uganda','Ukraine','United Arab Emirates','United Kingdom','United States','United States Minor Outlying Islands','Uruguay','Uzbekistan','Vanuatu','Venezuela','Viet Nam','Virgin Islands, British','Virgin Islands, U.S.','Wallis and Futuna','Western Sahara','Yemen','Zambia','Zimbabwe']" data-min-length="3"&gt;&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/table&gt;
    
    &lt;/fieldset&gt;

    &lt;fieldset data-fieldset-responsiev="true"&gt;
    &lt;legend&gt;Check Box&lt;/legend&gt;
    &lt;div&gt;&lt;label&gt;&lt;input data-rel="check-all" data-target-selector=".chk1" type="checkbox" name="check-all" value="1" /&gt; Check All&lt;/label&gt;&lt;/div&gt;
    &lt;div&gt;&lt;label&gt;&lt;input class="chk1" type="checkbox" name="check1" value="1" /&gt; Check 1&lt;/label&gt;&lt;/div&gt;
    &lt;div&gt;&lt;label&gt;&lt;input class="chk1" type="checkbox" name="check2" value="1" /&gt; Check 2&lt;/label&gt;&lt;/div&gt;
    &lt;div&gt;&lt;label&gt;&lt;input class="chk1" type="checkbox" name="check3" value="1" /&gt; Check 3&lt;/label&gt;&lt;/div&gt;
    &lt;/fieldset&gt;

    
    &lt;div data-role="button-set"&gt;
    &lt;input type="submit" name="submit" value="Submit" /&gt;
    &lt;input type="reset" name="reset" value="Reset" /&gt;
    &lt;input type="button" name="login" value="Login" data-rel="popup" href="#popup1" /&gt;
    &lt;/div&gt;
    
    &lt;/form&gt;
    &lt;/div&gt;
    
    
    
    &lt;div data-role="popup" data-section="popup1" data-modal="true" data-title="Login Form" data-close-icon="true"&gt;
    &lt;form id="form1" name="form1" method="post" action=""&gt;
        &lt;div data-display="block"&gt;Email&lt;/div&gt;
        &lt;div data-display="block"&gt;&lt;input type="email" name="email" data-display="block" required="required" placeholder="Type your email" data-full-width="true" /&gt;&lt;/div&gt;
        &lt;div data-display="block"&gt;Password&lt;/div&gt;
        &lt;div data-display="block"&gt;&lt;input type="password" name="password" data-display="block" required="required" placeholder="Type your password" data-full-width="true" /&gt;&lt;/div&gt;
        &lt;div data-role="button-set"&gt;
        &lt;input type="submit" name="login" value="Login" /&gt;
        &lt;input type="button" name="cancel" value="Close" onClick="javascript:mui.closePopUp('popup1')" /&gt;
        &lt;/div&gt;
    &lt;/form&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>Inline Autocomplete (Array Object)</h2>
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

    &lt;form name="form1" method="post"&gt;
        
    &lt;fieldset data-fieldset-responsiev="true"&gt;
    &lt;legend&gt;Personal Data&lt;/legend&gt;
    
    &lt;table width="100%" border="0" cellspacing="0" cellpadding="0" data-table-type="two-cols" data-table-responsive="true"&gt;
      &lt;tr&gt;
        &lt;td&gt;Name&lt;/td&gt;
        &lt;td&gt;&lt;input type="text" name="name" id="name" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Email&lt;/td&gt;
        &lt;td&gt;&lt;input type="email" name="email" id="email" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Password&lt;/td&gt;
        &lt;td&gt;&lt;input type="password" name="password" id="password" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;URL&lt;/td&gt;
        &lt;td&gt;&lt;input type="url" name="url" id="url" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Gender&lt;/td&gt;
        &lt;td&gt;&lt;label&gt;&lt;input type="radio" name="radio" id="gender" value="M"&gt; Man&lt;/label&gt; &lt;label&gt;&lt;input type="radio" name="radio" id="gender" value="W"&gt; Woman&lt;/label&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Birth Day&lt;/td&gt;
        &lt;td&gt;&lt;input type="date" name="birthday" id="birthday"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Address&lt;/td&gt;
        &lt;td&gt;&lt;textarea name="address" id="address" data-full-width="true"&gt;&lt;/textarea&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Country&lt;/td&gt;
        &lt;td&gt;&lt;input type="text" name="country" id="country" data-full-width="true" data-role="autocomplete" autocomplete="off" data-source="[{'v':'Afghanistan','l':'Afghanistan'},{'v':null,'l':null},{'v':'Albania','l':'Albania'},{'v':'Algeria','l':'Algeria'},{'v':'American Samoa','l':'American Samoa'},{'v':'AndorrA','l':'AndorrA'},{'v':'Angola','l':'Angola'},{'v':'Anguilla','l':'Anguilla'},{'v':'Antarctica','l':'Antarctica'},{'v':'Antigua and Barbuda','l':'Antigua and Barbuda'},{'v':'Argentina','l':'Argentina'},{'v':'Armenia','l':'Armenia'},{'v':'Aruba','l':'Aruba'},{'v':'Australia','l':'Australia'},{'v':'Austria','l':'Austria'},{'v':'Azerbaijan','l':'Azerbaijan'},{'v':'Bahamas','l':'Bahamas'},{'v':'Bahrain','l':'Bahrain'},{'v':'Bangladesh','l':'Bangladesh'},{'v':'Barbados','l':'Barbados'},{'v':'Belarus','l':'Belarus'},{'v':'Belgium','l':'Belgium'},{'v':'Belize','l':'Belize'},{'v':'Benin','l':'Benin'},{'v':'Bermuda','l':'Bermuda'},{'v':'Bhutan','l':'Bhutan'},{'v':'Bolivia','l':'Bolivia'},{'v':'Bosnia and Herzegovina','l':'Bosnia and Herzegovina'},{'v':'Botswana','l':'Botswana'},{'v':'Bouvet Island','l':'Bouvet Island'},{'v':'Brazil','l':'Brazil'},{'v':'British Indian Ocean Territory','l':'British Indian Ocean Territory'},{'v':'Brunei Darussalam','l':'Brunei Darussalam'},{'v':'Bulgaria','l':'Bulgaria'},{'v':'Burkina Faso','l':'Burkina Faso'},{'v':'Burundi','l':'Burundi'},{'v':'Cambodia','l':'Cambodia'},{'v':'Cameroon','l':'Cameroon'},{'v':'Canada','l':'Canada'},{'v':'Cape Verde','l':'Cape Verde'},{'v':'Cayman Islands','l':'Cayman Islands'},{'v':'Central African Republic','l':'Central African Republic'},{'v':'Chad','l':'Chad'},{'v':'Chile','l':'Chile'},{'v':'China','l':'China'},{'v':'Christmas Island','l':'Christmas Island'},{'v':'Cocos (Keeling) Islands','l':'Cocos (Keeling) Islands'},{'v':'Colombia','l':'Colombia'},{'v':'Comoros','l':'Comoros'},{'v':'Congo','l':'Congo'},{'v':'Congo, The Democratic Republic of the','l':'Congo, The Democratic Republic of the'},{'v':'Cook Islands','l':'Cook Islands'},{'v':'Costa Rica','l':'Costa Rica'},{'v':'Cote D\'Ivoire','l':'Cote D\'Ivoire'},{'v':'Croatia','l':'Croatia'},{'v':'Cuba','l':'Cuba'},{'v':'Cyprus','l':'Cyprus'},{'v':'Czech Republic','l':'Czech Republic'},{'v':'Denmark','l':'Denmark'},{'v':'Djibouti','l':'Djibouti'},{'v':'Dominica','l':'Dominica'},{'v':'Dominican Republic','l':'Dominican Republic'},{'v':'Ecuador','l':'Ecuador'},{'v':'Egypt','l':'Egypt'},{'v':'El Salvador','l':'El Salvador'},{'v':'Equatorial Guinea','l':'Equatorial Guinea'},{'v':'Eritrea','l':'Eritrea'},{'v':'Estonia','l':'Estonia'},{'v':'Ethiopia','l':'Ethiopia'},{'v':'Falkland Islands (Malvinas)','l':'Falkland Islands (Malvinas)'},{'v':'Faroe Islands','l':'Faroe Islands'},{'v':'Fiji','l':'Fiji'},{'v':'Finland','l':'Finland'},{'v':'France','l':'France'},{'v':'French Guiana','l':'French Guiana'},{'v':'French Polynesia','l':'French Polynesia'},{'v':'French Southern Territories','l':'French Southern Territories'},{'v':'Gabon','l':'Gabon'},{'v':'Gambia','l':'Gambia'},{'v':'Georgia','l':'Georgia'},{'v':'Germany','l':'Germany'},{'v':'Ghana','l':'Ghana'},{'v':'Gibraltar','l':'Gibraltar'},{'v':'Greece','l':'Greece'},{'v':'Greenland','l':'Greenland'},{'v':'Grenada','l':'Grenada'},{'v':'Guadeloupe','l':'Guadeloupe'},{'v':'Guam','l':'Guam'},{'v':'Guatemala','l':'Guatemala'},{'v':'Guernsey','l':'Guernsey'},{'v':'Guinea','l':'Guinea'},{'v':'Guinea-Bissau','l':'Guinea-Bissau'},{'v':'Guyana','l':'Guyana'},{'v':'Haiti','l':'Haiti'},{'v':'Heard Island and Mcdonald Islands','l':'Heard Island and Mcdonald Islands'},{'v':'Holy See (Vatican City State)','l':'Holy See (Vatican City State)'},{'v':'Honduras','l':'Honduras'},{'v':'Hong Kong','l':'Hong Kong'},{'v':'Hungary','l':'Hungary'},{'v':'Iceland','l':'Iceland'},{'v':'India','l':'India'},{'v':'Indonesia','l':'Indonesia'},{'v':'Iran, Islamic Republic Of','l':'Iran, Islamic Republic Of'},{'v':'Iraq','l':'Iraq'},{'v':'Ireland','l':'Ireland'},{'v':'Isle of Man','l':'Isle of Man'},{'v':'Israel','l':'Israel'},{'v':'Italy','l':'Italy'},{'v':'Jamaica','l':'Jamaica'},{'v':'Japan','l':'Japan'},{'v':'Jersey','l':'Jersey'},{'v':'Jordan','l':'Jordan'},{'v':'Kazakhstan','l':'Kazakhstan'},{'v':'Kenya','l':'Kenya'},{'v':'Kiribati','l':'Kiribati'},{'v':'Korea, Democratic People\'S Republic of','l':'Korea, Democratic People\'S Republic of'},{'v':'Korea, Republic of','l':'Korea, Republic of'},{'v':'Kuwait','l':'Kuwait'},{'v':'Kyrgyzstan','l':'Kyrgyzstan'},{'v':'Lao People\'S Democratic Republic','l':'Lao People\'S Democratic Republic'},{'v':'Latvia','l':'Latvia'},{'v':'Lebanon','l':'Lebanon'},{'v':'Lesotho','l':'Lesotho'},{'v':'Liberia','l':'Liberia'},{'v':'Libyan Arab Jamahiriya','l':'Libyan Arab Jamahiriya'},{'v':'Liechtenstein','l':'Liechtenstein'},{'v':'Lithuania','l':'Lithuania'},{'v':'Luxembourg','l':'Luxembourg'},{'v':'Macao','l':'Macao'},{'v':'Macedonia, The Former Yugoslav Republic of','l':'Macedonia, The Former Yugoslav Republic of'},{'v':'Madagascar','l':'Madagascar'},{'v':'Malawi','l':'Malawi'},{'v':'Malaysia','l':'Malaysia'},{'v':'Maldives','l':'Maldives'},{'v':'Mali','l':'Mali'},{'v':'Malta','l':'Malta'},{'v':'Marshall Islands','l':'Marshall Islands'},{'v':'Martinique','l':'Martinique'},{'v':'Mauritania','l':'Mauritania'},{'v':'Mauritius','l':'Mauritius'},{'v':'Mayotte','l':'Mayotte'},{'v':'Mexico','l':'Mexico'},{'v':'Micronesia, Federated States of','l':'Micronesia, Federated States of'},{'v':'Moldova, Republic of','l':'Moldova, Republic of'},{'v':'Monaco','l':'Monaco'},{'v':'Mongolia','l':'Mongolia'},{'v':'Montserrat','l':'Montserrat'},{'v':'Morocco','l':'Morocco'},{'v':'Mozambique','l':'Mozambique'},{'v':'Myanmar','l':'Myanmar'},{'v':'Namibia','l':'Namibia'},{'v':'Nauru','l':'Nauru'},{'v':'Nepal','l':'Nepal'},{'v':'Netherlands','l':'Netherlands'},{'v':'Netherlands Antilles','l':'Netherlands Antilles'},{'v':'New Caledonia','l':'New Caledonia'},{'v':'New Zealand','l':'New Zealand'},{'v':'Nicaragua','l':'Nicaragua'},{'v':'Niger','l':'Niger'},{'v':'Nigeria','l':'Nigeria'},{'v':'Niue','l':'Niue'},{'v':'Norfolk Island','l':'Norfolk Island'},{'v':'Northern Mariana Islands','l':'Northern Mariana Islands'},{'v':'Norway','l':'Norway'},{'v':'Oman','l':'Oman'},{'v':'Pakistan','l':'Pakistan'},{'v':'Palau','l':'Palau'},{'v':'Palestinian Territory, Occupied','l':'Palestinian Territory, Occupied'},{'v':'Panama','l':'Panama'},{'v':'Papua New Guinea','l':'Papua New Guinea'},{'v':'Paraguay','l':'Paraguay'},{'v':'Peru','l':'Peru'},{'v':'Philippines','l':'Philippines'},{'v':'Pitcairn','l':'Pitcairn'},{'v':'Poland','l':'Poland'},{'v':'Portugal','l':'Portugal'},{'v':'Puerto Rico','l':'Puerto Rico'},{'v':'Qatar','l':'Qatar'},{'v':'Reunion','l':'Reunion'},{'v':'Romania','l':'Romania'},{'v':'Russian Federation','l':'Russian Federation'},{'v':'RWANDA','l':'RWANDA'},{'v':'Saint Helena','l':'Saint Helena'},{'v':'Saint Kitts and Nevis','l':'Saint Kitts and Nevis'},{'v':'Saint Lucia','l':'Saint Lucia'},{'v':'Saint Pierre and Miquelon','l':'Saint Pierre and Miquelon'},{'v':'Saint Vincent and the Grenadines','l':'Saint Vincent and the Grenadines'},{'v':'Samoa','l':'Samoa'},{'v':'San Marino','l':'San Marino'},{'v':'Sao Tome and Principe','l':'Sao Tome and Principe'},{'v':'Saudi Arabia','l':'Saudi Arabia'},{'v':'Senegal','l':'Senegal'},{'v':'Serbia and Montenegro','l':'Serbia and Montenegro'},{'v':'Seychelles','l':'Seychelles'},{'v':'Sierra Leone','l':'Sierra Leone'},{'v':'Singapore','l':'Singapore'},{'v':'Slovakia','l':'Slovakia'},{'v':'Slovenia','l':'Slovenia'},{'v':'Solomon Islands','l':'Solomon Islands'},{'v':'Somalia','l':'Somalia'},{'v':'South Africa','l':'South Africa'},{'v':'South Georgia and the South Sandwich Islands','l':'South Georgia and the South Sandwich Islands'},{'v':'Spain','l':'Spain'},{'v':'Sri Lanka','l':'Sri Lanka'},{'v':'Sudan','l':'Sudan'},{'v':'Suriname','l':'Suriname'},{'v':'Svalbard and Jan Mayen','l':'Svalbard and Jan Mayen'},{'v':'Swaziland','l':'Swaziland'},{'v':'Sweden','l':'Sweden'},{'v':'Switzerland','l':'Switzerland'},{'v':'Syrian Arab Republic','l':'Syrian Arab Republic'},{'v':'Taiwan, Province of China','l':'Taiwan, Province of China'},{'v':'Tajikistan','l':'Tajikistan'},{'v':'Tanzania, United Republic of','l':'Tanzania, United Republic of'},{'v':'Thailand','l':'Thailand'},{'v':'Timor-Leste','l':'Timor-Leste'},{'v':'Togo','l':'Togo'},{'v':'Tokelau','l':'Tokelau'},{'v':'Tonga','l':'Tonga'},{'v':'Trinidad and Tobago','l':'Trinidad and Tobago'},{'v':'Tunisia','l':'Tunisia'},{'v':'Turkey','l':'Turkey'},{'v':'Turkmenistan','l':'Turkmenistan'},{'v':'Turks and Caicos Islands','l':'Turks and Caicos Islands'},{'v':'Tuvalu','l':'Tuvalu'},{'v':'Uganda','l':'Uganda'},{'v':'Ukraine','l':'Ukraine'},{'v':'United Arab Emirates','l':'United Arab Emirates'},{'v':'United Kingdom','l':'United Kingdom'},{'v':'United States','l':'United States'},{'v':'United States Minor Outlying Islands','l':'United States Minor Outlying Islands'},{'v':'Uruguay','l':'Uruguay'},{'v':'Uzbekistan','l':'Uzbekistan'},{'v':'Vanuatu','l':'Vanuatu'},{'v':'Venezuela','l':'Venezuela'},{'v':'Viet Nam','l':'Viet Nam'},{'v':'Virgin Islands, British','l':'Virgin Islands, British'},{'v':'Virgin Islands, U.S.','l':'Virgin Islands, U.S.'},{'v':'Wallis and Futuna','l':'Wallis and Futuna'},{'v':'Western Sahara','l':'Western Sahara'},{'v':'Yemen','l':'Yemen'},{'v':'Zambia','l':'Zambia'},{'v':'Zimbabwe','l':'Zimbabwe'}]" data-min-length="3"&gt;&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/table&gt;
    
    &lt;/fieldset&gt;

    &lt;fieldset data-fieldset-responsiev="true"&gt;
    &lt;legend&gt;Check Box&lt;/legend&gt;
    &lt;div&gt;&lt;label&gt;&lt;input data-rel="check-all" data-target-selector=".chk1" type="checkbox" name="check-all" value="1" /&gt; Check All&lt;/label&gt;&lt;/div&gt;
    &lt;div&gt;&lt;label&gt;&lt;input class="chk1" type="checkbox" name="check1" value="1" /&gt; Check 1&lt;/label&gt;&lt;/div&gt;
    &lt;div&gt;&lt;label&gt;&lt;input class="chk1" type="checkbox" name="check2" value="1" /&gt; Check 2&lt;/label&gt;&lt;/div&gt;
    &lt;div&gt;&lt;label&gt;&lt;input class="chk1" type="checkbox" name="check3" value="1" /&gt; Check 3&lt;/label&gt;&lt;/div&gt;
    &lt;/fieldset&gt;

    
    &lt;div data-role="button-set"&gt;
    &lt;input type="submit" name="submit" value="Submit" /&gt;
    &lt;input type="reset" name="reset" value="Reset" /&gt;
    &lt;input type="button" name="login" value="Login" data-rel="popup" href="#popup1" /&gt;
    &lt;/div&gt;
    
    &lt;/form&gt;
    &lt;/div&gt;
    
    
    
    &lt;div data-role="popup" data-section="popup1" data-modal="true" data-title="Login Form" data-close-icon="true"&gt;
    &lt;form id="form1" name="form1" method="post" action=""&gt;
        &lt;div data-display="block"&gt;Email&lt;/div&gt;
        &lt;div data-display="block"&gt;&lt;input type="email" name="email" data-display="block" required="required" placeholder="Type your email" data-full-width="true" /&gt;&lt;/div&gt;
        &lt;div data-display="block"&gt;Password&lt;/div&gt;
        &lt;div data-display="block"&gt;&lt;input type="password" name="password" data-display="block" required="required" placeholder="Type your password" data-full-width="true" /&gt;&lt;/div&gt;
        &lt;div data-role="button-set"&gt;
        &lt;input type="submit" name="login" value="Login" /&gt;
        &lt;input type="button" name="cancel" value="Close" onClick="javascript:mui.closePopUp('popup1')" /&gt;
        &lt;/div&gt;
    &lt;/form&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2>AJAX Autocomplete</h2>
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

    &lt;form name="form1" method="post"&gt;
        
    &lt;fieldset data-fieldset-responsiev="true"&gt;
    &lt;legend&gt;Personal Data&lt;/legend&gt;
    
    &lt;table width="100%" border="0" cellspacing="0" cellpadding="0" data-table-type="two-cols" data-table-responsive="true"&gt;
      &lt;tr&gt;
        &lt;td&gt;Name&lt;/td&gt;
        &lt;td&gt;&lt;input type="text" name="name" id="name" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Email&lt;/td&gt;
        &lt;td&gt;&lt;input type="email" name="email" id="email" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Password&lt;/td&gt;
        &lt;td&gt;&lt;input type="password" name="password" id="password" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;URL&lt;/td&gt;
        &lt;td&gt;&lt;input type="url" name="url" id="url" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Gender&lt;/td&gt;
        &lt;td&gt;&lt;label&gt;&lt;input type="radio" name="radio" id="gender" value="M"&gt; Man&lt;/label&gt; &lt;label&gt;&lt;input type="radio" name="radio" id="gender" value="W"&gt; Woman&lt;/label&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Birth Day&lt;/td&gt;
        &lt;td&gt;&lt;input type="date" name="birthday" id="birthday"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Address&lt;/td&gt;
        &lt;td&gt;&lt;textarea name="address" id="address" data-full-width="true"&gt;&lt;/textarea&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Country&lt;/td&gt;
        &lt;td&gt;&lt;input type="text" name="country" id="country" data-full-width="true" data-role="autocomplete" autocomplete="off" data-source="data.php" data-min-length="3" data-cache="false"&gt;&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/table&gt;
    
    &lt;/fieldset&gt;

    &lt;fieldset data-fieldset-responsiev="true"&gt;
    &lt;legend&gt;Check Box&lt;/legend&gt;
    &lt;div&gt;&lt;label&gt;&lt;input data-rel="check-all" data-target-selector=".chk1" type="checkbox" name="check-all" value="1" /&gt; Check All&lt;/label&gt;&lt;/div&gt;
    &lt;div&gt;&lt;label&gt;&lt;input class="chk1" type="checkbox" name="check1" value="1" /&gt; Check 1&lt;/label&gt;&lt;/div&gt;
    &lt;div&gt;&lt;label&gt;&lt;input class="chk1" type="checkbox" name="check2" value="1" /&gt; Check 2&lt;/label&gt;&lt;/div&gt;
    &lt;div&gt;&lt;label&gt;&lt;input class="chk1" type="checkbox" name="check3" value="1" /&gt; Check 3&lt;/label&gt;&lt;/div&gt;
    &lt;/fieldset&gt;

    
    &lt;div data-role="button-set"&gt;
    &lt;input type="submit" name="submit" value="Submit" /&gt;
    &lt;input type="reset" name="reset" value="Reset" /&gt;
    &lt;input type="button" name="login" value="Login" data-rel="popup" href="#popup1" /&gt;
    &lt;/div&gt;
    
    &lt;/form&gt;
    &lt;/div&gt;
    
    
    
    &lt;div data-role="popup" data-section="popup1" data-modal="true" data-title="Login Form" data-close-icon="true"&gt;
    &lt;form id="form1" name="form1" method="post" action=""&gt;
        &lt;div data-display="block"&gt;Email&lt;/div&gt;
        &lt;div data-display="block"&gt;&lt;input type="email" name="email" data-display="block" required="required" placeholder="Type your email" data-full-width="true" /&gt;&lt;/div&gt;
        &lt;div data-display="block"&gt;Password&lt;/div&gt;
        &lt;div data-display="block"&gt;&lt;input type="password" name="password" data-display="block" required="required" placeholder="Type your password" data-full-width="true" /&gt;&lt;/div&gt;
        &lt;div data-role="button-set"&gt;
        &lt;input type="submit" name="login" value="Login" /&gt;
        &lt;input type="button" name="cancel" value="Close" onClick="javascript:mui.closePopUp('popup1')" /&gt;
        &lt;/div&gt;
    &lt;/form&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>
  <h2>Autocomplete with Callback Function</h2>
  <h3>Code</h3>
  <div class="code-container">
    <pre id="pre4" class="code">&lt;!DOCTYPE html&gt;
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
    function callmeback(data)
    {
       alert([data.v, data.l]);
    }
    &lt;/script&gt;
&lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;

    &lt;form name="form1" method="post"&gt;
        
    &lt;fieldset data-fieldset-responsiev="true"&gt;
    &lt;legend&gt;Personal Data&lt;/legend&gt;
    
    &lt;table width="100%" border="0" cellspacing="0" cellpadding="0" data-table-type="two-cols" data-table-responsive="true"&gt;
      &lt;tr&gt;
        &lt;td&gt;Name&lt;/td&gt;
        &lt;td&gt;&lt;input type="text" name="name" id="name" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Email&lt;/td&gt;
        &lt;td&gt;&lt;input type="email" name="email" id="email" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Password&lt;/td&gt;
        &lt;td&gt;&lt;input type="password" name="password" id="password" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;URL&lt;/td&gt;
        &lt;td&gt;&lt;input type="url" name="url" id="url" data-full-width="true"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Gender&lt;/td&gt;
        &lt;td&gt;&lt;label&gt;&lt;input type="radio" name="radio" id="gender" value="M"&gt; Man&lt;/label&gt; &lt;label&gt;&lt;input type="radio" name="radio" id="gender" value="W"&gt; Woman&lt;/label&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Birth Day&lt;/td&gt;
        &lt;td&gt;&lt;input type="date" name="birthday" id="birthday"&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Address&lt;/td&gt;
        &lt;td&gt;&lt;textarea name="address" id="address" data-full-width="true"&gt;&lt;/textarea&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Country&lt;/td&gt;
        &lt;td&gt;&lt;input type="text" name="country" id="country" data-full-width="true" data-role="autocomplete" data-autocomplete-callback="callmeback" autocomplete="off" data-source="[{'v':'Afghanistan','l':'Afghanistan'},{'v':null,'l':null},{'v':'Albania','l':'Albania'},{'v':'Algeria','l':'Algeria'},{'v':'American Samoa','l':'American Samoa'},{'v':'AndorrA','l':'AndorrA'},{'v':'Angola','l':'Angola'},{'v':'Anguilla','l':'Anguilla'},{'v':'Antarctica','l':'Antarctica'},{'v':'Antigua and Barbuda','l':'Antigua and Barbuda'},{'v':'Argentina','l':'Argentina'},{'v':'Armenia','l':'Armenia'},{'v':'Aruba','l':'Aruba'},{'v':'Australia','l':'Australia'},{'v':'Austria','l':'Austria'},{'v':'Azerbaijan','l':'Azerbaijan'},{'v':'Bahamas','l':'Bahamas'},{'v':'Bahrain','l':'Bahrain'},{'v':'Bangladesh','l':'Bangladesh'},{'v':'Barbados','l':'Barbados'},{'v':'Belarus','l':'Belarus'},{'v':'Belgium','l':'Belgium'},{'v':'Belize','l':'Belize'},{'v':'Benin','l':'Benin'},{'v':'Bermuda','l':'Bermuda'},{'v':'Bhutan','l':'Bhutan'},{'v':'Bolivia','l':'Bolivia'},{'v':'Bosnia and Herzegovina','l':'Bosnia and Herzegovina'},{'v':'Botswana','l':'Botswana'},{'v':'Bouvet Island','l':'Bouvet Island'},{'v':'Brazil','l':'Brazil'},{'v':'British Indian Ocean Territory','l':'British Indian Ocean Territory'},{'v':'Brunei Darussalam','l':'Brunei Darussalam'},{'v':'Bulgaria','l':'Bulgaria'},{'v':'Burkina Faso','l':'Burkina Faso'},{'v':'Burundi','l':'Burundi'},{'v':'Cambodia','l':'Cambodia'},{'v':'Cameroon','l':'Cameroon'},{'v':'Canada','l':'Canada'},{'v':'Cape Verde','l':'Cape Verde'},{'v':'Cayman Islands','l':'Cayman Islands'},{'v':'Central African Republic','l':'Central African Republic'},{'v':'Chad','l':'Chad'},{'v':'Chile','l':'Chile'},{'v':'China','l':'China'},{'v':'Christmas Island','l':'Christmas Island'},{'v':'Cocos (Keeling) Islands','l':'Cocos (Keeling) Islands'},{'v':'Colombia','l':'Colombia'},{'v':'Comoros','l':'Comoros'},{'v':'Congo','l':'Congo'},{'v':'Congo, The Democratic Republic of the','l':'Congo, The Democratic Republic of the'},{'v':'Cook Islands','l':'Cook Islands'},{'v':'Costa Rica','l':'Costa Rica'},{'v':'Cote D\'Ivoire','l':'Cote D\'Ivoire'},{'v':'Croatia','l':'Croatia'},{'v':'Cuba','l':'Cuba'},{'v':'Cyprus','l':'Cyprus'},{'v':'Czech Republic','l':'Czech Republic'},{'v':'Denmark','l':'Denmark'},{'v':'Djibouti','l':'Djibouti'},{'v':'Dominica','l':'Dominica'},{'v':'Dominican Republic','l':'Dominican Republic'},{'v':'Ecuador','l':'Ecuador'},{'v':'Egypt','l':'Egypt'},{'v':'El Salvador','l':'El Salvador'},{'v':'Equatorial Guinea','l':'Equatorial Guinea'},{'v':'Eritrea','l':'Eritrea'},{'v':'Estonia','l':'Estonia'},{'v':'Ethiopia','l':'Ethiopia'},{'v':'Falkland Islands (Malvinas)','l':'Falkland Islands (Malvinas)'},{'v':'Faroe Islands','l':'Faroe Islands'},{'v':'Fiji','l':'Fiji'},{'v':'Finland','l':'Finland'},{'v':'France','l':'France'},{'v':'French Guiana','l':'French Guiana'},{'v':'French Polynesia','l':'French Polynesia'},{'v':'French Southern Territories','l':'French Southern Territories'},{'v':'Gabon','l':'Gabon'},{'v':'Gambia','l':'Gambia'},{'v':'Georgia','l':'Georgia'},{'v':'Germany','l':'Germany'},{'v':'Ghana','l':'Ghana'},{'v':'Gibraltar','l':'Gibraltar'},{'v':'Greece','l':'Greece'},{'v':'Greenland','l':'Greenland'},{'v':'Grenada','l':'Grenada'},{'v':'Guadeloupe','l':'Guadeloupe'},{'v':'Guam','l':'Guam'},{'v':'Guatemala','l':'Guatemala'},{'v':'Guernsey','l':'Guernsey'},{'v':'Guinea','l':'Guinea'},{'v':'Guinea-Bissau','l':'Guinea-Bissau'},{'v':'Guyana','l':'Guyana'},{'v':'Haiti','l':'Haiti'},{'v':'Heard Island and Mcdonald Islands','l':'Heard Island and Mcdonald Islands'},{'v':'Holy See (Vatican City State)','l':'Holy See (Vatican City State)'},{'v':'Honduras','l':'Honduras'},{'v':'Hong Kong','l':'Hong Kong'},{'v':'Hungary','l':'Hungary'},{'v':'Iceland','l':'Iceland'},{'v':'India','l':'India'},{'v':'Indonesia','l':'Indonesia'},{'v':'Iran, Islamic Republic Of','l':'Iran, Islamic Republic Of'},{'v':'Iraq','l':'Iraq'},{'v':'Ireland','l':'Ireland'},{'v':'Isle of Man','l':'Isle of Man'},{'v':'Israel','l':'Israel'},{'v':'Italy','l':'Italy'},{'v':'Jamaica','l':'Jamaica'},{'v':'Japan','l':'Japan'},{'v':'Jersey','l':'Jersey'},{'v':'Jordan','l':'Jordan'},{'v':'Kazakhstan','l':'Kazakhstan'},{'v':'Kenya','l':'Kenya'},{'v':'Kiribati','l':'Kiribati'},{'v':'Korea, Democratic People\'S Republic of','l':'Korea, Democratic People\'S Republic of'},{'v':'Korea, Republic of','l':'Korea, Republic of'},{'v':'Kuwait','l':'Kuwait'},{'v':'Kyrgyzstan','l':'Kyrgyzstan'},{'v':'Lao People\'S Democratic Republic','l':'Lao People\'S Democratic Republic'},{'v':'Latvia','l':'Latvia'},{'v':'Lebanon','l':'Lebanon'},{'v':'Lesotho','l':'Lesotho'},{'v':'Liberia','l':'Liberia'},{'v':'Libyan Arab Jamahiriya','l':'Libyan Arab Jamahiriya'},{'v':'Liechtenstein','l':'Liechtenstein'},{'v':'Lithuania','l':'Lithuania'},{'v':'Luxembourg','l':'Luxembourg'},{'v':'Macao','l':'Macao'},{'v':'Macedonia, The Former Yugoslav Republic of','l':'Macedonia, The Former Yugoslav Republic of'},{'v':'Madagascar','l':'Madagascar'},{'v':'Malawi','l':'Malawi'},{'v':'Malaysia','l':'Malaysia'},{'v':'Maldives','l':'Maldives'},{'v':'Mali','l':'Mali'},{'v':'Malta','l':'Malta'},{'v':'Marshall Islands','l':'Marshall Islands'},{'v':'Martinique','l':'Martinique'},{'v':'Mauritania','l':'Mauritania'},{'v':'Mauritius','l':'Mauritius'},{'v':'Mayotte','l':'Mayotte'},{'v':'Mexico','l':'Mexico'},{'v':'Micronesia, Federated States of','l':'Micronesia, Federated States of'},{'v':'Moldova, Republic of','l':'Moldova, Republic of'},{'v':'Monaco','l':'Monaco'},{'v':'Mongolia','l':'Mongolia'},{'v':'Montserrat','l':'Montserrat'},{'v':'Morocco','l':'Morocco'},{'v':'Mozambique','l':'Mozambique'},{'v':'Myanmar','l':'Myanmar'},{'v':'Namibia','l':'Namibia'},{'v':'Nauru','l':'Nauru'},{'v':'Nepal','l':'Nepal'},{'v':'Netherlands','l':'Netherlands'},{'v':'Netherlands Antilles','l':'Netherlands Antilles'},{'v':'New Caledonia','l':'New Caledonia'},{'v':'New Zealand','l':'New Zealand'},{'v':'Nicaragua','l':'Nicaragua'},{'v':'Niger','l':'Niger'},{'v':'Nigeria','l':'Nigeria'},{'v':'Niue','l':'Niue'},{'v':'Norfolk Island','l':'Norfolk Island'},{'v':'Northern Mariana Islands','l':'Northern Mariana Islands'},{'v':'Norway','l':'Norway'},{'v':'Oman','l':'Oman'},{'v':'Pakistan','l':'Pakistan'},{'v':'Palau','l':'Palau'},{'v':'Palestinian Territory, Occupied','l':'Palestinian Territory, Occupied'},{'v':'Panama','l':'Panama'},{'v':'Papua New Guinea','l':'Papua New Guinea'},{'v':'Paraguay','l':'Paraguay'},{'v':'Peru','l':'Peru'},{'v':'Philippines','l':'Philippines'},{'v':'Pitcairn','l':'Pitcairn'},{'v':'Poland','l':'Poland'},{'v':'Portugal','l':'Portugal'},{'v':'Puerto Rico','l':'Puerto Rico'},{'v':'Qatar','l':'Qatar'},{'v':'Reunion','l':'Reunion'},{'v':'Romania','l':'Romania'},{'v':'Russian Federation','l':'Russian Federation'},{'v':'RWANDA','l':'RWANDA'},{'v':'Saint Helena','l':'Saint Helena'},{'v':'Saint Kitts and Nevis','l':'Saint Kitts and Nevis'},{'v':'Saint Lucia','l':'Saint Lucia'},{'v':'Saint Pierre and Miquelon','l':'Saint Pierre and Miquelon'},{'v':'Saint Vincent and the Grenadines','l':'Saint Vincent and the Grenadines'},{'v':'Samoa','l':'Samoa'},{'v':'San Marino','l':'San Marino'},{'v':'Sao Tome and Principe','l':'Sao Tome and Principe'},{'v':'Saudi Arabia','l':'Saudi Arabia'},{'v':'Senegal','l':'Senegal'},{'v':'Serbia and Montenegro','l':'Serbia and Montenegro'},{'v':'Seychelles','l':'Seychelles'},{'v':'Sierra Leone','l':'Sierra Leone'},{'v':'Singapore','l':'Singapore'},{'v':'Slovakia','l':'Slovakia'},{'v':'Slovenia','l':'Slovenia'},{'v':'Solomon Islands','l':'Solomon Islands'},{'v':'Somalia','l':'Somalia'},{'v':'South Africa','l':'South Africa'},{'v':'South Georgia and the South Sandwich Islands','l':'South Georgia and the South Sandwich Islands'},{'v':'Spain','l':'Spain'},{'v':'Sri Lanka','l':'Sri Lanka'},{'v':'Sudan','l':'Sudan'},{'v':'Suriname','l':'Suriname'},{'v':'Svalbard and Jan Mayen','l':'Svalbard and Jan Mayen'},{'v':'Swaziland','l':'Swaziland'},{'v':'Sweden','l':'Sweden'},{'v':'Switzerland','l':'Switzerland'},{'v':'Syrian Arab Republic','l':'Syrian Arab Republic'},{'v':'Taiwan, Province of China','l':'Taiwan, Province of China'},{'v':'Tajikistan','l':'Tajikistan'},{'v':'Tanzania, United Republic of','l':'Tanzania, United Republic of'},{'v':'Thailand','l':'Thailand'},{'v':'Timor-Leste','l':'Timor-Leste'},{'v':'Togo','l':'Togo'},{'v':'Tokelau','l':'Tokelau'},{'v':'Tonga','l':'Tonga'},{'v':'Trinidad and Tobago','l':'Trinidad and Tobago'},{'v':'Tunisia','l':'Tunisia'},{'v':'Turkey','l':'Turkey'},{'v':'Turkmenistan','l':'Turkmenistan'},{'v':'Turks and Caicos Islands','l':'Turks and Caicos Islands'},{'v':'Tuvalu','l':'Tuvalu'},{'v':'Uganda','l':'Uganda'},{'v':'Ukraine','l':'Ukraine'},{'v':'United Arab Emirates','l':'United Arab Emirates'},{'v':'United Kingdom','l':'United Kingdom'},{'v':'United States','l':'United States'},{'v':'United States Minor Outlying Islands','l':'United States Minor Outlying Islands'},{'v':'Uruguay','l':'Uruguay'},{'v':'Uzbekistan','l':'Uzbekistan'},{'v':'Vanuatu','l':'Vanuatu'},{'v':'Venezuela','l':'Venezuela'},{'v':'Viet Nam','l':'Viet Nam'},{'v':'Virgin Islands, British','l':'Virgin Islands, British'},{'v':'Virgin Islands, U.S.','l':'Virgin Islands, U.S.'},{'v':'Wallis and Futuna','l':'Wallis and Futuna'},{'v':'Western Sahara','l':'Western Sahara'},{'v':'Yemen','l':'Yemen'},{'v':'Zambia','l':'Zambia'},{'v':'Zimbabwe','l':'Zimbabwe'}]" data-min-length="3"&gt;&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/table&gt;
    
    &lt;/fieldset&gt;

    &lt;fieldset data-fieldset-responsiev="true"&gt;
    &lt;legend&gt;Check Box&lt;/legend&gt;
    &lt;div&gt;&lt;label&gt;&lt;input data-rel="check-all" data-target-selector=".chk1" type="checkbox" name="check-all" value="1" /&gt; Check All&lt;/label&gt;&lt;/div&gt;
    &lt;div&gt;&lt;label&gt;&lt;input class="chk1" type="checkbox" name="check1" value="1" /&gt; Check 1&lt;/label&gt;&lt;/div&gt;
    &lt;div&gt;&lt;label&gt;&lt;input class="chk1" type="checkbox" name="check2" value="1" /&gt; Check 2&lt;/label&gt;&lt;/div&gt;
    &lt;div&gt;&lt;label&gt;&lt;input class="chk1" type="checkbox" name="check3" value="1" /&gt; Check 3&lt;/label&gt;&lt;/div&gt;
    &lt;/fieldset&gt;

    
    &lt;div data-role="button-set"&gt;
    &lt;input type="submit" name="submit" value="Submit" /&gt;
    &lt;input type="reset" name="reset" value="Reset" /&gt;
    &lt;input type="button" name="login" value="Login" data-rel="popup" href="#popup1" /&gt;
    &lt;/div&gt;
    
    &lt;/form&gt;
    &lt;/div&gt;
    
    
    
    &lt;div data-role="popup" data-section="popup1" data-modal="true" data-title="Login Form" data-close-icon="true"&gt;
    &lt;form id="form1" name="form1" method="post" action=""&gt;
        &lt;div data-display="block"&gt;Email&lt;/div&gt;
        &lt;div data-display="block"&gt;&lt;input type="email" name="email" data-display="block" required="required" placeholder="Type your email" data-full-width="true" /&gt;&lt;/div&gt;
        &lt;div data-display="block"&gt;Password&lt;/div&gt;
        &lt;div data-display="block"&gt;&lt;input type="password" name="password" data-display="block" required="required" placeholder="Type your password" data-full-width="true" /&gt;&lt;/div&gt;
        &lt;div data-role="button-set"&gt;
        &lt;input type="submit" name="login" value="Login" /&gt;
        &lt;input type="button" name="cancel" value="Close" onClick="javascript:mui.closePopUp('popup1')" /&gt;
        &lt;/div&gt;
    &lt;/form&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
  </pre>
    <form method="post" action="../example/ui/test.php" target="_blank">
      <input name="code" value="" type="hidden">
      <input name="submit" value="Test" onclick="copyCode(this)" type="submit">
    </form>
</div>
  <h2></h2>

<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
