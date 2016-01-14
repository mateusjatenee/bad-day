
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>If you're having a bad day</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
  </head>

  <body>

      @include('_partials/navbar')

    <!-- Main jumbotron for a primary marketing message or call to action -->

      @yield('content')


      <footer>
        <p>&copy; Company 2015</p>
      </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.14/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.6.0/vue-resource.js"></script>
    <script src="{{ elixir('js/app.js') }}"></script>
    @yield('scripts')
  </body>
</html>
