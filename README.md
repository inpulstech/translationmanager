# translationmanager

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A quick interface to edit Laravel language files, for Dick Admin.


---------------------
**THERE ARE BETTER THINGS THAN DICK**
**The Dick project is no longer actively maintained. For important projects please use the new version: [Laravel Backpack](http://laravelbackpack.com).**
---------------------


## Install

### Step 1. Install via Composer

``` bash
$ composer require dick/translationmanager
```

### Step 2. Add the service provider 

In your config/app.php, add this to the providers array:

``` bash
'Dick\TranslationManager\TranslationManagerServiceProvider',
```

### Step 3. Run the migration and seed

``` bash
$ php artisan migrate --path=vendor/dick/translationmanager/src/database/migrations
$ php artisan db:seed --class="Dick\TranslationManager\database\seeds\LanguageTableSeeder"
```


## Usage

Tell TranslationManager what langfiles NOT to show, in config/admin.php, in the 'language_ignore' variable:

``` php
// Language files to NOT show in the Translation Manager
//
'language_ignore' => ['admin', 'pagination', 'reminders', 'validation', 'log', 'crud'],
```

Then add the menu elements for it, in config/admin.php in the 'menu' variable:

``` php
[
    'label' => "Translations",
    'route' => "",
    'icon' => 'fa fa-globe',
    'children' => [
        [
            'label' => "Languages",
            'route' => 'admin/language',
            'icon' => 'fa fa-flag-checkered',
        ],
        [
            'label' => "Site texts",
            'route' => 'admin/language/texts',
            'icon' => 'fa fa-language',
        ],
    ]
],
```

Or just try at **your-project-domain/admin/language/texts**

## Screenshots

See http://usedick.com

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.


## Testing

// TODO

``` bash
$ composer test
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Security

If you discover any security related issues, please email alin@updivision.com or hello@tabacitu.ro instead of using the issue tracker.


## Credits

- [Alin Ghitu][link-author]
- [Cristian Tabacitu][link-author-2]
- [All Contributors][link-contributors]


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/dick/translationmanager.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/dick/translationmanager/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/dick/translationmanager.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/dick/translationmanager.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/dick/translationmanager.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/dick/translationmanager
[link-travis]: https://travis-ci.org/dick/translationmanager
[link-scrutinizer]: https://scrutinizer-ci.com/g/dick/translationmanager/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/dick/translationmanager
[link-downloads]: https://packagist.org/packages/dick/translationmanager
[link-author]: https://github.com/ghitu
[link-author-2]: https://github.com/tabacitu
[link-contributors]: ../../contributors
