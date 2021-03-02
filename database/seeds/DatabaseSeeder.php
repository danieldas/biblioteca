<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioSeeder::class);
        $this->call(AutorSeeder::class);
        $this->call(MateriaSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
