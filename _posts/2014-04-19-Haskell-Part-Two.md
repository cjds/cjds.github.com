---
title: "Haskell Part 2"
layout: post
categories: [tutorial, haskell]
---

Part 1 can be found  [here]({% post_url 2014-04-15-A-First-Look-At-Haskell %})


##Types And Typeclasses
Haskell supports a static type system. That means the type of every object is known at compile time. To check the type of anything in haskell we can use the `:t` command.

Lets try this out in the GHCI

	Prelude> :t 'a'  
	'a' :: Char  
	Prelude> :t "foo"  
	"foo" :: [Char]  
	Prelude> :t (4==5, 'a')  
	(4==5, 'a') :: (Bool, Char)  

Not only can Haskell get the data types of variables it can also do the same for functions. Lets take the function `min` as an example. `min` takes two Ordered entities and returns the minimum one. So for example

	min 2 3
	2
	min 'a' 'b'
	'a'

Now what happens when we check the type of `min`

	Prelude> :t min
	min :: Ord a => a->a->a

The `=>` symbol is a class constraint. It means that in the function a represents the `Ord` data type. `Ord` stands for order, or a set of numerable entites. Now we can see the function takes in two `Ord` variables and outputs the same. Note that haskell does not place any major distinction between the parameters and return function. The return type is just the last parameter.

Now lets see what happens with the `map` function. `map` takes a function and a list and maps the elements of the list to their output in the function.

	Prelude> :t min
	map :: (a->b) -> [a] -> [b]

The `map` function takes in the function `(a->b)` as a parameter and outputs list of type `b`

##Pattern Matching

Now lets try to create our own functions. We can use two tricks to help get working faster. These are pattern matchinng and guards.

Lets say we 

	sayHi :: String -> String
	sayHi "hello" = "What's up?"
	sayHi "bonjour" = "Come sa?"
	sayHi x ="Hello"

So what we are doing above is matching the pattern of the input string and returning a string of our own. Lets test it to see the output.

	*Main> sayHi "s"
	"Hello"
	*Main> sayHi "hello"
	"What's up?"
	*Main> sayHi "bonjour"
	"Come sa?"

##Guards

Guards take pattern matching a little further by allowing you to check a condition on the input before returning it.

	pythogaros :: (RealFloat a) => a -> a -> a-> String  
	pythogaros a b c  	
			| a^ 2 + b^2 == c^2 = "Ooh! Got a right angle"  
			| a^ 2 + b^2 > c^2 = "A-cute :-)"  
			| otherwise        = "You're pretty obtuse"  


	*Main> pythogaros 3 4 5
	"Ooh! Got a right angle"
	*Main> pythogaros 3 4 6
	"You're pretty obtuse"
	*Main> pythogaros 3 4 6

##Let .. In

Now lets say instead of just pattern matching we want to do stuff to the input before giving it to the rest of the function.
In this function we constrain the type of `a` to be a `RealFloat` and a `Show`. `RealFloat` is so we can do floating point math and `Show` is for displaying it as a string.

The `let` command lets us set the area and proceed to use that in the rest of the function

	rect :: (RealFloat a,Show a) => a -> a -> String  
	rect l b = 
		    let area = l * b 
    		in  "Area is "++ area 

	*Main> rect 3 4
	"Area is 12.0"
	*Main> rect 3.555 4.592
	"Area is 16.324559999999998"
	

More higher order stuff to come in Part 3