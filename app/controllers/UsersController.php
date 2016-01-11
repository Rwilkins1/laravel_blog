<?php
class UsersController extends /BaseController {
	public function index()
	{

	}

	public function create() 
	{
		return View::make('/users/create');
	}

	public function show($id)
	{
		$user = User::find($id);
		return View::make('showuser')->with('user', $user);
	}

	public function edit($id)
	{
		$user = User::find($id);
		return View::make('editprofile')->with('user', $user);
	}

	public function store()
	{
		$newuser = new User();
		
	}
	
	public function whichuser($user_id)
	{
		$user = User::find($user_id);
		return $user['username'];
	}
}
?>