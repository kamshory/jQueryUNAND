<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>List View</h1>
<p>List of image containing title and description.</p>

  
  
  
  
  <h2>Listview Image</h2>
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
    &lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;
    &lt;h1&gt;Listview Image&lt;/h1&gt;    
    &lt;ul data-role="listview"&gt;
    	&lt;li&gt;
        	&lt;img src="../images/horticulture/tomat2.jpg"&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=tomat"&gt;Tomat&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Tomat (Solanum lycopersicum syn. Lycopersicum esculentum) adalah tumbuhan dari keluarga Solanaceae, tumbuhan asli Amerika Tengah dan Selatan, dari Meksiko sampai Peru. Tomat merupakan tumbuhan siklus hidup singkat, dapat tumbuh setinggi 1 sampai 3 meter. Tomat merupakan keluarga dekat dari kentang.&lt;/p&gt;
        &lt;/li&gt;
    	&lt;li&gt;
        	&lt;img src="../images/horticulture/anggur-hijau.jpg"&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=anggur-hijau"&gt;Anggur Hijau&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Anggur merupakan tanaman buah berupa perdu merambat yang termasuk ke dalam keluarga Vitaceae. Buah ini biasanya digunakan untuk membuat jus anggur, jelly, minuman anggur, minyak biji anggur dan kismis, atau dimakan langsung. Buah ini juga dikenal karena mengandung banyak senyawa polifenol dan resveratol yang berperan aktif dalam berbagai metabolisme tubuh, serta mampu mencegah terbentuknya sel kanker dan berbagai penyakit lainnya. Aktivitas ini juga terkait dengan adanya senyawa metabolit sekunder di dalam buah anggur yang berperan sebagai senyawa antioksidan yang mampu menangkal radikal bebas.&lt;/p&gt;
        &lt;/li&gt;
    	&lt;li&gt;
        	&lt;img src="../images/horticulture/anggur-merah.jpg"&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=anggur-merah"&gt;Anggur Merah&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Anggur merupakan tanaman buah berupa perdu merambat yang termasuk ke dalam keluarga Vitaceae. Buah ini biasanya digunakan untuk membuat jus anggur, jelly, minuman anggur, minyak biji anggur dan kismis, atau dimakan langsung. Buah ini juga dikenal karena mengandung banyak senyawa polifenol dan resveratol yang berperan aktif dalam berbagai metabolisme tubuh, serta mampu mencegah terbentuknya sel kanker dan berbagai penyakit lainnya. Aktivitas ini juga terkait dengan adanya senyawa metabolit sekunder di dalam buah anggur yang berperan sebagai senyawa antioksidan yang mampu menangkal radikal bebas.&lt;/p&gt;
        &lt;/li&gt;
        &lt;li&gt;
        	&lt;img src="../images/horticulture/cabai-besar-2.jpg"&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=cabai"&gt;Cabai&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Cabai atau cabai merah atau chili adalah buah dan tumbuhan anggota genus Capsicum. Buahnya dapat digolongkan sebagai sayuran maupun bumbu, tergantung bagaimana digunakan. Sebagai bumbu, buah cabai yang pedas sangat populer di Asia Tenggara sebagai penguat rasa makanan. Bagi seni masakan Padang, cabai bahkan dianggap sebagai "bahan makanan pokok" ke sepuluh (alih-alih sembilan). Sangat sulit bagi masakan Padang dibuat tanpa cabai.&lt;/p&gt;
        &lt;/li&gt;
        &lt;li&gt;
        	&lt;img src="../images/horticulture/jeruk.jpg"&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=jeruk"&gt;Jeruk&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Jeruk atau limau adalah semua tumbuhan berbunga anggota marga Citrus dari suku Rutaceae (suku jeruk-jerukan). Anggotanya berbentuk pohon dengan buah yang berdaging dengan rasa masam yang segar, meskipun banyak di antara anggotanya yang memiliki rasa manis. Rasa masam berasal dari kandungan asam sitrat yang memang menjadi terkandung pada semua anggotanya.&lt;/p&gt;
        &lt;/li&gt;
    &lt;/ul&gt;

    &lt;/div&gt;
    
&lt;/body&gt;
&lt;/html&gt;
</pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  
   

  <h2><span class="code">Listview Image with Custom Size Image</span></h2>
  <p>Listview image put image with height=100px and width according its ratio. You can custumize the image dimension on width and height attribute or width and height poperty on its style.</p>
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
    &lt;title&gt;jQuery Unand&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;
    &lt;h1&gt;Listview Image with Custom Size Image&lt;/h1&gt;    
    &lt;ul data-role="listview"&gt;
    	&lt;li&gt;
        	&lt;img src="../images/horticulture/tomat2.jpg" width="100" height="100"&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=tomat"&gt;Tomat&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Tomat (Solanum lycopersicum syn. Lycopersicum esculentum) adalah tumbuhan dari keluarga Solanaceae, tumbuhan asli Amerika Tengah dan Selatan, dari Meksiko sampai Peru. Tomat merupakan tumbuhan siklus hidup singkat, dapat tumbuh setinggi 1 sampai 3 meter. Tomat merupakan keluarga dekat dari kentang.&lt;/p&gt;
        &lt;/li&gt;
    	&lt;li&gt;
        	&lt;img src="../images/horticulture/anggur-hijau.jpg" width="100" height="100"&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=anggur-hijau"&gt;Anggur Hijau&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Anggur merupakan tanaman buah berupa perdu merambat yang termasuk ke dalam keluarga Vitaceae. Buah ini biasanya digunakan untuk membuat jus anggur, jelly, minuman anggur, minyak biji anggur dan kismis, atau dimakan langsung. Buah ini juga dikenal karena mengandung banyak senyawa polifenol dan resveratol yang berperan aktif dalam berbagai metabolisme tubuh, serta mampu mencegah terbentuknya sel kanker dan berbagai penyakit lainnya. Aktivitas ini juga terkait dengan adanya senyawa metabolit sekunder di dalam buah anggur yang berperan sebagai senyawa antioksidan yang mampu menangkal radikal bebas.&lt;/p&gt;
        &lt;/li&gt;
    	&lt;li&gt;
        	&lt;img src="../images/horticulture/anggur-merah.jpg" style="width:100px;height:100px;"&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=anggur-merah"&gt;Anggur Merah&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Anggur merupakan tanaman buah berupa perdu merambat yang termasuk ke dalam keluarga Vitaceae. Buah ini biasanya digunakan untuk membuat jus anggur, jelly, minuman anggur, minyak biji anggur dan kismis, atau dimakan langsung. Buah ini juga dikenal karena mengandung banyak senyawa polifenol dan resveratol yang berperan aktif dalam berbagai metabolisme tubuh, serta mampu mencegah terbentuknya sel kanker dan berbagai penyakit lainnya. Aktivitas ini juga terkait dengan adanya senyawa metabolit sekunder di dalam buah anggur yang berperan sebagai senyawa antioksidan yang mampu menangkal radikal bebas.&lt;/p&gt;
        &lt;/li&gt;
        &lt;li&gt;
        	&lt;img src="../images/horticulture/cabai-besar-2.jpg" style="width:100px;height:100px;"&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=cabai"&gt;Cabai&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Cabai atau cabai merah atau chili adalah buah dan tumbuhan anggota genus Capsicum. Buahnya dapat digolongkan sebagai sayuran maupun bumbu, tergantung bagaimana digunakan. Sebagai bumbu, buah cabai yang pedas sangat populer di Asia Tenggara sebagai penguat rasa makanan. Bagi seni masakan Padang, cabai bahkan dianggap sebagai "bahan makanan pokok" ke sepuluh (alih-alih sembilan). Sangat sulit bagi masakan Padang dibuat tanpa cabai.&lt;/p&gt;
        &lt;/li&gt;
        &lt;li&gt;
        	&lt;img src="../images/horticulture/jeruk.jpg" style="width:100px;height:100px;"&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=jeruk"&gt;Jeruk&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Jeruk atau limau adalah semua tumbuhan berbunga anggota marga Citrus dari suku Rutaceae (suku jeruk-jerukan). Anggotanya berbentuk pohon dengan buah yang berdaging dengan rasa masam yang segar, meskipun banyak di antara anggotanya yang memiliki rasa manis. Rasa masam berasal dari kandungan asam sitrat yang memang menjadi terkandung pada semua anggotanya.&lt;/p&gt;
        &lt;/li&gt;
    &lt;/ul&gt;

    &lt;/div&gt;
    
&lt;/body&gt;
&lt;/html&gt;
  </pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  <h2>Listview Image with Filter </h2>
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
    &lt;h1&gt;Listview Image with Filter&lt;/h1&gt;
    &lt;ul data-role="listview" data-filter="true" data-filter-placeholder="Type filter here" data-filter-focus="true"&gt;
    	&lt;li&gt;
        	&lt;img src="../images/horticulture/tomat2.jpg"&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=tomat"&gt;Tomat&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Tomat (Solanum lycopersicum syn. Lycopersicum esculentum) adalah tumbuhan dari keluarga Solanaceae, tumbuhan asli Amerika Tengah dan Selatan, dari Meksiko sampai Peru. Tomat merupakan tumbuhan siklus hidup singkat, dapat tumbuh setinggi 1 sampai 3 meter. Tomat merupakan keluarga dekat dari kentang.&lt;/p&gt;
        &lt;/li&gt;
    	&lt;li&gt;
        	&lt;img src="../images/horticulture/anggur-hijau.jpg"&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=anggur-hijau"&gt;Anggur Hijau&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Anggur merupakan tanaman buah berupa perdu merambat yang termasuk ke dalam keluarga Vitaceae. Buah ini biasanya digunakan untuk membuat jus anggur, jelly, minuman anggur, minyak biji anggur dan kismis, atau dimakan langsung. Buah ini juga dikenal karena mengandung banyak senyawa polifenol dan resveratol yang berperan aktif dalam berbagai metabolisme tubuh, serta mampu mencegah terbentuknya sel kanker dan berbagai penyakit lainnya. Aktivitas ini juga terkait dengan adanya senyawa metabolit sekunder di dalam buah anggur yang berperan sebagai senyawa antioksidan yang mampu menangkal radikal bebas.&lt;/p&gt;
        &lt;/li&gt;
    	&lt;li&gt;
        	&lt;img src="../images/horticulture/anggur-merah.jpg"&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=anggur-merah"&gt;Anggur Merah&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Anggur merupakan tanaman buah berupa perdu merambat yang termasuk ke dalam keluarga Vitaceae. Buah ini biasanya digunakan untuk membuat jus anggur, jelly, minuman anggur, minyak biji anggur dan kismis, atau dimakan langsung. Buah ini juga dikenal karena mengandung banyak senyawa polifenol dan resveratol yang berperan aktif dalam berbagai metabolisme tubuh, serta mampu mencegah terbentuknya sel kanker dan berbagai penyakit lainnya. Aktivitas ini juga terkait dengan adanya senyawa metabolit sekunder di dalam buah anggur yang berperan sebagai senyawa antioksidan yang mampu menangkal radikal bebas.&lt;/p&gt;
        &lt;/li&gt;
        &lt;li&gt;
        	&lt;img src="../images/horticulture/cabai-besar-2.jpg"&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=cabai"&gt;Cabai&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Cabai atau cabai merah atau chili adalah buah dan tumbuhan anggota genus Capsicum. Buahnya dapat digolongkan sebagai sayuran maupun bumbu, tergantung bagaimana digunakan. Sebagai bumbu, buah cabai yang pedas sangat populer di Asia Tenggara sebagai penguat rasa makanan. Bagi seni masakan Padang, cabai bahkan dianggap sebagai "bahan makanan pokok" ke sepuluh (alih-alih sembilan). Sangat sulit bagi masakan Padang dibuat tanpa cabai.&lt;/p&gt;
        &lt;/li&gt;
        &lt;li&gt;
        	&lt;img src="../images/horticulture/jeruk.jpg"&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=jeruk"&gt;Jeruk&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Jeruk atau limau adalah semua tumbuhan berbunga anggota marga Citrus dari suku Rutaceae (suku jeruk-jerukan). Anggotanya berbentuk pohon dengan buah yang berdaging dengan rasa masam yang segar, meskipun banyak di antara anggotanya yang memiliki rasa manis. Rasa masam berasal dari kandungan asam sitrat yang memang menjadi terkandung pada semua anggotanya.&lt;/p&gt;
        &lt;/li&gt;
    &lt;/ul&gt;

    &lt;/div&gt;
    
&lt;/body&gt;
&lt;/html&gt;
  </pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

  <h2></h2>
  <h1>Listview Absolute Image</h1>
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
    &lt;div data-role="header" data-theme="a" data-gradien="true"&gt; 
    &lt;h1&gt;Page Header&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div data-role="content"&gt;
    &lt;h1&gt;Listview Absolute Image&lt;/h1&gt;
    &lt;ul data-role="listview" data-listview-type="absolute-image" class="no-border"&gt;
    	&lt;li&gt;
           &lt;img src="../images/horticulture/tomat2.jpg"&gt;
           &lt;div&gt;
            &lt;h3&gt;&lt;a href="komoditas.php?komoditas=tomat"&gt;Tomat&lt;/a&gt;&lt;/h3&gt;
            &lt;p&gt;Tomat (Solanum lycopersicum syn. Lycopersicum esculentum) adalah tumbuhan dari keluarga Solanaceae, tumbuhan asli Amerika Tengah dan Selatan, dari Meksiko sampai Peru. Tomat merupakan tumbuhan siklus hidup singkat, dapat tumbuh setinggi 1 sampai 3 meter. Tomat merupakan keluarga dekat dari kentang.&lt;/p&gt;
            &lt;div data-float="right"&gt;&lt;span data-wrap="nowrap"&gt;&lt;span class="icon time"&gt;&lt;/span&gt; 3 Min&lt;/span&gt;&lt;/div&gt;
            	&lt;div&gt;&lt;span data-wrap="nowrap"&gt;&lt;a href="#comment-form" data-rel="popup"&gt;&lt;span class="icon comment"&gt;&lt;/span&gt; Comment&lt;/a&gt;&lt;/span&gt; &lt;span data-wrap="nowrap"&gt;&lt;span class="icon thumbs-up"&gt;&lt;/span&gt; Like&lt;/span&gt; &lt;span data-wrap="nowrap"&gt;&lt;span class="icon thumbs-down"&gt;&lt;/span&gt; Unlike&lt;/span&gt; &lt;span data-wrap="nowrap"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt; Delete&lt;/span&gt;&lt;/div&gt; 
            &lt;/div&gt;
        &lt;/li&gt;
    	&lt;li&gt;
        	&lt;img src="../images/horticulture/anggur-hijau.jpg"&gt;
            &lt;div&gt;
            &lt;h3&gt;Anggur Hijau&lt;/h3&gt;
            &lt;p&gt;Anggur merupakan tanaman buah berupa perdu merambat yang termasuk ke dalam keluarga Vitaceae. Buah ini biasanya digunakan untuk membuat jus anggur, jelly, minuman anggur, minyak biji anggur dan kismis, atau dimakan langsung. Buah ini juga dikenal karena mengandung banyak senyawa polifenol dan resveratol yang berperan aktif dalam berbagai metabolisme tubuh, serta mampu mencegah terbentuknya sel kanker dan berbagai penyakit lainnya. Aktivitas ini juga terkait dengan adanya senyawa metabolit sekunder di dalam buah anggur yang berperan sebagai senyawa antioksidan yang mampu menangkal radikal bebas.&lt;/p&gt;
            	&lt;div data-float="right"&gt;&lt;span data-wrap="nowrap"&gt;&lt;span class="icon time"&gt;&lt;/span&gt; 13 Min&lt;/span&gt;&lt;/div&gt;
            	&lt;div&gt;&lt;span data-wrap="nowrap"&gt;&lt;a href="#comment-form" data-rel="popup"&gt;&lt;span class="icon comment"&gt;&lt;/span&gt; Comment&lt;/a&gt;&lt;/span&gt; &lt;span data-wrap="nowrap"&gt;&lt;span class="icon thumbs-up"&gt;&lt;/span&gt; Like&lt;/span&gt; &lt;span data-wrap="nowrap"&gt;&lt;span class="icon thumbs-down"&gt;&lt;/span&gt; Unlike&lt;/span&gt; &lt;span data-wrap="nowrap"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt; Delete&lt;/span&gt;&lt;/div&gt; 
            &lt;/div&gt;
        &lt;/li&gt;
    	&lt;li&gt;
        	&lt;img src="../images/horticulture/anggur-merah.jpg"&gt;
            &lt;div&gt;
            &lt;h3&gt;Anggur Merah&lt;/h3&gt;
            &lt;p&gt;Anggur merupakan tanaman buah berupa perdu merambat yang termasuk ke dalam keluarga Vitaceae. Buah ini biasanya digunakan untuk membuat jus anggur, jelly, minuman anggur, minyak biji anggur dan kismis, atau dimakan langsung. Buah ini juga dikenal karena mengandung banyak senyawa polifenol dan resveratol yang berperan aktif dalam berbagai metabolisme tubuh, serta mampu mencegah terbentuknya sel kanker dan berbagai penyakit lainnya. Aktivitas ini juga terkait dengan adanya senyawa metabolit sekunder di dalam buah anggur yang berperan sebagai senyawa antioksidan yang mampu menangkal radikal bebas.&lt;/p&gt;
            	&lt;div data-float="right"&gt;&lt;span data-wrap="nowrap"&gt;&lt;span class="icon time"&gt;&lt;/span&gt; 23 Min&lt;/span&gt;&lt;/div&gt;
            	&lt;div&gt;&lt;span data-wrap="nowrap"&gt;&lt;a href="#comment-form" data-rel="popup"&gt;&lt;span class="icon comment"&gt;&lt;/span&gt; Comment&lt;/a&gt;&lt;/span&gt; &lt;span data-wrap="nowrap"&gt;&lt;span class="icon thumbs-up"&gt;&lt;/span&gt; Like&lt;/span&gt; &lt;span data-wrap="nowrap"&gt;&lt;span class="icon thumbs-down"&gt;&lt;/span&gt; Unlike&lt;/span&gt; &lt;span data-wrap="nowrap"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt; Delete&lt;/span&gt;&lt;/div&gt; 
            &lt;/div&gt;
        &lt;/li&gt;
    	&lt;li&gt;
        	&lt;img src="../images/horticulture/cabai-besar-2.jpg"&gt;
            &lt;div&gt;
            &lt;h3&gt;Cabai Besar&lt;/h3&gt;&lt;p&gt;Cabai atau cabai merah atau chili adalah buah dan tumbuhan anggota genus Capsicum. Buahnya dapat digolongkan sebagai sayuran maupun bumbu, tergantung bagaimana digunakan. Sebagai bumbu, buah cabai yang pedas sangat populer di Asia Tenggara sebagai penguat rasa makanan. Bagi seni masakan Padang, cabai bahkan dianggap sebagai "bahan makanan pokok" ke sepuluh (alih-alih sembilan). Sangat sulit bagi masakan Padang dibuat tanpa cabai.&lt;/p&gt;
            &lt;div data-float="right"&gt;&lt;span data-wrap="nowrap"&gt;&lt;span class="icon time"&gt;&lt;/span&gt; 33 Min&lt;/span&gt;&lt;/div&gt;
            &lt;div&gt;&lt;span data-wrap="nowrap"&gt;&lt;a href="#comment-form" data-rel="popup"&gt;&lt;span class="icon comment"&gt;&lt;/span&gt; Comment&lt;/a&gt;&lt;/span&gt; &lt;span data-wrap="nowrap"&gt;&lt;span class="icon thumbs-up"&gt;&lt;/span&gt; Like&lt;/span&gt; &lt;span data-wrap="nowrap"&gt;&lt;span class="icon thumbs-down"&gt;&lt;/span&gt; Unlike&lt;/span&gt; &lt;span data-wrap="nowrap"&gt;&lt;span class="icon remove"&gt;&lt;/span&gt; Delete&lt;/span&gt;&lt;/div&gt; 
            &lt;/div&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;


    &lt;div data-role="popup" data-section="comment-form" data-modal="true"&gt;<br>    &lt;form name="commentform" method="post" action=""&gt;<br>      &lt;div&gt;Leave comment here&lt;/div&gt;<br>      &lt;textarea name="comment" data-full-width="true"&gt;&lt;/textarea&gt;<br>      &lt;div data-role="button-set"&gt;<br>        &lt;input type="submit" name="send" value="Send" /&gt;<br>        &lt;input type="button" name="cancel" value="Close" onClick="javascript:mui.closePopUp('comment-form')" /&gt;<br>       &lt;/div&gt;<br>    &lt;/form&gt;<br>    &lt;/div&gt;<br>
&lt;/body&gt;
&lt;/html&gt;
  </pre><form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>

<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
