<?php

class TeamController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$teams = Team::all();

	return View::make('view')->with('teams',$teams);

		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = 
		[
			'teamname' => 'required'
		];
		//validation
		$validation = Validator::make(Input::all(), $rules);
		if($validation->passes())
		{
			$team = new Team;
			$team->teamname = Input::get('teamname');
			$team->save();
		

		// redirect
            Session::flash('message', 'Successfully created team Owners!');
            return Redirect::to('view');

			//return View::make('pages.register')->with('message', 'team created');
		}

			return Redirect::back()->withErrors($validation)->withInput();



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
		//
	}


	/**
	 * Update the specified resource in storage.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
         Team::destroy($id);
        // redirect
        Session::flash('message', 'Successfully deleted the team owner!');
        return Redirect::to('view');
	}


}
