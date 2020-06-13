const { scss } = require('./tasks/scss')
const { js } = require('./tasks/build')
const { defaultWatch }  = require('./tasks/watch')

// set task name
scss.displayName = 'scss';
js.displayName = 'js';

// default task
exports.default = defaultWatch;

// standalone task
exports.scss = scss;
exports.js = js;