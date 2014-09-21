<?php

class LoginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /login
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::guest())
			return View::make('pages.login');

		return Redirect::route('dashboard.page');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /login/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /login
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = [
            "username" => "required",
            "password" => "required|min:5"
        ];
        $validator = Validator::make(Input::all(),$rules);

        if($validator->fails()) {
            return Redirect::route('login.index')->withErrors($validator)->withInput(Input::except('password'));
        } else {
            $userdata = [
                "username" => Input::get('username'),
                "password" => Input::get('password')
            ];

            if(Auth::attempt($userdata)) {
                return Redirect::route('dashboard.page');
            } else {
                return Redirect::route('login.index');
            }
        }
	}

	/**
	 * Display the specified resource.
	 * GET /login/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /login/{id}/edit
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
	 * PUT /login/{id}
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
	 * DELETE /login
	 *
	 * @return Response
	 */
	public function destroy()
	{

	}

    public function logout()
    {
        Session::flush();
        return Redirect::route('login.index');
    }
}