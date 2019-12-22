<?php

use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'テスト 太郎',
            'email' => 'abc001@a.com',
            'email_verified_at' => now(),
            'password' => bcrypt('abc001@a.com')
        ]);
    }
}
