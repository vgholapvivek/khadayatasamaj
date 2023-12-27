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

            'event-viewAny',
            'event-delete',
            'event-view',
            'event-edit',
            'event-create',
            'event-restore',
            'event-forceDelete',
            'event-update',
            'event-store',

            'seat-viewAny',
            'seat-delete',
            'seat-view',
            'seat-edit',
            'seat-create',
            'seat-restore',
            'seat-forceDelete',
            'seat-update',
            'seat-store',

            'event_booking-viewAny',
            'event_booking-delete',
            'event_booking-view',
            'event_booking-edit',
            'event_booking-create',
            'event_booking-restore',
            'event_booking-forceDelete',
            'event_booking-update',
            'event_booking-store',

        ];

        foreach ($data as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
