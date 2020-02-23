const TerserJSPlugin = require('terser-webpack-plugin');
const path = require("path");
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
module.exports = {
optimization: {
minimizer: [new TerserJSPlugin({}), new OptimizeCSSAssetsPlugin({})],
},
performance: {
hints: false
},
mode: "production",
entry: "./src/index.js",
output: {
filename: "dist/output.js",
path: path.resolve(__dirname,"")
},
plugins: [
    new MiniCssExtractPlugin({
      filename: 'dist/output.css',
      chunkFilename: '[id].css',
    }),
  ],
  module: {
    rules: [
      {
        test: /\.css$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              publicPath: '/public/path/to/',
            },
          },
          'css-loader',
        ],
      },
    ],
  },
};
