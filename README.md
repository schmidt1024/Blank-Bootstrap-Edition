# [BL4NK Bootstrap Edition](http://blank.vc)

Light, powerful and free template for Joomla!™
for faster and easier web development.

## Install

Install it like a normal template in Joomla!™ backend. Then install [Node.js®](http://nodejs.org/). This template will be built with [Gulp](http://gulpjs.com/). If you haven't used Gulp before, you need to install ``gulp`` global.

    npm install gulp-cli -g

Open a terminal and go to the template folder.

    cd C:\xampp\htdocs\joomla\templates\frontend

Install Node.js® dependencies.

    npm install

Open ``gulpfile.js`` and take a look at the serve function. The url should be match with your local Joomla!™ installation, e.g.

    http://localhost/blank/

Run Gulp for build and minify.

    gulp

The building files are stored in folder /build in template directory and a zip package will be created one directory above, the level of the template folders. See gulpfile.js to recognize automation.

## Working files

* index.php
* js/script.js
* scss/\_custom.scss

## Functions

* Develop with bootstrap for responsive web design
* Scalable and customizable vector icons
* Customizable error, offline and print page

## Addons

* [Bootstrap](http://getbootstrap.com/)
* [Font Awesome](https://fortawesome.github.io/Font-Awesome/)

## Tutorial

There is a [Bootstrap tutorial](https://docs.blank.rocks/bootstrap-tutorial) for beginners and new Joomla!™ developers.

## Update

To keep your packages up to date install [npm-check-updates](https://www.npmjs.org/package/npm-check-updates).

    npm install -g npm-check-updates

Identify out of date packages and update all the versions in your ``package.json``.

    ncu -u

Install the new versions of your packages based on the updated ``package.json``.

    npm update

## Licence

The BL4NK Template is opensource software released under the [GPL](http://www.gnu.org/licenses/gpl-2.0.txt).

## BL4NK

Take a look at [BL4NK \(without Bootstrap\)](https://github.com/Bloggerschmidt/Blank) and the [full documentation](https://docs.blank.rocks/) of it.
