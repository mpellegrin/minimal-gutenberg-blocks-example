# Minimal Gutenberg Blocks Example

This plugin is based on The Gutenberg Examples, please refer to:
 * [Gutenberg](https://github.com/WordPress/gutenberg)
 * [Gutenberg Examples](https://github.com/WordPress/gutenberg-examples)
 * [Gutenberg developer documentation](https://wordpress.org/gutenberg/handbook/)
 * [wp-scripts documentation](https://developer.wordpress.org/block-editor/packages/packages-scripts/)

## What for ?

This plugin aims to provide a dead-simple bootstrap for people who want to experiment with Gutenberg blocks, without headaches or excessive code writing.

This plugin re-package the official ESNext Gutenberg examples in a simpler architecture, ready to hack into.

## No styling ?

This plugin has removed the styling handlers from the official Gutenberg examples. This was done for the following reasons:
 * In my opinion, styling (even block styling) should not be done in plugins, but at the theme level.
 * This bootstrap plugin is aimed to be used with an associated theme, which can provide frontend and editor styles globally and easily, without messing with the pure Blocks declarations.
 * Wordpress themes often use SCSS and/or LESS. This plugin show you the minimal requirements for ESNext Gutenberg blocks, adding SASS and/or LESS and/or minification handlers would add unnecessary dependencies and confusion to newcomers.
 * You can easily hack into this plugin to add your theming handlers if you want.

## How to use it ?

### Initialization

Use Npm:
```
npm install
```

### Compilation

Use the NPM task:
```
npm run build
```

The task will create a `build/` directory.

### Hacking
 * Add a .js file to the folder `source/` (see examples).
 * Compile the plugin with the NPM task (see above).
 * Send the plugin to the `wp-content/plugins` directory of your WordPress installation.
 * Activate the plugin, and add the blocks to as post. Search the blocks with the keyword `example`.

