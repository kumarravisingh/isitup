<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <meta name="Keywords" content="isitup, isitup india, check website up status, open source isitup">
    <meta name="Description" content="isitup india is open source tool to check if your website or IP is up or down">
    <link rel="manifest" href="/manifest.json" />
    <meta name="theme-color" content="#FFFFFF" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="IsItUp">
    <link rel="apple-touch-icon" href="192.png">
    <meta name="msapplication-TileImage" content="144.png">
    <meta name="msapplication-TileColor" content="#2F3BA2">

    <title>Is It Up</title>

    <script>
        window.Laravel = {!! json_encode([
			'csrfToken' => csrf_token(),
		]) !!};
    </script>
    <noscript>To run this application, JavaScript is required to be enabled.</noscript>

</head>
<body>
<div id="app">
    <router-view></router-view>
    <vue-progress-bar></vue-progress-bar>
</div>
<!-- set progressbar -->

<script src="{{ mix('js/app.js') }}"></script>
<script>
    if ('serviceWorker' in navigator ) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
            }, function(err) {
            });
        });
    }
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36567104-5"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-36567104-5');
</script>

</body>
</html>
