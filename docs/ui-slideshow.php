<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Slideshow</h1>
<p>Slideshow containing image, title, and paragraph.</p>



  
  
  
  
  <h2>Slideshow Image</h2>
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
    &lt;h1&gt;Slideshow Image&lt;/h1&gt;    
    &lt;ul data-role="slideshow"&gt;
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

<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
