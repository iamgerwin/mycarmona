<?php

use Alas\Transformers\CctvTransformer;

class CctvController extends ApiController {
	protected $cctvTransformer;

	public function __construct(CctvTransformer $cctvTransformer)
	{
		$this->cctvTransformer = $cctvTransformer;
	}
	/**⁄
	 * Display a listing of the resource.
	 * GET /cctv
	 *
	 * @return Response
	 */
	public function index($cctvId = null)
	{
		$cctvs = $cctvId ? Cctv::find($cctvId)->first : Cctv::all();

		return $this->respond([
				'data' => $this->cctvTransformer->transformCollection($cctvs->all())
			]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /cctv/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /cctv
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /cctv/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$cctv = Cctv::findOrFail($id);

		return [$cctv];
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /cctv/{id}/edit
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
	 * PUT /cctv/{id}
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
	 * DELETE /cctv/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}