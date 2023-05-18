# Pod Of Cast Example Theme

## What is this?

This is an experiment to see if I can build a full site editing theme from a figma mockup.

## Local Environment

This theme includes a `.wp-env.json`. To spin up a WordPress environment with `wp-env`:

1. Follow the [`wp-env` setup instructions](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-env/#installation)
1. Start the environment `wp-env start`

## Building and Watching CSS

To build the CSS using PostCSS, run the following command in your terminal:

```bash
npm run build:css
```

This will take the assets/main.css file, run them through PostCSS, and output the result to style.css.
To watch for changes to your CSS and automatically rebuild, run the following command in your terminal:

```bash
npm run watch:css
```

This will start PostCSS in watch mode, which will watch for changes to your assets/main.css file.
Whenever you save a change to the CSS, PostCSS will automatically rebuild and output the result to style.css.

## Building and Watching Custom Blocks

```bash
npm run watch:blocks
```

This will use wp-scripts to watch for changes to your blocks inside `blocks/` and automatically rebuild them when necessary.
The blocks are output to the `blocks-built/` directory. Make sure to enqueue the built blocks in the theme.

## Based On Powder Theme

Powder WordPress Theme, (C) 2022-2023 Brian Gardner.
Powder is distributed under the terms of the GNU GPL.
