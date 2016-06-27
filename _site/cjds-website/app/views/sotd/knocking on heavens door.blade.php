
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
	      $('.sotd').arctext({radius:240, });
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

  </section>
</nav>
<div class='row'>
<div class='large-4 small-12 medium-8 columns medium-offset-2 large-offset-4 '>
	<hr class='songtitlehr small-6 small-offset-3'>
	<p class='sotd'>SONG OF THE DAY</p>
		<p class='songtitle large-12 medium-12 small-12'>Knockin' On Heaven's Door</p>
		<p class='songartist large-12 medium-12 small-12'>BOB DYLAN</p>
	<p class='sotd2  '>SONG OF THE DAY</p>

	<hr class='songtitlehr small-6 small-offset-3'>
</div>	
</div>

<div class='line'>
		<a href="{{URL::asset('img/knocking on heavens/mama take this badge off of me.jpg')}}" class="swipebox" title="Mama take this badge off of me"> 
		<img src="{{URL::asset('img/knocking on heavens/mama take this badge off of me.jpg')}}"/>
		</a>
		<a href="{{URL::asset('img/knocking on heavens/i cant use it anymore.jpg')}}" class="swipebox" title="I can't use it anymore"> 
		<img src="{{URL::asset('img/knocking on heavens/i cant use it anymore.jpg')}}"/>
		</a>
		<a href="{{URL::asset('img/knocking on heavens/Its getting dark too dark to see.jpg')}}" class="swipebox" title="It's getting dark, too dark to see">
			<img src="{{URL::asset('img/knocking on heavens/Its getting dark too dark to see.jpg')}}"/>
		</a>
		<a href="{{URL::asset('img/knocking on heavens/feels like Im knocking on heavens door.jpg')}}" class="swipebox" title="Feels like I'm knocking on heaven's door">
			<img src="{{URL::asset('img/knocking on heavens/feels like Im knocking on heavens door.jpg')}}" />
		</a>

</div>

<div class='line'>
	<a href="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" class="swipebox" title="knock knock knocking on heavens door"> 
		<img src="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" class="swipebox" title="knock knock knocking on heavens door"> 
		<img src="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" class="swipebox" title="knock knock knocking on heavens door"> 
		<img src="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" class="swipebox" title="knock knock knocking on heavens door"> 
		<img src="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" />
	</a>
</div>

<div class='line'>
		<a href="{{URL::asset('img/knocking on heavens/mama put my guns in the ground.jpg')}}" class="swipebox" title="Mama put my guns in the ground"> 
		<img src="{{URL::asset('img/knocking on heavens/mama put my guns in the ground.jpg')}}"/>
		</a>
		<a href="{{URL::asset('img/knocking on heavens/I cant shoot them anymore.jpg')}}" class="swipebox" title="I can't shoot them anymore"> 
		<img src="{{URL::asset('img/knocking on heavens/I cant shoot them anymore.jpg')}}"/>
		</a>
		<a href="{{URL::asset('img/knocking on heavens/Its getting dark too dark to see.jpg')}}" class="swipebox" title="It's getting dark, too dark to see">
			<img src="{{URL::asset('img/knocking on heavens/Its getting dark too dark to see.jpg')}}"/>
		</a>
		<a href="{{URL::asset('img/knocking on heavens/the cold black cloud is coming down.jpg')}}" class="swipebox" title="The cold black cloud is coming down">
			<img src="{{URL::asset('img/knocking on heavens/the cold black cloud is coming down.jpg')}}" />
		</a>
</div>

<div class='line'>
	<a href="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" class="swipebox" title="knock knock knocking on heavens door"> 
		<img src="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" class="swipebox" title="knock knock knocking on heavens door"> 
		<img src="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" class="swipebox" title="knock knock knocking on heavens door"> 
		<img src="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" class="swipebox" title="knock knock knocking on heavens door"> 
		<img src="{{URL::asset('img/knocking on heavens/knock knock knocking on heavens door.jpg')}}" />
	</a>
</div>

</div>
</div>
</div>

    <script src="js/vendor/jquery.js"></script>
     <script src="js/jquery.arctext.js"></script>
    <script src="js/foundation.min.js"></script>
	<script src="js/jquery.swipebox.js"></script>

    
    <script>
      $(document).foundation();

      $('.sotd').arctext({radius:240});
      $('.sotd2').arctext({radius:240, dir:-1});
      $( '.swipebox' ).swipebox();

    </script>

</body>
</html>



