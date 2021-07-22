<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $primarykey='id';
    protected $fillable = ['nama_produk','category_id','harga','satuan','gambar'];

    public function categories()
    {
        return $this->belongsTo('App\Models\Categories','category_id');
    }

}
