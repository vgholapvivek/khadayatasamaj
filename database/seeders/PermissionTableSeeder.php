<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'event-viewAny',
            'event-delete',
            'event-view',
            'event-edit',
            'event-create',
            'event-restore',
            'event-forceDelete',
            'event-update',
            'event-store',

        ];

        foreach ($data as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
