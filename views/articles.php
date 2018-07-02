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
<meta name="keywords" content="serega40in, #it40in, блог, спб, настройка компьютеров, программирование, робототехника, и вообще">
<meta name="description" content="Блог о ремонте и настройке компьютерной техники, программировании, робототехнике, о всяких it-штучках и вообще">
    <meta carset="utf8">
    <title>Serega40in Блог</title>
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<?php include_once("../analyticstracking.php") ?>
<div class="container">
    <h1>IT 40in. Блог</h1>
    <a href="admin">Admin Panel</a>
    <div>
        <?php foreach($article as $a): ?>
            <div class="article">
                <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                <em>Опубликовано: <?=$a['date']?></em>
                <p><?=articles_intro($a['content'])?>...</p>
            </div>
            <?php endforeach?>
        <footer> #it40in <br> Copyright &copy; 2016</footer>
    </div>
</div>
</body>
<div style="position:fixed; bottom: 0; left:0">
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t28.11;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано количество просмотров и"+
" посетителей' "+
"border='0' width='0' height='0'><\/a>")
//--></script><!--/LiveInternet-->
</div>
</html>