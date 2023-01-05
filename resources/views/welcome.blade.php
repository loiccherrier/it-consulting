<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        body {background-color: white; font-family: 'Nunito', sans-serif; color: black;}
        .dark {background-color: black; color: white; filter: sepia(100%); -webkit-filter: sepia(100%)}
    </style>
</head>

<body class="container-fluid antialiased light">
<div class="text-center" style="padding:10px;"><a href="/test"><Button type="button" class="btn btn-primary">Rechercher des films ou des séries</button></a></div>
@yield('content')
<div class="text-center"><button type="button" id="theme-btn" class="btn btn-primary">Changer de theme</button></div>

    <script>
        var toggle_btn = document.getElementById('theme-btn');
        var body = document.getElementsByTagName('body')[0];
        var dark_theme_class = 'dark';

        toggle_btn.addEventListener('click', function() {
        if (body.classList.contains(dark_theme_class)) {body.classList.remove(dark_theme_class);} else {body.classList.add(dark_theme_class);}
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>