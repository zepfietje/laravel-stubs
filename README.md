[![Packagist Version](https://img.shields.io/packagist/v/zepfietje/laravel-stubs)](https://packagist.org/packages/zepfietje/laravel-stubs)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zepfietje/laravel-stubs)](https://packagist.org/packages/zepfietje/laravel-stubs/stats)

# Laravel Stubs

This package contains clean versions of the stubs shipped with Laravel.  
Most notably:

- Type declarations are used instead of DocBlocks.
- Controllers don't extend a base controller.

## Installation

1. Install this package:
   ```bash
   composer require zepfietje/laravel-stubs --dev
   ```
2. Add the following hook to the scripts in `composer.json` to keep your stubs in sync with updates to this package:
   ```json
   "post-update-cmd": [
       "@php artisan stub:publish --force"
   ]
   ```
3. Publish the stubs:
   ```bash
   php artisan stub:publish
   ```
