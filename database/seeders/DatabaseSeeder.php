<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            ['name' => 'Administrator', 'email' => 'admin@gmail.com', 'role' => 'admin', 'password' => Hash::make('123')],
            ['name' => 'Pengguna', 'email' => 'user@gmail.com', 'role' => 'user', 'password' => Hash::make('123')],
        ];
        DB::table('users')->insert($users);
        $this->call(GejalaSeeder::class);
        $this->call(NamaPenyakitSeeder::class);
        $this->call(PengetahuanSeeder::class);
        $this->call(AnimasiSeeder::class);
    }
}
