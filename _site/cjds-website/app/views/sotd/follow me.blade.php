
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
		<p class='songtitle large-12 medium-12 small-12'>Follow Me</p>
		<p class='songartist large-12 medium-12 small-12'>UNCLE KRACKER</p>

	<p class='sotd2  '>SONG OF THE DAY</p>

	<hr class='songtitlehr small-6 small-offset-3'>
</div>	
</div>

<div class='line'>
		<a href="{{URL::asset('img/follow me/you dont know how you met me.jpg')}}" class="swipebox" title="You don't know how you met me. You don't know why"> 
		<img src="{{URL::asset('img/follow me/you dont know how you met me.jpg')}}" />
		</a>
		<a href="{{URL::asset('img/follow me/you cant turn around and say goodbye.jpg')}}" class="swipebox" title="You can't turn around and say goodbye"> 
		<img src="{{URL::asset('img/follow me/you cant turn around and say goodbye.jpg')}}" />
		</a>
		<a href="{{URL::asset('img/follow me/all you know is when im with you.jpg')}}" class="swipebox" title="All you know is when I'm with you">
			<img src="{{URL::asset('img/follow me/all you know is when im with you.jpg')}}"/>
		</a>
		<a href="{{URL::asset('img/follow me/and swim through your veins like a fish in the sea.jpg')}}" class="swipebox" title="And swim through your veins like a fish in the sea">
			<img src="{{URL::asset('img/follow me/and swim through your veins like a fish in the sea.jpg')}}" />
		</a>

</div>

<div class='line'>
	<a href="{{URL::asset('img/follow me/im singing.jpg')}}" class="swipebox" title="I'm singing"> 
		<img src="{{URL::asset('img/follow me/im singing.jpg')}}" />
	</a>
<a href="{{URL::asset('img/follow me/follow me.jpg')}}" class="swipebox" title="Follow me, everything is alright"> 
		<img src="{{URL::asset('img//follow me/follow me.jpg"')}}'  />
		</a>
	<a href="{{URL::asset('img/follow me/ill be the one to tuck you in at night.jpg')}}" class="swipebox" title="I'll be the one to tuck you in at night"> 
		<img src="{{URL::asset('img/follow me/ill be the one to tuck you in at night.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/follow me/and if you want to leave.jpg')}}" class="swipebox" title="And if you want to leave"> 
		<img src="{{URL::asset('img/follow me/and if you want to leave.jpg')}}" />
	</a>
</div>
<div class='line'>
	<a href="{{URL::asset('img/follow me/i can guarantee.jpg')}}" class="swipebox" title="I can guarantee"> 
		<img src="{{URL::asset('img/follow me/i can guarantee.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/follow me/you wont find nobody else like me.jpg')}}" class="swipebox" title="You wont find nobody else like me"> 
		<img src="{{URL::asset('img//follow me/you wont find nobody else like me.jpg')}}"  />
	</a>
	<a href="{{URL::asset('img/follow me/im not worried about the ring you wear.jpg')}}" class="swipebox" title="I'm not worried about the ring you wear"> 
	<img src="{{URL::asset('img/follow me/im not worried about the ring you wear.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/follow me/cause as long as no one knows then nobody can care.jpg')}}" class="swipebox" title="Cause as long as no one knows then nobody can care"> 
		<img src="{{URL::asset('img/follow me/cause as long as no one knows then nobody can care.jpg')}}" />
	</a>
</div>
<div class='line'>	
	<a href="{{URL::asset('img/follow me/youre feeling guilty and im well aware.jpg')}}" class="swipebox" title="You're feeling guilty and I'm well aware"> 
		<img src="{{URL::asset('img/follow me/youre feeling guilty and im well aware.jpg')}}" />
	</a>

	<a href="{{URL::asset('img/follow me/but you dont look ashamed and baby im not scared.jpg')}}" class="swipebox" title="But you dont look ashamed and baby I'm not scared"> 
	<img src="{{URL::asset('img/follow me/but you dont look ashamed and baby im not scared.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/follow me/im singing.jpg')}}" class="swipebox" title="I'm singing"> 
		<img src="{{URL::asset('img/follow me/im singing.jpg')}}" />
	</a>
<a href="{{URL::asset('img/follow me/follow me.jpg')}}" class="swipebox" title="Follow me, everything is alright"> 
		<img src="{{URL::asset('img//follow me/follow me.jpg')}}"  />
		</a>
</div>

<div class='line'>	
</a>
	<a href="{{URL::asset('img/follow me/ill be the one to tuck you in at night.jpg')}}" class="swipebox" title="I'll be the one to tuck you in at night"> 
		<img src="{{URL::asset('img/follow me/ill be the one to tuck you in at night.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/follow me/and if you want to leave.jpg')}}" class="swipebox" title="And if you want to leave"> 
		<img src="{{URL::asset('img/follow me/and if you want to leave.jpg')}}" />
	</a>
		<a href="{{URL::asset('img/follow me/i can guarantee.jpg')}}" class="swipebox" title="I can guarantee"> 
		<img src="{{URL::asset('img/follow me/i can guarantee.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/follow me/you wont find nobody else like me.jpg')}}" class="swipebox" title="You wont find nobody else like me"> 
		<img src="{{URL::asset('img//follow me/you wont find nobody else like me.jpg')}}"  />
	</a>
</div>


<div class=' line' >
	<a href="{{URL::asset('img/follow me/wont give you money i cant give you the sky.jpg')}}" class="swipebox" title="Won't give you money, I can't give you the sky"> 
		<img src="{{URL::asset('img//follow me/wont give you money i cant give you the sky.jpg')}}"  />
	</a>
	<a href="{{URL::asset('img/follow me/youre better off if dont ask why.jpg')}}" class="swipebox" title="You're better off if you don't ask why"> 
		<img src="{{URL::asset('img/follow me/youre better off if dont ask why.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/follow me/im not the reason that you go astray.jpg')}}" class="swipebox" title="I'm not the reason that you go astray"> 
		<img src="{{URL::asset('img/follow me/im not the reason that you go astray.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/follow me/well be alright if you dont ask me to stay.jpg')}}" class="swipebox" title="We'll be alright if you dont ask me to stay"> 
		<img src="{{URL::asset('img//follow me/well be alright if you dont ask me to stay.jpg')}}"  />
	</a>
</div>

<div class='line'>
	<a href="{{URL::asset('img/follow me/im singing.jpg')}}" class="swipebox" title="I'm singing"> 
		<img src="{{URL::asset('img/follow me/im singing.jpg')}}" />
	</a>
<a href="{{URL::asset('img/follow me/follow me.jpg')}}" class="swipebox" title="Follow me, everything is alright"> 
		<img src="{{URL::asset('img//follow me/follow me.jpg')}}"  />
		</a>
	<a href="{{URL::asset('img/follow me/ill be the one to tuck you in at night.jpg')}}" class="swipebox" title="I'll be the one to tuck you in at night"> 
		<img src="{{URL::asset('img/follow me/ill be the one to tuck you in at night.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/follow me/and if you want to leave.jpg')}}" class="swipebox" title="And if you want to leave"> 
		<img src="{{URL::asset('img/follow me/and if you want to leave.jpg')}}" />
	</a>
</div>

<div class='line' >
		<a href="{{URL::asset('img/follow me/i can guarantee.jpg')}}" class="swipebox" title="I can guarantee"> 
		<img src="{{URL::asset('img/follow me/i can guarantee.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/follow me/you wont find nobody else like me.jpg')}}" class="swipebox" title="You wont find nobody else like me"> 
		<img src="{{URL::asset('img//follow me/you wont find nobody else like me.jpg')}}"  />
	</a>
	<a href="{{URL::asset('img/follow me/you dont know how you met me.jpg')}}" class="swipebox" title="You don't know how you met me. You don't know why"> 
	<img src="{{URL::asset('img/follow me/you dont know how you met me.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/follow me/you cant turn around and say goodbye.jpg')}}" class="swipebox" title="You can't turn around and say goodbye"> 
	<img src="{{URL::asset('img/follow me/you cant turn around and say goodbye.jpg')}}" />
	</a>
</div>

<div class='line' >
		<a href="{{URL::asset('img/follow me/all you know is when im with you.jpg')}}" class="swipebox" title="All you know is when I'm with you">
			<img src="{{URL::asset('img/follow me/all you know is when im with you.jpg')}}"/>
		</a>
		<a href="{{URL::asset('img/follow me/and swim through your veins like a fish in the sea.jpg')}}" class="swipebox" title="And swim through your veins like a fish in the sea">
			<img src="{{URL::asset('img/follow me/and swim through your veins like a fish in the sea.jpg')}}" />
		</a>
	<a href="{{URL::asset('img/follow me/im singing.jpg')}}" class="swipebox" title="I'm singing"> 
		<img src="{{URL::asset('img/follow me/im singing.jpg')}}" />
	</a>
<a href="{{URL::asset('img/follow me/follow me.jpg')}}" class="swipebox" title="Follow me, everything is alright"> 
		<img src="{{URL::asset('img//follow me/follow me.jpg')}}"  />
		</a>
</div>

<div class='line'>

	<a href="{{URL::asset('img/follow me/ill be the one to tuck you in at night.jpg')}}" class="swipebox" title="I'll be the one to tuck you in at night"> 
		<img src="{{URL::asset('img/follow me/ill be the one to tuck you in at night.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/follow me/and if you want to leave.jpg')}}" class="swipebox" title="And if you want to leave"> 
		<img src="{{URL::asset('img/follow me/and if you want to leave.jpg')}}" />
		<a href="{{URL::asset('img/follow me/i can guarantee.jpg')}}" class="swipebox" title="I can guarantee"> 
		<img src="{{URL::asset('img/follow me/i can guarantee.jpg')}}" />
	</a>
	<a href="{{URL::asset('img/follow me/you wont find nobody else like me.jpg')}}" class="swipebox" title="You wont find nobody else like me"> 
		<img src="{{URL::asset('img//follow me/you wont find nobody else like me.jpg')}}"  />

</div>
</div>
</div>
</div>


</body>
</html>



