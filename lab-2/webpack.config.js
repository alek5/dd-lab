const path = require('path')

const HtmlWebpackPlugin = require('html-webpack-plugin')
const CleanWebpackPlugin = require('clean-webpack-plugin')

const config = {
	devtool: true,
	watch: true,

    context: path.resolve(__dirname, 'src'),

	entry: {
		app: [
			'babel-polyfill',
			path.resolve(__dirname, './src/index.js')
		]
	},

	//output
	output: {
		path: path.resolve(__dirname, './dist'),
		filename: '[name].[hash].js'
	},
	//loaders / transformation

	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: {
					loader: 'babel-loader',
					options: {
						presets: ['env']
					}
				}
			},
			{
                test: /\.css$/,
                use: [
                    'style-loader',
                    'css-loader'
                ]
            },
            { test: /\.scss$/, loaders: ['style', 'css', 'postcss', 'sass'] },
      		{ test: /.jpe?g$|.gif$|.png$|.svg$|.woff$|.woff2$|.ttf$|.eot$/, loader: "url" },
      		{ test: /bootstrap\/dist\/js\/umd\//, loader: 'imports?jQuery=jquery' }
		]
	},

	plugins: [
		new CleanWebpackPlugin([
            'dist'
        ], {
            watch: true,
        }),

		new HtmlWebpackPlugin({
			template: path.resolve(__dirname, './src/index.html')
		}),
	],

	devServer: {
        port: 3000
    }

}

module.exports = config;