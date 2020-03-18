<?php

use Illuminate\Database\Seeder;
use App\Models\ModelBook;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title' => 'Os Videntes',
            'pages' => '500',
            'price' => '30.00',
            'id_user' => '1'
        ]);


        $book->create([
            'title' => 'Os Videntes 2',
            'pages' => '500',
            'price' => '40.00',
            'id_user' => '1'
        ]);
    }
}
