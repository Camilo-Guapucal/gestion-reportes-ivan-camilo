<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    
    public function run(): void
    {
       //Crear roles 
       Role::create(['name' => 'administrador']); 
       Role::create(['name' => 'egresado']);
    }
}
