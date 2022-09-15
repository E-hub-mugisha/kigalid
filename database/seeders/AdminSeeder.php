<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // gets all permissions via Gate::before rule; see AuthServiceProvider
        Role::create(['name' => 'admin']);

        $admin = User::create([
            'first_name' => 'eric',
            'last_name' => 'kabosi',
            'username' => 'mugisha',
            'email' => 'kabosierik@gmail.com',
            'phone' => '0505050505',
            'password' => bcrypt('12345678'),
            'email_verified_at' => Carbon::now(),
        ]);

        $admin->assignRole('admin');
    }
}
