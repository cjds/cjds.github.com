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

    grunt.registerTask('default', ['shell']);

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
};