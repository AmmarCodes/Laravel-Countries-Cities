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

Copy the package config to your local config with the publish command:
```
php artisan vendor:publish
```

## Usage

### Migration and seeders

### Direct usage


---

## Credits

The data is based on MySQL's [world database example](https://dev.mysql.com/doc/world-setup/en/).
