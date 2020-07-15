<!doctype html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="../../public/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <div id="heder">
        @include('.inc.logo')
    </div>

    <div id="content">
        @yield('content')
    </div>

    <div id="footer">

    </div>
</body>
</html>
