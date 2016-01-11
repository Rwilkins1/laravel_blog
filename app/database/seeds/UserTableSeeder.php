<?php
class UserTableSeeder extends Seeder
{
	public function run()
	{
		$user = new User();
		$user->firstname = $_ENV['USER_FIRST_NAME'];
		$user->lastname = $_ENV['USER_LAST_NAME'];
		$user->username = $_ENV['USER_USERNAME'];
		$user->email = $_ENV['USER_EMAIL'];
		$user->phone = $_ENV['USER_PHONE'];
		$user->password = Hash::make($_ENV['USER_PASS']);
		$user->save();
	}
}
?>