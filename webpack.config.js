const path = require('path');
const glob = require('glob');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const ssi = require('browsersync-ssi');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const RemoveEmptyScriptsPlugin = require('webpack-remove-empty-scripts');
const CopyPlugin = require('copy-webpack-plugin');
const webpack = require('webpack');

// template/resources/scss/以降のパスのみを取得
const scssEntries = {};
glob.sync('./template/resources/scss/**/[^_]*.scss').forEach((file) => {
  const relativePath = path
    .relative('./template/resources/scss', file)
    .replace(/\.scss$/, '');
  const outPath = 'css/' + relativePath;
  scssEntries[outPath] = path.resolve(__dirname, file);
});

module.exports = {
  mode: 'development',
  entry: {
    ...scssEntries,
    main: './template/resources/js/main.js',
  },
  output: {
    path: path.resolve(
      __dirname,
      'cms/wp-content/themes/portfolio-s/resources'
    ),
    filename: 'js/[name].js',
  },
  module: {
    rules: [
      {
        test: /\.s[ac]ss$/i,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: 'css-loader',
            options: {
              url: false, // 画像パスの変換を無効化
            },
          },
          'sass-loader',
        ],
      },
    ],
  },
  plugins: [
    new RemoveEmptyScriptsPlugin(),
    new MiniCssExtractPlugin({
      filename: '[name].css', // 階層を維持してCSS出力
      experimentalUseImportModule: true,
    }),
    new BrowserSyncPlugin({
      files: './**/*.scss, ./**/*.js, ./**/*.html, ./**/img/*',
      host: 'localhost',
      port: 2000,
      server: { baseDir: path.resolve(__dirname) },
      middleware: ssi({
        baseDir: path.resolve(__dirname),
        ext: '.html',
      }),
    }),
    new webpack.ProvidePlugin({
      $: 'jquery',
    }),
    new CopyPlugin({
      patterns: [
        {
          from: 'template/resources/img',
          to: 'img',
        },
        {
          from: 'template/resources/icon',
          to: 'icon',
        },
      ],
    }),
  ],
};
