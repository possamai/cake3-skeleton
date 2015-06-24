# CakePHP Application Skeleton

[![Build Status](https://api.travis-ci.org/cakephp/app.png)](https://travis-ci.org/cakephp/app)
[![License](https://poser.pugx.org/cakephp/app/license.svg)](https://packagist.org/packages/cakephp/app)

A custom skeleton for creating applications with [CakePHP](http://cakephp.org) 3.0.

This custom skeleton is based on it´s original source wich can be found in https://github.com/cakephp/app

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run
```bash
composer create-project --prefer-dist andrecavallari/cake3-skeleton [app_name]
```

You should now be able to visit the path to where you installed the app and see
the setup traffic lights.

## Configuration

You should edit the configuration for each environment (development and production)
You can create your own environment by copying the development or production  and modifying
whatever you need.

To change the environment configuration you should open the file webroot/index.php and change the line
``` PHP
define('CAKE_ENVIRONMENT', 'development');
```
to
``` PHP
define('CAKE_ENVIRONMENT', 'mycustonconfig');
```

Remember: The default environments are development and production, and the development files should not
be deployed to production server.

