<?php

use Illuminate\Database\Seeder;
use App\Role;

class role_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => 1,
            'name' => 'Root',
            'description' => "Root Admin"
        ]);

        Role::create([
            'id' => 2,
            'name' => 'Admin',
            'description' => 'Administrator'
        ]);

        Role::create([
            'id' => 3,
            'name' => 'Reviewer',
            'description' => 'Reviewer'
        ]);

        Role::create([
            'id' => 4,
            'name' => 'Proposer',
            'description' => 'Submit proposals'
        ]);

    }
}
