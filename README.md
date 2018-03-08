# [BL4NK Bootstrap Edition 5](http://blank.vc)

Light, powerful and free template for Joomla!
for faster and easier web development.

## Install

Install it like a normal template in Joomla! backend. Then install [Node](http://nodejs.org/). This template will be built with [Gulp](http://gulpjs.com/). If you haven't used Gulp before, you need to install ``gulp`` global.

    npm install -g gulp

Open a terminal and go to the template folder.

    cd C:\xampp\htdocs\joomla\templates\frontend

Install Node dependencies.

    npm install

Open ``gulpfile.js`` and take a look at the serve function. The url should be match with your local Joomla installation, e.g.

    http://localhost/blank/

Run Gulp for build and minify.

    gulp

The building files are stored in folder /build in template directory. See gulpfile.js to recognize automation.

## Working files

* index.php
* js/script.js
* scss/\_custom.scss

## Functions

* Develop with bootstrap for responsive web design
* Scalable and customizable vector icons
* Customizable error, offline and print page

## Addons

* [Bootstrap 4.0](http://getbootstrap.com/)
* [Font Awesome 4.7.0](https://fortawesome.github.io/Font-Awesome/)

## Update

To keep your packages up to date install [npm-check-updates](https://www.npmjs.org/package/npm-check-updates).

    npm install -g npm-check-updates

Identify out of date packages and update all the versions in your ``package.json``.

    ncu -u

Install the new versions of your packages based on the updated ``package.json``.

    npm update

## Licence

The Blank Template is opensource software released under the [GPL](http://www.gnu.org/licenses/gpl-2.0.txt).

## Blank

Take a look at [Blank without Bootstrap](https://github.com/Bloggerschmidt/Blank).
