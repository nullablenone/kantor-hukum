<?php

namespace Database\Seeders;

use App\Models\Pengacara;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengacaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengacara::create([
            'nama'=> 'Sandra Walton',
            'gelar'=> 'CEO SomeCompany',
            'deskripsi'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, hic temporibus vero nobis quam quisquam!',
        ]);
    }
}
