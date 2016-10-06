# Lumen Starter

## Installation

Pretty straight forward, clone the repo, install your deps, populate the `.env` info and you're pretty much set.

Be sure to run `composer install` & `npm install`.

There is a wildcard route to the PagesController that loads a view from `resources/views/templates` and looks for a file name that matches the page. `sample.blade.php` is provided for the `\sample` route.

Any additional routes need to be added above the wildcard.

## Config
An example `.env` file is included, be sure to change out the dummy data with your environment data.

Update `gulpfile.js` for the BrowserSync config.

## SASS & JS
Elixir has been added along with some basic SASS variables, functions & mixins.

Rollup is used to compile the JS into one pretty little file.

Run `gulp watch` for some BrowserSync action.
