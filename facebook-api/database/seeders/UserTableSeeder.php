<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $$users = [
            ['name' => 'John', 'email' => 'john@example.com', 'password'  => 'john213'],
            ['name' => 'JohnDue', 'email' => 'johnDue@example.com', 'password'  => 'johnDue213'],
            ['name' => 'JohnSmith', 'email' => 'johnsmith@example.com', 'password'  => 'johnSmith213'],
            ['name' => 'JohnWick', 'email' => 'johnwick@example.com', 'password'  => 'johnwick213'],
            ['name' => 'JohnRak', 'email' => 'johnrak@example.com', 'password'  => 'johnrak213'],
            ['name' => 'Goerge', 'email' => 'goerge@example.com', 'password'  => 'goerge213'],
            ['name' => 'Hay', 'email' => 'hay@example.com', 'password'  => 'hay213'],
            ['name' => 'Net', 'email' => 'net@example.com', 'password'  => 'net213'],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
