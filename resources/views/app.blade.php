<!DOCTYPE html>
    <html class="js" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

    <meta content="text/html;charset=UTF-8" http-equiv="content-type"/>
    <head>
        <meta charset="utf-8">
        <meta content="Softnio" name="author">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <meta content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers."
              name="description">
        <link href="{{asset('images/favicon.png')}}" rel="shortcut icon">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700&display=swap" rel="stylesheet">
        <link href="{{asset('assets/css/dashlite.rtl.css?ver=3.1.3')}}" rel="stylesheet">
        <link href="{{asset('assets/css/theme583f.css?ver=3.1.3')}}" id="skin-default" rel="stylesheet">
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
        <script>window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());
            gtag('config', 'UA-91615293-4');</script>
        <!-- Scripts -->
        @routes
        @vite('resources/js/app.js')


        @inertiaHead
    </head>
    <body class=" nk-body bg-lighter npc-general has-sidebar has-rtl no-touch nk-nio-theme {{ Session::get('dark-mode', '') ? 'dark-mode' : '' }} cairo-font" dir="rtl">
        @inertia


        <script src="{{asset('assets/js/bundle583f.js?ver=3.1.3')}}"></script>
        <script src="{{asset('assets/js/scripts583f.js?ver=3.1.3')}}"></script>
        <script src="{{asset('assets/js/charts/gd-default583f.js?ver=3.1.3')}}"></script>
        <script src="{{asset('assets/js/libs/datatable-btns583f.js?ver=3.1.3')}}"></script>
    </body>
</html>
