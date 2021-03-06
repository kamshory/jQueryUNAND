<?php
include_once dirname(__FILE__)."/inc/header.php";
?>
<h1>Scroll</h1>
<p>Scroll up and scroll down trigger. This element is used to scroll up or scroll down document.</p>
<p>This UI require JavaScript and must be initialize.</p>
<p id="pre">Scroll up element example:</p>
<pre>&lt;span data-rel=&quot;scroll-up&quot; class=&quot;icon arrow-circle-alt-up&quot;&gt;&lt;/span&gt;</pre>
<p>Scroll down element example:</p>
<pre id="pre2">&lt;span data-rel=&quot;scroll-down&quot; class=&quot;icon arrow-circle-alt-down&quot;&gt;&lt;/span&gt;</pre>



  <p>The scroll up and scroll down can be customized as you want. </p>
  <p>Custom example:</p>
  <pre>&lt;span data-rel=&quot;scroll-down&quot;&gt;Scroll Down&lt;/span&gt;</pre>
  <p>or</p>
  <pre>&lt;span data-rel=&quot;scroll-down&quot; class=&quot;icon arrow-circle-alt-down&quot;&gt; Scroll Down&lt;/span&gt;</pre>
  <h2>Scroll-Up and Scroll-Down</h2>
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
    &lt;div data-role="content" style="max-width:800px; margin:0px auto;"&gt;

    &lt;h1&gt;&lt;span data-rel="scroll-down" class="icon arrow-circle-alt-down"&gt;&lt;/span&gt; Buah-Buahan&lt;/h1&gt;
    &lt;h2&gt;&lt;span data-rel="scroll-up" class="icon arrow-circle-alt-up"&gt;&lt;/span&gt; Anggur&lt;/h2&gt;
    &lt;p&gt;Anggur merupakan tanaman buah berupa perdu merambat yang termasuk ke   dalam keluarga Vitaceae. Buah ini biasanya digunakan untuk membuat jus   anggur, jelly, minuman anggur, minyak biji anggur dan kismis, atau   dimakan langsung. Buah ini juga dikenal karena mengandung banyak senyawa   polifenol dan resveratol yang berperan aktif dalam berbagai metabolisme   tubuh, serta mampu mencegah terbentuknya sel kanker dan berbagai   penyakit lainnya. Aktivitas ini juga terkait dengan adanya senyawa   metabolit sekunder di dalam buah anggur yang berperan sebagai senyawa   antioksidan yang mampu menangkal radikal bebas.&lt;/p&gt;
    &lt;img src="../images/horticulture/anggur-hijau.jpg" data-full-width="true" style="max-width:400px;"&gt;
    &lt;h2&gt;&lt;span data-rel="scroll-up" class="icon arrow-circle-alt-up"&gt;&lt;/span&gt; Tomat&lt;/h2&gt;
    &lt;p&gt;Tomat (Solanum lycopersicum syn. Lycopersicum esculentum) adalah   tumbuhan dari keluarga Solanaceae, tumbuhan asli Amerika Tengah dan   Selatan, dari Meksiko sampai Peru. Tomat merupakan tumbuhan siklus hidup   singkat, dapat tumbuh setinggi 1 sampai 3 meter. Tomat merupakan   keluarga dekat dari kentang.&lt;/p&gt;
    &lt;img src="../images/horticulture/tomat2.jpg" data-full-width="true" style="max-width:400px;"&gt;  
    &lt;h2&gt;&lt;span data-rel="scroll-up" class="icon arrow-circle-alt-up"&gt;&lt;/span&gt; Pisang&lt;/h2&gt;
    &lt;p&gt;Pisang adalah nama umum yang diberikan pada tumbuhan terna raksasa berdaun besar memanjang dari suku Musaceae. Beberapa jenisnya (Musa acuminata, M. balbisiana, dan M. paradisiaca) menghasilkan buah konsumsi yang dinamakan sama. Buah ini tersusun dalam tandan dengan kelompok-kelompok tersusun menjari, yang disebut sisir. Hampir semua buah pisang memiliki kulit berwarna kuning ketika matang, meskipun ada beberapa yang berwarna jingga, merah, hijau, ungu, atau bahkan hampir hitam. Buah pisang sebagai bahan pangan merupakan sumber energi (karbohidrat) dan mineral, terutama kalium.&lt;/p&gt;
    &lt;p&gt;&lt;img src="../images/horticulture/pisang.jpg" data-full-width="true" style="max-width:400px;"&gt;&lt;/p&gt;  
    &lt;/div&gt;
    
&lt;/body&gt;
&lt;/html&gt;
  </pre>
  <form method="post" action="../example/ui/test.php" target="_blank"><input name="code" value="" type="hidden"><input name="submit" value="Test" onclick="copyCode(this)" type="submit"></form>
</div>


<?php
include_once dirname(__FILE__)."/inc/footer.php";
?>
