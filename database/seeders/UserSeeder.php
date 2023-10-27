<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
              'name' => 'Test User',
              'email' => 'user@app.com',
              'password' => bcrypt('password')
            ]
          ];

          foreach ($users as $user){
              User::create([
                  'name' => $user['name'],
                  'email' => $user['email'],
                  'password' => $user['password']
              ]);
          }
    }
}
