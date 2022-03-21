<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Tenant\Database\Seeders\TenantDatabaseSeeder;
use Modules\User\Database\Seeders\UserDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // permission seeder
        $this->call(UserDatabaseSeeder::class);
        // tenant seeder
        $this->call(TenantDatabaseSeeder::class);
    }
}
