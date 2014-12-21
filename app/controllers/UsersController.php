<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

    /**
     * Show the form for creating a new resource.
     * GET /users/create
     *
     * @return Response
     */
    public function create()
    {
        return View::make('users.create');
    }

    /**
     * Show the form for creating a new resource.
     * GET /users/create
     *
     * @return Response
     */
    public function create_landlord()
    {
        return View::make('users.create_landlord');
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{

		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();

		$user = new User;

		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');
		$user->email = Input::get('email');
		$user->tele = Input::get('tele');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		$userInfo = new UserInfo;
		$userInfo->user_id = $user->id;
		$userInfo->personal_code_number = Input::get('personal_code_number');
		$userInfo->address = Input::get('address');
		$userInfo->city = Input::get('city');
		$userInfo->zip_code = Input::get('zip_code');
		$userInfo->income = Input::get('income');
		$userInfo->save();
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
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
	 * GET /users/{id}/edit
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
	 * PUT /users/{id}
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
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}