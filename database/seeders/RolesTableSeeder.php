<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $role_admin = new Role();
        $role_admin->id = 1;
        $role_admin->name = 'admin';
        $role_admin->description = 'An admin user';
        $role_admin->save();

        $role_author = new Role();
        $role_author->id = 2;
        $role_author->name = 'maintainer';
        $role_author->description = 'A maintainer user';
        $role_author->save();

        $role_user = new Role();
        $role_user->id = 3;
        $role_user->name = 'keeper';
        $role_user->description = 'A inventory keeper';
        $role_user->save();
    }
}
