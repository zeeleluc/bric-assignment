<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bric Assignment - @yield('title')</title>

    <!-- Styles -->
    <style>
        html, body {
            font-family: Arial, sans-serif;
            color: #222;
        }

        .btn {
            border: 1px solid #333;
            border-radius: 3px;
            padding: 3px 4px;
            text-decoration: none;
            background-color: #ccc;
            color: #333;
            font-size: 12px;
            font-family: Arial, sans-serif;
        }

        .content {
            text-align: left;
        }

    </style>
</head>
<body>
    <a class="btn" href="{{ route('dummy.index') }}">INDEX</a>
    <hr />
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
