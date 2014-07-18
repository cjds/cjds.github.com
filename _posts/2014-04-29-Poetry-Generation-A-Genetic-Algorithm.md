---
title: "Poetry Generation: A Genetic Approach"
layout: post
categories: [thoughts]
---
##Why make a Computer write poetry?

Imagine a computer that could compose its own literature. Write its own books, its own poetry, make its own art, its own movies. This sci-fi vision of a computer is something we can barely wrap our heads around. So, how come so many computer theorists are interested in the above topic?

Uptil now computers are glorified calculators. You give them a set of instrctions and they process the set. Sure, they're getting better and faster at doing that but they are still very low in the evolutionary ladder in terms of actual brain usefulness. Computer creativity argues however that with the right set of algorithms. This will change the way we interact and even perceive computers.

However, we're still way behind in the creativity race. Poetry generation seemed a good a place as any to start.

Poetry generation has been attempted several times by computer scientists. When generating a poem one has to consider two major aspects, the content and the form. In terms of content the program needs to consider its ability to create a story, stick to a topic and comprehend what it is saying. In terms of form the program should consider rhyme, meter and stress. Taking into consideration all these factors most of the systems produced till date have been wanting.

<div class='row'>
<div class='medium-6 columns'>
<img src='{{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/rabindranath_tagore.jpg' style="margin-top:50px"/>
</div>
<blockquote class='medium-6 columns' >
<i>Where the mind is without fear<br />
And the head is held high,<br />
Where knowledge is free.<br />
Where the world has not been broken up into fragments by narrow domestic walls.<br />
Where words come out from the depth of truth,<br />
where tireless striving stretches its arms toward perfection.<br />
Where the clear stream of reason has not lost it's way<br />
Into the dreary desert sand of dead habit.<br />
Where the mind is led forward by thee<br />
Into ever widening thought and action.<br />
In to that heaven of freedom, my father,<br />
LET MY COUNTRY AWAKE!<br /></i>
- Gitanjali, Rabindranath Tagore
</blockquote>

</div>
<br />



##How to make a Computer Write poetry?

I'm just going to lay out my method for writing poetry. Lets hope this might be useful to someone someday.
It relies heavily on existing poetry for its database, as well as user input. 


Lets go through the algorithm step by step

>**Training phase 1**

>1. Take input poetry from your corpus of poems. Each needs to have a specific title (in my case it's abstract nouns like love and death)
>2. Store those lines as input lines by replacing the subject, and all nouns, verbs and adjectives

>**Training phase 2**

>2. Using an input topic we train on the topic by creating a set of sentences about the poem and make the user rate each sentence according to correctness alone
>3. How do we get those sentences? Remember the templates from `Training phase 1`. Taking them we replace the words in them to produce a potential line. We also keep mixing in templates from other topics.
>3. If this is done for long enough we have a large group of potential lines for any poem we will produce.


>**Testing and Retraining**

>4. To create a poem choose a set of sentences from the database and combine them. Make them fit a rhyme scheme and meter.
>5. Now take a rating from the user again which affects not only each sentence score but also the position of the sentence in the poem
>6. This will cause the poem to associate certain lines more with their position in the poem



###A Genetic Algorithm

A genetic algorithm solves a problem by a continually mutating and combining has a set of unique _children_. Randomly combining the genes of these children it produces a possible solution. Based on a fitness function the solution is judged to be fit or not. The most fit solutions are combined and mixed to produce the next set of children.

In this respect our solution seems to follow the paradigm of a genetic algorithm. The set of templates can be considered the chilren. The mixing of a good template, a crossover and the addition of templates not on the topic, mutation. The fitness function is what the user perceives to be a good sentence for the poem. 

The rating increasing will cause the most fit lines to occur more frequently in the poem. Thus we consider this a genetic approach to poetry generation.

<div class='row'>
<blockquote class='medium-6 columns' >
<i>If you can make one heap of all your winnings<br />
And risk it on one turn of pitch-and-toss,<br />
And lose, and start again at your beginnings<br />
And never breathe a word about your loss;<br />
If you can force your heart and nerve and sinew<br />
To serve your turn long after they are gone,<br />
And so hold on when there is nothing in you<br />
Except the Will which says to them: "Hold on!"<br /></i>
- If, Rudyard Kipling
</blockquote>
<div class='medium-6 columns'>
<img src='{{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/kipling.jpg' style="margin-top:30px"/>
</div>
</div>
<br />



###The Negative Points Of This Algorithm
This algorithm has several limitations and failings that prevent it from being truly intelligent.

1. It cannot have continuity in the lines of the poem. Each line is considered a seperate entity which is not how poets write
2. It cannot infer completely new sentences and relies heavily on the templates given
3. After much training we found that it wasn't generating as many good lines as we thought. The process of random replacement tends to push only the original lines inputed to the top
4. The computer has no sense of the gramar required to produce a sentence and hence fails to do so.


###Conclusion: Can This Be Considered Creative
This system shows promise as a poetry generation system. However, Creativity is uptil now inherently human. Human poets have are able to appreciate their poetry. They can judge the aesthetic value of their work and choose to continue working or publish it. So far our system, with its empirical generation, cannot even begin to emulate the thought process of a human poet. Hence, I do not believe it could be considered creative.