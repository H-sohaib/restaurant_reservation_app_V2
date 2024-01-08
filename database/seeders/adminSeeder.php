<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminseed = [
            [
                'name' => 'test',
                'email' => 'test@test.com',
                'password' => Hash::make('test'),
                'remember_token' => Str::random(10),
                'is_admin' => True,
            ]
        ];
        foreach ($adminseed as $key => $value) {
            User::create($value);
        };
    }
}
