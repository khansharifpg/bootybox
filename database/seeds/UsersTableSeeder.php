<?php
use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->role_id = 1;
        $user->name ='Md.Admin';
        $user->username ='admin';
        $user->email ='admin@gmail.com';
        $user->password =bcrypt('123456');
        $user->save();

        $user = new User();
        $user->role_id = 2;
        $user->name = 'Md.User';
        $user->username = 'user';
        $user->email = 'user@gmail.com';
        $user->password = bcrypt('1234567');
        $user->save();
    }
}
