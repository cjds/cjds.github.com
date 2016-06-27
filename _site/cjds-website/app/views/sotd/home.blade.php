
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Song Of The Day | Home</title>

    <link rel="stylesheet" href="{{URL::asset('css/foundation.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/swipebox.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/sotd.css')}}" />

    <script src="{{URL::asset('js/vendor/modernizr.js')}}"/></script>

        <script src="{{URL::asset('js/vendor/jquery.js')}}"></script>
     <script src="{{URL::asset('js/jquery.arctext.js')}}"></script>
    <script src="{{URL::asset('js/foundation.min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.swipebox.js')}}"></script>

    
    <script>
      $(document).foundation();
      $(document).ready(function(){
      	setTimeout(function () {
                // Add to document using html, rather than tmpContainer

            }, 0); // 0 milliseconds
		      $('.sotd').arctext({radius:240,   animation : {
      speed : 1000,
      easing : 'ease-out'
   }});
		      $('.sotd2').arctext({radius:240, dir:-1});
		      $( '.swipebox' ).swipebox();
  		});	

    </script>
</head>
<body >
<nav class="top-bar" data-topbar >
  <ul class="title-area ">
    <li class="name">
      <h1><a href="{{URL::to('');}}" style='text-align:left' >Carl Saldanha</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li><a href="{{URL::to('about');}}">About</a></li>
      <li><a href="http://cjds.github.io/">Blog</a></li>
      </li>
    </ul>

  </section>
</nav>


<div class='row'>
<div class='large-4 small-12 medium-8 columns medium-offset-2 large-offset-4 '>
	<hr class='songtitlehr small-6 small-offset-3'>
	<p class='sotd'>SONG OF THE DAY</p>
		<p class='songtitle large-12 medium-12 small-12'>SOTD</p>
	<p class='songartist large-12 medium-12 small-12'>BY CARL SALDANHA</p>

	<p class='sotd2  '>SONG OF THE DAY</p>

	<hr class='songtitlehr small-6 small-offset-3'>
</div>	
</div>

<div class='row' style="margin-top:50px;">
<div class='large-4 small-12 medium-8 columns medium-offset-2 large-offset-4 '>
<p class='para'>
I took one song a week for the past few weeks and been converting them into series of pictures. </p>
<ul style="list-style:none;">
<li> <a href="{{URL::to('/sotd/knocking on heavens door')}}">Knockin' On Heavens Door - Bob Dylan</a></li>
<li> <a href="{{URL::to('/sotd/rains of castermere')}}">The Rains Of Castermere - A Song Of Ice And Fire </a></li>
<li> <a href="{{URL::to('/sotd/follow me')}}">Follow Me - Uncle Kracker</a></li>
<li> <a href="{{URL::to('/sotd/richard cory')}}">Richard Cory - Simon & Garfunkel</a></li>
<li> <a href="{{URL::to('/sotd/imagine')}}">Imagine - John Lennon</a></li>
<li> <a href="{{URL::to('/sotd/the boxer')}}">The Boxer - Simon & Garfunkel</a></li>
</ul>
</div>
</div>

</body>
</html>




