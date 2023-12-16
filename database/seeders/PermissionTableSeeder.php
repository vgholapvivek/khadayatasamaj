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
            'adBanner-viewAny',
            'adBanner-delete',
            'adBanner-view',
            'adBanner-edit',
            'adBanner-create',
            'adBanner-restore',
            'adBanner-forceDelete',
            'adBanner-update',
            'adBanner-store',

        ];

        foreach ($data as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
