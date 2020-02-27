<?php

use Illuminate\Database\Seeder;

class Authors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            [
                'id' => '1',
                'name' => 'Author 1',
                'age' => '30',
            ],
            [
                'id' => '2',
                'name' => 'Author 2',
                'age' => '34',
            ],
            [
                'id' => '3',
                'name' => 'Author 3',
                'age' => '40',
            ],
            [
                'id' => '4',
                'name' => 'Author 4',
                'age' => '50',
            ],
        ];
        DB::table('authors')->insert($authors);
    }
}
