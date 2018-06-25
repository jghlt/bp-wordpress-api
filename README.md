# bp-wordpress-api
Simple structured staring point for api-based WordPress builds. Project structure loosely based on [roots/bedrock](https://github.com/roots/bedrock). The aim of this project is to provide a simple semi headless cms for when the WP Rest api is overkill.

## Features  
* api theme adapted to output json
* simple user defined routes
* caching with transients

## Requirements  
* php >= 7.1
* MySQL >= 4.0
* composer
* ACF pro license key

## Installation  
* `git clone git@github.com:jghlt/bp-wordpress-api.git`
* `cd bp-wordpress-api`
* rename `.env.example` to `.env` and fill out the necessary config
* add salts to `config/config.php`
* run `composer install`
* rename `wp-config.example.php` to `wp-config.php` and move to `public/wp`
* set up hosts/vhosts
* visit `http://example.com/wp/wp-admin` and run through the install

## Usage  
* add routes here > `public/app/themes/api/routes.php`
* add methods here > `public/app/themes/api/project.php`
* routing docs [here](https://github.com/Upstatement/routes)
