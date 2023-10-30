<!DOCTYPE HTML>

<html>
<head>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(93552545, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/93552545" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DCS9FY9SVQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DCS9FY9SVQ');
    </script>


    <title>Написать</title>
    <meta charset="utf-8" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="ООО ЧОП ГРАНИТ-Волга предоставляет охранные услуги в Волгограде и области."/>

    <meta name="keywords" content="Охрана, ЧОП, Гранит-Волга, Частное охранно предприятие, ЧОП Волгоград, физическая охрана, услуги охраны" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/form.css" />
</head>

</head>
<body class="is-preload">
<div id="page-wrapper">
    <header id="header">
        <h1 id="logo"><a href="/">Гранит-Волга</a></h1>
        <nav id="nav">
            <ul>
                <li>
                    <a href="index">Главная</a>
                </li>
                <li>
                    <a href="otzivi">Отзывы</a>
                </li>
                <li>
                    <a href="cart">Мы находимся</a>
                </li>
                <li>
                    <a href="login">Войти</a>
                </li>

            </ul>
        </nav>
    </header>
    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Напишите нам</h2>
            </header>
        </div>

        <div class="container">
            <form method="post" action="contact1">
                {{ csrf_field() }}
                <input name="name" type="text" class="feedback-input" placeholder="Имя" />
                <input name="email" type="text" class="feedback-input" placeholder="Email" />
                <textarea name="message" class="feedback-input" placeholder="Ваше сообщение"></textarea>
                <input type="submit" value="Отправить"/>
            </form>
        </div>




    </div>
    <footer class="ft">

        <ul class="copyright">
            <li>&copy; Selfxp</li><li>Волгоград 2023</li>
        </ul>




    </footer>



    <!-- Scripts -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>


</body>
</html>
