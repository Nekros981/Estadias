<!DOCTYPE html>
<html>
<head>
        <div id="div_nav">
            <nav class="menu"> 
                @yield('menu')
            </nav>
        </div>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>

<header>
    <div class="header-login">
        <img src="#" />
    </div>

</header>

<section>
 @yield('contenido')
</section>

</body>
</html>
