<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilWeb extends Model
{
    use HasFactory;

    protected $table = 'profil_web';
    protected $fillable = ['nama_aplikasi','informasi_aplikasi','logo','alamat_lengkap','google_maps','no_telepon','email','facebook','instagram','youtube'];

}
