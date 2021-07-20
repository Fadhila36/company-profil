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
        return $this->belongsTo('App\Models\Categories','category_id','id');
    }

    function gambar()
    {
        if ($this->gambar && file_exists(public_path('images/produk/' . $this->gambar)))
            return asset('images/produk/' . $this->gambar);
        else
            return asset('images/no_image.png');
    }

    function delete_gambar()
    {
        if ($this->gambar && file_exists(public_path('images/produk/' . $this->gambar)))
            return unlink(public_path('images/produk/' . $this->gambar));
    }
}
