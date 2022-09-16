<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                "name" => "Gabriel Ruiz",
                "age" => "21",
                "instagram" => "@GobsRuiz",
                "interest" => "null",
            ],
            [
                "name" => "Paulo Talarico",
                "age" => "21",
                "instagram" => "@Paulinho",
                "interest" => "null",
            ],
            [
                "name" => "Miguel Santos",
                "age" => "20",
                "instagram" => "@Miguer",
                "interest" => "null",
            ],
            [
                "name" => "Vitor Lucenti",
                "age" => "20",
                "instagram" => "@Vitinho",
                "interest" => "null",
            ],
        ];


        foreach ($array as $value) {
            User::create($value);
        }
    }
}
