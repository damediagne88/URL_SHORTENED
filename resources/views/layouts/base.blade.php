<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>URLS SHORTENER</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://bootswatch.com/3/cosmo/bootstrap.min.css" rel="stylesheet">
        <link href="https://bootswatch.com/3/cosmo/bootstrap.css" rel="stylesheet">
       
       
    </head>
    <body style="background:#5DADE2;">
       
            <div class="container" style="margin-top:300px;">
                <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    @yield('content')
                </div>
                </div>
            </div>
       
    </body>
</html>