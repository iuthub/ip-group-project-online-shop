<?php
  
use Illuminate\Database\Seeder;
use App\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@admin.com',
               'date_of_birth'=>'01.01.2000',
               'postal_code'=>'01010101',
               'city'=>"Taskkent",
               'passport_num'=>'AA1234567',
                'is_admin'=>'1',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@user.com',
               'date_of_birth'=>'01.02.2000',
               'postal_code'=>'01010102',
            'city'=>"Taskkent",
               'passport_num'=>'AA1234267',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}