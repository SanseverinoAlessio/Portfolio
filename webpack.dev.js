const path = require("path");
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
performance: {
hints: false
},
mode: "development",
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
