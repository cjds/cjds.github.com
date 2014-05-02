---
title: "A First look at Haskell"
layout: post
---


## What is Haskell?

A functional programming language with a bunch of cool features. If you want to know why to learn this read [here]()


##Start By Installing
To work with Haskell you need : A Haskell Compiler
The simplest way to get started is by downloading the Haskell Platform [here](http://www.haskell.org/platform/)

##Start By Trying it out

First lets see if it works. 
Go to the console (command prompt) and type `ghci`

   	GHCi, version 7.6.3: http://www.haskell.org/ghc/  :? for help  
	Loading package .... //some packages
	Prelude>  

If you see that you have successfully installed Haskell. 
Now lets type some commands and see what we get
	
	Prelude> 6+3
	9
	Prelude>  9/3
	3


##First functions

Okay now lets move on from writing command line codes to our first function.
Create a file named `abc.hs` and save it in any folder. Enter this in the file. It is basically a function called double me that takes x and returns (x+x)

	doubleMe x = x + x  

Now `cd` to the folder where you saved it using the Command Prompt. Run `ghci`. Once inside the GHCI, run `:l abc` 

	Prelude> :l abc  
	[1 of 1] Compiling Main             ( abc.hs, interpreted )  
	Ok, modules loaded: Main.  
	Prelude> doubleMe 4
	8  
	Prelude> doubleMe 3.2 
	6.4 

##If, Then, Else

The if else condition can be written simply in Haskell. First specify the condition. Then mention what is to be done if true. The difference between Haskell and imperitive languages (say, Java) is that Haksell must specify the else condition. 


	doubleSmallNumber x = if x > 100  
                        then x  
                        else x*2   

##Conclusion
We learned how to install haskell and write our first Haskell functions. More to be done in [part 2]()