
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0')}}" />
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
		<p class='songtitle large-12 medium-12 small-12'>The Rains Of Castermere</p>
		<p class='songartist large-12 medium-12 small-12'>GAME OF THRONES</p>
	<p class='sotd2  '>SONG OF THE DAY</p>

	<hr class='songtitlehr small-6 small-offset-3'>
</div>	
</div>

<div class='line' style="">
	<a href="{{URL::asset('img/rains of castermere/and who are you.jpg')}}" class="swipebox" title="And who are you"> 
		<img src="{{URL::asset('smallimg/rains of castermere/and who are you.jpg')}}"/>
	</a>
	<a href="{{URL::asset('img/rains of castermere/the proud lord said.jpg')}}" class="swipebox" title="The proud lord said"> 
		<img src="{{URL::asset('smallimg/rains of castermere/the proud lord said.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/rains of castermere/that i must bow so low.jpg')}}" class="swipebox" title="That I must bow so low"> 		
		<img src="{{URL::asset('smallimg/rains of castermere/that i must bow so low.jpg')}}"/>
	</a>
	<a href="{{URL::asset('img/rains of castermere/only a cat of a different coat.jpg')}}" class="swipebox" title="Only a cat of a different coat"> 
	<img src="{{URL::asset('smallimg/rains of castermere/only a cat of a different coat.jpg')}}" />
	</a>

</div>

<div class='line' style="">
	<a href="{{URL::asset('img/rains of castermere/thats all the truth I know.jpg')}}" class="swipebox" title="That's all the truth I know"> 
	<img src="{{URL::asset('smallimg/rains of castermere/thats all the truth I know.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/rains of castermere/a coat of gold a coat of red.jpg')}}" class="swipebox" title="A coat of gold a coat of red"> 
	<img src="{{URL::asset('smallimg/rains of castermere/a coat of gold a coat of red.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/rains of castermere/a lion still has claws.jpg')}}" class="swipebox" title="A lion still has claws"> 
	<img src="{{URL::asset('smallimg/rains of castermere/a lion still has claws.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/rains of castermere/and mine are long and sharp my lord.jpg')}}" class="swipebox" title="And mine are long and sharp my lord"> 
	<img src="{{URL::asset('smallimg/rains of castermere/and mine are long and sharp my lord.jpg')}}" />
	</a>
</div>

<div class='line' style="">
	<a href="{{URL::asset('img/rains of castermere/as long and sharp as yours.jpg')}}" class="swipebox" title="as long and sharp as yours"> 
	<img src="{{URL::asset('smallimg/rains of castermere/as long and sharp as yours.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/rains of castermere/and so he spoke.jpg')}}" class="swipebox" title="And so he spoke, and so he spoke"> 
	<img src="{{URL::asset('img/rains of castermere/and so he spoke.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/rains of castermere/that lord of castermere.jpg')}}" class="swipebox" title="That Lord of Castermere"> 
	<img src="{{URL::asset('smallimg/rains of castermere/that lord of castermere.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/rains of castermere/but now the rains weep over his hall.jpg')}}" class="swipebox" title="But now the rains weep over his hall"> 
	<img src="{{URL::asset('smallimg/rains of castermere/but now the rains weep over his hall.jpg')}}"/>
	</a>
</div>

<div class='line' style="">
	<a href="{{URL::asset('img/rains of castermere/with no one there to hear.jpg')}}" class="swipebox" title="With no one there to hear"> 
	<img src="{{URL::asset('img/rains of castermere/with no one there to hear.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/rains of castermere/yes now the rains weep over his halls.jpg')}}" class="swipebox" title="Yes, now the rains weep over his halls"> 
	<img src="{{URL::asset('smallimg/rains of castermere/yes now the rains weep over his halls.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/rains of castermere/with not a soul to hear.jpg')}}" class="swipebox" title="With not a soul to hear"> 
	<img src="{{URL::asset('smallimg/rains of castermere/with not a soul to hear.jpg')}}" />
	</a>
</div>

    </div>    
  </body>
</html>
