module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),



    watch: {

         options: {
        livereload: true,
      },
      php: {
        files: ['**/*.php'],
        options: {
          livereload: true,
        }
      },
      css: {
        files: [
          '**/*.scss'
        ],
        tasks: ['compass', 'autoprefixer','cssmin', 'cssshrink', 'uglify']
      },



    }, // watch ends


    cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: '_/css',
          src: ['*.css', '!*.min.css'],
          dest: '_/css',
          ext: '.min.css'
        }]
      }
    },

      cssshrink: {
        options: {
          log: false
        },
        your_target: {
          files: {
            '_/css': ['_/css/screen.min.css']
          }
        }
      },


    compass: {
      dist: {
        options: {
          sassDir: '_/sass',
          cssDir: '_/css',
          outputStyle: 'expanded'
        }
      }
    },

    uglify: {
   dist: {
      options: {
         sourceMap: false,
         banner: '/*! MyLib.js 1.0.0 | Aurelio De Rosa (@AurelioDeRosa) | MIT Licensed */'
      },
      files: {
         '_/js/scripts.min.js': ['_/js/functions.js'],
      }
   }
},

    autoprefixer: {
        options: {
        //  map: true
        },

        // prefix the specified file
      single_file: {
        options: {
          // Target-specific options go here.
        },
        src: '_/css/screen.css',
        //dest: '_/css/screen.css'
      },
    },

    //   sourcemap: {
    //     options: {
    //         map: true
    //     },
    //     src: '_/css/screen.css',
    //     dest: '_/css/screen.css' // -> dest/css/file.css, sourcemap is inlined
    // },

    // sourcemap_separate: {
    //         options: {
    //             map: {
    //                 inline: false
    //             }
    //         },
    //         src: '_/css/screen.css',
    //         dest: '_/css/screen.css' // -> dest/css/file.css, dest/css/file.css.map
    //     },
    //
    //

    // postcss: {
    //     options: {
    //       map: true,
    //       processors: [
    //         require('autoprefixer-core')({browsers: 'last 1 version'}).postcss,
    //         require('csswring').postcss
    //       ]
    //     },
    //     dist: {
    //       src: '_/css/*.css'
    //     }
    //   }


  });

  // Load the Grunt plugins.
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-cssshrink');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  //grunt.loadNpmTasks('grunt-postcss');
  //grunt.loadNpmTasks('grunt-contrib-concat');
  //grunt.loadNpmTasks('grunt-contrib-uglify');

  // Register the default tasks.
  grunt.registerTask('default',['watch']);
//  grunt.registerTask('default',['watch']);

};
