var _ = require('lodash');

module.exports = function(grunt) {
    'use-strict';

    /* Initialize configuration
    -----------------------------------------------------*/

    require('load-grunt-tasks')(grunt);
    require('time-grunt')(grunt);

    // default config
    var config = {
        compass: false
    };

    // apply command line configuration
    _.forEach(grunt.option.flags(), function(option) {
        config[option] = grunt.option(option);
    });

    // default paths
    var paths = {
        assets: 'assets',
        build:  'assets',
        sass:   'sass',
        scss:   'scss',
        css:    'css',
        js:     'js',
        img:    'img'
    };

    /* Tasks
    -----------------------------------------------------*/

    var tasks = {};
    tasks.paths = paths;

    // Watch---------------------------
    // [TODO]: add support to compass
    // [TODO]: add support to coffee
    tasks.watch = {
        gruntfile: {
            files: ['./Gruntfile.js'],
            options: {
                reload: true
            }
        },

        stylesheets: {
            files: ['<%= paths.assets %>/<%= paths.scss %>/**/*.scss'],
            tasks: ['sass']
        }
    };

    // BrowserSync --------------------
    // [TODO]: configure proxy option
    tasks.browserSync = {
        dev: {
            bsFiles: {
                src: [
                    '<%= paths.build %>/<%= paths.css %>/**/*.css',
                    '<%= paths.build %>/<%= paths.img %>/**/*.{png,jpg,gif}',
                    '<%= paths.build %>/<%= paths.js %>/**/*.js',
                    '**/*.php'
                ]
            },
            options: {
                watchTask: true,
                ghostMode: {
                    location: true
                }
            }
        }
    };

    // Sass ---------------------------
    tasks.sass = {
        dev: {
            files: [{
                expand: true,
                cwd: '<%= paths.assets %>/<%= paths.scss %>/',
                src: [
                    '**/*.scss'
                ],
                dest: '<%= paths.build %>/<%= paths.css %>',
                ext: '.css',
                extDot: 'last'
            }],
            options: {
                style: 'compressed',
                sourcemap: true,
                compass: config.compass
            }
        }
    };

    // Imagemin -----------------------
    tasks.imagemin = {
        dev: {
            files: [{
                expand: true,
                cwd: '<%= paths.assets %>/<%= paths.img %>',
                src: '**/*.{png,jpg,gif,svg}',
                dest: '<%= paths.build %>/<%= paths.img %>'
            }],
            options: {
                optimizationLevel: 7,
                use: [
                    'imagemin-optipng',
                    'imagemin-jpegtran',
                    'imagemin-gifsicle'
                ]
            }
        }
    };

    // Autoprefixer -------------------
    tasks.autoprefixer = {
        options: {
            map: true,
            browsers: ['last 2 versions', 'ie 8', 'ie 9']
        }
    };

    // configures grunt
    grunt.initConfig(tasks);


    /* Group Tasks
    -----------------------------------------------------*/

    grunt.registerTask('build', [
        'sass',
        'autoprefixer',
        'imagemin'
    ]);

    grunt.registerTask('default', [
        'browserSync',
        'watch'
    ]);

};
