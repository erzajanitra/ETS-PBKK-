<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Record;
use App\Models\Pasien;
use App\Models\Dokter;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
     
          
        Pasien::create([
            'nama' => 'Okkotsu Yuuta',
            'tanggal lahir' => 'Jakarta, 20 Maret 2002',
            'jenis kelamin' => 'Laki-laki',
            'no hp' => '086271020108',
            'slug' => 'pasien-id-IX61292'
        ]);
        Pasien::create([
            'nama' => 'Febrila Lalala',
            'tanggal lahir' => 'Jakarta, 19 Maret 2019',
            'jenis kelamin' => 'Perempuan',
            'no hp' => '086271020108',
            'slug' => 'pasien-id-DS75892'
        ]);

        Dokter::create([
            'nama' => 'dr. Ririn',
            'spesialis' => 'Penyakit Dalam',
            'jenis kelamin' => 'Perempuan',
            'no hp' => '086271020108',
            'slug' => 'pasien-id-IX61292'
        ]);
        Dokter::create([
            'nama' => 'dr. Rara',
            'spesialis' => 'Penyakit Dalam',
            'jenis kelamin' => 'Perempuan',
            'no hp' => '086271020108',
            'slug' => 'pasien-id-DS75892'
        ]);
       Record::factory(5)->create();

    }
}
