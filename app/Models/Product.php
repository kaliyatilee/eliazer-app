<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_id','category_id','name','decription','price', 'in_stock','bln_active','image_path_id','added_by','edited_by'
    ];
    
}
