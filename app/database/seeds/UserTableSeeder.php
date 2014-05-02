<? php

class UserTableSeeder extends Seeder {
  public function run() {
  User::create(array(
    array('username' => 'admin', 'password' => Hash::make('hunter2'), is_admin => true));

  User:create(array(
    'username' =>'scott', 'password' => Hash::make('tiger'), 'is_admin' => false)
    ));
  }
}