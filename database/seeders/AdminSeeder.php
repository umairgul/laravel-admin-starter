<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
          [
            'name' => 'Admin',
            'email' => 'admin@app.com',
            'password' => bcrypt('password')
          ]
        ];

        foreach ($admins as $admin){
            Admin::create([
                'name' => $admin['name'],
                'email' => $admin['email'],
                'password' => $admin['password']
            ]);
        }
    }
}
