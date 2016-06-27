<!DOCTYPE html>
<html ng-app>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carl Saldanha | Designer & Developer</title>

    <link rel="stylesheet" href="{{URL::asset('css/foundation.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/main.css', false);}}" />
    <script src="{{URL::asset('js/vendor/modernizr.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src='http://cdn.foundation5.zurb.com/foundation.js'></script>
	<style>

</style>
</head>
<body >
<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="{{URL::to('');}}" style='text-align:left' >Carl Saldanha</a></h1>

    </li>

    <li class="toggle-topbar"><a href="#">Menu</a></li>

     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li><a href="{{URL::to('projects#robotics');}}">Projects</a></li>
      <li><a href="{{URL::to('resume');}}">Résumé</a></li>
      <li><a href="http://cjds.github.io/">Blog</a></li>

    </ul>

  </section>
</nav>

@yield('content')
</body>

    <script>
      $(document).foundation();
    </script>
</html>




