<?php

class PostsController extends \BaseController {

// Security filter

	// Checks every action
		public function __construct()
		{
			// parent::__construct();

			$this->beforeFilter('auth', array('except' => array('index', 'show')));
		}
// Shows all the posts

	// Paginates by 4
		public function index()
		{
			$posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(4);
			return View::make('/posts/allposts')->with('posts', $posts);
		}

		public function search()
		{
			$title = Input::get('title');
			$post_id = DB::table('posts')->where('title', $title)->pluck('id');
			$post_title = DB::table('posts')->where('title', $title)->pluck('title');
			$post_body = DB::table('posts')->where('title', $title)->pluck('body');
			if($post_title != null) {
				Session::flash('successMessage', 'Search successful');
				return View::make('searchresults')->with('post_title', $post_title)->with('post_body', $post_body)->with('post_id', $post_id);
			} else {
				Session::flash('errorMessage', 'The post you are looking for doesn\'t exist');
				return Redirect::back();
			}
		}
	
// Post Creation Process

	// If you're logged in, sends you to the form.
		public function create()
		{
	        if(Auth::check()) {
	    		return View::make('/posts/create');
	        } else {
	            return Redirect::action('UsersController@showloginpage');
	        }
		}

	// Stores the new post in the database
		public function store()
		{
			$validator = Validator::make(Input::all(), Post::$rules);
			$user = Session::get('loggedinuser');
	        $userid = DB::table('users')->where('username', $user)->pluck('id');
	        $userinfo = User::find($userid);
	        $newpost = new Post();
			$newpost->title = Input::get('title');
			$newpost->body = Input::get('body');
	        $newpost->user_id = $userinfo->id;

	        $imagename = Input::file('image_url');
	        $originalname = $imagename->getClientOriginalName();
	        $imagepath = 'public/img/upload/';
	        $imagename->move($imagepath, $originalname);
	        $newpost->image_url = $imagepath . $originalname;
	        
	        $checkthedb = DB::table('posts')->where('title', Input::get('title'))->pluck('title');
	        if($checkthedb == null) {
				if($validator->fails()) {
		            Session::flash('errorMessage', 'One or more of your inputs does not meet the requirements');
					return Redirect::back()->withInput()->withErrors($validator);
				} else {
					$newpost->save();
		            Log::info(Input::all());
		            Session::flash('successMessage', 'You\'ve successfully posted!');
					return Redirect::action('PostsController@index');
				}
	        } else {
	        	Session::flash('errorMessage', 'This title already exists. Please choose a new one');
	        	return Redirect::back()->withInput();
	        }
		}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		$user = User::find($post->user_id);
        if($post != null) {
            return View::make('showposts')->with('post', $post)->with('user', $user);
        } else {
            App::abort(404);
        }
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        if(Auth::check()) { 
            $user = Auth::user();
            $userid = DB::table('users')->where('username', $user)->pluck('id');    
            $posttoupdate = Post::find($id);
            if($posttoupdate != null) {
                if($posttoupdate['user_id'] == $userid) {
                    return View::make('editposts')->with('posttoupdate', $posttoupdate);
                } else {
                    App::abort(403);
                }
            } else {
                App::abort(404);
            }
        } else {
            App::abort(403);
        }
	}

	

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$posttoupdate = Post::find($id);
		$posttoupdate->title = Input::get('title');
		$posttoupdate->body = Input::get('body');
		$posttoupdate->save();
		return Redirect::action('PostsController@index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::destroy($id);
		return Redirect::action('PostsController@index');
	}


}
