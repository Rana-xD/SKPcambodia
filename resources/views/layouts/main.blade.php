<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        @includeIf('includes._head')

        @stack('meta')
        @stack('styles')
        @stack('scripts')
    </head>
    <body class="home">
        @includeIf('includes._navbar')

        @yield('content')

        @includeIf('includes._footer')

        <!-- Load jQuery
        ================================================== -->
        <script type="text/javascript" src="/js/device.min.js"></script>
        <script type="text/javascript" src="/js/modernizr.custom.min.js"></script>
        <script type="text/javascript" src="../js/main.min.js"></script>
        @yield('scripts')
    </body>
</html>
