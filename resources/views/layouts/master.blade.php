<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <title>Laravel</title>
        </head>
        <body>
       
       
        @yield('content')


        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/vue@2.1.6/dist/vue.js"></script>
        <script type="text/javascript" src="/js/app.js"></script>
  
    </body>
</html>
