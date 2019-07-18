<?php
use Illuminate\Database\Seeder;
use App\Role;
class UsersRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role= new Role();
        $role->name = 'Admin';
        $role->slug = 'admin';
        $role->save();

        $role= new Role();
        $role->name = 'Md.User';
        $role->slug = 'md.user';
        $role->save();
    }
}
