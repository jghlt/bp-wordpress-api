# bp-wordpress-api
Simple structured staring point for semi-headless wordPress builds, loosely based on [roots/bedrock](https://github.com/roots/bedrock).

## Requirements

* php >= 7.1
* composer
* ACF pro license & key


## Features

* semi headless wordPress
* api theme adapted to output json
* custom routing api with Timber


## Installation

* `git clone git@github.com:jghlt/bp-wordpress-api.git`
* cd bp-wordpress-api
* rename .env.example to .env and fill out necessary config.
* add salts to `config/config.php`
* run `composer install`


## Usage

* add routes here > `public/app/themes/api/api_routes.php`
* add methods here > `public/app/themes/api/api_project.php`
* routing docs [here](https://github.com/Upstatement/routes)
