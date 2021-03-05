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
        $this->call(MaterialSeeder::class);
        $this->call(LibroSeeder::class);
        $this->call(ProfocomSeeder::class);
        $this->call(RevistaSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(TesisSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
