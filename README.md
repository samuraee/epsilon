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


## Laravel Schedule

```php
// app/Console/Kernel.php

// added for backup
$schedule->command('backup:clean')->daily()->at('02:50');
$schedule->command('backup:run')->daily()->at('03:00');
```