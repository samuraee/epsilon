# epsilon
Epsilon is just a Laravel starter kit that comes with some utility packages I use in every project.

## What's in the Box?

Some highlights of what's included here:

- Devtools: 
  - [debugbar](https://github.com/barryvdh/laravel-debugbar)
  - [laravel-mail-preview](https://github.com/themsaid/laravel-mail-preview)
  - [laravel-tail](https://github.com/spatie/laravel-tail)
  
- [Laravel backup](https://docs.spatie.be/laravel-backup/v6/installation-and-setup)
- [Bugsnag](https://docs.bugsnag.com/platforms/php/laravel/) integration
- [PHP-CS fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
- A zero-downtime deploy script with [Envoy](https://laravel.com/docs/5.8/envoy)
- [Spatie laravel media library](https://docs.spatie.be/laravel-medialibrary)
- [Spatie laravel tags](https://docs.spatie.be/laravel-tags/)
- [Spatie eloquent sortable](https://github.com/spatie/eloquent-sortable)
- [Spatie artisan dd](https://github.com/spatie/laravel-artisan-dd)
- [Spatie laravel collection macros](https://github.com/spatie/laravel-collection-macros)
- [Spatie laravel db snapshots](https://github.com/spatie/laravel-db-snapshots)
- [Spatie laravel fractal](https://github.com/spatie/laravel-fractal)
- [Spatie laravel referer](https://github.com/spatie/laravel-referer)
- [Spatie regex](https://github.com/spatie/regex)
- [Laravel Translation Manager](https://github.com/barryvdh/laravel-translation-manager)

## Laravel Schedule

```php
// app/Console/Kernel.php

// added for daily backup
$schedule->command('backup:clean')->daily()->at('02:50');
$schedule->command('backup:run')->daily()->at('03:00');
```

## DB init migration

Added an init db migration for cases like Postgres extension activation

```
1981_09_21_000000_init_db.php
```