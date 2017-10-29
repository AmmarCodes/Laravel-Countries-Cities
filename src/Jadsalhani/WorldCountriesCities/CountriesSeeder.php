<?php
namespace Alakkad\WorldCountriesCities;

use Illuminate\Database\Seeder;
use Exception;
use Config;
use DB;

class CountriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('countries')->delete();
        $countries = Config::get('countries');
        if (!$countries) {
            throw new Exception("Countries config file doesn't exists or empty, did you run: php artisan vendor:publish?");
        }
        DB::table('countries')->insert($countries);
    }
}
