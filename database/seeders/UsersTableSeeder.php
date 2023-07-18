<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $admin = new User();
        $admin->name = 'Admin Example';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('123456');
        $admin->role_id = 1;
        $admin->save();

        $maintainer = new User();
        $maintainer->name = 'Maintainer Example';
        $maintainer->email = 'maintainer@example.com';
        $maintainer->password = bcrypt('123456');
        $maintainer->role_id = 2;
        $maintainer->save();

        $keeper = new User();
        $keeper->name = 'Keeper Example';
        $keeper->email = 'keeper@example.com';
        $keeper->password = bcrypt('123456');
        $keeper->role_id = 3;
        $keeper->save();
    }
}
