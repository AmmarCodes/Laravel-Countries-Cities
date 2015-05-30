World Countries & Cities
========================

A Laravel package for using world's popular countries and cities.

## Features

- Add the countries/cities to the database using migration and seeders.
- Use the countries/cities directly from the package without using the database.

## Installation

Require the package with composer:
```
composer require alakkad/world-countries-cities
```

Add the ServiceProvider to the providers array in config/app.php
```
'Alakkad\WorldCountriesCities\WorldCountriesCitiesServiceProvider',
```

Copy the package config and migrations files to your local directories with:
```
php artisan vendor:publish
```

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

    $this->call('Alakkad\WorldCountriesCities\CitiesSeeder');
    $this->call('Alakkad\WorldCountriesCities\CountriesSeeder');
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
