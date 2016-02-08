<?php namespace App\Http\Controllers;

use App\Articles;
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

		return view('pages.articles')->with('articles',$articles);
		

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ArticleRequest $request)
	{
		//$articles= new Articles($request->all());
		Auth::user()->articles()->create($request->all());

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
		//$articles= Articles::findorfail($id);
		return view ('pages.edit')->with('articles',$articles);
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
