<?php

class PlayersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$players=Player::all();
		return View::make('players.index')->with('players',$players);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('players.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rand = 'GSP'.rand(100,100000);

	    $data = Input::all();
		$validator = Validator::make($data, Player::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		// Helper: File Upload in Player Model

		$check=Player::all()->count();
		if($check >=11){
				return View::make('players.index')->with('message', 'You have reached the maximum number allowed');

		}
		else {
			
		

		$data['id_copy']    = Player::uploadFile(Input::file('id_copy'), 'id_copy');
		$data['photo'] = Player::uploadFile(Input::file('photo'), 'photo');
		$players       = new Player($data);
		$players ->rand_num = $rand;
		$players->save();
		return View::make('players.index')->with('message', 'file upload was successful');
		}

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$teams = DB::table('team_owners')->join('players','team_owners.id','=','players.team_id')
		->select('team_owners.ownername', 'team_owners.ownerphone','players.playername','players.phone',
				'players.rand_num','players.photo')
		->where('players.team_id','=', $id)->paginate(10);

	


	return View::make('players.show')->with('teams',$teams);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$player  = Player::find($id);

		return View::make('players.edit', compact('player'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		 $players = Player::findOrFail($id);
		 $data = Input::all();
		$validator = Validator::make($data, Player::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		// Helper: File Upload in Player Model

		$data['id_copy']    = Player::uploadFile(Input::file('id_copy'), 'id_copy');
		$data['photo'] = Player::uploadFile(Input::file('photo'), 'photo');
		$players       = new Player($data);
		$players->update($data);

		return View::make('players.index')->with('message', 'file update was successful');
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
         Player::destroy($id);
        // redirect
        Session::flash('message', 'Successfully deleted the team owner!');
        return Redirect::to('players');
	}


}
