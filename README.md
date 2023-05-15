# Pod Of Cast Example Theme

Requires at least: 6.2

Tested up to: 6.2

Requires PHP: 5.6

Stable tag: 0.7.2

License: GPLv2 or later

License URI: <http://www.gnu.org/licenses/gpl-2.0.html>

## What is this?

This is an experiment to see if I can build a full site editing theme from a figma mockup.

## Local Environment

This theme includes a `.wp-env.json`. To spin up a WordPress environment with `wp-env`:

1. Follow the [`wp-env` setup instructions](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/#installation)
1. Start the environment `wp-env start`

## Building and Watching CSS

To build your CSS using PostCSS, run the following command in your terminal:

```bash
npm run build
```

This will take the assets/main.css file, run it through PostCSS, and output the result to style.css.
To watch for changes to your CSS and automatically rebuild, run the following command in your terminal:

```bash
npm run watch
```

This will start PostCSS in watch mode, which will watch for changes to your assets/main.css file. Whenever you make a change to that file and save it, PostCSS will automatically rebuild your CSS and output the result to style.css.

## Based On Powder Theme

Powder WordPress Theme, (C) 2022-2023 Brian Gardner.
Powder is distributed under the terms of the GNU GPL.
