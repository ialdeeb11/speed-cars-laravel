<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            'carMake'=> 'Hyundai',
            'model'=>'Accent',
            'year'=>1995,
            'price'=>3000,
            'motorSize'=>1500,
            'gear'=>'Manual',
            'color'=>'White',
            'license'=>'Licensed',
            'fuel'=>'Gasoline',
            'used'=>'Used',
            'customs'=>'With Customs',
            'insurance'=>'Compulsory Insurance',
            'imagePath'=>'photos/accent 1995.jpg',
            'frontPage'=>0,
        ]);

        DB::table('cars')->insert([
            'carMake'=> 'Mitsubishi',
            'model'=>'Lancer',
            'year'=>1999,
            'price'=>5000,
            'motorSize'=>1500,
            'gear'=>'Automatic',
            'color'=>'Gray',
            'license'=>'Licensed',
            'fuel'=>'Gasoline',
            'used'=>'Used',
            'customs'=>'With Customs',
            'insurance'=>'Compulsory Insurance',
            'imagePath'=>'photos/lancer 1999.jpg',
            'frontPage'=>1,
        ]);

        DB::table('cars')->insert([
            'carMake'=> 'Hyundai',
            'model'=>'Accent',
            'year'=>2018,
            'price'=>12000,
            'motorSize'=>1800,
            'gear'=>'Automatic',
            'color'=>'Paige',
            'license'=>'Licensed',
            'fuel'=>'Gasoline',
            'used'=>'Used',
            'customs'=>'With Customs',
            'insurance'=>'Compulsory Insurance',
            'imagePath'=>'photos/accent 2018.jpg',
            'frontPage'=>1,
        ]);

        DB::table('cars')->insert([
            'carMake'=> 'BMW',
            'model'=>'320',
            'year'=>2010,
            'price'=>15000,
            'motorSize'=>2000,
            'gear'=>'Automatic',
            'color'=>'Silver',
            'license'=>'Licensed',
            'fuel'=>'Gasoline',
            'used'=>'Used',
            'customs'=>'With Customs',
            'insurance'=>'Compulsory Insurance',
            'imagePath'=>'photos/bmw320_2010.jpg',
            'frontPage'=>1,
        ]);

        DB::table('cars')->insert([
            'carMake'=> 'Toyota',
            'model'=>'Camry',
            'year'=>2010,
            'price'=>14000,
            'motorSize'=>2000,
            'gear'=>'Automatic',
            'color'=>'Red',
            'license'=>'Licensed',
            'fuel'=>'Hybrid',
            'used'=>'Used',
            'customs'=>'With Customs',
            'insurance'=>'Compulsory Insurance',
            'imagePath'=>'photos/toyota_camry2010.jpg',
            'frontPage'=>1,
        ]);

        DB::table('cars')->insert([
            'carMake'=> 'Honda',
            'model'=>'Civic',
            'year'=>2011,
            'price'=>11000,
            'motorSize'=>1800,
            'gear'=>'Automatic',
            'color'=>'Blue',
            'license'=>'Licensed',
            'fuel'=>'Gasoline',
            'used'=>'Used',
            'customs'=>'With Customs',
            'insurance'=>'Compulsory Insurance',
            'imagePath'=>'photos/hondacivic2011.jpg',
            'frontPage'=>1,
        ]);

        DB::table('cars')->insert([
            'carMake'=> 'Nissan',
            'model'=>'Sunny',
            'year'=>2006,
            'price'=>7000,
            'motorSize'=>1500,
            'gear'=>'Automatic',
            'color'=>'Black',
            'license'=>'Licensed',
            'fuel'=>'Gasoline',
            'used'=>'Used',
            'customs'=>'With Customs',
            'insurance'=>'Compulsory Insurance',
            'imagePath'=>'photos/2006-nissan-sunny.jpg',
            'frontPage'=>0,
        ]);

        DB::table('brands')->insert([
            'brandName'=> 'Hyundai',
            'imagePath'=>'photos/hyundailogo.jpg',
            'frontPage'=>1,
           
        ]);

        DB::table('brands')->insert([
            'brandName'=> 'Mitsubishi',
            'imagePath'=>'photos/mitsubishilogo.jpg',
            'frontPage'=>1,
           
        ]);

        DB::table('brands')->insert([
            'brandName'=> 'Honda',
            'imagePath'=>'photos/hondalogo.jpg',
            'frontPage'=>1,
           
        ]);

        DB::table('brands')->insert([
            'brandName'=> 'Nissan',
            'imagePath'=>'photos/nissanlogo.jpg',
            'frontPage'=>0,
           
        ]);

        DB::table('brands')->insert([
            'brandName'=> 'BMW',
            'imagePath'=>'photos/bmw-logo.jpg',
            'frontPage'=>0,
           
        ]);

        DB::table('brands')->insert([
            'brandName'=> 'Toyota',
            'imagePath'=>'photos/toyota-logo.jpg',
            'frontPage'=>0,
           
        ]);

        
    }
}

