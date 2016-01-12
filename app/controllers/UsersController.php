<?php
class UsersController extends BaseController {
	public function index()
	{
		if(Session::has('loggedinuser')) {
			$user = Session::get('loggedinuser');
			$userid = DB::table('users')->where('username', $user)->pluck('id');
			$userinfo = User::find($userid);
			$posts = Post::paginate(4);
			return View::make('yourprofile')->with('userinfo', $userinfo)->with('posts', $posts);
		} else {
			return Redirect::action('UsersController@showloginpage');
		}
	}
	public function showloginpage()
	{
		if(!Session::has('loggedinuser')) {
			return View::make('login');
		} else {
			return Redirect::action('UsersController@index');
		}
	}
	public function dologinpage()
	{
		$userdata = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);

		if(Auth::attempt($userdata)) {
			Session::put('loggedinuser', Input::get('username'));
			return Redirect::action('PostsController@index');
		} else {
			return Redirect::to('login');
		}
	}

	public function logout()
	{
		if(Session::has('loggedinuser')) {
			Session::forget('loggedinuser');
			return Redirect::action('HomeController@showWelcome');
		} else {
			return Redirect::action('UsersController@showloginpage');
		}
	}

	public function create() 
	{
		if(!Session::has('loggedinuser')) {
			return View::make('/users/create');
		} else {
			return Redirect::action('UsersController@index');
		}
	}

	public function show($id)
	{
		$user = User::find($id);
		$posts = Post::paginate(4);
		return View::make('showuser')->with('user', $user)->with('posts', $posts);
	}

	public function editprofile()
	{
		if(Session::has('loggedinuser')) {
			$user = Session::get('loggedinuser');
			$userid = DB::table('users')->where('username', $user)->pluck('id');
			$userinfo = User::find($userid);
			return View::make('editprofile')->with('userinfo', $userinfo);
		} else {
			return Redirect::action('HomeController@showWelcome');
		}
	}

	public function updateprofile()
	{
		$validator = Validator::make(Input::all(), User::$editrules);
		if(Session::has('loggedinuser')) {
			$user = Session::get('loggedinuser');
			$userid = DB::table('users')->where('username', $user)->pluck('id');
			$usertoupdate = User::find($userid);
			$usertoupdate->firstname = Input::get('firstname');
			$usertoupdate->lastname = Input::get('lastname');
			$usertoupdate->username = Input::get('username');
			$usertoupdate->phone = Input::get('phone');
			$usertoupdate->email = Input::get('email');

			if($validator->fails()) {
				return Redirect::back()->withInput()->withErrors($validator);
			} else {
				$usertoupdate->save();
				Session::forget('loggedinuser');
				Session::put('loggedinuser', $usertoupdate->username);
				return Redirect::action('UsersController@index');
			}
		}
	}

	public function store()
	{
		$validator = Validator::make(Input::all(), User::$rules);
		$newuser = new User();
		$newuser->firstname = Input::get('firstname');
		$newuser->lastname = Input::get('lastname');
		$newuser->username = Input::get('username');
		$newuser->phone = Input::get('phone');
		$newuser->password = Hash::make(Input::get('password'));
		$newuser->email = Input::get('email');

		if($validator->fails()) {
			$class = "alert alert-danger";
			return Redirect::back()->withInput()->withErrors($validator)->with('class', $class);
		} else {
			$newuser->save();
			$username = $newuser->username;
			Mail::send('emailbody', array('username' => $username), function($message) {
				$message->to(Input::get('email'), Input::get('username'))->subject('Welcome to the Reagan Wilkins blog!');
			});
			$class="errormessage";
			return Redirect::action('UsersController@showloginpage')->with('class', $class);
		}
		
	}
}
?>