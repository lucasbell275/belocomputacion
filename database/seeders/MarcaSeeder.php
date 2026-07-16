<?php

namespace Database\Seeders;
use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Marca::insert([
            ['nombre'=>'AMD', 'imagen'=>null],
            ['nombre'=>'Intel', 'imagen'=>null],
            ['nombre'=>'NVIDIA', 'imagen'=>null],
        ]);
    }
}
