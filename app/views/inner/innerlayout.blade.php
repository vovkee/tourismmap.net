<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Helen Shorohova">
    <title>Tourismmap.net</title>
        <!-- Bootstrap -->
        {{ HTML::style('css/bootstrap.css'); }}
        {{ HTML::style('css/bootstrap.min.css'); }}
        {{ HTML::style('css/dashboard.css'); }}
        {{ HTML::style('css/jquery-jvectormap-2.0.2.css'); }}
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">TourismMap</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/profile">My Profile</a></li>
            <li><a href="/logout">Log out</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class=""><a href="#">Your map</a></li>
            <li class="navItems"><a href="#">News</a></li>
            <li class="navItems"><a href="/forum">Forum</a></li>
            <li class="navItems"><a href="#">Travel guides</a></li>
          </ul>
          <ul class="nav nav-sidebar">
          </ul>
        </div>
      </div>
    </div>
    @yield('content')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/jquery/jquery-jvectormap-2.0.2.min.js') }}
    {{ HTML::script('js/jquery/jquery-jvectormap-europe-mill-en.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/holder.js') }}
  </body>
</html>