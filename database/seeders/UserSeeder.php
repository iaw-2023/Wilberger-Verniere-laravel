<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => "Admin",
            'email'=>"admin@iaw.com",            
            'password'=>Hash::make('admin123'),
            'rol'=>"SUPER_ADMIN",
        ])->assignRole('superadmin');

        DB::table('users')->insert([
            'name' => "FuncionAdmin",
            'email'=>"funcionAdmin@iaw.com",            
            'password'=>Hash::make('admin234'),
            'rol'=>"ADMIN",
        ])->assignRole('adminFunciones');

        DB::table('users')->insert([
            'name' => "SalaAdmin",
            'email'=>"salaAdmin@iaw.com",            
            'password'=>Hash::make('admin456'),
            'rol'=>"ADMIN",
        ])->assignRole('adminSalas');

        DB::table('users')->insert([
            'name' => "GenyPelAdmin",
            'email'=>"generoypeliculaAdmin@iaw.com",            
            'password'=>Hash::make('admin567'),
            'rol'=>"ADMIN",
        ])->assignRole('adminGenerosPeliculas');
    }
}
