<?php

use Illuminate\Database\Seeder;
use App\User;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([            
            [
                'name' => 'technician',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'researcher',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'manager',
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
    }
}
