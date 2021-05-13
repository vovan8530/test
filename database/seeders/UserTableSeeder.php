<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    User::query()->truncate();

    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    DB::table('users')->insert([
      'name' => 'user1',
      'password' => bcrypt('user1')
    ]);

    DB::table('users')->insert([
      'name' => 'user2',
      'password' => bcrypt('user2')
    ]);
  }
}
