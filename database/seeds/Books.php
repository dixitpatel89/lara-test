<?php

use Illuminate\Database\Seeder;

class Books extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'id' => '1',
                'name' => 'Book 1',
                'price' => '100',
            ],
            [
                'id' => '2',
                'name' => 'Book 2',
                'price' => '200',
            ],
            [
                'id' => '3',
                'name' => 'Book 3',
                'price' => '300',
            ],
            [
                'id' => '4',
                'name' => 'Book 4',
                'price' => '400',
            ],
        ];
        DB::table('books')->insert($books);

    }
}
