<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Compra;
use App\Models\DetallesCompra;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Funcion;


class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Compra::factory()->count(5)->create();
        for ($i=0; $i<5;$i++){
            Compra::factory()->count(1)->create();
            $j=random_int(1,4);
            $id = DB::getPdo()->lastInsertId();
            DetallesCompra::factory()->count($j)->create(['idCompra'=>$id]);
        }

    }
}
