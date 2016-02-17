<?php namespace App\Http\Controllers;

use App\Articles;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Auth;





class ArticleController extends Controller {


	public function __construct(){

		$this->middleware('auth',['except'=>'index']);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return \Auth::user()->name;
		$articles= Articles::latest()->get();
		$latest = Articles::latest()->first();

		return view('pages.articles',compact('articles','latest'));		

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tags = Tag::lists('name','id');
		
		return view('pages.create')->with('tags',$tags);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ArticleRequest $request)
	{
		
		$articles = Auth::user()->articles()->create($request->all());

		$articles->tags()->attach($request->input('tag_list'));

		\Session::flash('flash_message','The article has been created');

		return redirect('articles');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Articles $article)
	{
		//$article = Articles::findorfail($id);
		//return $articles;
		return view('pages.show')->with('article',$article);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Articles $articles)
	{
		$tags = Tag::lists('name','id');
		return view ('pages.edit',compact('articles','tags'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Articles $articles,ArticleRequest $request)
	{
		//$articles= Articles::findorfail($id);

		$articles->update($request->all());
		$articles->tags()->sync($request->input('tag_list'));

		return redirect('articles'); 
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
