let scripts = [].map(script => 'resources/js/third-party/' + script);

scripts.push('resources/js/**/*.js');

module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				options: {
					sourcemap: 'none'
				},
				files: {
					'public/css/dennisprudlo.css': 'resources/sass/app.scss'
				}
			}
		},
		cssmin: {
			target: {
				files: {
					'public/css/dennisprudlo.min.css': 'public/css/dennisprudlo.css'
				}
			}
		},
		uglify: {
			build: {
				src: scripts,
				dest: 'public/js/dennisprudlo.min.js'
			}
		},
		watch: {
			scripts: {
				files: scripts,
				tasks: ['uglify'],
				options: {
					debounceDelay: 250,
				}
			},
			styles: {
				files: 'resources/sass/**/*.scss',
				tasks: ['sass', 'cssmin'],
				options: {
					debounceDelay: 250,
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');

	grunt.registerTask('default', ['sass', 'cssmin', 'uglify']);
}
