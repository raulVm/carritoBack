<?php

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert([
            ['id'=> 1, 'nombre' => 'Pan Blanco Bimbo', 'folio'=> '8d8sdf', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'precio' => 45],
            ['id'=> 2, 'nombre' => 'Bombones', 'folio'=> 'df93e', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'precio' => 14],
            ['id'=> 3, 'nombre' => 'Sabritas', 'folio'=> 'fdf923', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'precio' => 23],
            ['id'=> 4, 'nombre' => 'Paleta tutsi', 'folio'=> '8d3e23d', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'precio' => 10],
            ['id'=> 5, 'nombre' => 'Maruchan', 'folio'=> 'd32eds', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'precio' => 14],
            ['id'=> 6, 'nombre' => 'Coca Cola', 'folio'=> '98d8fs9', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'precio' => 28],
            ['id'=> 7, 'nombre' => 'Queso lala', 'folio'=> '0d9j9s0', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'precio' => 45],
            ['id'=> 8, 'nombre' => 'Agua', 'folio'=> 'ffsdufhs', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'precio' => 14],
            ['id'=> 9, 'nombre' => 'Vino', 'folio'=> '983hd', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'precio' => 240],
	    ]);
    }
}
