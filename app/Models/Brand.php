<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    public function car():HasMany

    {

        return $this->hasMany(Car::class);

    }

    public function model():HasMany

    {

        return $this->hasMany(Model_year::class);

    }

    protected $fillable = ['brandName','imagePath','frontPage'];

    public $timestamps = false;
}
