<!DOCTYPE html>
<html>
<head>
    <?php
    require('data/head.php');
    ?>
</head>
<body>
<!-- Google Tag Manager -->
<noscript>
    <iframe
        src="//www.googletagmanager.com/ns.html?id=GTM-M7S4WT"
        height="0"
        width="0"
        style="display:none;visibility:hidden">
    </iframe>
</noscript>
<script type='text/javascript'>
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
        var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })
    (window, document, 'script', 'dataLayer', 'GTM-M7S4WT');
</script>
<!-- End Google Tag Manager -->
<div class="container-fluid">
    <div class="header">
        <img src="/images/AShFull.svg" alt="Logo">
    </div><!--Конец шапки-->
    <div class="contents">
        <img class="img-responsive" alt="Photo" src="/images/IMG_328711.jpg"/>
    </div><!--Конец контента-->
    <div class="footer">
        <?php
        require('data/footer.php');
        ?>
    </div><!--Конец футера-->
</div>
<script type='text/javascript' src='/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='/js/contact.js'></script>
</body>
</html>