@extends('layouts.master2')
@section('content')
<div class='medium-6  medium-offset-3 large-6  large-offset-3 box columns' style="margin-top:50px;" ng-controller="mainController">
	<div class='row '>
		<div class='myname columns large-12' id='myname'>About Me</div>
		<hr />
	</div>
	<div class='row'>
		<p class="para">
		Hi, I'm pursuing a MS in Computer Science degree
		 at Georgia Institute of Technology specializing in Robotics and Perception.
		</p>	
		<p class="para">
		I'm interested in:
		</p>
		<ul class="para">
		<li>Social and Web Robotics, and Robot Collaboration</li>
		<li>Artificial Intelligence, and Machine Learning</li>
		<li>Augmented and Mixed Reality</li>
		</ul>		

	</div>
	<div class='row'>
	<div class="columns small-6 medium-4 small-centered">
		<button class="centered even-3"><a href='mailto:csaldanha3@gatech.edu'> Contact me </a></button>
	</div>
	
	</div>

</div>

    @stop