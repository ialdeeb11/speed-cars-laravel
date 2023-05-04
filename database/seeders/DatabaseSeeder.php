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



        DB::table('cars')->insert([
            'brandID'=>1,
            'model'=>'Accent',
            'year'=>1995,
            'price'=>3000,
            'motorSize'=>1500,
            'gear'=>'Manual',
            'color'=>'White',
            'fuel'=>'Gasoline',
            'used'=>'Used',
            'imagePath'=>'photos/accent 1995.jpg',
            'frontPage'=>0,
        ]);

        DB::table('cars')->insert([
            'brandID'=>2,
            'model'=>'Lancer',
            'year'=>1999,
            'price'=>5000,
            'motorSize'=>1500,
            'gear'=>'Automatic',
            'color'=>'Gray',
            'fuel'=>'Gasoline',
            'used'=>'Used',
            'imagePath'=>'photos/lancer 1999.jpg',
            'frontPage'=>1,
        ]);

        DB::table('cars')->insert([
            'brandID'=>1,
            'model'=>'Accent',
            'year'=>2018,
            'price'=>12000,
            'motorSize'=>1800,
            'gear'=>'Automatic',
            'color'=>'Paige',
            'fuel'=>'Gasoline',
            'used'=>'Used',
            'imagePath'=>'photos/accent 2018.jpg',
            'frontPage'=>1,
        ]);

        DB::table('cars')->insert([
            'brandID'=>5,
            'model'=>'320',
            'year'=>2010,
            'price'=>15000,
            'motorSize'=>2000,
            'gear'=>'Automatic',
            'color'=>'Silver',
            'fuel'=>'Gasoline',
            'used'=>'Used',
            'imagePath'=>'photos/bmw320_2010.jpg',
            'frontPage'=>1,
        ]);

        DB::table('cars')->insert([
            'brandID'=>6,
            'model'=>'Camry',
            'year'=>2010,
            'price'=>14000,
            'motorSize'=>2000,
            'gear'=>'Automatic',
            'color'=>'Red',
            'fuel'=>'Hybrid',
            'used'=>'Used',
            'imagePath'=>'photos/toyota_camry2010.jpg',
            'frontPage'=>1,
        ]);

        DB::table('cars')->insert([
            'brandID'=>3,
            'model'=>'Civic',
            'year'=>2011,
            'price'=>11000,
            'motorSize'=>1800,
            'gear'=>'Automatic',
            'color'=>'Blue',
            'fuel'=>'Gasoline',
            'used'=>'Used',
            'imagePath'=>'photos/hondacivic2011.jpg',
            'frontPage'=>1,
        ]);

        DB::table('cars')->insert([
            'brandID'=>4,
            'model'=>'Sunny',
            'year'=>2006,
            'price'=>7000,
            'motorSize'=>1500,
            'gear'=>'Automatic',
            'color'=>'Black',
            'fuel'=>'Gasoline',
            'used'=>'Used',
            'imagePath'=>'photos/2006-nissan-sunny.jpg',
            'frontPage'=>0,
        ]);


        
    }
}

