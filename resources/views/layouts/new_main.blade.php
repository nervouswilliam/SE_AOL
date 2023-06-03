<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stocking | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
    crossorigin="anonymous">
    <link rel = "stylesheet" href = "css/new_main.css">
  </head>
  <body>
    <nav>
        <a href="WelcomeGuest.html"><img src="/img/stocking-logo.png"></a>
        <div class="navbar">
            <ul>
                <li><a href="">Login</a></li>
                <li><a href="">Register</a></li>
            </ul>
        </div>
    </nav>
    @yield('contents')
    <div class="footer">
        <p>&copy;StocKing</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  </body>
</html>
