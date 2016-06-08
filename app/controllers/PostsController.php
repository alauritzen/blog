<?php

class PostsController extends \BaseController {

	// before filter
	public function __construct()
	{
		$this->beforeFilter('auth', array(
			'except' => array(
				'index',
				'show')
			));
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts=Post::paginate(4);
		return View::make('posts.index')->with ('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$post=new Post();
		$post->title=Input::get('title');
		$post->description=Input::get('description');
		$post->user_id=Auth::user()->id;

		$validator=Validator::make(Input::all(), Post::$rules);
		if ($validator->fails()) {
			Session::flash('errorMessage', 'Entry did not save!');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			if ($post->save()) {
				Session::flash('successMessage', 'New entry created!');
				Log::info('A new post has been created!');
				return Redirect::action('PostsController@show', $post->id);
			} else {
				Session::flash('errorMessage', 'Entry did not save!');
				return Redirect::back()->withInput();
			}			
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
		$post=Post::find($id);
		$post->converted_create_time=$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A');
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post=Post::find($id);
		return View::make('posts.edit')->with('post',$post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post=Post::find($id);
		$post->title=Input::get('title');
		$post->description=Input::get('description');

		$validator=Validator::make(Input::all(), Post::$rules);
		if ($validator->fails()) {
			Session::flash('errorMessage', 'Update did not save!');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			if ($post->save()) {
				Session::flash('successMessage', 'Entry successfully updated!');
				return Redirect::action('PostsController@show', $post->id);
			} else {
				Session::flash('errorMessage', 'Update did not save!');
				return Redirect::back()->withInput();
			}			
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Destroy all the posts! (Actually just post $id.)";
	}


}
