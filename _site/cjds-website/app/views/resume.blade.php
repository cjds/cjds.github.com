@extends('layouts.master2')
@section('content')
<style>
	.para strong{
		color: #b22;
		text-align: justify;
	}

	.para{
		margin-top: 30px;
		margin-bottom: 0px;
		line-height: 1.6em;
	}


	.resume{
		margin-top: 50px;
	}

	ul.resumelist{
		list-style: none;
	}

	ul.resumelist li{
		font-weight: 900;
		display: inline-block;
	}

	ul.resumeprojects li{
		font-weight: 300;
	}

	ul.resumeprojects li.resumeheading{
		font-weight: 900;
		font-size: 1.1em
	}

	p{
		margin-bottom:14px;
		margin-left: 16px;
	}

	.tag{
		font-size: 0.8em;
		border: 2px solid black;
		padding: 1rem;
		padding-top: 0.2rem;
		padding-bottom: 0.2rem;
	}
</style>
<div class='small-12 medium-4  medium-offset-4 large-6 large-offset-3 box columns resume'>

<div class='row'>
<h1 style="display:inline">Résumé</h1> <button class='right'><a href='https://www.dropbox.com/s/yek9orag9vcb9f1/Resume.pdf?dl=1'>Download a PDF</a></button>
<hr />
</div>



<div class='row'>
<h3> Education </h3>
<ul class='resumelist'>
<li>MS, Computer Science, Georgia Institute of Technology </li><span class='right hide-for-small-only' style='line-height:1.6'> 2014 - Dec 2016 (expected)</span>
<p><b>Relevant Courses:</b> Multi Robot Systems, Advanced Computer Vision, Prototyping Interactive Systems, Human Computer Interaction, Computability and Algorithms

</p>
<li>Bachelor, Computer Science, University Of Mumbai</li><span class='right hide-for-small-only' style='line-height:1.6'> 2010 - 2014</span>
<p><b>Relevant Courses: </b>Robotics, Artificial Intelligence, Machine Learning, Computer Graphics, Computer Architecture, Algorithmic Analysis</p>
</ul>
<hr />

</div>



<div class='row'>
	<h3> Work Experience </h3>
	<ul class="resumelist">
		<li>Georgia Tech Robot Autonomy and Interactive Learning Lab</li><span class='right hide-for-small-only'>Jan 2016 - Present</span>
		<p>Working with Prof. Sonia Chernova on Robot Web Tools and the Robot Management System. Created a hierarchical task network generator in ROS that allows robots to adjust their plans on the fly based on concepts from ConceptNet</p>
		<li>Georgia Tech Networking, Computing and Mobility Lab </li><span class='right hide-for-small-only'>Jan 2015 - Present</span>
		<p>Working under Dr. Russ Clark and Dr. Matt Sanders to create a platform that allows student developers to access secure Georgia Tech data. Revamped the architecture and created methods for secure OAuth access.</p>
		<li>Siemens Research</li><span class='right'>May 2015 - Dec 2015</span>
		<p>Prototyped an augmented reality telepresence system for engineers to inspect wind turbines and rotors. Implemented gesture based interaction with leap motion. Developed computer vision algorithms to annotate the system components</p>
	</ul>
	<hr />
</div>


<div class='row'>
	<h3> Skills </h3>
	<ul class="resumelist">
	<li>Competencies:</li>
	<p>Robotics, Artificial Intelligence, Augmented Reality, Computer Vision, Web Development, RESTful API Design</p>
	<li>Programming Languages: </li>
	<p>Java (Proficient), Javascript (Proficient), Python (Proficient), C++ (Working Knowledge), PHP (Working Knowledge), SQL (Proficient), NoSQL (Working Knowledge), HTML5 & CSS3 (Proficient)</p>
	<li>Technologies:</li>
	<p>ROS, Torch, Theano, NLTK, Android Development, Node.JS, Angular.JS, Web Sockets</p>

	</ul>
	<hr />
</div>


<div class='row'>
<h3> Projects </h3>
<ul class="resumelist resumeprojects">
	<li class='resumeheading'>Robotics:</li><p></p>
	<li>Crowdsourcing Learning from Demonstration (Project under Prof. Chernova) </li><span class='right hide-for-small-only'>Apr 2016 - Present</span>
	<p>Developed a series of interfaces that allows crowd users use to create a demonstration. We then learn from these demonstrations to train the robot to complete a task</p>
	<li>Genetic Algorithm Soccer Playing Agents (Multi Robot Systems Project)</li><span class='right hide-for-small-only'>Jan 2015 - Apr 2015</span>
	<p>Simulated a group of multi agent robots that develop a strategy for playing soccer through  a genetic algorithm. </p>
	<li>Teaching Robots Cooperative Tasks (Project under Prof. Srinivasan)</li><span class='right hide-for-small-only'>Jan 2014 - Jun 2014</span>
	<p>Designed and implemented an algorithm for multi-robot communication. Used genetic algorithms that allow robots to guess what sounds mean based on the action the other robots are taking</p>
	<li class='resumeheading'>Machine Learning:</li><p></p>
	<li>AR Mario (Project under Prof. Mark Riedl):</li><span class='right hide-for-small-only'>Sep 2015 - Present</span>
	<p>	Developing an AR game in that uses AI and computer vision to generate the content. Created the AI for inferring scene locations from the point cloud and for potential game elements. </p>
	<li>Deep Visual Questions (Advanced Computer Vision Project):</li><span class='right hide-for-small-only'>Jan 2016 - Apr 2016</span>
	<p>	Created an LSTM (Long short term memory network), that is able to take in the content of an image and generate a series of natural language questions and answer pairs. This work is aimed at creating algorithms that can better answer questions about image.</p>
	<li>Learning Food Taste with Neural Nets (Winner Georgia Tech Innovation Contest):</li><span class='right hide-for-small-only'>Aug 2014 - Dec 2014</span>
	<p>	Measuring how much people liked the taste of particular dishes, and how they tasted that allowed us to model which dishes you would like. Designed and implemented the networks and implemented the Android app. </p>
	<li>Poetry Generation with Genetic Algorithms(BE Thesis):</li><span class='right hide-for-small-only'>Aug 2013 - Aug 2014</span>
	<p>	Used a Genetic Algorithm approach to poetry generation. Allowed the system to develop a series of rules that automatically generated poetry, from a corpus JIGSAW and WordNet. The system learned from how well the poems were received. </p>
	<li class='resumeheading'>Applications and Human Factors:</li><p></p>
	<li>Learning with Google Glass (Project under Prof. Augusto Esteves at Siemens):</li><span class='right hide-for-small-only'>Jul 2015 - Dec 2015</span>
	<p>	Created a Google Glass Application that enables people to create technical training videos with less effort. Conducted usability tests with 8 participants. </p>
	<li>Georgia Tech Course Registration Redesign (Advised by Dean David White):</li><span class='right hide-for-small-only'>Jan 2015 - May 2015</span>
	<p>	Helped redesign the architecture of Georgia Tech’s registration system and create a series of APIs that can be used by students. Worked with the Office of Technology to implement a pilot and test the system. Conducted user research to determine what system the students would like </p>
</ul>
<hr />
</div>





@stop