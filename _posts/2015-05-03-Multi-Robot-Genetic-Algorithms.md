---
title: Multi Robot Soccer in 3d
layout: post
---

This article presents my attempt to create a genetic algorithm that can play soccer in a 3d environment. The genetic algorithm is tested against a similar genetic algorithm and will be judged how it fairs against it. It is then tested against my algorithm with predetermined behaviours that won the Multi Robot Systems 2014 Class Competition (I'm not going into detail about its' algorithm here) This is a simple custom soccer environment with 4 players and no fouls or outsides.


##Genetic Algorithms
Genetic Algorithms are replications of the theory of Natural Selection. The “algorithm” is represented of a group of genes which can be seen as base properties or functions of the systems. 
For every generation, a group of individuals are created which have a genome consisting of random genes. These individuals are tested to see how “fit” they are for the task. The most fit individuals will be chosen for the next generation. 

The next generation is produced by taking and mixing the genes of the individuals of the previous generation (crossover) and by mutation of the genes. Over a long period of time this can evolve behaviours which are good to complete the task

##Implementation 
The system was implemented on a custom version of [PyBioSim](http://multiagent.gatech.edu/PyBioSim). PyBioSim was adapted to play soccer and given boundaries and goals. 

The features of the soccer system were as follows:

* Players can score a goal by pushing the ball through a goal at the other end of the pitch.
* Team scores are kept in the bottom right
* The simulation runs till any one team scores 5 goals or it reaches its maximum time limit whichever comes first
* Goals are demarcated by 2 yellow obstacles on either end of the pitch
* Every time the ball is scored, the players move back to their starting positions


![]({{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/pybiosim.png)

The World was split into a 16 x 16 grid so that the algorithm could be used with discrete areas. Determining if a player is in an area is useful so that the algorithm can attack and defend accordingly The player was then given certain base operations that he can perform. These are considered as base actions of his genome. These were:

* Kick ball to teammate 
The method has to specify the teammate to which the ball will be passed to and the method will pass the ball exactly to where the teammate currently is. If the player doesn’t yet have the ball he will run toward the ball while kicking
        
* Kick ball ahead of self slightly (i.e. dribble)
This action will dribble the ball toward a particular direction. The agent will move toward the direction and the ball avoiding team mates

* Run to another sector
This is similar to the dribble action except that the player does not run to the ball at any point of time. He directly runs toward the other sector

* Kick ball toward goal (shoot)
The robot will kick the ball toward the goal with as much power as he can.

Each individual soccer playing agent has genes which is like a state machine, where each state is mapped to an action.  The state will be based on the following tuple:

	teamAreas: An array containing the grid cells of your team mates (as well as you)
	enemyAreas: An array containing the grid cells of your enemies

ballPosition: An integer which stores the grid cell that the ball is currently in

Since there are too many states to be covered, a -1 is used to indicate that we do not care about that particular state. In this way there are particular states that the algorithm does not cover. In the case that a particular state is not covered by the algorithm, a random state will be chosen. 

Each of the states map to a particular move. These moves are one of the four base moves. Each of the base moves comes with extra information (for example run comes with which grid square to run to). These make up a total of 37 moves that the agent is able to use. 

While running the algorithm runs through all of the states contained in the genome and sees if any of the states satisfies the current condition. 


###Experiments
Two different populations (10 and 6 per generation)  were run with three different fitness functions were run. 
Fitness by goal difference only: This is the simplest fitness function , the fitness of the system as a whole is only given by the goals scored and those scored against them. The system gets +10 for every goal scored and -5 for every goal scored against it. For this algorithm a variant with elitism was also attempted one individual of the population would go to the next level directly with no mutation or crossover

Fitness by goal difference with negative points for randomness: 


This is similar to the above condition except that there is a -0.1 given to the algorithm every time a random is move is made by any agent using the algorithm. This tended to dominate the algorithm with the randomness being what the bots sought to decrease. We can see a trend of decreasing randomness while watching the bots. However, they never progressed beyond the simple non-random solutions into goal scoring ones

Fitness by goal difference with negative points for randomness and time in possession:

This fitness function has negative points for time out of possession and positive points for time in  possession

The algorithm was run for 100 generations. The algorithm was run with 3 random opponents from its generation. 


###Results:

Games against genetic algorithm

![]({{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/fitnessovertime1.png)

Fitness function that considers only goal scoring

![]({{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/goal difference over time.png)

The only graphs to be considered in this case was the fitness of the algorithm and the average goal difference per generation

What is to be noted is the algorithm could not settle on a system that would allow it to be fit over a long period of time and this affected the number of goal differnce causing it too to be variable. One must note that the algorithm is fighting other algorithms which are genetic which might have debilitating effects

####Fitness function goal difference and randomness:

The graphs here are the number of random moves per level and the average goal difference as they were the only parameters affected by the system

![]({{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/fitnessovertime1.png)

![]({{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/random moves vs time.png)


This shows that though the number of random moves decreased over time that did not translate into more goals being scored


Fitness function goal scoring and passing
The graphs that should be shown is how the fitness function increased as well 

![]({{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/averagefitnessovertime2.png)

Though the fitness function entered a relatively stable configuration it did not Again, the graph shows that more time in possession did not necessarily lead to more goals

###Conclusion:
What seemed the most likely to score was the algorithm that only had goals for fitness. With algorithms that concerned possession and randomness, though the algorithm stabilized more easily it scored less goals over time. The genetic algorithm eventually learned behaviour that was not random. Though even after running up to 300 generations, the algorithm had not developed a consistent method of scoring. It performed extremely badly against a simple non-genetic algorithm and was comprehensively beaten. 

When compared to a larger population, a smaller population fared better. Also elitism proved to be a good method for ensuring that good traits do not disappear too easily. The fitness of the algorithm could be seen when comparing it to its own predecessor. We could see the algorithm beating its own predecessor (and hence it was at least evolving) but it could not defeat the traditional algorithm. This proves that while improving, the algorithm might need more time on a more highly efficient computer to reach that level of ability

###References

[1] Luke, Sean, et al. "Co-evolving soccer softbot team coordination with genetic programming." RoboCup-97: Robot soccer world cup I. Springer Berlin Heidelberg, 1998. 398-411.

[2] Nadarajah, Sivadev, and Kenneth Sundaraj. "A survey on team strategies in robot soccer: team strategies and role description." Artificial Intelligence Review 40.3 (2013): 271-304.

[3] Stone, Peter, and Manuela Veloso. "Multiagent systems: A survey from a machine learning perspective." Autonomous Robots 8.3 (2000): 345-383.

[4] RoboCup 2015 - 2D Soccer Simulation League Team Description Ri-one (Japan)

[5] Plant, W.R.; Schaefer, G.; Nakashima, T., "An overview of Genetic Algorithms in simulation soccer," Evolutionary Computation, 2008. CEC 2008. (IEEE World Congress on Computational Intelligence). IEEE Congress on , vol., no., pp.3897,3904, 1-6 June 2008
