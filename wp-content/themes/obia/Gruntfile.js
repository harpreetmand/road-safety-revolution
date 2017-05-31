module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      // options: {
      //   separator: "\n\n"
      // },
      // dist: {
      //   src: ['src/resources/js/**/*.js'],
      //   dest: 'public/js/obia.js'
      // },
      // deps: {
      //   src: [
      //   ],
      //   dest: 'public/js/obia-deps.js'
      // },

    },

    sass: {
      dev: {
        files: {
          'css/obia.css': 'sass/styles.scss'
        }
      }
    },
cssmin: {
   dist: {
      options: {
         banner: ''
      },
      files: {
         'css/obia.min.css': ['css/obia.css']
      }
  }
},

    watch: {
      // scripts: {
      //   files: ['src/resources/js/**/*.js'],
      //   tasks: ['concat:dist']
      // },
      styles: {
        files: ['sass/*.scss'],
        tasks: ['sass']
      }
    }
  });

  //npm tasks
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  //tasks
  grunt.registerTask('default', 'Default Task Alias', ['build']);

  grunt.registerTask('build', 'Build the application', ['sass:dev',
    'concat',
    'watch'
  ]);
}
