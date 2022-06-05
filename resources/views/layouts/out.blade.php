<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IStore {{ isset($title)? ' - '.$title : '' }}</title>
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 logo-center" style="margin-top: 45px">
                <span>IStore</span>
            </div>
        </div>
    </div>
@yield('content')
    
</body>
</html>