<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
            'name' => 'kirito',
            'direccion'=>'america',
            'celular'=>'67916744',
            'telefono'=>'262-24545',
            'telf_ref'=>'26276162 o 6791674',
            'contact_referencia'=>'carlos',
            'parentesco'=>'hermano',
            'email' => 'root@admin.com',
            'password' => bcrypt('admin'),

        ]);
    }
}
