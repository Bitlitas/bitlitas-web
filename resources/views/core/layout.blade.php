<!DOCTYPE html>
<!--[if lte IE 9]><html class="no-js is-ie"><![endif]-->
<!--[if gt IE 8]><!--><html class=no-js><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="description" content="Litas sugrįžo. Pirmoji lietuviška kriptavaliuta BitLitas!">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>BitLitas - Lietuviška kriptovaliuta</title>

    <link rel=stylesheet href="css/main.css?v=1.1">
    <!--[if lte IE 8]>
    <link rel=stylesheet href="css/ie.css">
    <![endif]-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>

    <link rel='shortcut icon' type='image/x-icon' href='img/favicon/icon.ico' />

    <meta property="og:url"                content="https://bitlitas.lt" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="BitLitas" />
    <meta property="og:description"        content="Lietuviškas pinigas vėl sugrįžo!" />
    <meta property="og:image" content="https://bitlitas.lt/img/fbshare.png" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112944777-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-112944777-1');
    </script>

    <meta name="google-site-verification" content="UylHHoLW4gph3cJKJq6jJ36hSvsxxMVQQ1QOMZHfsmM" />
</head>

<body>

@yield('content')
@include('core.footer')
