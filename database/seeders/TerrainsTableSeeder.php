<?php

namespace Database\Seeders;

use App\Models\Terrain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Double;

class TerrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Terrain::factory(10)->create();
    }
    private function randomFloat($min, $max)
    {
        $randomFloat = $min + mt_rand() / mt_getrandmax() * ($max - $min);
        return number_format($randomFloat, 2, '.', '');
    }
}
