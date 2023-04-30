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

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        for ($i=0; $i<5;$i++){
            Compra::factory()->count(1)->create();
            $detallesACrear=random_int(1,4);
            $id = DB::getPdo()->lastInsertId();
            DetallesCompra::factory()->count($detallesACrear)->create(['idCompra'=>$id]);
        }
    }
}
