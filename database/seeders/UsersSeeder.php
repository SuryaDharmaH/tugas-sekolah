<?php
 
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin',
               'username'=>'admin',
               'password'=>bcrypt('admin'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}