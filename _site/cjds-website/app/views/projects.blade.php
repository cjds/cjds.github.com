@extends('layouts.master2')
@section('content')

<style type="text/css">
	@media only screen and (min-width: 40.063em) { 
	.imagesotd{
		vertical-align:middle;margin-top:24px;border-right: 1px solid #666
	}


	}

	h3{
		font-size: 1.5em;
	}

    p{
    	font-family: 'Open Sans'
    }

    .mini-font{
    	font-size: 0.7em;
    	font-family: 'Open Sans';
    }

    .mini-font a{
    	text-decoration: underline;
    }


    .project-groups{
    	padding-bottom: 20px;
    }

    .project-groups a{
    	font-family: 'Mohave',sans-serif;
    	display: block;
    	padding:4px;
    	background-color: rgba(90,138,158,0.2);
    	columns: #8aaabe;
    }

    .project-groups a:hover{
    	color:#fff;
    	background:#5a8a9e;
   	}

    .project-groups-selected a{
    	color:#fff;
    	background:#5a8a9e;
    }

	.projects {display: none;}

	.name{
		color:#555 !important;
	}

    .projects:target{
    	z-index: 1;
    	display: block;
    }
</style>

<div class='small-12 medium-6  medium-offset-3 large-6  large-offset-3 box columns ' style="margin-top:50px;text-align:center">

	<div class='row project-groups' >
		<div class='small-3 columns robotics' >
			<a href='#robotics' > Robotics</a>
		</div>
		<div class='small-3 columns ai'>
			<a href='#ai' > AI </a>
		</div>
		<div class='small-3 columns design'>
			<a href='#design' > Design</a>
		</div>
		<div class='small-3 columns funstuff'>
			<a href='#funstuff' > Fun Stuff</a>
		</div>
	</div>	
	<div class='projects' id='robotics'>
		<div class='row'>
			<div class='small-12 medium-6 columns imagesotd'>
				<img src='{{URL::asset('robot.png')}}'  />
			</div>
			<div class='small-12 medium-6 columns'>
				<h3 class='name'> Robot Web Crowdsourcing</h3>
				<div class='para'>
				<p>Worked on Robot Web Tools to make a series of interfaces which train robots with crowd users</p>
				<p><b>RAIL Lab Project</b></p>
				<span class='mini-font' ><a href='https://github.com/GT-RAIL'>Github Projects</a>&nbsp;|&nbsp;<a href='http://robotwebtools.org/'>Website</a></span>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='small-12 medium-6 columns imagesotd'>
				<img src='{{URL::asset('ga%20soccer.jpg')}}'  />
			</div>
			<div class='small-12 medium-6 columns'>
				<h3 class='name'>Genetic Algorithm Soccer </h3>
				<div class='para'>
				<p>Trained a group of simulated agents to play 3d soccer. Each agent has a local view of the environment and evolves a policy over time</p>
				<p><b>Multi-Robot Systems Project</b></p>
				<span class='mini-font' > <a href='https://github.com/cjds/GeneticSoccerSim'>Github</a>&nbsp;|&nbsp;<a href='#'>Read More</a></span>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='small-12 medium-6 columns imagesotd'>
				<img src='{{URL::asset('robot%20comm.png')}}'  />
			</div>
			<div class='small-12 medium-6 columns'>
				<h3 class='name'>Robots and Cooperation</h3>
				<div class='para'>
				<p>Developed an algorithm between two robots trying to work together on a task</p>
				<p>Robotics Class Project</p>
				</div>
			</div>
		</div>
	</div>
	<div class='projects' id='design'>
		<div class='row'>
			<div class='small-12 medium-6 columns imagesotd'>
				<img src='{{URL::asset('chiglass.png')}}'  />
			</div>
			<div class='small-12 medium-6 columns'>
				<h3 class='name'>Learning with Google Glass</h3>
				<div class='para'>
				<p> Created a Google Glass Application that enables people to create technical training videos with less effort. </p>
				<p><b>Project at Siemens Research</b></p>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='small-12 medium-6 columns imagesotd'>
				<img src='{{URL::asset('buzzport.png')}}'  />
			</div>
			<div class='small-12 medium-6 columns'>
				<h3 class='name'>Buzzport Redesign</h3>
				<div class='para'>
				<p> Worked with Office of Technology to redesign Georgia Tech's registration system</p>
				<p><b>Project at Georgia Tech</b></p>
				<span class='mini-font' style='text-decoration:underline'></span>
				</div>
			</div>
		</div>
	</div>
	<div class='projects' id='ai'>
		<div class='row'>
			<div class='small-12 medium-6 columns imagesotd'>
				<img src='{{URL::asset('mr mario.png')}}'  />
			</div>
			<div class='small-12 medium-6 columns'>
				<h3 class='name'>Mixed Reality Mario</h3>
				<div class='para'>
				<p>A mixed reality game that uses procedural content generation to make game elements</p>
				<p><b>Entertainment Intelligence Lab Project</b></p>
				<span class='mini-font' style='text-decoration:underline'><a href='https://medium.com/@mark_riedl/augmented-reality-games-need-artificial-intelligence-b8f57ec4e5a9#.8zbe541sq'>Read More</a></span>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='small-12 medium-6 columns imagesotd'>
				<img src='{{URL::asset('healthy-meal.png')}}'  />
			</div>
			<div class='small-12 medium-6 columns'>
				<h3 class='name'>Deep Visual Questions</h3>
				<div class='para'>
				<p>I use deep learning to create a series of questions about the images from the VQA dataset</p>
				<p><b> Advanced Computer Vision Project</b></p>
				<span class='mini-font'><a href='https://github.com/cjds/WhatIsTheMan/tree/master'>Github</a>&nbsp;|&nbsp;<a href='https://cjds.github.io/image recognition/machine learning/2016/05/02/Visual-Question-Generation/'>Read More</a></span>
				</div>
			</div>
		</div>
		<div class='row'>
			<div class='small-12 medium-6 columns imagesotd'>
				<img src='{{URL::asset('neural network food.png')}}'  />
			</div>
			<div class='small-12 medium-6 columns'>
				<h3 class='name'>Neural Network Food Recommendater</h3>
				<div class='para'>
				<p>A neural network in an app that recommends food for you based on how certain types of food taste</p>
				<p><b> Human Computer Interaction Project</b></p>
				<span class='mini-font'><a href='#'>Read More</a></span>
				</div>
			</div>
		</div>
	</div>
	<div class='projects' id='funstuff'>
		<div class='row'>
			<div class='small-12 medium-6 columns imagesotd'>
				<img src='{{URL::asset('sotd.jpg')}}'  />
			</div>
			<div class='small-12 medium-6 columns'>
				<h3 class='name'>SOTD</h3>
				<div class='para'>
				<p>SOTD is a design project. I took the lyrics of one song each week and make it a series of pictures. Its an experiment both in designing and responsive web design.</p>
				<p><b>Role:</b> Creator</p>
				<span class='mini-font'><a href='http://www.carlsaldanha.com/sotd/'>Website</a></span>
				</div>
			</div>
		</div>
		<div class='row '  id='ten'>
		<div class='small-12 medium-6 columns imagesotd'>
			<img src='{{URL::asset('ten.jpg')}}' />
		</div>
		<div class='small-12 medium-6 columns'>
			<h2 class='name'> Ten </h2>
			<div class='para'>
				<p>10 is an app on android built by me. It's a simple minimalistic game that tests players reflexes.</p>
				<p><b>Role:</b> Programmer and Designer</p>
				<span class='mini-font'><a href='https://play.google.com/store/apps/details?id=com.cjds.dactyl&hl=en'>Play Store</a></span>
			</div>
		</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		function changeSelectedBackground() {
			var hash = "."+window.location.hash.substring(1);
			$('.project-groups').children().removeClass('project-groups-selected')
			$('.project-groups').children(hash).addClass('project-groups-selected')
			console.log($('.project-groups').children(hash))

		}
		$(window).bind('hashchange', changeSelectedBackground);
		changeSelectedBackground();
	})
</script>
@stop