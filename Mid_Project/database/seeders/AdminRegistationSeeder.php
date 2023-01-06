<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin_registation;

class AdminRegistationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin_registation::factory()->create([
            'id'=> '1',
            'name'=> 'sanzidul',
            'phone'=> '01765532849',
            'email'=> 'sanzidulislam16a@email.com',
            'roll'=> 'admin',
            'password'=> '1234567',
        ]);
    }
}
