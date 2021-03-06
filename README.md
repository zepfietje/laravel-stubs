[![Packagist Version](https://img.shields.io/packagist/v/zepfietje/laravel-stubs)](https://packagist.org/packages/zepfietje/laravel-stubs)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zepfietje/laravel-stubs)](https://packagist.org/packages/zepfietje/laravel-stubs/stats)
[![Starware](https://img.shields.io/badge/⭐-Starware-f5a91a?labelColor=black)](https://github.com/zepfietje/starware)

# Laravel Stubs

This package contains clean versions of the stubs shipped with Laravel.  
Most notably:

- Type declarations are used instead of DocBlocks.
- Controllers don't extend a base controller.
- Migrations don't have a `down` method.
- Model attributes aren't guarded.
- Form requests don't have an `authorize` method.

## Installation

1. Install this package.
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
