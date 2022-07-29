<?php

use Illuminate\Database\Seeder;
use App\User;

class usersseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=User::create([
            'name'=> 'ahmed',
            'email'=>'ahmed@a.a',
            'password'=>bcrypt('12345678'),
            'role' => 'admin'
        ]);
    }
}
