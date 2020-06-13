const { watch } = require('gulp')
const { scss } = require('./scss')
const { js } = require('./build')

exports.defaultWatch = function() {
  watch('./scss/**/**/*.scss', scss)
  watch('./js/**/**/*.js', js);
}
