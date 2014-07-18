---
title: "Writing a Genetic Algorithm in Java with Lambda Expressions"
layout: post
categories: [tutorial, java 8]
---

Okay so this post is about 2 things : Genetic Algorithms and Java 8.

###Lambda Expressions
The new Java 8 has just released (as of March 2014) and I've been dying to test its powers out. One of its most talked about features is the inclusion of Lambda Expressions.

What is a Lambda Calculus? Well to put it simply its like defining a function in maths. This function will take in parameters and output values. Those values in turn can be more functions or variables etc. 

*What does this mean in Java however?*
Well it just means that we can pass functions as parameters to a function. This is immensely useful as you will soon see


###Genetic Algorithms
Genetic Algorithms are an optimization problem. The problem will be defined like : we want the output to the program to be XYZ out of all the possible outputs. Genetic algorithms basically allows the function to randomly create solutions. It keeps the best solutions (by testing them against the desired output) and throws out the rest. It then mixes the best together to try to get the optimal solution. I won't go into detail here but you can read more about it [here](http://en.wikipedia.org/wiki/Genetic_algorithm)