<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Model_year;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        
        Brand::insert([
            'brandName'=> 'Hyundai',
            'imagePath'=>'photos/hyundailogo.jpg',
            'frontPage'=>1,
           
        ]);

        Brand::insert([
            'brandName'=> 'Mitsubishi',
            'imagePath'=>'photos/mitsubishilogo.jpg',
            'frontPage'=>1,
           
        ]);

        Brand::insert([
            'brandName'=> 'Honda',
            'imagePath'=>'photos/hondalogo.jpg',
            'frontPage'=>1,
           
        ]);

        Brand::insert([
            'brandName'=> 'Nissan',
            'imagePath'=>'photos/nissanlogo.jpg',
            'frontPage'=>0,
           
        ]);

        Brand::insert([
            'brandName'=> 'BMW',
            'imagePath'=>'photos/bmw-logo.jpg',
            'frontPage'=>0,
           
        ]);

        Brand::insert([
            'brandName'=> 'Toyota',
            'imagePath'=>'photos/toyota-logo.jpg',
            'frontPage'=>0,
           
        ]);


    
        Model_year::insert([
            'brand_id'=>1,
            'name'=>'Accent1995',
            'modelName'=>'Accent',
            'year'=>1995,
            'motorSize'=>1500,
            'gear'=>'Manual',
            'fuel'=>'Gasoline',]);


        Model_year::insert([
            'brand_id'=>1,
            'name'=>'Accent2018',
            'modelName'=>'Accent',
            'year'=>2018,
            'motorSize'=>1800,
            'gear'=>'Automatic',
            'fuel'=>'Gasoline',]);
            
        Model_year::insert([
            'brand_id'=>2,
            'name'=>'Lancer1999',
            'modelName'=>'Lancer',
            'year'=>1999,
            'motorSize'=>1500,
            'gear'=>'Automatic',
            'fuel'=>'Gasoline',]);
            
        Model_year::insert([
            'brand_id'=>5,
            'name'=>'BMW320',
            'modelName'=>'320',
            'year'=>2010,
            'motorSize'=>2000,
            'gear'=>'Automatic',
            'fuel'=>'Gasoline',]);

        Model_year::insert([
            'brand_id'=>6,
            'name'=>'Camry2010',
            'modelName'=>'Camry',
            'year'=>2010,
            'motorSize'=>2000,
            'gear'=>'Automatic',
            'fuel'=>'Hybrid',]);

        Model_year::insert([
            'brand_id'=>3,
            'name'=>'Civic2011',
            'modelName'=>'Civic',
            'year'=>2011,
            'motorSize'=>1800,
            'gear'=>'Automatic',
            'fuel'=>'Gasoline',]);

        Model_year::insert([
            'brand_id'=>5,
            'name'=>'Sunny2006',
            'modelName'=>'Sunny',
            'year'=>2006,
            'motorSize'=>1500,
            'gear'=>'Automatic',
            'fuel'=>'Gasoline',]);

    

        Car::insert([
            'brand_id'=>1,
            'model_id'=>1,
            'price'=>3000,
            
           
            'color'=>'White',
            
            'used'=>'Used',
            'imagePath'=>'photos/accent 1995.jpg',
            'frontPage'=>0,
        ]);

        Car::insert([
            'brand_id'=>2,
            'model_id'=>3,
            'price'=>5000,
            
           
            'color'=>'Gray',
            
            'used'=>'Used',
            'imagePath'=>'photos/lancer 1999.jpg',
            'frontPage'=>1,
        ]);

        Car::insert([
            'brand_id'=>1,
            'model_id'=>2,
            'price'=>12000,
            
           
            'color'=>'Paige',
            
            'used'=>'Used',
            'imagePath'=>'photos/accent 2018.jpg',
            'frontPage'=>1,
        ]);

        Car::insert([
            'brand_id'=>5,
            'model_id'=>4,
            'price'=>15000,
            
           
            'color'=>'Silver',
            
            'used'=>'Used',
            'imagePath'=>'photos/bmw320_2010.jpg',
            'frontPage'=>1,
        ]);

        Car::insert([
            'brand_id'=>6,
            'model_id'=>5,
            'price'=>14000,
            
           
            'color'=>'Red',
            
            'used'=>'Used',
            'imagePath'=>'photos/toyota_camry2010.jpg',
            'frontPage'=>1,
        ]);

        Car::insert([
            'brand_id'=>3,
            'model_id'=>6,
            'price'=>11000,
            
           
            'color'=>'Blue',
            
            'used'=>'Used',
            'imagePath'=>'photos/hondacivic2011.jpg',
            'frontPage'=>1,
        ]);

        Car::insert([
            'brand_id'=>4,
            'model_id'=>7,
            'price'=>7000,
            
           
            'color'=>'Black',
            
            'used'=>'Used',
            'imagePath'=>'photos/2006-nissan-sunny.jpg',
            'frontPage'=>0,
        ]);


        
    }
}

