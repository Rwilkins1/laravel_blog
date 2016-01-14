<?php
class UsersController extends BaseController {
// Profile display

	// Shows your profile or tells you you're unauthorized
		public function index()
		{
			if(Auth::check()) {
				$user = Auth::user();
				$posts = DB::table('posts')->where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
				return View::make('yourprofile')->with('user', $user)->with('posts', $posts);
			} else {
				App::abort(403);
			}
		}

	// Shows a user profile from a guest view or tells you the user doesn't exist
		public function show($id)
		{
			$user = User::find($id);
			$posts = $user->posts;


			if($user != null) {		
				return View::make('showuser')->with('user', $user)->with('posts', $posts);
			} else {
				App::abort(404);
			}
		}

// Login

	// Displays the login page or informs you you are already logged in
		public function showloginpage()
		{
			if(Auth::check()) {
				Session::flash('errorMessage', 'You are already logged in!');
				return Redirect::action('UsersController@index');
			} else {
				return View::make('login');
			}
		}

	// Logs you in or tells you your information is wrong
		public function dologinpage()
		{
			$userdata = array(
				'email' => Input::get('email'),
				'password' => Input::get('password')
			);

			if(Auth::attempt($userdata)) {
				Session::flash('successMessage', "Welcome back, " . Auth::user()->username . "!");
				Session::put('loggedinuser', Auth::user()->username);
				return Redirect::intended('/posts');
				// $userid = DB::table('users')->where('username', Session::get('loggedinuser'))->pluck('id');
				// Session::put('loggedinid', $userid);
				
				// return Redirect::action('PostsController@index');
			} else {
				Session::flash('errorMessage', 'Your username or password is incorrect');
				return Redirect::to('login');
			}
		}

// The "Forgot Password" Process

	// Shows you the page or tells you you're already logged in
		public function forgotpassword()
		{
			if(!Session::has('loggedinuser')) {
				return View::make('forgotpassword');
			} else {
				Session::flash('errorMessage', 'Dude! You\'re alredy logged in!');
				return Redirect::action('UsersController@index');
			}
		}

	// Sends you an email with a new password or tells you your info is wrong
		public function remind()
		{
			$phone = Input::get('phone');
			$username = Input::get('username');
			$email = Input::get('email');
			$userdata = Auth::user()->email;
			$userid = Auth::user()->id;
			$userphone = Auth::user()->phone;
			$userusername = Auth::user()->username;
			if($email == $userdata) {
				if($phone == $userphone) {
					if($username == $userusername) {
						$user = User::find($userid);
						$passwordsarray = ['temporary', 'security', 'newpassword', 'robot', 'rubberduck', 'bigbird', 'blacklab', 'foobar', 'fizzbuzz', 'newvariable'];
						$random = mt_rand(1, 10);
						$password = $passwordsarray[$random];
						$user->password = Hash::make($password);
						$user->save();
						Mail::send('emailpassword', array('username' => $username, 'password' => $password), function($message) {
							$message->to(Input::get('email'), Input::get('username'))->subject('Password reset');
						});
						Session::flash('successMessage', 'Check your inbox for the necessary information');
						return Redirect::action('UsersController@showloginpage');
					} else {
						Session::flash('errorMessage', 'Your username is incorrect');
						return Redirect::back();
					}
				} else {
					Session::flash('errorMessage', 'Your phone number is incorrect');
					return Redirect::back();
				}
			} else {
				Session::flash('errorMessage', 'Your email address is invalid');
				return Redirect::back();
			}
		}

// The Edit Profile Process

	// Shows the page or tells you you're unauthorized
		public function editprofile()
		{
			if(Auth::check()) {
				$userinfo = User::find(Session::get('loggedinid'));
				return View::make('editprofile')->with('userinfo', $userinfo);
			} else {
				App::abort(403);
			}
		}

	// Saves the new information or tells you your fields are invalid
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
					Session::flash('errormessage', 'Sorry, some of your inputs are incorrect');
					return Redirect::back()->withInput()->withErrors($validator);
				} else {
					$usertoupdate->save();
					Session::forget('loggedinuser');
					Session::put('loggedinuser', $usertoupdate->username);
					Session::flash('successMessage', 'Profile successfully updated!');
					return Redirect::action('UsersController@index');
				}
			}
		}

// The Edit Password Process

	// Shows the page or tells you you're unauthorized
		public function showpassword()
		{
			if(Auth::check()) {
				return View::make('updatepassword');
			} else {
				App::abort(403);
			}
		}

	// Saves the new password or tells you your passwords don't match
		public function updatepassword()
		{
			$user = Session::get('loggedinuser');
			$userid = DB::table('users')->where('username', $user)->pluck('id');
			$updateduser = User::find($userid);
			$newpassword = Input::get('password');
			if($newpassword == Input::get('confirm')) {
				$updateduser->password = Hash::make($newpassword);
				$updateduser->save();
				Session::flash('successMessage', 'Password successfully updated');
				return Redirect::action('UsersController@index');
			} else {
				Session::flash('errorMessage', 'Your passwords do not match!');
				return Redirect::back();
			}
		}

// Logout Process

	// Logs you out or tells you you aren't logged in.
		public function logout()
		{
			if(Auth::check()) {
				Auth::logout();
				Session::forget('loggedinuser');
				// Session::forget('loggedinuser');
				Session::flash('successMessage', 'Goodbye!');
				return Redirect::action('HomeController@showWelcome');
			} else {
				Session::flash('errorMessage', 'You weren\'t logged in in the first place!');
				return Redirect::action('UsersController@showloginpage');
			}
		}

// Creating a new user from scratch

	// Either sends you to the creation page or redirects you 
		public function create() 
		{
			if(Auth::check()) {
				Session::flash('errorMessage', 'You are already logged in!');
				return Redirect::action('UsersController@index');
			} else {
				return View::make('/users/create');
			}
		}

	// Either saves the info or shows you your errors
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
			$checkdbforusername = DB::table('users')->where('username', Input::get('username'))->pluck('username');
			$checkdbforemail = DB::table('users')->where('email', Input::get('email'))->pluck('email');
			if($checkdbforusername == null) {
				if($checkdbforemail == null) {
					if($validator->fails() || Input::get('password') != Input::get('confirm')) {
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
				} else {
					Session::flash('errorMessage', 'This email is already taken');
					return Redirect::back()->withInput();
				}
			} else {
				Session::flash('errorMessage', 'This username is already taken');
				return Redirect::back()->withInput();
			}
			
		}
}
?>