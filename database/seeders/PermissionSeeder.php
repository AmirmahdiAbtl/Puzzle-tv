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
     */
    public function run()
    {
        
        DB::table('permissions')->insert([
            'name' => 'user CRUD',
            'persian_name' => 'مدیریت کاربران',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'file CRUD',
            'persian_name' => 'مدیریت فایل',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'admin dashboard',
            'persian_name' => 'دسترسی به داشبورد ادمین',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'permission CRUD',
            'persian_name' => 'مدیریت نقش ها و دسترسی ها',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'video CRUD',
            'persian_name' => 'مدیریت ویدیو ها',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'course CRUD',
            'persian_name' => 'مدیریت دوره‌ها',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('permissions')->insert([
            'name' => 'category CRUD',
            'persian_name' => 'مدیریت دسته‌بندی‌ها',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => '1',
            'role_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => '2',
            'role_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => '3',
            'role_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => '4',
            'role_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => '5',
            'role_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => '6',
            'role_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('permission_role')->insert([
            'permission_id' => '7',
            'role_id' => '1',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

    }
}
