<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(4);
		// $stmt = $dbc->prepare('SELECT username FROM users WHERE id = :id');
		// $stmt->bindValue(':id', $posts['user_id']);
		// $stmt->execute();

		return View::make('/posts/allposts')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('/posts/create');
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
		return View::make('showposts')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$posttoupdate = Post::find($id);
		return View::make('editposts')->with('posttoupdate', $posttoupdate);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Post::$rules);
		$newpost = new Post();
		$newpost->title = Input::get('title');
		$newpost->body = Input::get('body');

		if($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			$newpost->save();
			return View::make('/posts/allposts');
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
		return View::make('/posts/allposts');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		return View::make('/posts/allposts');
	}


}
