module.exports = function (grunt) {
  grunt.initConfig({
    sass: {
      dist: {
        files: {
          'style.min.css': 'sass/style.scss',
        }
      }
    },
    watch: {
      files: ['sass/*'],
      tasks: ['sass'],
      options: {
        spawn: false,
      },
    }
  });
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
}