<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">
    <head>
        @include('includes.head')
        <link rel="stylesheet" type="text/css" href="{{ asset('styles/reset.css') }}">
    </head>
    <body>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
        <div class="super_container">
            <!-- Header -->            
            <header class="header">
                @include('includes.header')
            </header>
            <!-- End Header Area -->
                <div class="content">
                    @yield('content')
                </div>            
            <!-- start footer Area -->		
            <footer class="footer">
                @include('includes.footer')
            </footer>	
            <!-- End footer Area -->
           
        </div>
        @include('includes.footerjs')
    </body>
</html>