<?php

namespace Database\Seeders;

use App\Models\ProfilWeb;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfilWeb::truncate();
        ProfilWeb::create([
            'nama_aplikasi' => 'Company Profile',
            'informasi_aplikasi' => 'Web Company Profile',
            'logo' => 'logo.jpg',
            'alamat_lengkap' => 'Karawang',
            'google_maps' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.348068705383!2d107.4559896!3d-6.3827695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe025235fff961e9a!2sTambak%20Galian!5e0!3m2!1sid!2sid!4v1627800411565!5m2!1sid!2sid',
            'no_telepon' => '083123123213',
            'email' => 'admin@gmail.com',
            'facebook' => '',
            'instagram' => '',
            'youtube' => '',

        ]);
    }
}
