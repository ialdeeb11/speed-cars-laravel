<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Model_year extends Model
{
    protected $table = 'models';


    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }



    public function car():HasMany

    {

        return $this->hasMany(Car::class);

    }


    protected $fillable = ['name','modelName','year','motorSize','gear','fuel','brand_id'];

    public $timestamps = false;
}
