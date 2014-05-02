---
title: Install and Use Jekyll on Windows
layout: post
---

![]({{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/jekyll+windows.jpg)

## What is Jekyll
Jekyll is a static platform for blogging. It allows you to write your blog and upload a static site online. 

##Why use Jekyll

The reason I decided to try out Jekyll is because its posts can be written in Markdown. However the fact that it compiles into plain old HTML is definitely a bonus. This means the pages will be served quickly and there is practically no way to break into it. Jekyll can also be tested locally and is highly customizable.


## Installing Jekyll 

Jekyll was created in Ruby and requires some command line code to get it running but is definitely worth it. I will installing Jekyll on a Windows 8 machine. (but this is applicable to any Windows)

###Install Ruby and the Ruby DevKit
First you need to install Ruby and the Ruby DevKit from [this link](http://rubyinstaller.org/downloads/)


1.	Download the Ruby installer and follow the steps to install
2.	Now you need to get the ruby devkit. Get the appropriate version for the version of Ruby download. And extract it.
	* Open Command Prompt with Ruby (from the start menu)
	* CD to the folder in which the Ruby DevKit was extracted
	* Type `ruby dk.rb init`
	* Type `ruby dk.rb install`


###Install Jekyll, RDiscount and WDM
Now you need to install Jekyll and RDiscount

> %big%
>![]({{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/installing-jekyll.PNG)

1.	Start command prompt with Ruby
2.	Type `gem install jekyll`
3.	Type `gem install rdiscount`
4.  Type  `gem install wdm`

##Time to start creating our blog

Now that we got Jekyll running its time to create a new blog

Go to the folder you wish to store your blog in and create a folder structure as below.

> %big%
> ![]({{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/initializing folders.PNG)

Create 3 folders

* _posts: to store the markdown and HTML to store your posts posts

* _layouts : to store layouts. This will be the markup that will be like a template for your blog

* _includes : lets say you want to make a header and footer and stuff

###Creating your Configuration file

Create a new file called `_config.yml`. This file will be written in the YAML format. Fill the config file with the following
	
	name: "Carl's Blog"
	url: "http://localhost:4000"
	paginate: 10
	markdown: rdiscount
	permalink: pretty

The URL `http://localhost:4000` will be used to access our blog in the localhost. The markdown will be handled by the rdiscount gem. 


###Creating your first post

Now lets create our first post. Go to the `_posts` folder and in a file with the title `YYYY-MM-DDD-post-name.md`
`YYYY-MM-DD` is the post date. The name is the post slug (like a title) and `.md` signifies that its written in [Markdown](http://daringfireball.net/projects/markdown/syntax)

    ---
    title: My first post
    ---

	{{page.title}}
    Hello World. This is my first post on my **awesome** __Jekyll__ blog


The top part contained in the `---` is called the framing information. Things like categories, tags etc. can be specified as seen here.

###Testing your first post


* Open command prompt with Ruby and `cd` to the location of the blog
* Type `Jekyll build`. You should see an _site folder created at the route. This builds your site and converts it to static HTML.
* Type `Jekyll serve`. This should compile your blog and start the server where you can access it.
* Go to http://localhost:4000

> %big%
>![]({{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/first post.PNG)


Hopefully you have your blog up and running. I'll be doing a follow up post covering the styles and templating to make your blog look good.
