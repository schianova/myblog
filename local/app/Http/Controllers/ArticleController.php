<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use App\Article;
use App\Http\Controllers\Controller;
	
class ArticleController extends Controller
{
    public function index()
    {

		$articlenum = \App\Article::all();
		$articlenum = count($articlenum);
		if($articlenum == 0)
		{
			return view('articles.noarticle');
		}
		else
		{
			$articles = \App\Article::latest('published_at')->published()->get();

			return view('articles.index')->with('articles', $articles);
		}
	}
	
	public function create()
	{
		return view('articles.create');
	}

	public function show($id)
	{
		$article = Article::findOrFail($id);
		return view('articles.show', compact('article'));
	}

	
	public function store(ArticleRequest $request)
	{

		Article::create($request->all());

		return redirect('articles');
	}

	public function edit($id)
	{
		$article = Article::findOrFail($id);
		return view('articles.edit', compact ('article'));
	}

	public function update($id, ArticleRequest $request)
	{
		$article = Article::findOrFail($id);
		$article->update($request->all());	
		return redirect('articles');	
	}

}

