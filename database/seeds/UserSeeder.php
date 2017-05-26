<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::unguard();
        $this->truncateUsers();
        $this->createUsers();
        User::reguard();
    }

    /**
     * Truncate table
     *
     * @return void
     */
    protected function truncateUsers()
    {
        $this->command->info('Users truncated!');
        User::truncate();
    }

    /**
     * Create custom products
     *
     * @return void
     */
    public function createUsers()
    {
        $this->command->info('Users seeded!');
        User::insert([
            [
                'id' => 1,
                'name' => "admin",
                'email' => "admin@prueba.com",
                'password' => Hash::make('123456'),
                'remember_token' => "",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
