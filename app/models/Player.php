<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Player extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'players';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public static $rules = 
		[
					'playername'     => 'required',
					'location' => 'required',
					'phone'    => 'required',
					'email'    => 'required|email',
					'age'      => 'required',
					'teamowner' =>  'required',
					'id_copy'  => 'required|mimes:pdf,doc,docx',
					'photo'    => 'required|mimes:jpg,jpeg,png',
		];

	protected $fillable = ['playername',  'location', 'phone', 'email', 'age', 'teamowner', 'id_copy', 'photo', 'rand_num', 'team_id'];

	//files upload destination done here
	public static function uploadFile($file, $folder = 'public')
	{

	    $destination = self::makeFolder($folder);
	    $filename    = time() . $file->getClientOriginalName();
	    $file->move($destination, $filename);
	    return $filename;
	}
	  public static function makeFolder($folder)
	  {
		    $folder = public_path() . "/{$folder}/";
		    // Make directory if it doesn't exists
		    if(!is_dir($folder)) {
		      mkdir($folder);
		      chmod($folder, 777);
		    }
		    return $folder;
	  }

	  public function owner()
	  {
	  	return $this->belongsTo('Owner');

	  }


}
