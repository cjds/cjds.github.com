---
title: "Tutorial: Using Wordnik and Big Thesaurus API"
layout: post
---

Wordnik and Big Huge Thesaurus are two APIs on the net which can be used in NLP projects. Both of them can be connected to by a simple request. 

##1. Wordnik

[Wordnik](http://wordnik.com) is a website that allows you to access a lot of information about words. It allows you to get defintions, synonyms, antonyms, uses in sentences, and pronounciation of particular words.


The  [Knicker API](https://github.com/jeremybrooks/knicker) created by Jeremy Brooks is a wonderful Java package that allows you to access Wordnik.

This is a quick tutorial on the Knicker API how to use it.

###1.1 Sign up for a Wordnik API key. 	

[Click the link here](http://developer.wordnik.com/), sign up for Wordnik, then tell them about your project and why you want to use it.

If you're really lazy and want to test out the API you can use my key `70538348db6b42e43a5181e32070feebc0b303e293ed13a97` (but I would prefer you didn't)

###1.2 Including the Knicker API in an eclipse project

The Knicker API is a Java project that you can include in one of two ways. 

1. Clone the source code directly in the `src` folder of your project 
2. Start a Maven project and include the dependancy

###1.3 What can you do with the Knicker API and Wordnik

To start using the Knicker API you have to set your API key as a system property like so

	System.setProperty("WORDNIK_API_KEY", "YOUR_KEY");

The API is split into 4 major classes. 

1. `WordApi` for accessing the actual words
2. `AccountApi` for accessing details about your account
3. `WordsApi` which has features for getting random words and reverse dictionary.
4. `WordListApi` which allows you to access user created alists as well as some other features.


Now you can call the required method with a static call to the API.

For example in case we need to get all the synonyms of earth

	try {
		List<Related> list=WordApi.related("earth", false, EnumSet.of(RelationshipType.synonym),100);
		for(Related r : list){
			for(String s :r.getWords())
				System.out.println("hi");
		}
			
	} 
	catch (KnickerException e) {
			
			e.printStackTrace();
	}

##2. Big Huge Thesaurus

Big Huge Thesaurus is another interesting list. When you access a word it gives you the synonyms antonyms and their parts of speech )noun,verb etc.).
Though Big Huge Thesaurus has much less data than Wordnik it is useful because of the parts of speech. For example the word water is both a noun and a verb and Big Huge Thesaurus can give you synonyms of only one or the other. 


Big Huge Thesaurus does not have a Java API (I intend to make a simple wrapper, will post when I do). You can make calls directly to the server and it can return the data in 3 formats; XML, JSON or plain text.

	http://words.bighugelabs.com/api/{version}/{api key}/{word}/{format}

This again needs an API key to access. You can get one over [here](http://words.bighugelabs.com/getkey.php). Again, if your lazy mine is `9a0d1e46117e2bdb3bf6e1a1568faa3e`

Make a URL call as follows and read the response line by line

	//NOTE: this is for the plain text format. For JSON or XML you will need libraries to pass the data.
	// It will probably be faster to access the data in those formats though as you get a more organized structure.
	try{
			URL to =new URL ("http://words.bighugelabs.com/api/2/9a0d1e46117e2bdb3bf6e1a1568faa3e"+URLEncoder.encode("earth", "UTF-8")+"/");
			
			BufferedReader br=new BufferedReader(new InputStreamReader(to.openStream()));
			String inputLine;
			
			while((inputLine=br.readLine())!=null){
				System.out.println(inputLine); // in the form noun|syn|world ..
			}
		}

So, these are two excellant web resources for information about words. Wordnik is a growing resource that continually adds more dictionaries and features to its data collection. Big Huge Labs offers quite a variety of things aside from the Big Huge Thesaurus. 