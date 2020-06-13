const { src, dest } = require('gulp')
const sass = require('gulp-sass')
const postcss = require('gulp-postcss')
const autoprefixer = require('autoprefixer')
const cssnano = require('cssnano')
const sassUnicode = require('gulp-sass-unicode')
const header = require('gulp-header')
const replace = require('gulp-replace')
const plumber = require('gulp-plumber')
const notify = require('gulp-notify')
const notifies = {
	'errorHandler': notify.onError('<%= error.message %>')
}

exports.scss = function() {
	return src('./scss/**/**/*.scss', {
			base: './scss/'
		})
		.pipe(plumber(notifies))
		.pipe(sass())
		.pipe(sassUnicode())
		.pipe(postcss([
			autoprefixer({ grid: true }),
			cssnano({ autoprefixer: false })
		]))
		.pipe(replace(/@charset "UTF-8";/g, ''))
		.pipe(header('@charset "UTF-8";\n\n'))
		.pipe(dest('../cms/wp-content/themes/portfolio-s/resources/css/'))
}