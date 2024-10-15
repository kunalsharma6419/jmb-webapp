<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed data for permissions
        $permissions = [
            ['title' => 'User_Management_Read'],
            ['title' => 'User_Management_Write'],
            ['title' => 'User_Management_Create'],
            ['title' => 'Content_Management_Read'],
            ['title' => 'Content_Management_Write'],
            ['title' => 'Content_Management_Create'],
            ['title' => 'Roles_Management_Read'],
            ['title' => 'Permissions_Management_Read'],
            ['title' => 'Roles_Management_Write'],
            ['title' => 'Roles_Management_Create'],
            ['title' => 'Permissions_Management_Create'],
            ['title' => 'Permissions_Management_Write'],
        ];

        // Insert permissions into the database
        DB::table('permissions')->insert($permissions);
    }
}
