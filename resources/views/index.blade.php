<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title-block')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <style>
        textarea {
            width: 100%;
            height: 300px;
        }

        .dates {
            padding: 30px 0;
        }

        .dates > * {
            padding: 5px 0;
        }
                
        .button-delete input {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        @include('header')
        <div id="content">
            @yield('content')
        </div>
    </div>
</body>
</html>