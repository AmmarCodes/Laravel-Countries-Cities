World Countries & Cities
========================

A Laravel package for using world's popular countries and cities.

## Supports

- Laravel 5.5+

## Features

- Add the countries/cities to the database using migration and seeders.
- Use the countries/cities directly from the package without using the database.

## Installation

Require the package with composer:
```
composer require alakkad/world-countries-cities
```

The ServiceProvider will be added to the providers array in config/app.php through
auto-discovery

## Usage

### Migration

After running `php artisan vendor:publish` you can directly run:
```
php artisan migrate
```

### Seeders
In order to seed the migrated tables, you need to edit `database/seeds/DatabaseSeeder.php` and add the following lines:
```php
public function run()
{
    Model::unguard();

    $this->call('Jadsalhani\WorldCountriesCities\CitiesSeeder');
    $this->call('Jadsalhani\WorldCountriesCities\CountriesSeeder');
}
```

Then run:
```
php artisan db:seed
```

Be careful, the seeders files truncate the tables before inserting, to prevent any duplication.

### Direct usage

To be implementated.

---

## Credits

The data is based on MySQL's [world database example](https://dev.mysql.com/doc/world-setup/en/).

## License

MIT License

Copyright (c) 2017 Jad Salhani

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.