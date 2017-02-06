<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = $users = factory(User::class)->times(50)->make();
        User::insert($users->toArray());

        $user = User::find(1);
        $user->name = 'Shaoye';
        $user->email = '183610562@qq.com';
        $user->password = 'password';
        $user->is_admin = true;
        $user->activated = true;
        $user->save();
    }
}
