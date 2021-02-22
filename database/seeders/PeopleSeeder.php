<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert(
            [
                [
                    'name' => "Youssef",
                    'age' => 23,
                    'email' => "YouYou23@gamil.com",
                    'phone' => "0478/45.12.97"

                ],
                [
                    'name' => "Theo",
                    'age' => 27,
                    'email' => "Theo23@gamil.com",
                    'phone' => "0478/47.72.97"

                ],
                [
                    'name' => "Assma",
                    'age' => 22,
                    'email' => "Assma23@gamil.com",
                    'phone' => "0477/45.12.97"

                ],
                [
                    'name' => "Paul",
                    'age' => 23,
                    'email' => "Paul23@gamil.com",
                    'phone' => "0488/45.12.97"

                ]
            ]
        );
    }
}
