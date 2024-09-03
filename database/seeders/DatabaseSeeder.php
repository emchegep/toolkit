<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user1 = User::factory()->create([
            'name' => 'peter kamau',
            'email' => 'emchegep@gmail.com',
            'is_admin' => true,
        ]);

        $user2 = User::factory()->create([
            'name' => 'Elvis Chege',
            'email' => 'elvis@gmail.com',
        ]);

        $admRole = Role::factory()->create([
            'name' => 'admin',
        ]);

        $employerRole = Role::factory()->create([
            'name' => 'employer',
        ]) ;

        $user1->roles()->attach($admRole);
        $user2->roles()->attach($employerRole);
        
        $this->call(JobSeeder::class);
    }
}
