[![Packagist Version](https://img.shields.io/packagist/v/zepfietje/laravel-stubs)](https://packagist.org/packages/zepfietje/laravel-stubs)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zepfietje/laravel-stubs)](https://packagist.org/packages/zepfietje/laravel-stubs/stats)
[![Starware](https://img.shields.io/badge/Starware-%E2%AD%90-black?labelColor=%23f9b00d)](https://github.com/zepfietje/starware)

# Laravel Stubs

This package contains clean versions of the stubs shipped with Laravel.  
Most notably:

- Type declarations are used instead of DocBlocks.
- Migrations don't have a `down` method.
- Form requests don't have an `authorize` method.
- Controllers don't extend a base controller.

## Installation

1. Install the package.
   ```console
   $ composer require zepfietje/laravel-stubs --dev
   ```
2. Add the following hook to the scripts in `composer.json` to keep your stubs in sync with updates to this package.
   ```
   "post-update-cmd": [
       "@php artisan stub:publish --force"
   ]
   ```
3. Publish the stubs.
   ```console
   $ php artisan stub:publish
   ```

## Starware

Laravel Stubs is Starware.  
This means you're free to use the project, as long as you star its GitHub repository.  
Your appreciation makes us grow and glow up. ⭐
