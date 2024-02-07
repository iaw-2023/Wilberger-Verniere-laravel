<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::truncate();
        Permission::truncate();

        $superadmin = Role::create(['name' => 'superadmin']);
        $adminFunciones = Role::create(['name' => 'adminFunc']);
        $adminSalas = Role::create(['name' => 'adminSala']);
        $adminGenerosPeliculas = Role::create(['name' => 'adminGyP']);

        $compraIndex = Permission::create(['name' => 'compra.index']); // Permiso para listar compras
        $compraCreate = Permission::create(['name' => 'compra.create']); // Permiso para ver la ventana de creacion de una compra
        $compraStore = Permission::create(['name' => 'compra.store']); // Permiso para registrar una compra 
        $compraShow = Permission::create(['name' => 'compra.show']); // Permiso para ver una compra en particular 
        $compraEdit = Permission::create(['name' => 'compra.edit']); // Permiso para ver la ventana de modificacion de una compra
        $compraUpdate = Permission::create(['name' => 'compra.update']); // Permiso para modificar una compra
        $compraDestroy = Permission::create(['name' => 'compra.destroy']); // Permiso para eliminar una compra

        $funcionIndex = Permission::create(['name' => 'funcion.index']); // Permiso para listar funciones
        $funcionCreate = Permission::create(['name' => 'funcion.create']); // Permiso para ver la ventana de creacion de una funcion
        $funcionStore = Permission::create(['name' => 'funcion.store']); // Permiso para registrar una funcion
        $funcionShow = Permission::create(['name' => 'funcion.show']); // Permiso para ver una funcion en particular 
        $funcionEdit = Permission::create(['name' => 'funcion.edit']); // Permiso para ver la ventana de modificacion de una funcion
        $funcionUpdate = Permission::create(['name' => 'funcion.update']); // Permiso para modificar una funcion
        $funcionDestroy = Permission::create(['name' => 'funcion.destroy']); // Permiso para eliminar una funcion
        
        $salaIndex = Permission::create(['name' => 'sala.index']); // Permiso para listar salas
        $salaCreate = Permission::create(['name' => 'sala.create']); // Permiso para ver la ventana de creacion de una sala 
        $salaStore = Permission::create(['name' => 'sala.store']); // Permiso para registrar una sala
        $salaShow = Permission::create(['name' => 'sala.show']); // Permiso para ver un sala en particular 
        $salaEdit = Permission::create(['name' => 'sala.edit']); // Permiso para ver la ventana de modificacion de una sala
        $salaUpdate = Permission::create(['name' => 'sala.update']); // Permiso para modificar una sala
        $salaDestroy = Permission::create(['name' => 'sala.destroy']); // Permiso para eliminar una sala
        
        $generoIndex = Permission::create(['name' => 'genero.index']); // Permiso para listar generos
        $generoCreate = Permission::create(['name' => 'genero.create']); // Permiso para ver la ventana de creacion de genero 
        $generoStore = Permission::create(['name' => 'genero.store']); // Permiso para registrar una genero
        $generoShow = Permission::create(['name' => 'genero.show']); // Permiso para ver una genero en particular 
        $generoEdit = Permission::create(['name' => 'genero.edit']); // Permiso para ver la ventana de modificacion de genero
        $generoUpdate = Permission::create(['name' => 'genero.update']); // Permiso para modificar una genero
        $generoDestroy = Permission::create(['name' => 'genero.destroy']); // Permiso para eliminar una genero

        $peliculaIndex = Permission::create(['name' => 'pelicula.index']); // Permiso para listar peliculas
        $peliculaCreate = Permission::create(['name' => 'pelicula.create']); // Permiso para ver la ventana de creacion de una pelicula 
        $peliculaStore = Permission::create(['name' => 'pelicula.store']); // Permiso para registrar una pelicula
        $peliculaShow = Permission::create(['name' => 'pelicula.show']); // Permiso para ver una pelicula en particular 
        $peliculaEdit = Permission::create(['name' => 'pelicula.edit']); // Permiso para ver la ventana de modificacion de una pelicula
        $peliculaUpdate = Permission::create(['name' => 'pelicula.update']); // Permiso para modificar una pelicula
        $peliculaDestroy = Permission::create(['name' => 'pelicula.destroy']); // Permiso para eliminar una pelicula
        
        $ordenIndex = Permission::create(['name' => 'orden.index']); // Permiso para listar ordenes
        $ordenCreate = Permission::create(['name' => 'orden.create']); // Permiso para ver la ventana de creacion de una orden 
        $ordenStore = Permission::create(['name' => 'orden.store']); // Permiso para registrar una orden
        $ordenShow = Permission::create(['name' => 'orden.show']); // Permiso para ver una orden en particular 
        $ordenEdit = Permission::create(['name' => 'orden.edit']); // Permiso para ver la ventana de modificacion de una orden
        $ordenUpdate = Permission::create(['name' => 'orden.update']); // Permiso para modificar una orden
        $ordenDestroy = Permission::create(['name' => 'orden.destroy']); // Permiso para eliminar una orden
        
        $superadmin->syncPermissions(

        );
        
        $adminFunciones->syncPermissions(

        );

        $adminSalas->syncPermissions(

        );

        $adminGenerosPeliculas->syncPermissions(

        );
    }
}