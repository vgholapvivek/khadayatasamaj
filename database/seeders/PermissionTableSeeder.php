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
            'matrimonial-viewAny',
            'matrimonial-delete',
            'matrimonial-view',
            'matrimonial-edit',
            'matrimonial-create',
            'matrimonial-restore',
            'matrimonial-forceDelete',
            'matrimonial-update',
            'matrimonial-store',
            
        ];

        foreach ($data as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
