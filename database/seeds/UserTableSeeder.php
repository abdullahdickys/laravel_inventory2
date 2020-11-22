<?php

  use Illuminate\Database\Seeder;

  class UserTableSeeder extends Seeder
  {
      /**
       * Run the database seeds.
       *
       * @return void
       */
      public function run()
      {
          App\User::create([
         'name' => 'Mr. Junk',
         'email' => 'junk@mail.com',
         'password' => bcrypt('secret'),
         /* 'role_id' => 1 */
      ]);

      }
 } 
