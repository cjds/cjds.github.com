---
title: Evolving Better Robotic Co-operation
layout: post
---
Imagine trying to communicate with an alien species. For true communication, there needs to be a set of agreed upon symbols that both parties understand. These symbols must have identical or close to identical meanings so that everyone comprehends. Sharing this knowledge base of symbols between two entities is known as the symbol grounding problem. [6]


Attempts to solve the symbol grounding problem in computer science have usually been represented as Language Games. These language games involve communication between agents to allow them to learn new words and associate meanings to word.
The guessing game (L. Steels, 1995), is a game in which two bots tries to achieve shared attention and guess features of objects . They build a shared vocabulary by trying to talk about objects once each other is focused on the same object. An example of this is implemented in The Talking Heads Experiment.(L. Steels, 1999) Talking Heads was an experiment both in computer vision and cognitive programming. They were attempting to study the evolution of a shared lexicon. The robots evolved their vocabulary by observing a scene and communicating what they saw to each other.  The lingodroid robots (Schulz, 2011) develop their own language and perform spatial memory mapping using a shared lexicon. They are put in a space and develop new words from the space through sharing words. Every time they find themselves in a new space they invent a word for it. This allows them to map the space around them using this new shared lexicon. Thus cooperation was obtained via the shared lexicon. In a naming game (Stadler,2012) agents engage in local interactions where one of the agents who is the speaker, tries to draw the attention of other agents (listeners) to an  object in the surroundings by uttering a word. The agent fails the game if he does not understand the word the speaker said. However they both update their lexicons for future naming games, gradually learning the language.

---

I believe that robots might not only benefit from being able to talk about objects in their environment but also about the things they are doing.  If robots make a particular motion or want a particular motion made they might communicate this to another robot. This second robot has to be able to understand the first robots command and take appropriate action. Working together the robots can communicate and cooperate effectively. 

The idea is to prove that agents are capable of cooperative tasks better with a communicating language. For this we have invented a language game to test the amount of cooperation they can possibly achieve. For the purposes of achieving proper communication the bots will have a limited set of possible actions. These atomic actions will be combined to give rise to more complex actions as the language evolves. Thus as the language evolves the agents will be able to perform more complex tasks with fewer utterances.
The agents vocabulary will be limited to the task at hand. The communication will be limited to describing actions that he wishes performed. However the actions will be decided at runtime and the complexity of these actions will progressively increase. This will eventually allow the robots to plan for the entire task at hand before executing.


###The Cooperation Game: 

The basic game requires a task to be completed that requires actions from both agents. The agents have a limited set of actions they can perform. As these actions may not be identical in both agents a learning round is required so the agents can become familiar with the actions of its counterpart. 

Learning Rounds:
Learning Rounds are before the actual task. In a learning round one agent performs a series of actions. Each of these are the basic atomic actions that that agent can perform. The other agent then will know these motions in the future games. 

After the learning round, the agents are made to play several test rounds to attempt to communicate efficiently. As they play they continue to learn, through co-evolution and reinforced learning.

Game Rules:
The agents are kept on an nxn board. The objective of the game is for the communicating agents to team up and defeat the non-communicating bots.

Types Of Bots : 
Communicating Agents (CA)- Can Communicate and need to cooperate to win
Non-Communicating Agents (NCA) - Cannot communicate but attack and can win on their own.

Conditions for Victory:
1. If a CA and a NCA are on adjacent squares the NCA defeats the CA and the CA dies.
2. However, if two good bots (CA) are on squares adjacent to a NCA,, the CAs win and the NCA dies.
                                                                                                                                                                                              
In order for them to win the CAs must communicate and decide when to attack in unison. Only when the CAs are sure another CA will attack then they can proceed.

###General Architecture Of a Solution:

Words:
Words consist of syllables. There are a predefined set of syllables that the bot can use. These syllables are combined together to find combanitorial words. These are the basic words which are defined for any action. (K. Stadler, 2012)

Sentences
Sentences in the language have a rigid grammatical structure and are used to describe the situation. The sentence consists in the following structure.

`<character> <expected-action> `

`<character>` : Refers to the character being described in the sentence. This character may be a good or bad bot. It may even refer to the speaking bot itself. 

`<expected-action>:` Refers to the action the bot wishes to be performed by the aforementioned character.

These sentences are kept with strict grammar to allow for more comprehension within the domain. Though there may be some merit to keeping a grammar fluid, we feel within the paradigm of any one task a strict grammar may lead to better communication.

###Evolving a Common Language:
The bots need to form a lexicon such that particular words correspond to particular action sequences by them. Each agent maintains particular word-meaning pairs. They maintain how often the word has been used and also the probability that its meaning is correct. 

1. How the speaker chooses particular words
  The speaker wants a certain action to be completed. It looks up its lexicon for words that correspond to that particular action. There are 2 ways by which the speaker can decide on the word to choose.

	a. Most Common Word: of all the words the agent knows for the intended action, it deterministically selects the one with the highest frequency, i.e. the one that the agent has most often seen being used for the topic by other speakers in previous interactions.
	b. Most Efficient Word: by the principle of least effort (1991, C. Brent) the speaker will speak the word with the least number of syllables.

  After the speaker speaks, it looks to the intended listener. If the listener does not perform the correct action it lowers the probability of that word being right. Otherwise it increases it. 

2. When the listener hears a particular word
When the listener hears a particular word, he looks up that word in his dictionary
If there is an action corresponding to that word with a sufficiently high probability then the agent executes that action. If no action has been decided the agent assumes an action based on the heuristic to complete the task. This is added to the lexicon with an extremely low probability.  NOTE: This may not necessarily be the correct action. However over time the heuristic assures that the agent will assume the correct action.

3. Evolving Complexity of the language:
Once all action sequences are defined with a high enough probability the agents start creating words for new actions sequences (combinations of the previous actions). Eventually over time the language increases in complexity and the agents are able to perform extremely complex actions



###Limitations

1. The set of actions is limited to the actions the bot can perceive. This deterministic approach to word building would fail in a world with innumerable actions.
2. There is no case of relativity in the words. For example the botcan’t suggest lists of moves with their probable goodness or badness. It can’t explain why its choosing certain actions or what its plan is.
3. There is no long term planning possible. The bots can only think logically ahead for a few moves. They cannot for example, trap the Sith in corners or come at the Sith from multiple locations. They can only communicate in the short term.

###References


[1] Schulz, Ruth, et al. "Lingodroids: Studies in spatial cognition and language." Robotics and Automation (ICRA), 2011 IEEE International Conference on. IEEE, 2011.

[2] Steels, Luc. "Language games for autonomous robots." IEEE Intelligent systems 16.5 (2001): 16-22.

[3] Heath, Scott, et al. "Communication between Lingodroids with different cognitive capabilities." Robotics and Automation (ICRA), 2013 IEEE International Conference on. IEEE, 2013.

[4] Steels, Luc, and Jean-Christophe Baillie. "Shared grounding of event descriptions by autonomous robots." Robotics and autonomous systems 43.2 (2003): 163-173.

[5] L. Steels, The Talking Heads Experiment vol. I. Words and Meanings. Brussels: Best of Publishing, 1999.

[6] Harnad, Stevan. "The symbol grounding problem." Physica D: Nonlinear Phenomena 42.1-3 (1990): 335-346.

[7] Stadler, Kevin, Pieter Wellens, and Joachim De Beule. "The combinatorial naming game." Proceedings of the 21st Belgian-Dutch Conference on Machine Learning (BeneLearn 2012)}. Vol. 3. IFAAMAS}, 2012.








