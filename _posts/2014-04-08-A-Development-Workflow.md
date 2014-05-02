---
title: "My Blog Development Workflow"
layout: post
---

<style>
code{
	line-height: 0%;
}
</style>


You learn something new everyday. In an effort to get this blog underway, I learned a lot. It completely changed the way I develop code. 

Being someone who creates REST interfaces for frontend developers, I assumed I knew quite a bit about frontend development. This proved to be woefully wrong. The past few days I have spent learning about the frontend side of things. My objectives were:

1. Learn all the tools needed to get a good workflow for a blog (the what and why)
2. Use those tools properly as they were intended (the how)

In the end these are the tools I ended up using (and the stuff the tools rely on) and how I'm using them:a
##1. For my frontend and writing my posts

<div class='row'  style='margin-bottom:20px'>

<div class='medium-4 columns' >

<img src='{{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/jekyll-logo.png' >
</div>
<div class='medium-8 columns' markdown='1'>
<h4>Jekyll </h4>
<p>
Jekyll is a static blog manager. It takes blog posts written in HTML or Markdown and converts it to a static site
</p>
<code>
    gem install jekyll
</code>
</div>
</div>

<div class='row' style='margin-bottom:20px'>
<div class='medium-4 columns'>
<img src='{{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/foundation5.jpg'>
</div>
<div class="medium-8 columns">
<h4>Foundation 5 (Using SCSS so I can customize)</h4>
<p>
Manages the CSS for my blog. Its mobile-first so it takes care that the blog looks nice on any screen. Foundation runs via SASS and allows me to not worry so much about the UI elements. Installation instructions can be found <a href="http://foundation.zurb.com/docs/sass.html">here</a>
</p>
</div>
</div>

<div class='row'  style='margin-bottom:20px'>
<div class='medium-4 columns'>
<img src='{{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/pygments.png' >
</div>
<div class="medium-8 columns">
<h4>Pygments</h4>
<p>
Since I will be wrting quite a bit of programming code on this blog. Pygments allows me to display the code according to the way its supposed to look.
</p>
<code>
pip install pygments
</code>
</div>
</div>

##2. For general development sanity and happiness

<div class='row'  style='margin-bottom:20px'>
<div class='medium-4 columns'>
<img src='{{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/grunt-logo.png'>
</div>
<div class="medium-8 columns">
<h4>Grunt</h4>
<p>
This allows me to build my Jekyll, compile my Foundation (via Compass) and compile pygments using a single command `Grunt`. This command will run a file called a gruntfile. This is useful because there are probably going to be a few more libraries before this goes online. Thus I can compile the entire site with one command.
</p>
<code>
npm install grunt -g
</code>
</div>
</div>


##3. The programs the tools rely on

<div class='row'  style='margin-bottom:20px'>
<div class='medium-4 columns'>
<img src='{{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/compasslogo.png'>
</div>
<div class="medium-8 columns">
<h4>Compass</h4>
<p>
<a href="compass.com">Compass</a> is a SASS compiler (among other things but I'm using it for that). Compass directly compiles my SASS to CSS whenever I run <code>compass compile</code>
</p>
<code>
gem install compass
</code>
</p>
</div>
</div>


<div class='row'  style='margin-bottom:30px'>
<div class='medium-4 columns'>
<img src='{{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/compasslogo.png'>
</div>
<div class="medium-8 columns">
<h4>Bower</h4>
<p>
Bower is used for frontend development. It allows you to get all your Javascript libraries wrapped up in a neat little bow.
(I know very little about Bower and I'll write a proper post when I know more)
</p>

<code>
npm install bower
</code>


</div>
</div>



##4. The basic languages these use

<div class='row'   style='margin-bottom:30px'>
<div class='medium-4 columns'>
<img src='{{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/sass.gif' >
</div>
<div class="medium-8 columns">
<h4>Sass</h4>
<p>
This allows you to extend the functionalities of CSS by adding features like loops and class inheritence etc. When compiled SASS becomes CSS (so its basically writing CSS but just simulates more features on top). You can get started <a href='sass.com'>here</a>
</p>
</div>
</div>

<div class='row'   style='margin-bottom:30px'>
<div class='medium-4 columns'>
<img src='{{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/rubylang.png' >
</div>
<div class="medium-8 columns">
<h4>Ruby</h4>
<p>
<a href="ruby.org">Ruby</a> is an Object Oriented Programming language that can be used to do anything. Ruby has a modular approach which directly lets me install 'gems' from the internet. You can download it <a href="#">here</a>
</p>
</div>
</div>

<div class='row'  style='margin-bottom:30px'>
<div class='medium-4 columns'>
<img src='{{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/python.png' >
</div>
<div class="medium-8 columns">
<h4>Python</h4>
<p>
Another Programming language like Ruby. I won't go into the differences here but from an "essentials" perspective their pretty similar. You can download it <a href="#">here</a>
</p>
</div>
</div>

<div class='row'   style='margin-bottom:30px'>
<div class='medium-4 columns'>
<img src='{{site.url}}/assets/{{page.date| date: "%Y-%m-%d" }}/nodejs.png' >
</div>
<div class="medium-8 columns">
<h4>Node.js (which runs on Javascript)</h4>
<p>
Node.js is a wrapper that lets you run Javascript applications without a Browser <a href="http:://www.github.com/max2buzz">(@ShreyasRane)</a>. You can download it <a href='#'>here</a>
</p>
</div>
</div>




