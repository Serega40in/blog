<!DOCTYPE HTML>
<html>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter37613015 = new Ya.Metrika({
                    id:37613015,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/37613015" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<head>
    <meta carset="utf8">
    <title>IT 40in. Блог</title>
    <meta name="keywords" content="serega40in, #it40in, блог, спб, настройка компьютеров, программирование, робототехника, и вообще">
<meta name="description" content="Блог о ремонте и настройке компьютерной техники, программировании, робототехнике, о всяких it-штучках и вообще">
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<?php include_once("../analyticstracking.php") ?>
<div class="container">
    <h1>IT 40in. Блог</h1>
    <a href="index.php">Все статьи</a>
    <div>
            <div class="article">
                <h3><?=$article['title']?></h3>
                <em>Опубликовано: <?=$article['date']?></em>
                <p><br/><?=$article['content']?></p>
            </div>
        <footer> #it40in <br> Copyright &copy; 2016</footer>
    </div>
</div>
</body>
</html>
