<?php

use Alas\Transformers\ArticleTransformer;

class ArticleController extends ApiController {

	protected $articleTransformer;

	public function __construct(ArticleTransformer $articleTransformer)
	{
		$this->articleTransformer = $articleTransformer;
	}
	/**
	 * Display a listing of the resource.
	 * GET /article
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$limit = (int) Input::get('limit') ? : '3';
		$articles = Article::paginate($limit);

		return $this->respondWithPagination($articles,[
				'data' => $this->articleTransformer->transformCollection($articles->all()),
			]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /article/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /article
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		if(! Input::get('title') or  ! Input::get('content'))
		{
			return $this->setStatusCode(422)
						->respondWithError('Parameters failed validation for an article.');
		}
		return $this->respondCreated('Article successfully created.');
	}

	/**
	 * Display the specified resource.
	 * GET /article/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$article = Article::find($id);

		if(! $article)
		{
			return $this->respondNotFound('Article does not exist.');
		}

		return $this->respond([
				'data' => $this->articleTransformer->transform($article->first())
			]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /article/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /article/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /article/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}