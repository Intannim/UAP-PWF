<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $inputan['name'] = 'Nur Intan';
    $inputan['email'] = 'intannimghf48@gmail.com';
    $inputan['password'] = 'halohalo';
    $inputan['nip'] = '20310021';

    User::create($inputan);
    }
}
