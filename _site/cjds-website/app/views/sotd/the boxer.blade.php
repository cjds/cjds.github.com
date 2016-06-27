
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0')}}" />
    <title>Song Of The Day | The Boxer</title>

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
		<p class='songtitle large-12 medium-12 small-12'>The Boxer</p>
		<p class='songartist large-12 medium-12 small-12'>SIMON & GARFUNKEL</p>
	<p class='sotd2  '>SONG OF THE DAY</p>

	<hr class='songtitlehr small-6 small-offset-3'>

</div>	
</div>

<div class='line'>
		<a href="{{URL::asset('img/the boxer/i am just a poor boy.jpg')}}" class="swipebox" title="I am just a poor boy"> 
		<img src="{{URL::asset('img/the boxer/i am just a poor boy.jpg')}}" />
		</a>
		<a href="{{URL::asset('img/the boxer/and my stories seldom told.jpg')}}" class="swipebox" title="And my story's seldom told"> 
		<img src="{{URL::asset('img/the boxer/and my stories seldom told.jpg')}}" />
		</a>
		<a href="{{URL::asset('img/the boxer/i have squandered my resistance.jpg')}}" class="swipebox" title="I have squandered my resistance">
			<img src="{{URL::asset('img/the boxer/i have squandered my resistance.jpg')}}"/>
		</a>
		<a href="{{URL::asset('img/the boxer/for a pocketful of mumbles.jpg')}}" class="swipebox" title="For a pocketful of mumbles, such are promises">
			<img src="{{URL::asset('img/the boxer/for a pocketful of mumbles.jpg')}}" />
		</a>

</div>

<div class='line'>
	<a href="{{URL::asset('img/the boxer/all lies and jests.jpg')}}" class="swipebox" title="All lies and jests"> 
		<img src="{{URL::asset('img/the boxer/all lies and jests.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/the boxer/still a man hears what he wants to.jpg')}}" class="swipebox" title="Still a man hears what he wants to"> 
		<img src="{{URL::asset('img/the boxer/still a man hears what he wants to.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/the boxer/and disregards the rest.jpg')}}" class="swipebox" title="And disregards the rest"> 
		<img src="{{URL::asset('img/the boxer/and disregards the rest.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/the boxer/when i left my home and my family.jpg')}}" class="swipebox" title="When I left my home and my family"> 
		<img src="{{URL::asset('img/the boxer/when i left my home and my family.jpg')}}" />
	</a>
</div>

<div class='line'>
	<a href="{{URL::asset('img/the boxer/i was no more than a boy.jpg')}}" class="swipebox" title="I was no more than a boy"> 
		<img src="{{URL::asset('img/the boxer/i was no more than a boy.jpg')}}" />
	</a>
		<a href="{{URL::asset('img/the boxer/in the company of strangers.jpg')}}" class="swipebox" title="In the company of strangers"> 
		<img src="{{URL::asset('img/the boxer/in the company of strangers.jpg')}}" />
		</a>
		<a href="{{URL::asset('img/the boxer/in the quiet of the railway station running scared.jpg')}}" class="swipebox" title="In the quiet of the railway station running scared">
			<img src="{{URL::asset('img/the boxer/in the quiet of the railway station running scared.jpg')}}"/>
		</a>
		<a href="{{URL::asset('img/the boxer/laying low.jpg')}}" class="swipebox" title="Laying low, seeking out the poorer quarters, where the ragged people go">
			<img src="{{URL::asset('img/the boxer/laying low.jpg')}}"/>
		</a>

</div>

<div class='line'>
		<a href="{{URL::asset('img/the boxer/asking only workmans wages.jpg')}}" class="swipebox" title="Asking only workmans wages, I come looking for a job">
			<img src="{{URL::asset('img/the boxer/asking only workmans wages.jpg')}}" />
			</a>
	<a href="{{URL::asset('img/the boxer/but i get no offers.jpg')}}" class="swipebox" title="But I get no offers"> 
		<img src="{{URL::asset('img/the boxer/but i get no offers.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/the boxer/just a come on from the whores.jpg')}}" class="swipebox" title="Just a come on from the whores on 7th Avenue"> 
		<img src="{{URL::asset('img/the boxer/just a come on from the whores.jpg')}}" />
	</a>

	<a href="{{URL::asset('img/the boxer/there were times when i was so lonesome.jpg')}}" class="swipebox" title="I do declare there were times when I was so lonesome"> 
		<img src="{{URL::asset('img/the boxer/there were times when i was so lonesome.jpg')}}" />
	</a>
	
</div>

<div class='line'>
<a href="{{URL::asset('img/the boxer/i took some comfort there.jpg')}}" class="swipebox" title="I took some comfort there"> 
		<img src="{{URL::asset('img/the boxer/i took some comfort there.jpg')}}" />
	</a>


	<a href="{{URL::asset('img/the boxer/and wishing i was gone.jpg')}}" class="swipebox" title="And wishing I was gone"> 
		<img src="{{URL::asset('img/the boxer/and wishing i was gone.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/the boxer/going home where where the new york city.jpg')}}" class="swipebox" title="Going home where where the New York City"> 
		<img src="{{URL::asset('img/the boxer/going home where where the new york city.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/the boxer/winters arent bleeding me going home.jpg')}}" class="swipebox" title="Winters aren't bleeding me, bleeding me going home"> 
		<img src="{{URL::asset('img/the boxer/winters arent bleeding me going home.jpg')}}" />
	</a>

	
</div>

<div class='line'>
	<a href="{{URL::asset('img/the boxer/in the clearing stands a boxer.jpg')}}" class="swipebox" title="In the clearing stands a boxer"> 
		<img src="{{URL::asset('img/the boxer/in the clearing stands a boxer.jpg')}}" />
	</a>


	<a href="{{URL::asset('img/the boxer/and a fighter by his trade.jpg')}}" class="swipebox" title="And a fighter by his trade"> 
		<img src="{{URL::asset('img/the boxer/and a fighter by his trade.jpg')}}" />
	</a>
		<a href="{{URL::asset('img/the boxer/and he carries a reminder.jpg')}}" class="swipebox" title="And he carries a reminder"> 
		<img src="{{URL::asset('img/the boxer/and he carries a reminder.jpg')}}" />
	</a>

	<a href="{{URL::asset('img/the boxer/of every glove that laid him down.jpg')}}" class="swipebox" title="Of every glove that laid him down, or cut him till he cried out"> 
		<img src="{{URL::asset('img/the boxer/of every glove that laid him down.jpg')}}" />
	</a>
</div>

<div class='line'>

		<a href="{{URL::asset('img/the boxer/in his anger and his pain.jpg')}}" class="swipebox" title="in his anger and his pain">
			<img src="{{URL::asset('img/the boxer/in his anger and his pain.jpg')}}"/>
		</a>


	<a href="{{URL::asset('img/the boxer/i am leaving.jpg')}}" class="swipebox" title="I am leaving, I am leaving">
		<img src="{{URL::asset('img/the boxer/i am leaving.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/the boxer/but the fighter still remains')}}" class="swipebox" title="But the fighter still remains">
		<img src="{{URL::asset('img/the boxer/but the fighter still remains.jpg')}}" />
	</a>
			

</div>


</div>
</div>
</div>


</body>
</html>



