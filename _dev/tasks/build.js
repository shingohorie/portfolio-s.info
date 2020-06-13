const { src, dest } = require('gulp')
const config = require('../webpack.config')
const webpackStream = require('webpack-stream')
const webpack = require('webpack')
const plumber = require('gulp-plumber')
const notify = require('gulp-notify')
const notifies = {
	'errorHandler': notify.onError('<%= error.message %>')
}

exports.js = function() {
	return webpackStream(config, webpack)
		.pipe(plumber(notifies))
		.pipe(dest('../cms/wp-content/themes/portfolio-s/resources/js/'))
}