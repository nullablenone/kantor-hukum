<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\LayananSeeder;
use Database\Seeders\PengacaraSeeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $hapusfoto = Storage::allFiles('foto');
        Storage::delete($hapusfoto);
        // User::factory(10)->create();
        $this->call([
            LayananSeeder::class,
            PengacaraSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
