<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viewsProduct extends Model
{
    use HasFactory;
    protected $fillable = ['views'];
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(product::class, 'product_id');
    }
}
