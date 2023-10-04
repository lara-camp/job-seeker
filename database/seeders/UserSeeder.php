<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Type::isType('user')->where('name','admin')->first();

        $admin = User::create([
            'name' => 'admin',
            'phone' => '09987654321',
            'email' => 'admin@example.com',
            'password' => bcrypt('09987654321'),
            'type_id' => $admin->id,
        ])->assignRole('Admin')->givePermissionTo(Permission::all());

        $developer = Type::isType('user')->where('name','developer')->first();
        $developer = User::create([
            'name' => 'developer',
            'phone' => '09400123456',
            'email' => 'developer@example.com',
            'password' => bcrypt('09400123456'),
            'type_id' => $developer->id,
        ])->assignRole('Developer')->givePermissionTo(Permission::all());

        User::factory()->count(80)->create();
    }
}
