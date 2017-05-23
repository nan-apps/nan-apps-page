<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-AR" lang="es-AR" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Gastón R. Nan | Programador Web Independiente" lang="es-AR" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>        
        <title>Gastón R. Nan | Programador Web Independiente | - @yield('title')</title>
        
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
    <body>

            
        @yield('content')

        <script>
            window.Laravel = { csrfToken: '{{ csrf_token() }}' };
        </script>
        
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

    </body>
</html>