const webpack = require('webpack')
const path = require('path')

const entries = {
	'common': path.join(__dirname, '/js/common'),
	'about': path.join(__dirname, '/js/about'),
	'works': path.join(__dirname, '/js/works')
}

const config = {
	mode: 'development',
	cache: true,
	entry: entries,
	devtool: 'inline-source-map',
	output: {
		filename: '[name].js'
	},
	resolve: {
		alias: {
			util: path.join(__dirname, '/js/util.js'),
			photoSwipe: path.join(__dirname, '/js/lib/photoswipe.min'),
			photoSwipeUIDefault: path.join(__dirname, '/js/lib/photoswipe-ui-default.min'),
		},
		modules: [
			'node_modules'
		],
		extensions: ['.js', '.json', '.jsx', '.css']
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				loader: 'babel-loader',
				options: {
					presets: ['@babel/preset-env']
				}
			}
		]
	},
	optimization: {
		splitChunks: {
			name: 'vendor',
			chunks: 'initial',
		},
		minimize: true
	},
	plugins: [
		new webpack.ProvidePlugin({
			$: 'jquery',
			jQuery: 'jquery'
		})
	]
}

module.exports = config;
