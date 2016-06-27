
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0')}}" />
    <title>Song Of The Day | Follow Me</title>

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
		      $('.sotd').arctext({radius:240});
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
		<p class='songtitle large-12 medium-12 small-12'>Imagine</p>
		<p class='songartist large-12 medium-12 small-12'>JOHN LENNON</p>
	<p class='sotd2  '>SONG OF THE DAY</p>

	<hr class='songtitlehr small-6 small-offset-3'>

</div>	
</div>

<div class='line'>
		<a href="{{URL::asset('img/imagine/imagine theres no heaven.jpg')}}" class="swipebox" title="imagine theres no heaven"> 
		<img src="{{URL::asset('img/imagine/imagine theres no heaven.jpg')}}" />
		</a>
		<a href="{{URL::asset('img/imagine/its easy if you try.jpg')}}" class="swipebox" title="Its easy if you try"> 
		<img src="{{URL::asset('img/imagine/its easy if you try.jpg')}}" />
		</a>
		<a href="{{URL::asset('img/imagine/no hell below us.jpg')}}" class="swipebox" title="No hell below us">
			<img src="{{URL::asset('img/imagine/no hell below us.jpg')}}"/>
		</a>
		<a href="{{URL::asset('img/imagine/above us only sky.jpg')}}" class="swipebox" title="Above us only sky">
			<img src="{{URL::asset('img/imagine/above us only sky.jpg')}}" />
		</a>

</div>

<div class='line'>
	<a href="{{URL::asset('img/imagine/imagine all the people.jpg')}}" class="swipebox" title="Imagine all the people"> 
		<img src="{{URL::asset('img/imagine/imagine all the people.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/imagine/living for today.jpg')}}" class="swipebox" title="Living for today"> 
		<img src="{{URL::asset('img/imagine/living for today.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/imagine/imagine theres no countries.jpg')}}" class="swipebox" title="Imagine theres no countries"> 
		<img src="{{URL::asset('img/imagine/imagine theres no countries.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/imagine/nothing to kill or die for.jpg')}}" class="swipebox" title="Nothing to kill or die for"> 
		<img src="{{URL::asset('img/imagine/nothing to kill or die for.jpg')}}" />
	</a>
</div>

<div class='line'>
		<a href="{{URL::asset('img/imagine/and no religion too.jpg')}}" class="swipebox" title="And no religion too"> 
		<img src="{{URL::asset('img/imagine/And no religion too.jpg')}}" />
		</a>
		<a href="{{URL::asset('img/imagine/imagine all the people.jpg')}}" class="swipebox" title="Imagine all the people"> 
		<img src="{{URL::asset('img/imagine/imagine all the people.jpg')}}" />
		</a>
		<a href="{{URL::asset('img/imagine/living life in peace.jpg')}}" class="swipebox" title="Living life in peace">
			<img src="{{URL::asset('img/imagine/living life in peace.jpg')}}"/>
		</a>
		<a href="{{URL::asset('img/imagine/you may say im a dreamer.jpg')}}" class="swipebox" title="You may say I'm a dreamer">
			<img src="{{URL::asset('img/imagine/you may say im a dreamer.jpg')}}"/>
		</a>

</div>

<div class='line'>
		<a href="{{URL::asset('img/imagine/but im not the only one.jpg')}}" class="swipebox" title="But I'm not the only one">
			<img src="{{URL::asset('img/imagine/but im not the only one.jpg')}}" />
			</a>
	<a href="{{URL::asset('img/imagine/i hope someday you will join us.jpg')}}" class="swipebox" title="I hope someday you will join us"> 
		<img src="{{URL::asset('img/imagine/i hope someday you will join us.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/imagine/and the world will be as one.jpg')}}" class="swipebox" title="And the world will be as one"> 
		<img src="{{URL::asset('img/imagine/and the world will be as one.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/imagine/imagine no possessions.jpg')}}" class="swipebox" title="Imagine no possessions"> 
		<img src="{{URL::asset('img/imagine/imagine no possessions.jpg')}}" />
	</a>
	
	
</div>

<div class='line'>
	<a href="{{URL::asset('img/imagine/i wonder if you can.jpg')}}" class="swipebox" title="I wonder if you can"> 
		<img src="{{URL::asset('img/imagine/i wonder if you can.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/imagine/no need for greed or hunger.jpg')}}" class="swipebox" title="No need for greed or hunger"> 
		<img src="{{URL::asset('img/imagine/no need for greed or hunger.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/imagine/a brotherhood of man.jpg')}}" class="swipebox" title="A brotherhood of man"> 
		<img src="{{URL::asset('img/imagine/a brotherhood of man.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/imagine/imagine all the people.jpg')}}" class="swipebox" title="Imagine all the people"> 
		<img src="{{URL::asset('img/imagine/imagine all the people.jpg')}}" />
	</a>
</div>

<div class='line'>
	<a href="{{URL::asset('img/imagine/sharing all the world.jpg')}}" class="swipebox" title="Sharing all the world"> 
		<img src="{{URL::asset('img/imagine/sharing all the world.jpg')}}" />
	</a>

		<a href="{{URL::asset('img/imagine/you may say im a dreamer.jpg')}}" class="swipebox" title="You may say I'm a dreamer">
			<img src="{{URL::asset('img/imagine/you may say im a dreamer.jpg')}}"/>
		</a>
		<a href="{{URL::asset('img/imagine/but im not the only one.jpg')}}" class="swipebox" title="But I'm not the only one">
			<img src="{{URL::asset('img/imagine/but im not the only one.jpg')}}" />
			</a>
				<a href="{{URL::asset('img/imagine/i hope someday you will join us.jpg')}}" class="swipebox" title="I hope someday you will join us"> 
		<img src="{{URL::asset('img/imagine/i hope someday you will join us.jpg')}}" />
	</a>
</div>

<div class='line'>
	<a href="{{URL::asset('img/imagine/and the world will be as one.jpg')}}" class="swipebox" title="And the world will be as one"> 
		<img src="{{URL::asset('img/imagine/and the world will be as one.jpg')}}" />
	</a>
</div>

<div class='line'>
	<a href="{{URL::asset('img/imagine/lennon.jpg')}}" class="swipebox" title="Peace"> 
		<img src="{{URL::asset('img/imagine/lennon.jpg')}}" />
	</a>
</div>
</div>
<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/21613448&amp;color=5b5b5b&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

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



