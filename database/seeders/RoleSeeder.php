<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insertOrIgnore([
            [
                'name' => 'aDmiN',
                'action' => 'admin',
            ],
            [
                'name' => 'Subscriber',
                'action' => 'subscriber',
            ],
        ]);
    }
}
