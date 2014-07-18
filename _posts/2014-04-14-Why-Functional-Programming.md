---
title: "Why Functional Programming"
layout: post
categories: [thoughts]
---

###What is Functional Programming
Functional Programming is a way of programming that relies on the mathematical definition of functions. It has its root (and is pretty much an extension of Lambda Calculus).
Most functional programming languages are different because they do not depend on the program state, but instead only on the inputs to the functions. Thus it eliminates side-effects because as long as your function works your program works


> %image%
>![]({{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/lambda.jpg)

###Why learn Functional Programming
For me, the major draw of learning a FP language is:

* Learning new things is cool. (and pretty much always needed)

* Functional Programming is a whole new way to program. If I call myself a programmer I shouldn't ignore it

* There is a reason that Functional languages are so strict about the sanctity of the function (no side-effects). Understanding concepts will help me become a better developer no matter what language I'm working in

* Functional Programming serves to remind me that computers are just giant calculators. We seem to gloss over the basics of what a computer is when using OOPS. 

> %image%
>![]({{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/functional.png)

###Some more awesome stuff about Functional Programming

There are a lot of StackOverflow questions about functional programming but [this](http://stackoverflow.com/questions/2835801/why-hasnt-functional-programming-taken-over-yet?lq=1) was probably my favourite. It enumerates the benefits of Functional Programming. I thought I'd write one line about why functional programs work that way.

* Stateless programs; No side effects. With no states, the program depends solely on the functions. If you're function works, so does your program

* Concurrency; Plays extremely nice with the rising multi-core technology. Multiple cores. With no mutating data multiple cores can handle this excellently.

* Programs are usually shorter and in some cases easier to read. I will take this on merit. I understand that some programs will be much shorter. However easier to read is really up to the knowledge of the reader

* Productivity goes up (example: Erlang). Not sure about this one.

> %image%
>![]({{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/haskell.png)

###If its so cool why does no one talk about it

Well a lot of people do talk about Functional Programming, but its stayed well out of the mainstream until now. Mostly its been used in Artificial Intelligence research (especially Lisp) and for Machine Learning. Basically, anything with a lot of text.

Functional programming just happened not to be in most offices. Hence due to the seemingly complex paradigm not many programmers use it and it has fallen into obscurity.

Why its not taught in the average CS class is something I don't understand. Maybe with all the other portion they have to fit in they have no time for the sad little brother of Imperitive programming.
