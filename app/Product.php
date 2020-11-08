<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id', 'product_name', 'product_price', 'qty',  'category_id', 'created_at', 'updated_at'];
    protected $table = "products";

 public function category()
    {
      return $this->belongsTo(Category::class);
    }
 
    }
