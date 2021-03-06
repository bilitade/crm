<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role=Role::updateOrCreate(
            ['name' => "admin"],
        );
     \App\Models\User::factory(1)->create()->each(function ($user){

      $user->assignRole('admin');

     });
    }
}
