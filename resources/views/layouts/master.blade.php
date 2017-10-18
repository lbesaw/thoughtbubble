<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <title>{{ $title }}</title>
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106014814-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments)};
          gtag('js', new Date());

          gtag('config', 'UA-106014814-2');
        </script>
    </head>
        <body>
        <div id="root">
            <navbar>
                <template slot="loginlogout">
                @if(Auth::check())
                    <a class="navbar-item" href="/logout">logout</a>
                @else
                    <a class="navbar-item" href="/login">login</a>
                @endif
                </template>
                <template slot="register">
                    @if(Auth::check())
                       <a class="navbar-item" href="/home"> {{ Auth::user()->name }} </a>
                    @else
                        <a class="navbar-item" href="/register">register</a>
                    @endif
                </template>
            </navbar>
       
        @yield('content')
        <bottomnav></bottomnav>
        </div>

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/vue@2.1.6/dist/vue.js"></script>
        <script type="text/javascript" src="/js/app.js"></script>
  
    </body>
</html>
