<?php

use Alas\Transformers\TagTransformer;

class TagController extends ApiController {
	protected $tagTransformer;

	public function __construct(TagTransformer $tagTransformer)
	{
		$this->tagTransformer = $tagTransformer;
	}
	/**
	 * Display a listing of the resource.
	 * GET /tag
	 *
	 * @return Response
	 */
	public function index($articleId = null)
	{
		//
		$tags = $articleId ? Article::find($articleId)->tags : Tag::all();

		return $this->respond([
				'data' => $this->tagTransformer->transformCollection($tags->all())
			]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tag/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tag
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /tag/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		return Tag::find($id)->articles;
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /tag/{id}/edit
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
	 * PUT /tag/{id}
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
	 * DELETE /tag/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}