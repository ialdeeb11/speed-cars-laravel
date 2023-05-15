<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }


    public function model(): BelongsTo
    {
        return $this->belongsTo(Model_year::class,'model_id');
    }


    protected $fillable = ['brand_id','model_id','price','color','used','imagePath','frontPage'];

    public $timestamps = false;
}



