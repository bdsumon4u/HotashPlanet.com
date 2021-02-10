<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        foreach (config('permissions') as $group => $actions) {
            $values = collect($actions)
                ->map(function ($action) use ($group) {
                    return compact('group', 'action');
                })->toArray();

            DB::table('permissions')->insertOrIgnore($values);
            cache()->forget('permissions');
        }
    }
}
