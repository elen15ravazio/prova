<?php

use Illuminate\Database\Seeder;
use App\User;

class usuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        User::create([
            'name' => 'Tiago',
            'email' => 'tiago.rios@ibiruba.ifrs.edu.br',
            'password' => bcrypt('tiago'),
        ]);
    }
}
