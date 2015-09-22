module.exports = function(grunt){
	var $jsFiles = 'js/**/*.js';
	var $SassFiles = 'scss/**/*.scss';
	// Configure tasks here
	grunt.initConfig({
 
		jshint: {
			files: [$jsFiles]
		},
 
		uglify: {
			dist: {
				files: [{
					expand: true,
					cwd: 'js',
					src: '**/*.js',
					dest: '../assets/js/'
				}]
			}
		},

		sass: {
			dist: {
				options: {
					style: 'compressed',
					sourcemap: 'none',
					loadPath: require('node-bourbon').includePaths
				},
				files: {
					'../assets/css/main.css': 'scss/main.scss' 
				}
			}
		},

		watch: {
			grunt: { 
				files: ["gruntfile.js"], 
				tasks: ["default"] 
			},

			script: {
				files: $jsFiles,
				tasks: ['default']
			},

			sass: {
				files: $SassFiles,
				tasks: ["default"]
			}
		}
	});

	// Load tasks here
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');

	// Register tasks here
	grunt.registerTask('default', ['jshint', 'uglify', 'sass']);
	
}