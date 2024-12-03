
<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>main screen</title>
      <link rel="stylesheet" href=" {{asset('css/main.css')}}">
      <script type="text/javascript">
            function clickedButton()
      {

          window.location = 'login'

      }
       </script>
    </head>
    <body>
    <header>
        <h2 class="logo">Dornika</h2>
        <nav class="navigation">
            <a href="main1">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="btnlogin-popup" onClick="clickedButton()">Login</button>
        </nav>
    </header>
    </body>
</html>