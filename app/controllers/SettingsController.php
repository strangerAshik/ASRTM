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
	public function permission(){

		//aircraft module update
		$i='10000';
		
	
			DB::table('module_user_permission')
			->where('user_id','0'.$i)
			->where('module_name','aircraft')
			->update(array(
					'access'=>'true',
					'entry'=>'false',
					'update'=>'false',
					'approve'=>'false',
					'worning'=>'false',
					'sof_delete'=>'false',
					'par_delete'=>'false'
					));	
			DB::table('module_user_permission')
			->where('user_id',$i)
			->where('module_name','organization')
			->update(array(
					'access'=>'true',
					'entry'=>'false',
					'update'=>'false',
					'approve'=>'false',
					'worning'=>'false',
					'sof_delete'=>'false',
					'par_delete'=>'false'
					));	
			DB::table('module_user_permission')
			->where('user_id',$i)
			->where('module_name','safety_concern')
			->update(array(
					'access'=>'true',
					'entry'=>'true',
					'update'=>'true',
					'approve'=>'false',
					'worning'=>'false',
					'sof_delete'=>'true',
					'par_delete'=>'false'
					));	
			DB::table('module_user_permission')
			->where('user_id',$i)
			->where('module_name','employee')
			->update(array(
					'access'=>'true',
					'entry'=>'true',
					'update'=>'true',
					'approve'=>'false',
					'worning'=>'false',
					'sof_delete'=>'true',
					'par_delete'=>'false'
					));	
			DB::table('module_user_permission')
			->where('user_id',$i)
			->where('module_name','e_library')
			->update(array(
					'access'=>'true',
					'entry'=>'true',
					'update'=>'true',
					'approve'=>'false',
					'worning'=>'false',
					'sof_delete'=>'true',
					'par_delete'=>'false'
					));	
			DB::table('module_user_permission')
			->where('user_id',$i)
			->where('module_name','settings')
			->update(array(
					'access'=>'true',
					'entry'=>'true',
					'update'=>'true',
					'approve'=>'false',
					'worning'=>'false',
					'sof_delete'=>'true',
					'par_delete'=>'false'
					));
			DB::table('module_user_permission')
			->where('user_id',$i)
			->where('module_name','sc_new_inspection')
			->update(array(
					'access'=>'true',
					'entry'=>'true',
					'update'=>'true',
					'approve'=>'false',
					'worning'=>'false',
					'sof_delete'=>'true',
					'par_delete'=>'false'
					));	
			DB::table('module_user_permission')
			->where('user_id',$i)
			->where('module_name','sc_issue_safety_concern')
			->update(array(
					'access'=>'true',
					'entry'=>'true',
					'update'=>'true',
					'approve'=>'false',
					'worning'=>'false',
					'sof_delete'=>'true',
					'par_delete'=>'false'
					));	
			DB::table('module_user_permission')
			->where('user_id',$i)
			->where('module_name','sc_safety_concerns_list')
			->update(array(
					'access'=>'true',
					'entry'=>'true',
					'update'=>'true',
					'approve'=>'false',
					'worning'=>'false',
					'sof_delete'=>'true',
					'par_delete'=>'false'
					));	
			DB::table('module_user_permission')
			->where('user_id',$i)
			->where('module_name','airaft_list')
			->update(array(
					'access'=>'true',
					'entry'=>'false',
					'update'=>'false',
					'approve'=>'false',
					'worning'=>'false',
					'sof_delete'=>'false',
					'par_delete'=>'false'
					));	
			DB::table('module_user_permission')
			->where('user_id',$i)
			->where('module_name','airaft_admin_list')
			->update(array(
					'access'=>'true',
					'entry'=>'false',
					'update'=>'false',
					'approve'=>'false',
					'worning'=>'false',
					'sof_delete'=>'false',
					'par_delete'=>'false'
					));	
			DB::table('module_user_permission')
			->where('user_id',$i)
			->where('module_name','org_admin_list')
			->update(array(
					'access'=>'true',
					'entry'=>'false',
					'update'=>'false',
					'approve'=>'false',
					'worning'=>'false',
					'sof_delete'=>'false',
					'par_delete'=>'false'
					));	
		

	//this is for updateing existing user permission entry to module_user_permission
		$i=0;
		$j=-1;
	for($i;$i<=$j;$i++){
			$userId=$i;
			DB::table('module_user_permission')
			->insert(array(
				array(
							'user_id'=>$userId,
							'module_name'=>'aircraft',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'organization',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'surveillance_inspection_audit',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'),
					array(
							'user_id'=>$userId,
							'module_name'=>'safety_concern',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'personnel_licensing',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'admin_tracking',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'document_control',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'employee',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'emp_admin_list',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'ans_aga_aerodrome_inspection',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'),
					array(
							'user_id'=>$userId,
							'module_name'=>'report',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'wild_life_strike',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'accident_&_incident_investigation',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'),
					array(
							'user_id'=>$userId,
							'module_name'=>'e_library',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'volunteer_reporting',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'notifications',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'settings',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'add_user',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'all_user',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'module',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'sc_new_inspection',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'sc_issue_safety_concern',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'sc_safety_concerns_list',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'sc_report',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'aircraft_add_new_aircraft',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'airaft_list',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'aircraft_report',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'airaft_admin_list',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'org_add_new',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'org_admin_list',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'org_my_org',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'org_report',
							'access'=>'false',
							'entry'=>'false',
							'update'=>'false',
							'approve'=>'false',
							'worning'=>'false',
							'sof_delete'=>'false',
							'par_delete'=>'false'
							),
					
					
				));
	}
	}
	public function organizations(){
		//$roles=DB::table('roles');
		$organizations =DB::table('users')->lists('organization');

		return $organizations;
	}
	public function index()
	{
		$modules =DB::table('module_names')->orderBy('module_name')->lists('module_name');
		return View::make('settings/index')
		->with('PageName','Settings')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('year',parent::years_from())
		->with('roles',$this->roles())
		->with('organizations',$this->organizations())
		->with('personnel',parent::getPersonnelInfo())
		->with('modules',$modules)
		;
	}
	public function myProfile(){
		$userInfos=DB::table('users')
		->where('id',Auth::user()->getId())->get();
		return View::make('settings/myProfile')
					->with('PageName','My Profile')
					->with('userInfos',$userInfos)
					;
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
		
		$users = DB::table('users')->orderBy('emp_id')->get();
		$modules=DB::table('module_user_permission')->orderBy('module_name')->get();	
		
		$select['']='Select Module';
		$moduleNames =DB::table('module_names')->orderBy('module_name')->lists('module_name');
		$moduleNames =array_merge($select,$moduleNames);

		return View::make('settings/viewUsers')
		->with('PageName','View Users')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('year',parent::years_from())
		->with('personnel',parent::getPersonnelInfo())
		->with('roles',$this->roles())
		->with('organizations',$this->organizations())
		->with('users',$users)
		->with('modules',$modules)
		->with('moduleNames',$moduleNames)
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
			$user->organization= Input::get('organization');
			$user->password= Hash::make(Input::get('password'));
			 
			$user->save();
	/*Permission */
	$userId=Input::get('emp_id');
			DB::table('module_user_permission')
			->insert(array(
				array(
							'user_id'=>$userId,
							'module_name'=>'aircraft',
							'access'=>Input::get('aircraft_access'),
							'entry'=>Input::get('aircraft_entry'),
							'update'=>Input::get('aircraft_update'),
							'approve'=>Input::get('aircraft_approve'),
							'worning'=>Input::get('aircraft_worning'),
							'sof_delete'=>Input::get('aircraft_sof_delete'),
							'par_delete'=>Input::get('aircraft_par_delete'),
							'report'=>Input::get('aircraft_report')
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'organization',
							'access'=>Input::get('organization_access'),
							'entry'=>Input::get('organization_entry'),
							'update'=>Input::get('organization_update'),
							'approve'=>Input::get('organization_approve'),
							'worning'=>Input::get('organization_worning'),
							'sof_delete'=>Input::get('organization_sof_delete'),
							'par_delete'=>Input::get('organization_par_delete'),
							'report'=>Input::get('organization_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'surveillance_inspection_audit',
							'access'=>Input::get('surveillance_inspection_audit_access'),
							'entry'=>Input::get('surveillance_inspection_audit_entry'),
							'update'=>Input::get('surveillance_inspection_audit_update'),
							'approve'=>Input::get('surveillance_inspection_audit_approve'),
							'worning'=>Input::get('surveillance_inspection_audit_worning'),
							'sof_delete'=>Input::get('surveillance_inspection_audit_sof_delete'),
							'par_delete'=>Input::get('surveillance_inspection_audit_par_delete'),
							'report'=>Input::get('surveillance_inspection_audit_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'safety_concern',
							'access'=>Input::get('safety_concern_access'),
							'entry'=>Input::get('safety_concern_entry'),
							'update'=>Input::get('safety_concern_update'),
							'approve'=>Input::get('safety_concern_approve'),
							'worning'=>Input::get('safety_concern_worning'),
							'sof_delete'=>Input::get('safety_concern_sof_delete'),
							'par_delete'=>Input::get('safety_concern_par_delete'),
							'report'=>Input::get('safety_concern_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'personnel_licensing',
							'access'=>Input::get('personnel_licensing_access'),
							'entry'=>Input::get('personnel_licensing_entry'),
							'update'=>Input::get('personnel_licensing_update'),
							'approve'=>Input::get('personnel_licensing_approve'),
							'worning'=>Input::get('personnel_licensing_worning'),
							'sof_delete'=>Input::get('personnel_licensing_sof_delete'),
							'par_delete'=>Input::get('personnel_licensing_par_delete'),
							'report'=>Input::get('personnel_licensing_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'admin_tracking',
							'access'=>Input::get('admin_tracking_access'),
							'entry'=>Input::get('admin_tracking_entry'),
							'update'=>Input::get('admin_tracking_update'),
							'approve'=>Input::get('admin_tracking_approve'),
							'worning'=>Input::get('admin_tracking_worning'),
							'sof_delete'=>Input::get('admin_tracking_sof_delete'),
							'par_delete'=>Input::get('admin_tracking_par_delete'),
							'report'=>Input::get('admin_tracking_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'document_control',
							'access'=>Input::get('document_control_access'),
							'entry'=>Input::get('document_control_entry'),
							'update'=>Input::get('document_control_update'),
							'approve'=>Input::get('document_control_approve'),
							'worning'=>Input::get('document_control_worning'),
							'sof_delete'=>Input::get('document_control_sof_delete'),
							'par_delete'=>Input::get('document_control_par_delete'),
							'report'=>Input::get('document_control_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'employee',
							'access'=>Input::get('employee_access'),
							'entry'=>Input::get('employee_entry'),
							'update'=>Input::get('employee_update'),
							'approve'=>Input::get('employee_approve'),
							'worning'=>Input::get('employee_worning'),
							'sof_delete'=>Input::get('employee_sof_delete'),
							'par_delete'=>Input::get('employee_par_delete'),
							'report'=>Input::get('employee_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'emp_admin_list',
							'access'=>Input::get('emp_admin_list_access'),
							'entry'=>Input::get('emp_admin_list_entry'),
							'update'=>Input::get('emp_admin_list_update'),
							'approve'=>Input::get('emp_admin_list_approve'),
							'worning'=>Input::get('emp_admin_list_worning'),
							'sof_delete'=>Input::get('emp_admin_list_sof_delete'),
							'par_delete'=>Input::get('emp_admin_list_par_delete'),
							'report'=>Input::get('emp_admin_list_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'ans_aga_aerodrome_inspection',
							'access'=>Input::get('ans_aga_aerodrome_inspection_access'),
							'entry'=>Input::get('ans_aga_aerodrome_inspection_entry'),
							'update'=>Input::get('ans_aga_aerodrome_inspection_update'),
							'approve'=>Input::get('ans_aga_aerodrome_inspection_approve'),
							'worning'=>Input::get('ans_aga_aerodrome_inspection_worning'),
							'sof_delete'=>Input::get('ans_aga_aerodrome_inspection_sof_delete'),
							'par_delete'=>Input::get('ans_aga_aerodrome_inspection_par_delete'),
							'report'=>Input::get('ans_aga_aerodrome_inspection_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'report',
							'access'=>Input::get('report_access'),
							'entry'=>Input::get('report_entry'),
							'update'=>Input::get('report_update'),
							'approve'=>Input::get('report_approve'),
							'worning'=>Input::get('report_worning'),
							'sof_delete'=>Input::get('report_sof_delete'),
							'par_delete'=>Input::get('report_par_delete'),
							'report'=>Input::get('report_report')
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'wild_life_strike',
							'access'=>Input::get('wild_life_strike_access'),
							'entry'=>Input::get('wild_life_strike_entry'),
							'update'=>Input::get('wild_life_strike_update'),
							'approve'=>Input::get('wild_life_strike_approve'),
							'worning'=>Input::get('wild_life_strike_worning'),
							'sof_delete'=>Input::get('wild_life_strike_sof_delete'),
							'par_delete'=>Input::get('wild_life_strike_par_delete'),
							'report'=>Input::get('wild_life_strike_report')
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'accident_&_incident_investigation',
							'access'=>Input::get('accident_&_incident_investigation_access'),
							'entry'=>Input::get('accident_&_incident_investigation_entry'),
							'update'=>Input::get('accident_&_incident_investigation_update'),
							'approve'=>Input::get('accident_&_incident_investigation_approve'),
							'worning'=>Input::get('accident_&_incident_investigation_worning'),
							'sof_delete'=>Input::get('accident_&_incident_investigation_sof_delete'),
							'par_delete'=>Input::get('accident_&_incident_investigation_par_delete'),
							'report'=>Input::get('accident_&_incident_investigation_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'e_library',
							'access'=>Input::get('e_library_access'),
							'entry'=>Input::get('e_library_entry'),
							'update'=>Input::get('e_library_update'),
							'approve'=>Input::get('e_library_approve'),
							'worning'=>Input::get('e_library_worning'),
							'sof_delete'=>Input::get('e_library_sof_delete'),
							'par_delete'=>Input::get('e_library_par_delete'),
							'report'=>Input::get('e_library_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'volunteer_reporting',
							'access'=>Input::get('volunteer_reporting_access'),
							'entry'=>Input::get('volunteer_reporting_entry'),
							'update'=>Input::get('volunteer_reporting_update'),
							'approve'=>Input::get('volunteer_reporting_approve'),
							'worning'=>Input::get('volunteer_reporting_worning'),
							'sof_delete'=>Input::get('volunteer_reporting_sof_delete'),
							'par_delete'=>Input::get('volunteer_reporting_par_delete'),
							'report'=>Input::get('volunteer_reporting_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'notifications',
							'access'=>Input::get('notifications_access'),
							'entry'=>Input::get('notifications_entry'),
							'update'=>Input::get('notifications_update'),
							'approve'=>Input::get('notifications_approve'),
							'worning'=>Input::get('notifications_worning'),
							'sof_delete'=>Input::get('notifications_sof_delete'),
							'par_delete'=>Input::get('notifications_par_delete'),
							'report'=>Input::get('notifications_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'settings',
							'access'=>Input::get('settings_access'),
							'entry'=>Input::get('settings_entry'),
							'update'=>Input::get('settings_update'),
							'approve'=>Input::get('settings_approve'),
							'worning'=>Input::get('settings_worning'),
							'sof_delete'=>Input::get('settings_sof_delete'),
							'par_delete'=>Input::get('settings_par_delete'),
							'report'=>Input::get('settings_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'add_user',
							'access'=>Input::get('add_user_access'),
							'entry'=>Input::get('add_user_entry'),
							'update'=>Input::get('add_user_update'),
							'approve'=>Input::get('add_user_approve'),
							'worning'=>Input::get('add_user_worning'),
							'sof_delete'=>Input::get('add_user_sof_delete'),
							'par_delete'=>Input::get('add_user_par_delete'),
							'report'=>Input::get('add_user_report')
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'all_user',
							'access'=>Input::get('all_user_access'),
							'entry'=>Input::get('all_user_entry'),
							'update'=>Input::get('all_user_update'),
							'approve'=>Input::get('all_user_approve'),
							'worning'=>Input::get('all_user_worning'),
							'sof_delete'=>Input::get('all_user_sof_delete'),
							'par_delete'=>Input::get('all_user_par_delete'),
							'report'=>Input::get('all_user_report')
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'module',
							'access'=>Input::get('module_access'),
							'entry'=>Input::get('module_entry'),
							'update'=>Input::get('module_update'),
							'approve'=>Input::get('module_approve'),
							'worning'=>Input::get('module_worning'),
							'sof_delete'=>Input::get('module_sof_delete'),
							'par_delete'=>Input::get('module_par_delete'),
							'report'=>Input::get('module_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'sc_new_inspection',
							'access'=>Input::get('sc_new_inspection_access'),
							'entry'=>Input::get('sc_new_inspection_entry'),
							'update'=>Input::get('sc_new_inspection_update'),
							'approve'=>Input::get('sc_new_inspection_approve'),
							'worning'=>Input::get('sc_new_inspection_worning'),
							'sof_delete'=>Input::get('sc_new_inspection_sof_delete'),
							'par_delete'=>Input::get('sc_new_inspection_par_delete'),
							'report'=>Input::get('sc_new_inspection_report'),
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'sc_issue_safety_concern',
							'access'=>Input::get('sc_issue_safety_concern_access'),
							'entry'=>Input::get('sc_issue_safety_concern_entry'),
							'update'=>Input::get('sc_issue_safety_concern_update'),
							'approve'=>Input::get('sc_issue_safety_concern_approve'),
							'worning'=>Input::get('sc_issue_safety_concern_worning'),
							'sof_delete'=>Input::get('sc_issue_safety_concern_sof_delete'),
							'par_delete'=>Input::get('sc_issue_safety_concern_par_delete'),
							'report'=>Input::get('sc_issue_safety_concern_report'),
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'sc_safety_concerns_list',
							'access'=>Input::get('sc_safety_concerns_list_access'),
							'entry'=>Input::get('sc_safety_concerns_list_entry'),
							'update'=>Input::get('sc_safety_concerns_list_update'),
							'approve'=>Input::get('sc_safety_concerns_list_approve'),
							'worning'=>Input::get('sc_safety_concerns_list_worning'),
							'sof_delete'=>Input::get('sc_safety_concerns_list_sof_delete'),
							'par_delete'=>Input::get('sc_safety_concerns_list_par_delete'),
							'report'=>Input::get('sc_safety_concerns_list_report'),
						),
					array(
							'user_id'=>$userId,
							'module_name'=>'sc_report',
							'access'=>Input::get('sc_report_access'),
							'entry'=>Input::get('sc_report_entry'),
							'update'=>Input::get('sc_report_update'),
							'approve'=>Input::get('sc_report_approve'),
							'worning'=>Input::get('sc_report_worning'),
							'sof_delete'=>Input::get('sc_report_sof_delete'),
							'par_delete'=>Input::get('sc_report_par_delete'),
							'report'=>Input::get('sc_report_report'),
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'aircraft_add_new_aircraft',
							'access'=>Input::get('aircraft_add_new_aircraft_access'),
							'entry'=>Input::get('aircraft_add_new_aircraft_entry'),
							'update'=>Input::get('aircraft_add_new_aircraft_update'),
							'approve'=>Input::get('aircraft_add_new_aircraft_approve'),
							'worning'=>Input::get('aircraft_add_new_aircraft_worning'),
							'sof_delete'=>Input::get('aircraft_add_new_aircraft_sof_delete'),
							'par_delete'=>Input::get('aircraft_add_new_aircraft_par_delete'),
							'report'=>Input::get('aircraft_add_new_aircraft_report'),
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'airaft_list',
							'access'=>Input::get('airaft_list_access'),
							'entry'=>Input::get('airaft_list_entry'),
							'update'=>Input::get('airaft_list_update'),
							'approve'=>Input::get('airaft_list_approve'),
							'worning'=>Input::get('airaft_list_worning'),
							'sof_delete'=>Input::get('airaft_list_sof_delete'),
							'par_delete'=>Input::get('airaft_list_par_delete'),
							'report'=>Input::get('airaft_list_report'),
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'aircraft_report',
							'access'=>Input::get('aircraft_report_access'),
							'entry'=>Input::get('aircraft_report_entry'),
							'update'=>Input::get('aircraft_report_update'),
							'approve'=>Input::get('aircraft_report_approve'),
							'worning'=>Input::get('aircraft_report_worning'),
							'sof_delete'=>Input::get('aircraft_report_sof_delete'),
							'par_delete'=>Input::get('aircraft_report_par_delete'),
							'report'=>Input::get('aircraft_report_report'),
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'airaft_admin_list',
							'access'=>Input::get('airaft_admin_list_access'),
							'entry'=>Input::get('airaft_admin_list_entry'),
							'update'=>Input::get('airaft_admin_list_update'),
							'approve'=>Input::get('airaft_admin_list_approve'),
							'worning'=>Input::get('airaft_admin_list_worning'),
							'sof_delete'=>Input::get('airaft_admin_list_sof_delete'),
							'par_delete'=>Input::get('airaft_admin_list_par_delete'),
							'report'=>Input::get('airaft_admin_list_report'),
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'org_add_new',
							'access'=>Input::get('org_add_new_access'),
							'entry'=>Input::get('org_add_new_entry'),
							'update'=>Input::get('org_add_new_update'),
							'approve'=>Input::get('org_add_new_approve'),
							'worning'=>Input::get('org_add_new_worning'),
							'sof_delete'=>Input::get('org_add_new_sof_delete'),
							'par_delete'=>Input::get('org_add_new_par_delete'),
							'report'=>Input::get('org_add_new_report'),
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'org_admin_list',
							'access'=>Input::get('org_admin_list_access'),
							'entry'=>Input::get('org_admin_list_entry'),
							'update'=>Input::get('org_admin_list_update'),
							'approve'=>Input::get('org_admin_list_approve'),
							'worning'=>Input::get('org_admin_list_worning'),
							'sof_delete'=>Input::get('org_admin_list_sof_delete'),
							'par_delete'=>Input::get('org_admin_list_par_delete'),
							'report'=>Input::get('org_admin_list_report'),
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'org_my_org',
							'access'=>Input::get('org_my_org_access'),
							'entry'=>Input::get('org_my_org_entry'),
							'update'=>Input::get('org_my_org_update'),
							'approve'=>Input::get('org_my_org_approve'),
							'worning'=>Input::get('org_my_org_worning'),
							'sof_delete'=>Input::get('org_my_org_sof_delete'),
							'par_delete'=>Input::get('org_my_org_par_delete'),
							'report'=>Input::get('org_my_org_report'),
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'org_report',
							'access'=>Input::get('org_report_access'),
							'entry'=>Input::get('org_report_entry'),
							'update'=>Input::get('org_report_update'),
							'approve'=>Input::get('org_report_approve'),
							'worning'=>Input::get('org_report_worning'),
							'sof_delete'=>Input::get('org_report_sof_delete'),
							'par_delete'=>Input::get('org_report_par_delete'),
							'report'=>Input::get('org_report_report'),
							
							),
					/*Pel Start*/
					array(
							'user_id'=>$userId,
							'module_name'=>'pel_simulator',
							'access'=>Input::get('pel_simulator_access'),
							'entry'=>Input::get('pel_simulator_entry'),
							'update'=>Input::get('pel_simulator_update'),
							'approve'=>Input::get('pel_simulator_approve'),
							'worning'=>Input::get('pel_simulator_worning'),
							'sof_delete'=>Input::get('pel_simulator_sof_delete'),
							'par_delete'=>Input::get('pel_simulator_par_delete'),
							'report'=>Input::get('pel_simulator_report'),
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'pel_list',
							'access'=>Input::get('pel_list_access'),
							'entry'=>Input::get('pel_list_entry'),
							'update'=>Input::get('pel_list_update'),
							'approve'=>Input::get('pel_list_approve'),
							'worning'=>Input::get('pel_list_worning'),
							'sof_delete'=>Input::get('pel_list_sof_delete'),
							'par_delete'=>Input::get('pel_list_par_delete'),
							'report'=>Input::get('pel_list_report'),
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'pel_flying_details',
							'access'=>Input::get('pel_flying_details_access'),
							'entry'=>Input::get('pel_flying_details_entry'),
							'update'=>Input::get('pel_flying_details_update'),
							'approve'=>Input::get('pel_flying_details_approve'),
							'worning'=>Input::get('pel_flying_details_worning'),
							'sof_delete'=>Input::get('pel_flying_details_sof_delete'),
							'par_delete'=>Input::get('pel_flying_details_par_delete'),
							'report'=>Input::get('pel_flying_details_report'),
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'pel_flying_details',
							'access'=>Input::get('pel_flying_details_access'),
							'entry'=>Input::get('pel_flying_details_entry'),
							'update'=>Input::get('pel_flying_details_update'),
							'approve'=>Input::get('pel_flying_details_approve'),
							'worning'=>Input::get('pel_flying_details_worning'),
							'sof_delete'=>Input::get('pel_flying_details_sof_delete'),
							'par_delete'=>Input::get('pel_flying_details_par_delete'),
							'report'=>Input::get('pel_flying_details_report'),
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'pel_atc_log_details',
							'access'=>Input::get('pel_atc_log_details_access'),
							'entry'=>Input::get('pel_atc_log_details_entry'),
							'update'=>Input::get('pel_atc_log_details_update'),
							'approve'=>Input::get('pel_atc_log_details_approve'),
							'worning'=>Input::get('pel_atc_log_details_worning'),
							'sof_delete'=>Input::get('pel_atc_log_details_sof_delete'),
							'par_delete'=>Input::get('pel_atc_log_details_par_delete'),
							'report'=>Input::get('pel_atc_log_details_report'),
							),
					array(
							'user_id'=>$userId,
							'module_name'=>'pel_ame_log_details',
							'access'=>Input::get('pel_ame_log_details_access'),
							'entry'=>Input::get('pel_ame_log_details_entry'),
							'update'=>Input::get('pel_ame_log_details_update'),
							'approve'=>Input::get('pel_ame_log_details_approve'),
							'worning'=>Input::get('pel_ame_log_details_worning'),
							'sof_delete'=>Input::get('pel_ame_log_details_sof_delete'),
							'par_delete'=>Input::get('pel_ame_log_details_par_delete'),
							'report'=>Input::get('pel_ame_log_details_report'),
							),
					/*PEL End*/
					
					
				));
			
			return Redirect::to('settings')->with('message','New User Added!');
		} else {
			 return Redirect::to('settings')->with('error', 'The following errors occurred')->withErrors($validator)->withInput();
		}
		
		
		
	}
	public function newModulePermissionupdate(){
		DB::table('module_user_permission')->insert(
				array(
							'user_id'=>Input::get('id'),
							'module_name'=>Input::get('module_name'),
							'access'=>Input::get('access'),
							'entry'=>Input::get('entry'),
							'update'=>Input::get('update'),
							'approve'=>Input::get('approve'),
							'worning'=>Input::get('worning'),
							'sof_delete'=>Input::get('sof_delete'),
							'par_delete'=>Input::get('par_delete')
					)
			);
		return Redirect::back()->with('message','Permission Updated');
	}
	public function update()
	{
		
		$validator = Validator::make(Input::all(), User::$rules_user_update);
 
		if ($validator->passes()) {
			$id=Input::get('id');
			
			$user = User::find($id); 
			$user->name= Input::get('name');
			$user->emp_id= Input::get('emp_id');
			$user->email= Input::get('email');
			$user->role= Input::get('designation');
			$user->organization= Input::get('organization');
			
			
			if ( Input::get("password") != ""){
				$user->password= Hash::make(Input::get('password'));
			}
			
			$user->save();
		
			/**/
			$old=Input::get('old_organization');
			$new=Input::get('organization');
			//if User Org Changed then org and aircraft org/operator should change because they are dependent to each other
			if($old!=$new){
				DB::table('org_primary')->where('org_name',$old)->update(array(
					'org_name' =>$new,
					'row_updator' =>Auth::user()->getName(),
					'soft_delete' =>0,		
					'updated_at' =>time()		
					));
				DB::table('aircraft_primary_info')->where('aircraft_operator',$old)->update(array(
					'aircraft_operator' =>$new,					
					'soft_delete' =>0,		
					'updated_at' =>time()		
					));
			}
			//Module update start from here
			$empId=Input::get('emp_id');
			//aircraft module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','aircraft')
			->update(array(
					'access'=>Input::get('aircraft_access'),
					'entry'=>Input::get('aircraft_entry'),
					'update'=>Input::get('aircraft_update'),
					'approve'=>Input::get('aircraft_approve'),
					'worning'=>Input::get('aircraft_worning'),
					'sof_delete'=>Input::get('aircraft_sof_delete'),
					'par_delete'=>Input::get('aircraft_par_delete'),
					'report'=>Input::get('aircraft_report'),
					));	
			//organization module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','organization')
			->update(array(
					'access'=>Input::get('organization_access'),
					'entry'=>Input::get('organization_entry'),
					'update'=>Input::get('organization_update'),
					'approve'=>Input::get('organization_approve'),
					'worning'=>Input::get('organization_worning'),
					'sof_delete'=>Input::get('organization_sof_delete'),
					'par_delete'=>Input::get('organization_par_delete')	,					
					'report'=>Input::get('organization_report')	,					
					));	
			//surveillance_inspection_audit module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','surveillance_inspection_audit')
			->update(array(
					'access'=>Input::get('surveillance_inspection_audit_access'),
					'entry'=>Input::get('surveillance_inspection_audit_entry'),
					'update'=>Input::get('surveillance_inspection_audit_update'),
					'approve'=>Input::get('surveillance_inspection_audit_approve'),
					'worning'=>Input::get('surveillance_inspection_audit_worning'),
					'sof_delete'=>Input::get('surveillance_inspection_audit_sof_delete'),
					'par_delete'=>Input::get('surveillance_inspection_audit_par_delete'),
					'report'=>Input::get('surveillance_inspection_audit_report'),
				
					));	
			//safety_concern module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','safety_concern')
			->update(array(
					'access'=>Input::get('safety_concern_access'),
					'entry'=>Input::get('safety_concern_entry'),
					'update'=>Input::get('safety_concern_update'),
					'approve'=>Input::get('safety_concern_approve'),
					'worning'=>Input::get('safety_concern_worning'),
					'sof_delete'=>Input::get('safety_concern_sof_delete'),
					'par_delete'=>Input::get('safety_concern_par_delete'),
					'report'=>Input::get('safety_concern_report'),
					));						
			//personnel_licensing module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','personnel_licensing')
			->update(array(
					'access'=>Input::get('personnel_licensing_access'),
					'entry'=>Input::get('personnel_licensing_entry'),
					'update'=>Input::get('personnel_licensing_update'),
					'approve'=>Input::get('personnel_licensing_approve'),
					'worning'=>Input::get('personnel_licensing_worning'),
					'sof_delete'=>Input::get('personnel_licensing_sof_delete'),
					'par_delete'=>Input::get('personnel_licensing_par_delete'),
					'report'=>Input::get('personnel_licensing_report'),
				
					));			
			
			//admin_tracking module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','admin_tracking')
			->update(array(
					'access'=>Input::get('admin_tracking_access'),
					'entry'=>Input::get('admin_tracking_entry'),
					'update'=>Input::get('admin_tracking_update'),
					'approve'=>Input::get('admin_tracking_approve'),
					'worning'=>Input::get('admin_tracking_worning'),
					'sof_delete'=>Input::get('admin_tracking_sof_delete'),
					'par_delete'=>Input::get('admin_tracking_par_delete'),
					'report'=>Input::get('admin_tracking_report'),
						
					));			
			
			//document_control module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','document_control')
			->update(array(
					'access'=>Input::get('document_control_access'),
					'entry'=>Input::get('document_control_entry'),
					'update'=>Input::get('document_control_update'),
					'approve'=>Input::get('document_control_approve'),
					'worning'=>Input::get('document_control_worning'),
					'sof_delete'=>Input::get('document_control_sof_delete'),
					'par_delete'=>Input::get('document_control_par_delete'),
					'report'=>Input::get('document_control_report'),
				
					));			
			
			//employee module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','employee')
			->update(array(
					'access'=>Input::get('employee_access'),
					'entry'=>Input::get('employee_entry'),
					'update'=>Input::get('employee_update'),
					'approve'=>Input::get('employee_approve'),
					'worning'=>Input::get('employee_worning'),
					'sof_delete'=>Input::get('employee_sof_delete'),
					'par_delete'=>Input::get('employee_par_delete'),
					'report'=>Input::get('employee_report'),
					));			
			
			
			//emp_admin_list module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','emp_admin_list')
			->update(array(
					'access'=>Input::get('emp_admin_list_access'),
					'entry'=>Input::get('emp_admin_list_entry'),
					'update'=>Input::get('emp_admin_list_update'),
					'approve'=>Input::get('emp_admin_list_approve'),
					'worning'=>Input::get('emp_admin_list_worning'),
					'sof_delete'=>Input::get('emp_admin_list_sof_delete'),
					'par_delete'=>Input::get('emp_admin_list_par_delete'),
					'report'=>Input::get('emp_admin_list_report'),
					));			
			
			
			//ans_aga_aerodrome_inspection module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','ans_aga_aerodrome_inspection')
			->update(array(
					'access'=>Input::get('ans_aga_aerodrome_inspection_access'),
					'entry'=>Input::get('ans_aga_aerodrome_inspection_entry'),
					'update'=>Input::get('ans_aga_aerodrome_inspection_update'),
					'approve'=>Input::get('ans_aga_aerodrome_inspection_approve'),
					'worning'=>Input::get('ans_aga_aerodrome_inspection_worning'),
					'sof_delete'=>Input::get('ans_aga_aerodrome_inspection_sof_delete'),
					'par_delete'=>Input::get('ans_aga_aerodrome_inspection_par_delete'),
					'report'=>Input::get('ans_aga_aerodrome_inspection_report'),
					));			
			
			//report module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','report')
			->update(array(
					'access'=>Input::get('report_access'),
					'entry'=>Input::get('report_entry'),
					'update'=>Input::get('report_update'),
					'approve'=>Input::get('report_approve'),
					'worning'=>Input::get('report_worning'),
					'sof_delete'=>Input::get('report_sof_delete'),
					'par_delete'=>Input::get('report_par_delete'),
					'report'=>Input::get('report_report'),
					));			
			
			//wild_life_strike module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','wild_life_strike')
			->update(array(
					'access'=>Input::get('wild_life_strike_access'),
					'entry'=>Input::get('wild_life_strike_entry'),
					'update'=>Input::get('wild_life_strike_update'),
					'approve'=>Input::get('wild_life_strike_approve'),
					'worning'=>Input::get('wild_life_strike_worning'),
					'sof_delete'=>Input::get('wild_life_strike_sof_delete'),
					'par_delete'=>Input::get('wild_life_strike_par_delete')	,			
					'report'=>Input::get('wild_life_strike_report')	,			
			));			
			
			//accident_&_incident_investigation module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','accident_&_incident_investigation')
			->update(array(
					'access'=>Input::get('accident_&_incident_investigation_access'),
					'entry'=>Input::get('accident_&_incident_investigation_entry'),
					'update'=>Input::get('accident_&_incident_investigation_update'),
					'approve'=>Input::get('accident_&_incident_investigation_approve'),
					'worning'=>Input::get('accident_&_incident_investigation_worning'),
					'sof_delete'=>Input::get('accident_&_incident_investigation_sof_delete'),
					'par_delete'=>Input::get('accident_&_incident_investigation_par_delete'),
					'report'=>Input::get('accident_&_incident_investigation_report'),
				
					));
			
			//e_library module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','e_library')
			->update(array(
					'access'=>Input::get('e_library_access'),
					'entry'=>Input::get('e_library_entry'),
					'update'=>Input::get('e_library_update'),
					'approve'=>Input::get('e_library_approve'),
					'worning'=>Input::get('e_library_worning'),
					'sof_delete'=>Input::get('e_library_sof_delete'),
					'par_delete'=>Input::get('e_library_par_delete'),
					'report'=>Input::get('e_library_report'),
					));
			//notifications module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','notifications')
			->update(array(
					'access'=>Input::get('notifications_access'),
					'entry'=>Input::get('notifications_entry'),
					'update'=>Input::get('notifications_update'),
					'approve'=>Input::get('notifications_approve'),
					'worning'=>Input::get('notifications_worning'),
					'sof_delete'=>Input::get('notifications_sof_delete'),
					'par_delete'=>Input::get('notifications_par_delete'),
					'report'=>Input::get('notifications_report'),
					));
			//volunteer_reporting module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','volunteer_reporting')
			->update(array(
					'access'=>Input::get('volunteer_reporting_access'),
					'entry'=>Input::get('volunteer_reporting_entry'),
					'update'=>Input::get('volunteer_reporting_update'),
					'approve'=>Input::get('volunteer_reporting_approve'),
					'worning'=>Input::get('volunteer_reporting_worning'),
					'sof_delete'=>Input::get('volunteer_reporting_sof_delete'),
					'par_delete'=>Input::get('volunteer_reporting_par_delete')	,			
					'report'=>Input::get('volunteer_reporting_report')	,			
					));
			//settings module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','settings')
			->update(
				array(
					'access'=>Input::get('settings_access'),
					'entry'=>Input::get('settings_entry'),
					'update'=>Input::get('settings_update'),
					'approve'=>Input::get('settings_approve'),
					'worning'=>Input::get('settings_worning'),
					'sof_delete'=>Input::get('settings_sof_delete'),
					'par_delete'=>Input::get('settings_par_delete'),
					'report'=>Input::get('settings_report'),
					)
				);
			//add_user module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','add_user')
			->update(
				array(
					'access'=>Input::get('add_user_access'),
					'entry'=>Input::get('add_user_entry'),
					'update'=>Input::get('add_user_update'),
					'approve'=>Input::get('add_user_approve'),
					'worning'=>Input::get('add_user_worning'),
					'sof_delete'=>Input::get('add_user_sof_delete'),
					'par_delete'=>Input::get('add_user_par_delete'),
					'report'=>Input::get('add_user_report'),
					)
				);
			//all_user module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','all_user')
			->update(
				array(
					'access'=>Input::get('all_user_access'),
					'entry'=>Input::get('all_user_entry'),
					'update'=>Input::get('all_user_update'),
					'approve'=>Input::get('all_user_approve'),
					'worning'=>Input::get('all_user_worning'),
					'sof_delete'=>Input::get('all_user_sof_delete'),
					'par_delete'=>Input::get('all_user_par_delete'),
					'report'=>Input::get('all_user_report'),
					)
				);
			//module module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','module')
			->update(
				array(
					'access'=>Input::get('module_access'),
					'entry'=>Input::get('module_entry'),
					'update'=>Input::get('module_update'),
					'approve'=>Input::get('module_approve'),
					'worning'=>Input::get('module_worning'),
					'sof_delete'=>Input::get('module_sof_delete'),
					'par_delete'=>Input::get('module_par_delete'),
					'report'=>Input::get('module_report'),
					)
				);

			//sc_new_inspection module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','sc_new_inspection')
			->update(
				array(
					'access'=>Input::get('sc_new_inspection_access'),
					'entry'=>Input::get('sc_new_inspection_entry'),
					'update'=>Input::get('sc_new_inspection_update'),
					'approve'=>Input::get('sc_new_inspection_approve'),
					'worning'=>Input::get('sc_new_inspection_worning'),
					'sof_delete'=>Input::get('sc_new_inspection_sof_delete'),
					'par_delete'=>Input::get('sc_new_inspection_par_delete'),
					'report'=>Input::get('sc_new_inspection_report'),
					)
				);
			
			//sc_issue_safety_concern module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','sc_issue_safety_concern')
			->update(
				array(
					'access'=>Input::get('sc_issue_safety_concern_access'),
					'entry'=>Input::get('sc_issue_safety_concern_entry'),
					'update'=>Input::get('sc_issue_safety_concern_update'),
					'approve'=>Input::get('sc_issue_safety_concern_approve'),
					'worning'=>Input::get('sc_issue_safety_concern_worning'),
					'sof_delete'=>Input::get('sc_issue_safety_concern_sof_delete'),
					'par_delete'=>Input::get('sc_issue_safety_concern_par_delete'),
					'report'=>Input::get('sc_issue_safety_concern_report'),
					)
				);
			//sc_safety_concerns_list module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','sc_safety_concerns_list')
			->update(
				array(
					'access'=>Input::get('sc_safety_concerns_list_access'),
					'entry'=>Input::get('sc_safety_concerns_list_entry'),
					'update'=>Input::get('sc_safety_concerns_list_update'),
					'approve'=>Input::get('sc_safety_concerns_list_approve'),
					'worning'=>Input::get('sc_safety_concerns_list_worning'),
					'sof_delete'=>Input::get('sc_safety_concerns_list_sof_delete'),
					'par_delete'=>Input::get('sc_safety_concerns_list_par_delete'),
					'report'=>Input::get('sc_safety_concerns_list_report'),
					)
				);
			//sc_report module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','sc_report')
			->update(
				array(
					'access'=>Input::get('sc_report_access'),
					'entry'=>Input::get('sc_report_entry'),
					'update'=>Input::get('sc_report_update'),
					'approve'=>Input::get('sc_report_approve'),
					'worning'=>Input::get('sc_report_worning'),
					'sof_delete'=>Input::get('sc_report_sof_delete'),
					'par_delete'=>Input::get('sc_report_par_delete'),
					'report'=>Input::get('sc_report_report'),
					)
				);
			//aircraft_add_new_aircraft module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','aircraft_add_new_aircraft')
			->update(
				array(
					'access'=>Input::get('aircraft_add_new_aircraft_access'),
					'entry'=>Input::get('aircraft_add_new_aircraft_entry'),
					'update'=>Input::get('aircraft_add_new_aircraft_update'),
					'approve'=>Input::get('aircraft_add_new_aircraft_approve'),
					'worning'=>Input::get('aircraft_add_new_aircraft_worning'),
					'sof_delete'=>Input::get('aircraft_add_new_aircraft_sof_delete'),
					'par_delete'=>Input::get('aircraft_add_new_aircraft_par_delete'),
					'report'=>Input::get('aircraft_add_new_aircraft_report')
					)
				);
			//airaft_list module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','airaft_list')
			->update(
				array(
					'access'=>Input::get('airaft_list_access'),
					'entry'=>Input::get('airaft_list_entry'),
					'update'=>Input::get('airaft_list_update'),
					'approve'=>Input::get('airaft_list_approve'),
					'worning'=>Input::get('airaft_list_worning'),
					'sof_delete'=>Input::get('airaft_list_sof_delete'),
					'par_delete'=>Input::get('airaft_list_par_delete'),
					'report'=>Input::get('airaft_list_report'),
					)
				);
			//aircraft_report module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','aircraft_report')
			->update(
				array(
					'access'=>Input::get('aircraft_report_access'),
					'entry'=>Input::get('aircraft_report_entry'),
					'update'=>Input::get('aircraft_report_update'),
					'approve'=>Input::get('aircraft_report_approve'),
					'worning'=>Input::get('aircraft_report_worning'),
					'sof_delete'=>Input::get('aircraft_report_sof_delete'),
					'par_delete'=>Input::get('aircraft_report_par_delete'),
					'report'=>Input::get('aircraft_report_report'),
					)
				);
			//airaft_admin_list module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','airaft_admin_list')
			->update(
				array(
					'access'=>Input::get('airaft_admin_list_access'),
					'entry'=>Input::get('airaft_admin_list_entry'),
					'update'=>Input::get('airaft_admin_list_update'),
					'approve'=>Input::get('airaft_admin_list_approve'),
					'worning'=>Input::get('airaft_admin_list_worning'),
					'sof_delete'=>Input::get('airaft_admin_list_sof_delete'),
					'par_delete'=>Input::get('airaft_admin_list_par_delete'),
					'report'=>Input::get('airaft_admin_list_report'),
					)
				);
			
			//org_add_new module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','org_add_new')
			->update(
				array(
					'access'=>Input::get('org_add_new_access'),
					'entry'=>Input::get('org_add_new_entry'),
					'update'=>Input::get('org_add_new_update'),
					'approve'=>Input::get('org_add_new_approve'),
					'worning'=>Input::get('org_add_new_worning'),
					'sof_delete'=>Input::get('org_add_new_sof_delete'),
					'par_delete'=>Input::get('org_add_new_par_delete'),
					'report'=>Input::get('org_add_new_report'),
					)
				);
			//org_admin_list module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','org_admin_list')
			->update(
				array(
					'access'=>Input::get('org_admin_list_access'),
					'entry'=>Input::get('org_admin_list_entry'),
					'update'=>Input::get('org_admin_list_update'),
					'approve'=>Input::get('org_admin_list_approve'),
					'worning'=>Input::get('org_admin_list_worning'),
					'sof_delete'=>Input::get('org_admin_list_sof_delete'),
					'par_delete'=>Input::get('org_admin_list_par_delete'),
					'report'=>Input::get('org_admin_list_report'),
					)
				);
			//org_my_org module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','org_my_org')
			->update(
				array(
					'access'=>Input::get('org_my_org_access'),
					'entry'=>Input::get('org_my_org_entry'),
					'update'=>Input::get('org_my_org_update'),
					'approve'=>Input::get('org_my_org_approve'),
					'worning'=>Input::get('org_my_org_worning'),
					'sof_delete'=>Input::get('org_my_org_sof_delete'),
					'par_delete'=>Input::get('org_my_org_par_delete'),
					'report'=>Input::get('org_my_org_report'),
					)
				);
			//org_report module update
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','org_report')
			->update(
				array(
					'access'=>Input::get('org_report_access'),
					'entry'=>Input::get('org_report_entry'),
					'update'=>Input::get('org_report_update'),
					'approve'=>Input::get('org_report_approve'),
					'worning'=>Input::get('org_report_worning'),
					'sof_delete'=>Input::get('org_report_sof_delete'),
					'par_delete'=>Input::get('org_report_par_delete'),
					'report'=>Input::get('org_report_report'),					
					)
				);
			/*Pel Start*/
			
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','pel_simulator')
			->update(
				array(
					'access'=>Input::get('pel_simulator_access'),
					'entry'=>Input::get('pel_simulator_entry'),
					'update'=>Input::get('pel_simulator_update'),
					'approve'=>Input::get('pel_simulator_approve'),
					'worning'=>Input::get('pel_simulator_worning'),
					'sof_delete'=>Input::get('pel_simulator_sof_delete'),
					'par_delete'=>Input::get('pel_simulator_par_delete'),
					'report'=>Input::get('pel_simulator_report'),
					)
				);
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','pel_list')
			->update(
				array(
					'access'=>Input::get('pel_list_access'),
					'entry'=>Input::get('pel_list_entry'),
					'update'=>Input::get('pel_list_update'),
					'approve'=>Input::get('pel_list_approve'),
					'worning'=>Input::get('pel_list_worning'),
					'sof_delete'=>Input::get('pel_list_sof_delete'),
					'par_delete'=>Input::get('pel_list_par_delete'),
					'report'=>Input::get('pel_list_report'),
					)
				);
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','pel_flying_details')
			->update(
				array(
					'access'=>Input::get('pel_flying_details_access'),
					'entry'=>Input::get('pel_flying_details_entry'),
					'update'=>Input::get('pel_flying_details_update'),
					'approve'=>Input::get('pel_flying_details_approve'),
					'worning'=>Input::get('pel_flying_details_worning'),
					'sof_delete'=>Input::get('pel_flying_details_sof_delete'),
					'par_delete'=>Input::get('pel_flying_details_par_delete'),
					'report'=>Input::get('pel_flying_details_report'),
					)
				);
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','pel_atc_log_details')
			->update(
				array(
					'access'=>Input::get('pel_atc_log_details_access'),
					'entry'=>Input::get('pel_atc_log_details_entry'),
					'update'=>Input::get('pel_atc_log_details_update'),
					'approve'=>Input::get('pel_atc_log_details_approve'),
					'worning'=>Input::get('pel_atc_log_details_worning'),
					'sof_delete'=>Input::get('pel_atc_log_details_sof_delete'),
					'par_delete'=>Input::get('pel_atc_log_details_par_delete'),
					'report'=>Input::get('pel_atc_log_details_report'),
					)
				);
			DB::table('module_user_permission')
			->where('user_id',$empId)
			->where('module_name','pel_ame_log_details')
			->update(
				array(
					'access'=>Input::get('pel_ame_log_details_access'),
					'entry'=>Input::get('pel_ame_log_details_entry'),
					'update'=>Input::get('pel_ame_log_details_update'),
					'approve'=>Input::get('pel_ame_log_details_approve'),
					'worning'=>Input::get('pel_ame_log_details_worning'),
					'sof_delete'=>Input::get('pel_ame_log_details_sof_delete'),
					'par_delete'=>Input::get('pel_ame_log_details_par_delete'),
					'report'=>Input::get('pel_ame_log_details_report'),
					)
				);
					
			
					/*PEL End*/
					
			
			return Redirect::to('viewUsers')->with('message','Updated!');
		} else {
			 return Redirect::to('viewUsers')->with('error', 'The following errors occurred')->withErrors($validator)->withInput();
		}
		
		
		
	}


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
			 return Redirect::back()->with('error', 'The following errors occurred')->withErrors($validator)->withInput();
		}
	}


	public function updateMyProfile(){
		//$validator = Validator::make(Input::all(), User::$rule_changePass);
		$photo_upload=parent::updateFileUpload('old_photo','photo','userPhoto');
		
		$id=Input::get('id');
		//if ($validator->passes()) {		
		DB::table('users')
		->where('id',$id)
		->update(array(
		'name' => Input::get('name'),
		'email' => Input::get('email'),
		'photo' => $photo_upload
				
		));
	
	
		/*}
		else{
			return Redirect::to('settings')->with('error', 'The following errors occurred')->withErrors($validator)->withInput();
		}*/
		return Redirect::back()->with('message','Profile Updated!!');
	}
	public function delete()
	{
		$id=Input::get('id');
		$user = User::find($id); 
		$user->delete();
		return Redirect::to('viewUsers')->with('message','User Successfully Deleted!!');
	}

	public function viewModule(){
		$modules=DB::table('module_names')
		->where('soft_delete','<>','1')
		->orderBy('module_name')
		->get();
		return View::make('settings.module')
		->with('PageName','All Module')
		->with('modules',$modules)

		;
	}
	public function saveModule(){
		$module= new Module;
		$module->module_name=Input::get('module_name');
		$module->save();
		return Redirect::back()->with('message','Module Saved!');
	}
	public function updateModule(){
		DB::table('module_names')
		->where('id',Input::get('id'))
		->update(array(
			'module_name'=>Input::get('module_name')
			));
		DB::table('module_user_permission')
		->where('module_name',Input::get('old_module_name'))
		->update(array(
			'module_name'=>Input::get('module_name')
			));
		return Redirect::back()->with('message','Module Name Updated!');
	}

}