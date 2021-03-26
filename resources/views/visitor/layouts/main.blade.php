<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="@php echo App::getLocale(); @endphp"> <!--<![endif]-->
    <head>
        @includeIf('visitor.includes._head')

        @stack('meta')
        @stack('styles')

    </head>
    <body class="home">
        <!-- Navigation menu -->
        @includeIf('visitor.includes._navbar')

        <!-- Main content -->
        @yield('content')

        <!--Footer Client-->
        <!-- @includeIf('visitor.components.home.partner_slideset') -->

        <!-- Site Footer -->
        @includeIf('visitor.includes._footer')

        <!-- Load jQuery
        ================================================== -->
        <script type="text/javascript" src="/js/device.min.js"></script>
        <script type="text/javascript" src="/js/modernizr.custom.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="../js/main.min.js"></script>
        <script type="text/javascript" src="/js/jssocials.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
        <script src="sweetalert/dist/sweetalert.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#contactForm').validate();
                var send = @if(Session::has('send_status')) {{ Session::get('send_status') }} @else {{ 0 }}@endif;

                if(send==1)
                {
                    swal("Thanks You!!!", "We will contact you soon")
                }
            });
        </script>
        @stack('scripts')
        @yield('scripts')
    </body>
</html>
