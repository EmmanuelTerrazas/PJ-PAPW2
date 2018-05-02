<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name'  => 'Bruno',
            'last_name'  => 'Díaz',
            'email'  => 'batman@gmail.com',
            'password' => bcrypt('secret'),
            'birthdate' => '1939-05-01',
            'type' => 'Administrador'
        ]);

        DB::table('categories')->insert(
            ['name' => 'Libros'],
            ['name' => 'Comics'],
            ['name' => 'Videojuegos'],
            ['name' => 'Películas'],
            ['name' => 'Series']
        );
    }
}
