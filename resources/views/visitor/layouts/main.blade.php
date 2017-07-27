<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        @includeIf('visitor.includes._head')

        @stack('meta')
        @stack('styles')
        @stack('scripts')
    </head>
    <body class="home">
        @includeIf('visitor.includes._navbar')

        @yield('content')

        @includeIf('visitor.includes._footer')

        <!-- Load jQuery
        ================================================== -->
        <script type="text/javascript" src="/js/device.min.js"></script>
        <script type="text/javascript" src="/js/modernizr.custom.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="../js/main.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
        <script src="sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert.css">
        @yield('scripts')
    </body>
</html>
