
const path = require('path');

module.exports = {
    entry: {
        cover: './resources/assets/js/main.js'
    },
    output: {
        filename: '[name]-bundle.js',
        path: path.resolve(__dirname, 'dist/js')
    },
    module: {
        rules: [{
            test: /.js$/,
            exclude: [
                path.resolve(__dirname, 'node_modules'),
                path.resolve(__dirname, 'bower_components')
            ]
        }]
    },
    resolve: {
        extensions: ['.json', '.js']
    }
};