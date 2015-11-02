<?php

class TeamOwnerContoller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 // Teamowner Screen
	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	//getting database data in dropdown below
	public function dropdown(){
		$users = Owner::all('team');

	return View::make('pages.all')->with('users',$users);


	}

	public function dropdownselect(){
		$users = Owner::all('team');

	return View::make('pages.all')->with('users',$users);


	}
	
	public function index()
	{
		// Push all tables:users records from database
		// SQL SELECT * FROM `users`
	// 	$users=Owner::all();
	// return View::make('pages.all')->with('users',$users);
	}
	public function search()
	{
		$name  = Input::get('names');
		$users = User::where('names', 'LIKE', "%$name%")->paginate(User::$pages);
		return View::make('users.index', compact('users'));
	}

	public function create()
	{
		$rules = [
			'ownername' => 'required',
			'id_no' => 'required|numeric',
			'ownerlocation' => 'required',
			'ownerphone' => 'required',
			'owneremail' => 'required|email',
			'ownerage' => 'required',
			'team_id'=> 'required'
		];
		$validation = Validator::make(Input::all(), $rules);
		if($validation->passes())
		{
			$rand='GSP'.rand(100,100000);
			$user = new Owner;
			$user->ownername = Input::get('ownername');
			$user->id_no = Input::get('id_no');
			$user->ownerlocation = Input::get('ownerlocation');
			$user->ownerphone = Input::get('ownerphone');
			$user->owneremail = Input::get('owneremail');
			$user->ownerage = Input::get('ownerage');
			$user->team_id = Input::get('team_id');
			$user->rand_num=$rand;

			$user->save();



			// redirect
            Session::flash('message', 'Successfully created team Owners!');
            return Redirect::to('all');

			//return View::make('pages.register')->with('message', 'team created');
		}

			return Redirect::back()->withErrors($validation)->withInput();
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user  = Owner::find($id);

		return View::make('pages.edit', compact('user'));

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = [
			'ownername' => 'required',
			'id_no' => 'required|numeric',
			'ownerlocation' => 'required',
			'ownerphone' => 'required',
			'owneremail' => 'required|email',
			'ownerage' => 'required',
		];
		$validation = Validator::make(Input::all(), $rules);
		if($validation->passes())
		{
			$user = Owner::findOrFail($id);
			$data = Input::all();

			$user->update($data);

			//var_dump($user);


			// redirect
            Session::flash('message', 'Successfully created team Owners!');
            return Redirect::to('all');

			//return View::make('pages.register')->with('message', 'team created');
		}

			return Redirect::back()->withErrors($validation)->withInput();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		 // delete
         Owner::destroy($id);
        // redirect
        Session::flash('message', 'Successfully deleted the team owner!');
        return Redirect::to('all');
	
	}


}
