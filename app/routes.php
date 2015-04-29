<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Start Role Initialization 
Route::get('/secret', function()
{
    $role = Auth::user()->Role();
	return View::make('test')
			->with('role',$role)
			
	;
 
    
});
Route::get('roleInit', function()
{
//ROll define   
    $cAdmin = new Role();
    $cAdmin->role_name = 'Chief Admin';
    $cAdmin->save();
 
    $admin = new Role();
    $admin->role_name = 'Admin';
    $admin->save();
	
	$dAdmin=new Role();
	$dAdmin->role_name='Deputy Admin';
	$dAdmin->save();
	
	$inspector=new Role();
	$inspector->role_name='Inspector';
	$inspector->save();
	
	$org=new Role();
	$org->role_name='Organization';
	$org->save();
	
	$executive=new Role();
	$executive->role_name='Executive';
	$executive->save();
	
	$user=new Role();
	$user->role_name='User';
	$user->save();
	
	$visitor=new Role();
	$visitor->role_name='visitor';
	$visitor->save();
//End Roll Define

//Permission define
 
    $read = new Permission();
    $read->name = 'can_read';
    $read->display_name = 'Can Read ';
    $read->save();
	
	$write = new Permission();
    $write->name = 'can_write';
    $write->display_name = 'Can write';
    $write->save();
 
    $edit = new Permission();
    $edit->name = 'can_edit';
    $edit->display_name = 'Can Update';
    $edit->save();
	
	$softDelete = new Permission();
    $softDelete->name = 'can_soft_delete';
    $softDelete->display_name = 'Can Soft Delete';
    $softDelete->save();
	
	$delete = new Permission();
    $delete->name = 'can_delete';
    $delete->display_name = 'Can Delete';
    $delete->save();
 //End Permission 
 //chief Admin power
    $cAdmin->attachPermission($read);
    $cAdmin->attachPermission($write);
    $cAdmin->attachPermission($edit);
    $cAdmin->attachPermission($softDelete);
    $cAdmin->attachPermission($delete);
//End chief Admin Power
// Admin power
    $admin->attachPermission($read);
    $admin->attachPermission($write);
    $admin->attachPermission($edit);
    $admin->attachPermission($softDelete);
   // $cAdmin->attachPermission($delete);
//End  Admin Power
//Deputy Admin power
    $dAdmin->attachPermission($read);
    $dAdmin->attachPermission($write);
    $dAdmin->attachPermission($edit);
    $dAdmin->attachPermission($softDelete);
   // $cAdmin->attachPermission($delete);
//End  Deputy Admin Power
//Inspector power
    $inspector->attachPermission($read);
    $inspector->attachPermission($write);
    //$inspector->attachPermission($edit);
   // $inspector->attachPermission($softDelete);
   // $cAdmin->attachPermission($delete);
//End Inspector Power
//ORG power
    $org->attachPermission($read);
    $org->attachPermission($write);
    $org->attachPermission($edit);
   // $inspector->attachPermission($softDelete);
   // $cAdmin->attachPermission($delete);
//End ORG Power
//executive power
    $executive->attachPermission($read);
    //$executive->attachPermission($write);
   // $executive->attachPermission($edit);
   // $inspector->attachPermission($softDelete);
   // $cAdmin->attachPermission($delete);
//End executive Power
	
//User power
    $user->attachPermission($read);
    //$executive->attachPermission($write);
   // $executive->attachPermission($edit);
   // $inspector->attachPermission($softDelete);
   // $cAdmin->attachPermission($delete);
//End User Power
//Visitor power
    $user->attachPermission($read);
    //$executive->attachPermission($write);
   // $executive->attachPermission($edit);
   // $inspector->attachPermission($softDelete);
   // $cAdmin->attachPermission($delete);
//End Visitor Power
	
  
 
    $user1 = User::find(1);
    //$user2 = User::find(2);
 
    $user1->attachRole($cAdmin);
   // $user2->attachRole($admin);
 
    return 'Woohoo!';
});
//End Role Initialization 
Route::get('login',function(){
	return Redirect::to('/');
});
Route::post('login','SettingsController@login');

Route::group(array('before'=>'auth'),function(){	
	Route::get('dashboard','DashboardController@index');
});

Route::get('/',function(){
	return View::make('welcome.index');
});
Route::get('contact',function(){
	return View::make('welcome.contact');
});
Route::get('faq',function(){
	return View::make('welcome.faq');
});
Route::get('about',function(){
	return View::make('welcome.about');
});

Route::group(array('before'=>'auth'),function(){
	Route::get('settings','SettingsController@index');
	Route::get('logout','SettingsController@logout');
	Route::get('viewUsers','SettingsController@viewUsers');
	Route::post('newUser/save','SettingsController@saveUser');
	Route::post('newUser/update','SettingsController@update');
	Route::post('user/delete','SettingsController@delete');
	Route::post('changePassword','SettingsController@changePassword');
});
Route::group(array('prefix' => 'aircraft','before'=>'auth'),function(){
	Route::get('main','AircraftController@main');
	
	Route::post('savePrimary','AircraftController@savePrimary');
	Route::post('editPrimary','AircraftController@editPrimary');
	Route::post('saveTCI','AircraftController@saveTCI');
	Route::post('editTCI','AircraftController@editTCI');
	Route::post('saveSTC','AircraftController@saveSTC');
	Route::post('editSTC','AircraftController@editSTC');
	Route::post('saveExemption','AircraftController@saveExemption');
	Route::post('editExemption','AircraftController@editExemption');
	Route::post('saveRegistrationInfo','AircraftController@saveRegistrationInfo');
	Route::post('editRegistrationInfo','AircraftController@editRegistrationInfo');
	Route::post('saveAC','AircraftController@saveAC');
	Route::post('editAC','AircraftController@editAC');
	Route::post('saveApproval','AircraftController@saveApproval');
	Route::post('editApproval','AircraftController@editApproval');
	Route::post('saveOwner','AircraftController@saveOwner');
	Route::post('editOwner','AircraftController@editOwner');
	Route::post('saveLessee','AircraftController@saveLessee');
	Route::post('editLessee','AircraftController@editLessee');
	Route::post('saveInsurer','AircraftController@saveInsurer');
	Route::post('editInsurer','AircraftController@editInsurer');
	Route::post('saveEquipmentReview','AircraftController@saveEquipmentReview');
	Route::post('editEquipmentReview','AircraftController@editEquipmentReview');
	
	Route::get('single/{mm}/{msn}','AircraftController@aircraftSingle');
	Route::get('new_aircraft','AircraftController@addNewAircraft');
	Route::get('aircraftList','AircraftController@aircraftList');
	//approve
	Route::get('approve/{table}/{id}','AircraftController@approve');
	Route::get('notApprove/{table}/{id}','AircraftController@notApprove');
	//warning
	Route::get('warning/{table}/{id}','AircraftController@warning');
	Route::get('removeWarning/{table}/{id}','AircraftController@removeWarning');
	//soft delete
	Route::get('softDelete/{table}/{id}','AircraftController@softDelete');
	Route::get('undoSoftDelete/{table}/{id}','AircraftController@undoSoftDelete');
	//permanent delete 
	Route::get('permanentDelete/{table}/{id}','AircraftController@permanentDelete');
});

Route::group(array('prefix' => 'qualification','before'=>'auth'), function()
{
	
	Route::get('employees','QualificationController@employees'); 
	Route::get('main','QualificationController@main'); 
	Route::get('pdf','QualificationController@pdf'); 
	Route::get('personnel', 'QualificationController@personnel');
	Route::get('education', 'QualificationController@education');
	Route::get('employment', 'QualificationController@employment');
	Route::get('pro_degree', 'QualificationController@pro_degree');
	Route::get('taining_work_ojt', 'QualificationController@taining_work_ojt');
	Route::get('language', 'QualificationController@language');
	Route::get('technical_licence', 'QualificationController@technical_licence');
	Route::get('aircraft_qualification', 'QualificationController@aircraft_qualification');
	Route::get('reference', 'QualificationController@reference');
	Route::get('emp_verification', 'QualificationController@emp_verification');
	Route::get('other', 'QualificationController@other');
	Route::get('comp_view', 'QualificationController@comp_view_per');
	Route::get('comp_view/{id}', 'QualificationController@comp_view');
	//insert data
	Route::post('savePersonnel', 'QualificationController@savePersonnel');
	Route::post('saveAccademic', 'QualificationController@saveAccademic');
	Route::post('saveThesis', 'QualificationController@saveThesis');
	Route::post('saveEmployment', 'QualificationController@saveEmployment');
	Route::post('pro_degree', 'QualificationController@proDegree');
	Route::post('saveTrainingWorkOJT','QualificationController@saveTrainingWorkOJT');
	Route::post('saveLanguage','QualificationController@saveLanguage');
	Route::post('saveTechnicalLicence','QualificationController@saveTechnicalLicence');
    Route::post('saveAircraftQualification','QualificationController@saveAircraftQualification');
	Route::post('saveReference','QualificationController@saveReference');
	Route::post('EmpVerification','QualificationController@EmpVerification');
	Route::post('savePublication','QualificationController@savePublication');
	Route::post('saveMembership','QualificationController@saveMembership');
	//delete data 
	Route::get('deletePersonnel/{id}','QualificationController@deletePersonnel' );
	Route::get('deleteAccademic/{id}', 'QualificationController@deleteAccademic');
	Route::get('deleteThesis/{id}', 'QualificationController@deleteThesis');
	Route::get('deleteEmployment/{id}','QualificationController@deleteEmployment');
	Route::get('deleteProDegree/{id}', 'QualificationController@deleteProDegree');
	Route::get('deleteTraining/{id}', 'QualificationController@deleteTraining');
	Route::get('deleteLanguage/{id}', 'QualificationController@deleteLanguage');
	Route::get('deleteTechlicence/{id}','QualificationController@deleteTechlicence');
	Route::get('deleteAirQualification/{id}','QualificationController@deleteAirQualification' );
	Route::get('deleteReference/{id}','QualificationController@deleteReference');
	Route::get('deleteEnpVeri/{id}','QualificationController@deleteEnpVeri');
	Route::get('deletePublication/{id}','QualificationController@deletePublication');
	Route::get('deleteMembership/{id}','QualificationController@deleteMembership');
	//Edit data
	Route::post('editPersonnel', 'QualificationController@editPersonnel');
	Route::post('updateAccademic', 'QualificationController@updateAccademic');
	Route::post('updateThesis', 'QualificationController@updateThesis');
	Route::post('updateEmployment', 'QualificationController@updateEmployment');
	Route::post('updatePro_degree', 'QualificationController@updatePro_degree');
	Route::post('updateTrainingWorkOJT', 'QualificationController@updateTrainingWorkOJT');
	Route::post('updateLanguage', 'QualificationController@updateLanguage');
	Route::post('updateTechnicalLicence', 'QualificationController@updateTechnicalLicence');
	Route::post('updateAircraftQualification', 'QualificationController@updateAircraftQualification');
	Route::post('updateReference', 'QualificationController@updateReference');
	Route::post('updateEmpVerification', 'QualificationController@updateEmpVerification');
	Route::post('updatePublication', 'QualificationController@updatePublication');
	Route::post('updateMembership', 'QualificationController@updateMembership');
	//Approve Data
	Route::get('approve/{table}/{id}','QualificationController@approve');
	
	

	

});

Route::group(array('prefix'=>'safety','before'=>'auth'),function(){
	Route::get('main','safetyConcernsController@main');
	//entry Form
	Route::get('newSafetyConcern','safetyConcernsController@newSafetyConcern');
	//
	Route::get('newInspection','safetyConcernsController@newInspection');
	Route::get('singleInspection/{ins_num}','safetyConcernsController@singleInspection');
	
	Route::get('singlesafetyConcern/{sc_num}','safetyConcernsController@singlesafetyConcern');
	Route::get('followUp/{sc_num}','safetyConcernsController@followUp');
	//view list
	Route::get('issuedList','safetyConcernsController@issuedList');
	
	//save entry 
	//Route::post('safetyConcern/save','safetyConcernsController@save');
	Route::post('savePrimaryInspection','safetyConcernsController@savePrimaryInspection');
	Route::post('updatePrimaryInspection','safetyConcernsController@updatePrimaryInspection');
	Route::post('saveSafetyConcern','safetyConcernsController@saveSafetyConcern');
	Route::post('updateSafetyConcern','safetyConcernsController@updateSafetyConcern');
	Route::post('saveCorrectiveAction','safetyConcernsController@saveCorrectiveAction');
	Route::post('updateCorrectiveAction','safetyConcernsController@updateCorrectiveAction');
	Route::post('saveFollowUp','safetyConcernsController@saveFollowUp');
	Route::post('saveApprovalForm','safetyConcernsController@saveApprovalForm');
	Route::post('updateApprovalForm','safetyConcernsController@updateApprovalForm');
	Route::post('saveForwardingInfo','safetyConcernsController@saveForwardingInfo');
	Route::post('updateForwardingInfo','safetyConcernsController@updateForwardingInfo');
	Route::post('saveLegalOpinion','safetyConcernsController@saveLegalOpinion');
	Route::post('updateLegalOpinion','safetyConcernsController@updateLegalOpinion');
	
	Route::post('safetyConcern/update','safetyConcernsController@update');
});

Route::group(array('prefix'=>'library','before'=>'auth'),function(){
	Route::get('main','libraryController@main');
	Route::get('newSupportingDocuments','libraryController@newSupportingDocuments');
	Route::post('saveSupportingDocument','libraryController@saveSupportingDocument');
	Route::post('updateSupportingDocument','libraryController@updateSupportingDocument');
	Route::post('saveSupportingDocumentType','libraryController@saveSupportingDocumentType');
	Route::post('updateSupportingDocumentType','libraryController@updateSupportingDocumentType');
	Route::get('privateView','libraryController@privateView');	
	Route::get('publicView','libraryController@publicView');
});
//Route::get('library/publicView','libraryController@publicView');
Route::get('libraryPublicView','PublicController@SDpublicView');
/*Route::get('libraryPublicView',function(){
	return 'Hello';
});*/


Route::group(array('prefix'=>'admin','before'=>'auth'),function(){
	Route::get('main','AdminTrackingController@main');
	//entry Form
	Route::get('entry','AdminTrackingController@entry');
	//view list
	Route::get('issuedList','AdminTrackingController@issuedList');
	//delete
	Route::get('deleteAdmin/{id}',function($id){
			DB::table('admin_trackings')->where('id', '=', $id)->delete();
			return Redirect::to('admin/issuedList')->with('message', 'Successfully Deleted!!');
	});
	//save entry 
	Route::post('save','AdminTrackingController@save');
	Route::post('update','AdminTrackingController@update');
});
Route::group(array('prefix'=>'doc','before'=>'auth'),function(){
	
	Route::get('main','DocController@main');
	Route::get('entry','DocController@entry');
	Route::get('listView','DocController@listView');
	//entry 
	Route::post('save','DocController@save');
	//update
	Route::post('update','DocController@update');
	//delete
	Route::get('delete/{id}', function($id){
		DB::table('document_controllers')->where('id', '=', $id)->delete();
		return Redirect::to('doc/listView')->with('message', 'Successfully Deleted!!');
		
		});
	
	
});


