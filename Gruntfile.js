module.exports = function (grunt) {
  grunt.initConfig({
    sass: {
      dist: {
        files: {
          'style.min.css': 'sass/style.scss',
        }
      }
    }
  });
  grunt.loadNpmTasks('grunt-sass');
}