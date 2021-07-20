<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $primarykey='id';
    protected $fillable = ['nama_kategori'];

    public function allProducts()
    {
        return $this->belongsToMany('App\Models\Product','products','category_id');
    }
}
