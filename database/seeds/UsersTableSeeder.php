<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
            'name' => 'Hoàng Tuấn',
            'email' => 'tuanha'.'@gmail.com',
            'password' => bcrypt('12345678'),
            'created_at' => new DateTime()
            ],
            [
            'name' => 'Vũ Minh',
            'email' => 'minhvd'.'@gmail.com',
            'password' => bcrypt('12345678'),
            'created_at' => new DateTime()
            ],
        ]);
    }
}
