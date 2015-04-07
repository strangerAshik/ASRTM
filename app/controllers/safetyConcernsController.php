<?php

class SafetyConcernsController extends \BaseController {

	
		public function main(){
		//return "Hello";
		return View::make('safetyConcerns/main')
		->with('PageName','Safety Concerns')
		->with('personnel',parent::getPersonnelInfo());
	}
	public function entry(){
		$today=date("d F Y");
		$dates=parent::dates();
		$months=parent::months();
		$years=parent::years_from();		
		$id = Auth::user()->emp_id();
		//R-Open
		$rOpen1=COUNT(DB::table('safeties')
                    ->where('corrective_status','R-Open')
                    ->where('initial_risk_analysis','H-High Risk')
                    ->get());
		$rOpen2=COUNT(DB::table('safeties')
                    ->where('corrective_status', '=','R-Open')
                    ->where('initial_risk_analysis', '=','M-Medium Risk')
                    ->get());
		$rOpen3=COUNT(DB::table('safeties')
                    ->where('corrective_status', '=','R-Open')
                    ->where('initial_risk_analysis', '=','L-Low Risk')
                    ->get());
		$rOpen4=COUNT(DB::table('safeties')
                    ->where('corrective_status', '=','R-Open')
                    ->where('initial_risk_analysis', '=','N-No Risk')
                    ->get());
		//A-All Ready In Progress
		$aAll1=COUNT(DB::table('safeties')
                    ->where('corrective_status', '=','A-All Ready In Progress')
                    ->where('initial_risk_analysis', '=','H-High Risk')
                    ->get());
		$aAll2=COUNT(DB::table('safeties')
                    ->where('corrective_status', '=','A-All Ready In Progress')
                    ->where('initial_risk_analysis', '=','M-Medium Risk')
                    ->get());
		$aAll3=COUNT(DB::table('safeties')
                    ->where('corrective_status', '=','A-All Ready In Progress')
                    ->where('initial_risk_analysis', '=','L-Low Risk')
                    ->get());
		$aAll4=COUNT(DB::table('safeties')
                    ->where('corrective_status', '=','A-All Ready In Progress')
                    ->where('initial_risk_analysis', '=','N-No Risk')
                    ->get());
		
		
		return View::make('safetyConcerns/entry')
		->with('PageName','Safety Concern Entry')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('year',parent::years_from())
		->with('personnel',parent::getPersonnelInfo())
		
		->with('OH',$rOpen1)
		->with('OM',$rOpen2)
		->with('OL',$rOpen3)
		->with('ON',$rOpen4)
		
		->with('AH',$aAll1)
		->with('AM',$aAll2)
		->with('AL',$aAll3)
		->with('AN',$aAll4);
	}
	public function issuedList(){
		$today=date("d F Y");
		$dates=parent::dates();
		$months=parent::months();
		$years=parent::years_from();		
		$id = Auth::user()->emp_id();
		//query for getting list sorted by Corrective Status
		$displayQuery=DB::table('safeties')
                    ->where('corrective_status','!=','R-Resolved')
                    ->where('corrective_status','!=','X-Cancelled')
					->orderBy('id', 'desc')
                    ->get();
		//print_r($query);
		return View::make('safetyConcerns/issuedListl')
		->with('PageName','Safety Concerns List')
		->with('sl','0')
		->with('dates',$dates)
		->with('toDay',$today)
		->with('months',$months)
		->with('year',$years)
		->with('infos',$displayQuery)
		->with('personnel',parent::getPersonnelInfo());
	}
	public function save(){
		DB::table('safeties')->insert(array(
		'user_id' => Input::get('user_id'),
		'assigned_inspector' => Input::get('assigned_inspector'),
		'corrective_status' => Input::get('corrective_status'),
		'initial_risk_analysis' =>Input::get('initial_risk_analysis') ,
		'type_of_issue' => Input::get('type_of_issue'),
		'published_practice' => Input::get('published_practice'),
		'regulation' => Input::get('regulation'),
		'job_aid' => Input::get('job_aid'),
		'questions' => Input::get('questions'),
		'organization' => Input::get('organization'),
		'aircraft_registration' => Input::get('aircraft_registration'),
		'pel_number' => Input::get('pel_number'),
		'provided_to' => Input::get('provided_to'),
		'receipt_date' => Input::get('receipt_date'),
		'curative_priority' => Input::get('curative_priority'),
		'target_date' => Input::get('target_date'),
		'target_month' => Input::get('target_month'),
		'target_year' => Input::get('target_year'),
		'eir' => Input::get('eir'),
		'final_res_date' => Input::get('final_res_date'),
		'final_res_month' => Input::get('final_res_month'),
		'final_res_year' => Input::get('final_res_year'),
		'final_res_inspector' => Input::get('final_res_inspector'),
		'final_res_method' => Input::get('final_res_method'),
		'residual_risk' => Input::get('residual_risk'),
		'safety_concern' => Input::get('safety_concern'),
		
		'created_at' => time(),
		'updated_at' =>time()		
		));
			
		return Redirect::to('safety/entry')->with('message', 'Successfully Saved!!');
	}
	public function update(){
		$id=Input::get('id');
		DB::table('safeties')
		->where('id',$id)
		->update(array(
		'user_id' => Input::get('user_id'),
		'assigned_inspector' => Input::get('assigned_inspector'),
		'corrective_status' => Input::get('corrective_status'),
		'initial_risk_analysis' =>Input::get('initial_risk_analysis') ,
		'type_of_issue' => Input::get('type_of_issue'),
		'published_practice' => Input::get('published_practice'),
		'regulation' => Input::get('regulation'),
		'job_aid' => Input::get('job_aid'),
		'questions' => Input::get('questions'),
		'organization' => Input::get('organization'),
		'aircraft_registration' => Input::get('aircraft_registration'),
		'pel_number' => Input::get('pel_number'),
		'provided_to' => Input::get('provided_to'),
		'receipt_date' => Input::get('receipt_date'),
		'curative_priority' => Input::get('curative_priority'),
		'target_date' => Input::get('target_date'),
		'target_month' => Input::get('target_month'),
		'target_year' => Input::get('target_year'),
		'eir' => Input::get('eir'),
		'final_res_date' => Input::get('final_res_date'),
		'final_res_month' => Input::get('final_res_month'),
		'final_res_year' => Input::get('final_res_year'),
		'final_res_inspector' => Input::get('final_res_inspector'),
		'final_res_method' => Input::get('final_res_method'),
		'residual_risk' => Input::get('residual_risk'),
		'safety_concern' => Input::get('safety_concern'),
		'updated_at' =>time()		
		));
			
		return Redirect::to('safety/issuedList')->with('message', 'Successfully Update!!');
	}
}