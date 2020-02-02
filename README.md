# Arity

This is a custom theme created from our base skeleton theme called Arity.

To install the theme you have to install the npm packages to process the theme files. And then run a gulp build process to create/update the distribution files.

## Install NPM

To install NPM first open a terminal and navigate to the theme root directory e.g. /wp-content/themes/arity.

Then run `npm install` to download the required build packages.

Once complete there should be a node_modules directory in the theme directory.

## Run Gulp

Once you have npm installed you will need to run a gulp process to create the dist directory.

Again, make sure you are in the theme directory and then run `gulp build`.

Once that has completed you should find a directory called dist in theme directory.

## Notes

If you receive an error during the npm install or gulp build process make sure to carefully read the error message. Both tools are very good about giving you detailed information when an error occurs.