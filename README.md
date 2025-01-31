# Introduction

WP Boilerplate is a boilerplate template for WordPress themes using Laravel Mix & SCSS, You can use it with any CSS Framework i.e Bootstrap, Tailwind etc.

## Getting started

### Installation

Install Wordpress from Wordpress Website or using WP-CLI and Clone WP Boilerplate repo in theme folder, This will generate theme with folder name wp-boilerplate.

* Clone the repo `git clone https://github.com/ismailfarooq/wp-boilerplate.git && cd wp-boilerplate`
* Run `npm install`
* Run `npm run dev` to start developing

### General

You will find the editable SCSS and Javascript files within the `/assets` folder. that will generate the compiled version when you run NPM Scripts

Before you use your theme in production, make sure you run `npm run production`. this will generate the final files that can be found in `/dist` folder

## NPM Scripts

There are several NPM scripts available. You'll find the full list in the `package.json` 

| Script     | Description                                                                    |
|------------|--------------------------------------------------------------------------------|
| dev        | Compile Source files |
| watch      | Compile Source files & watch for changes. |
| build      | Creates a deployment build i.e minify CSS & JS files and copy fonts & images from `/assets` folder into `/dist` folder & generate [WP Theme Blocks](https://developer.wordpress.org/block-editor/getting-started/tutorial/#cleaning-up), |



## Tips

### Styling within the block editor

To make the editing experience within the block editor more in line with the front end styling, a `editor.css` is generated.

## Links


* [Laravel Mix Documentation](https://laravel-mix.com)
* [WP CLI Documentation](https://developer.wordpress.org/cli/commands/)

## License

MIT & just click on star button :blush:

Please see the [License File](/LICENSE) for more information.