<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="TemplateMo">

        <title>Elokaily | @yield("title" , $title ?? "")</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/magnific-popup.css" rel="stylesheet">

        <link href="css/templatemo-first-portfolio-style.css" rel="stylesheet">

        <!--

        TemplateMo 578 First Portfolio

        https://templatemo.com/tm-578-first-portfolio

        -->
    </head>
    <body>
        {{--     spinner   --}}
        @include("inc.spinner")

        {{--nav--}}
        @include("inc.nav")
        <main>
            @section("content")
            @show
        </main>

        {{--    footer    --}}
        @include("inc.footer")
        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.sticky.js')}}"></script>
        <script src="{{asset('js/click-scroll.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/magnific-popup-options.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
    </body>
</html>
