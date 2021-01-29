const path = require('path');
const ExtractTextPlugin = require("extract-text-webpack-plugin");

module.exports = {
  mode: 'development',
  entry: './original/index.js',
  output: {
    path: path.resolve(__dirname, 'final'),
    filename: 'script.js'
  }
};
