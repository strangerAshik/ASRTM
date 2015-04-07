<?php

class SettingsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /settings
	 *
	 * @return Response
	 */
	public function roles(){
		//$roles=DB::table('roles');
		$roles = Role::lists('role_name', 'role_name');

		return $roles;
	}
	public function index()
	{
		//return User::all()->id;
		return View::make('settings/index')
		->with('PageName','Settings')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('year',parent::years_from())
		->with('roles',$this->roles())
		->with('personnel',parent::getPersonnelInfo());
	}
	public function login(){
	//dd(Input::all());
	$validation=Validator::make(Input::all(),User::$auth_rules);
	if($validation->fails()){
		return Redirect::to('/')->with('Warning', 'Email/Password is wrong!!');
	}
	$email=Input::get('email');
	$password=Input::get('password');
	if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
			return Redirect::to('dashboard');
		}
	
	return Redirect::to('/')->with('Warning', 'Email/Password is wrong!!');
	
}
	
	public function logout(){
		session_unset();
		if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
		);
		}
		//session_destroy();
		Auth::logout();
		Session::flush();
		
	return Redirect::to('/')->with('message', 'Successfully Log Out!!');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /settings/create
	 *
	 * @return Response
	 */
	public function viewUsers()
	{
		
		$users = User::all();
			
		return View::make('settings/viewUsers')
		->with('PageName','View Users')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('year',parent::years_from())
		->with('personnel',parent::getPersonnelInfo())
		->with('roles',$this->roles())
		->with('users',$users)
		;
	}

	
	public function saveUser()
	{
		//return 'Hello ';
		$validator = Validator::make(Input::all(), User::$rules_user_registration);
 
		if ($validator->passes()) {
			$user=new User;
			$user->name= Input::get('name');
			$user->emp_id= Input::get('emp_id');
			$user->email= Input::get('email');
			$user->role= Input::get('designation');
			$user->password= Hash::make(Input::get('password'));
			 
			$user->save();
			/**/
			//$designation=Input::get('designation');
			//$user->attachRole($designation);
			
			return Redirect::to('settings')->with('message','New User Added!');
		} else {
			 return Redirect::to('settings')->with('error', 'The following errors occurred')->withErrors($validator)->withInput();
		}
		
		
		
	}
	public function update()
	{
		//return 'Hello ';
		$validator = Validator::make(Input::all(), User::$rules_user_update);
 
		if ($validator->passes()) {
			  //Find brugeren
			$id=Input::get('id');
			
			$user = User::find($id); 
			$user->name= Input::get('name');
			$user->emp_id= Input::get('emp_id');
			$user->email= Input::get('email');
			$user->role= Input::get('designation');
			
			
			if ( Input::get("password") != ""){
				$user->password= Hash::make(Input::get('password'));
			}
			//$designation=Input::get('designation');
			//$user->attachRole($designation);
			
			$user->save();
		
			/**/
			
			
			return Redirect::to('viewUsers')->with('message','Updated!');
		} else {
			 return Redirect::to('viewUsers')->with('error', 'The following errors occurred')->withErrors($validator)->withInput();
		}
		
		
		
	}

	/**
	 * Display the specified resource.
	 * GET /settings/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function changePassword()
	{
		$validator = Validator::make(Input::all(), User::$rule_changePass);
 
		if ($validator->passes()) {
			
		
			$id = Auth::user()->getId();
			$password=Hash::make(Input::get('password'));
			$success = User::where('id', '=', $id)->update(array('password' =>$password,'pass_change'=>1));
			if($success)
				return Redirect::to('settings')->with('message','Password Changed!');
			return Redirect::to('settings')->with('message','Password Not Changed!');
			
		} else {
			 return Redirect::to('settings')->with('error', 'The following errors occurred')->withErrors($validator)->withInput();
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /settings/{id}/edit
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
	 * PUT /settings/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */

	/**
	 * Remove the specified resource from storage.
	 * DELETE /settings/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete()
	{
		$id=Input::get('id');
		$user = User::find($id); 
		$user->delete();
		return Redirect::to('viewUsers')->with('message','User Successfully Deleted!!');
	}

}