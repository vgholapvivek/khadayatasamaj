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
            
            'adBanner1-viewAny',
            'adBanner1-delete',
            'adBanner1-view',
            'adBanner1-edit',
            'adBanner1-create',
            'adBanner1-restore',
            'adBanner1-forceDelete',
            'adBanner1-update',
            'adBanner1-store',

        ];

        foreach ($data as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
