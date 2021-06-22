<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name' => 'Emilio Contreras',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'fullacces' => 'yes',
            'codigo' => 'adm1',
        ]);
        $user1=User::create([
            'name' => 'Luis Marina',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user'),
            'fullacces' => 'no',
            'codigo' => 'casa1',
        ]);
    }
}
