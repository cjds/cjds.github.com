---
title: "Jekyll, Foundation and Grunt"
layout: post
---

##What is Grunt
Grunt is a Javascript library that runs via Node.js. It allows you to automate all your production tasks into one command.
(for example minifying the JS and CSS, compiling the CSS from SASS, running the server etc.)

All of these things are run by the plugins that are made for Grunt.

This allows me to build my Jekyll, compile my Foundation (via Compass) and compile pygments using a single command `Grunt`. This command will run a file called a `Gruntfile.js`.  This is useful because there are probably going to be a few more libraries before this goes online. Thus I can compile the entire site with one command.

##How to Grunt

First Install Node.js from <a href="#">here</a>

Assuming You have it download Grunt by going to your folder in the command line and writing

	npm install grunt


Now we need some plugins. I'm going to use the `watch` plugin to check when my files are changed, the `compass` plugin to compile Compass and the `shell` plugin to run the Jekyll commands from the Grunt file

Install the 3 plugins with the following commands (when in your project directory)

1. `npm install grunt-contrib-watch`
2. `npm install grunt-contrib-compass`
3. `npm install grunt-contrib-shell`


##My Gruntfile.js

	// Gruntfile.js
	module.exports = function(grunt) {
	    grunt.initConfig({
	        pkg: grunt.file.readJSON('package.json'),
	        compass: {
	            dist: {
	                options: {
	                    sassDir: 'sass',
	                    cssDir: 'stylesheets'
	                }
	            }
	        },
	        shell: {
	            jekyllBuild: {
	                command: 'jekyll build'
	            },
	            jekyllServe: {
	                command: 'jekyll serve'
	            }
	        }
	    });


	    grunt.loadNpmTasks('grunt-shell');
	    grunt.loadNpmTasks('grunt-contrib-watch');

	    

	    grunt.registerTask('watch:test', function() {
	        // Configuration for watch:test tasks.
	        var config = {
	            options: {
	            interrupt: true
	        },
	        post: {
	            files: [
	                '_posts/*.md',
	                '_posts/*.html',    
	                '_includes/*.html',
	                '_layouts/*.html',
	                '_config.yml',
	                'index.html'                
	            ],
	              tasks: ['shell:jekyllBuild','shell:jekyllServe']
	            },
	        layout:{
	            files:[
	                'scss/*'
	            ],
	            tasks: ['compass']
	            }
	          };

	          grunt.config('watch', config);
	          grunt.task.run('watch');
	    });

	    grunt.registerTask('default', ['watch:test']);
	};

Notice if I change my SCSS Compass will compile. Otherwise it will just run the Jekyll Build and serve commands.
After this just go to your projects folder and type `grunt`

##Negatives of Grunt
It slows things down. `jekyll sever --watch` is a much better alternative while writing. But for making a production ready version Grunt is the way to go
