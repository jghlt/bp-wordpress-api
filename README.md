# bp-wordpress-api
Simple structured staring point for api-based wordPress builds. Project structure loosely based on [roots/bedrock](https://github.com/roots/bedrock).

## Features  
* api theme adapted to output json
* custom routing with Timber

## Requirements  
* php >= 7.1
* MySQL >= 4.0
* composer
* ACF pro license key


## Installation  
* `git clone git@github.com:jghlt/bp-wordpress-api.git`
* `cd bp-wordpress-api`
* rename `.env.example` to `.env` and fill out necessary config.
* add necessary salts to `config/config.php`
* run `composer install`
* rename `wp-config.example.php` to `wp-config.php` and move to `public/wp`
* set up the necessary hosts/vhosts
* visit `http://example.com/wp/wp-admin` and run through the install


## Usage  
* add routes here > `public/app/themes/api/routes.php`
* add methods here > `public/app/themes/api/project.php`
* routing docs [here](https://github.com/Upstatement/routes)
