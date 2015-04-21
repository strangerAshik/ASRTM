<?php

class SafetyConcernsController extends \BaseController {

	
		public function main(){
		//return "Hello";
		return View::make('safetyConcerns/main')
		->with('PageName','Safety Concerns')
		->with('personnel',parent::getPersonnelInfo());
	}
	public function newSafetyConcern(){
		
		$id = Auth::user()->emp_id();
	
		
		
		return View::make('safetyConcerns/new-safety-issue')
		->with('PageName','New Safety Concern')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('years',parent::years_from())
		
		;
	}
	public function issuedList(){
		
		$id = Auth::user()->emp_id();
		//query for getting list sorted by Corrective Status
		/*$displayQuery=DB::table('sc_safety_concern')
					->orderBy('id', 'desc')
                    ->get();*/
		$displayQuery=DB::table('sc_safety_concern')
        ->leftJoin('sc_primary_inspection', 'sc_safety_concern.inspection_number', '=', 'sc_primary_inspection.inspection_number')
        ->get();
		//print_r($query);
		return View::make('safetyConcerns/issuedListl')
		->with('PageName','Safety Concerns List')
		->with('sl','0')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('year',parent::years_from())
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
	public function newInspection(){
		return View::make('safetyConcerns.new-inspection')
		->with('PageName','Issue Inspection')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('years',parent::years_from());
		
	}
	public function singleInspection($ins_num){
		$ins_primary_infos=DB::table('sc_primary_inspection')
		->where('inspection_number','=',$ins_num)
		->get();
		$safety_concerns=DB::table('sc_safety_concern')
		->where('inspection_number','=',$ins_num)
		->get();
		
		return View::make('safetyConcerns.singleInspection')
		->with('PageName','Single Inspection')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('years',parent::years_from())
		->with('safety_concerns',$safety_concerns)
		
		->with('ins_primary_infos',$ins_primary_infos);
		
	}
	public function singlesafetyConcern($sc_num){
		$safetyConcernDatas=DB::table('sc_safety_concern')
		->where('safety_issue_number','=',$sc_num)
		->where('soft_delete','<>','1')
		->get();
		$correctiveActions=DB::table('sc_corrective_action')
		->where('safety_issue_number','=',$sc_num)
		->where('soft_delete','<>','1')
		->get();
		$approvalInfos=DB::table('sc_approval_info')
		->where('safety_issue_number','=',$sc_num)
		->where('soft_delete','<>','1')
		->get();
		$forwardings=DB::table('sc_forwarding')
		->where('safety_issue_number','=',$sc_num)
		->where('soft_delete','<>','1')
		->get();
		$legalOpinions=DB::table('sc_legal_openion')
		->where('safety_issue_number','=',$sc_num)
		->where('soft_delete','<>','1')
		->get();
		//last Assigned person
		$lastAssignedPerson=DB::table('sc_forwarding')
		->where('safety_issue_number','=',$sc_num)
		->where('soft_delete','<>','1')
		->orderBy('id', 'desc')->first();
		
		//return parent::dDays('25','April','2015');
		
		return View::make('safetyConcerns.single-safety-concern')
		->with('PageName','Single Safety concern')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('years_from',parent::years_from())
		->with('years',parent::years())
		->with('safetyConcernDatas',$safetyConcernDatas)
		->with('approvalInfos',$approvalInfos)
		->with('forwardings',$forwardings)
		->with('legalOpinions',$legalOpinions)
		->with('lastAssignedPerson',$lastAssignedPerson)
		->with('correctiveActions',$correctiveActions);
	}
	public function followUp($sc_num){
		$folloUpInfos=DB::table('sc_follow_up')->where('safety_issue_number','=',$sc_num)->get();
		return View::make('safetyConcerns.follow-up')
		->with('PageName','Single Inspection')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('years_from',parent::years_from())
		->with('years',parent::years())
		->with('sc_num',$sc_num)
		->with('folloUpInfos',$folloUpInfos);
	
	}
	public function savePrimaryInspection(){
		$sc=new SCPrimaryInspection;		
		
		$sc->inspection_number=Input::get('inspection_number');
		$sc->inspection_title=Input::get('inspection_title');
		$sc->lead_inspector=Input::get('lead_inspector');
		//$sc->team_members=Input::get('team_members');
		$sc->type_of_inspection=Input::get('type_of_inspection');
		$sc->against_organization=Input::get('against_organization');
		
		$sc->row_creator=Auth::user()->getName();
		$sc->approve=0;
		$sc->warning=0;
		$sc->soft_delete=0;
		$sc->save();
		$ins_num=Input::get('inspection_number');
		return Redirect::to('safety/singleInspection/'.$ins_num)->with('message', 'Successfully Saved Inspection Primary Data!!');
		
		
		
	}
	public function updatePrimaryInspection(){
		$id= Input::get('id');
			$update=DB::table('sc_primary_inspection')
            ->where('id','=',$id)
            ->update(array(
				'inspection_title' => Input::get('inspection_title'),
				'lead_inspector' => Input::get('lead_inspector'),
				//'team_members' => Input::get('team_members'),
				'type_of_inspection' => Input::get('type_of_inspection'),
				'against_organization' => Input::get('against_organization'),
				
				'row_updator' => Auth::user()->getName(),					
				'updated_at' =>time()	
			));
			if($update)
				return Redirect::back()->with('message', 'Successfully Updated!!');
				return Redirect::back()->with('message', 'Not Updated!!');
	}
	public function saveSafetyConcern(){
		$eir_file=parent::fileUpload('eir_file','sc_eir_file');
		$job_aid_file=parent::fileUpload('job_aid_file','sc_job_aid_file');
		
		$sc=new SCSafetyConcern;		
		
		$sc->inspection_number=Input::get('inspection_number');
		
		$sc->safety_issue_number=Input::get('safety_issue_number');
		
		$sc->safety_issue_title=Input::get('safety_issue_title');
		$sc->type_of_issue=Input::get('type_of_issue');
		$sc->poi_or_responsible=Input::get('poi_or_responsible');
		$sc->issue_finding_status=Input::get('issue_finding_status');
		$sc->assigned_inspector=Input::get('assigned_inspector');
		$sc->issue_finding_date=Input::get('issue_finding_date');
		$sc->issue_finding_month=Input::get('issue_finding_month');
		$sc->issue_finding_year=Input::get('issue_finding_year');
		$sc->issue_finding_local_time=Input::get('issue_finding_local_time');
		$sc->place_or_airport=Input::get('place_or_airport');
		$sc->cvr_statement=Input::get('cvr_statement');
		$sc->initial_risk_analysis=Input::get('initial_risk_analysis');
		$sc->corrective_satatus=Input::get('corrective_satatus');
		$sc->corrective_priority=Input::get('corrective_priority');
		//$sc->resived_date=Input::get('resived_date');
		//$sc->resived_month=Input::get('resived_month');
		//$sc->resived_year=Input::get('resived_year');
		//$sc->revised_time=Input::get('revised_time');
		$sc->provided_to=Input::get('provided_to');
		$sc->target_date=Input::get('target_date');
		$sc->target_month=Input::get('target_month');
		$sc->target_year=Input::get('target_year');
		$sc->eir_file=$eir_file;
		$sc->regulation_issue=Input::get('regulation_issue');
		$sc->public_practise=Input::get('public_practise');
		$sc->regulation=Input::get('regulation');
		$sc->job_aid_file=$job_aid_file;
		$sc->question=Input::get('question');
		$sc->answer=Input::get('answer');
		$sc->responsible_pels=Input::get('responsible_pels');
		$sc->aircraft_msn=Input::get('aircraft_msn');
		$sc->aircraft_rgistration_number=Input::get('aircraft_rgistration_number');
		$sc->final_regulation_date=Input::get('final_regulation_date');
		$sc->final_regulation_month=Input::get('final_regulation_month');
		$sc->final_regulation_year=Input::get('final_regulation_year');
		$sc->final_regulation_inspector=Input::get('final_regulation_inspector');
		$sc->final_regulation_method=Input::get('final_regulation_method');
		$sc->residual_risk=Input::get('residual_risk');
		$sc->actual_finding=Input::get('actual_finding');
		$sc->safety_concern=Input::get('safety_concern');
		$sc->risk_statement=Input::get('risk_statement');
		
		
		$sc->row_creator=Auth::user()->getName();
		$sc->approve=0;
		$sc->warning=0;
		$sc->soft_delete=0;
		$sc->save();
		//$ins_num=Input::get('inspection_number');
		$IN=Input::get('inspection_number');
		$SCN=Input::get('safety_issue_number');
		if($IN=='Null')
		return Redirect::to('safety/singlesafetyConcern/'.$SCN)->with('message', 'Successfully Saved safety Concern!!');
		return Redirect::back()->with('message', 'Successfully Saved safety Concern!!');
		
		
		
	}
	public function updateSafetyConcern(){
		$eir_file=parent::updateFileUpload('old_eir_file','eir_file','sc_eir_file');
		$job_aid_file=parent::updateFileUpload('old_job_aid_file','job_aid_file','sc_job_aid_file');
		
		$id= Input::get('id');
			DB::table('sc_safety_concern')
            ->where('id','=',$id)
            ->update(array(
				'safety_issue_title' => Input::get('safety_issue_title'),
				'type_of_issue' => Input::get('type_of_issue'),
				'poi_or_responsible' => Input::get('poi_or_responsible'),
				'issue_finding_status' => Input::get('issue_finding_status'),
				'assigned_inspector' => Input::get('assigned_inspector'),
				'issue_finding_date' => Input::get('issue_finding_date'),
				'issue_finding_month' => Input::get('issue_finding_month'),
				'issue_finding_year' => Input::get('issue_finding_year'),
				'issue_finding_local_time' => Input::get('issue_finding_local_time'),
				'place_or_airport' => Input::get('place_or_airport'),
				'cvr_statement' => Input::get('cvr_statement'),
				'initial_risk_analysis' => Input::get('initial_risk_analysis'),
				'corrective_satatus' => Input::get('corrective_satatus'),
				'corrective_priority' => Input::get('corrective_priority'),
				//'resived_date' => Input::get('resived_date'),
				//'resived_month' => Input::get('resived_month'),
				//'resived_year' => Input::get('resived_year'),
				//'revised_time' => Input::get('revised_time'),
				'provided_to' => Input::get('provided_to'),
				'target_date' => Input::get('target_date'),
				'target_month' => Input::get('target_month'),
				'target_year' => Input::get('target_year'),
				'eir_file' => $eir_file,
				'regulation_issue' => Input::get('regulation_issue'),
				'public_practise' => Input::get('public_practise'),
				'regulation' => Input::get('regulation'),
				'job_aid_file' => $job_aid_file,
				'question' => Input::get('question'),
				'answer' => Input::get('answer'),
				'responsible_pels' => Input::get('responsible_pels'),
				'aircraft_msn' => Input::get('aircraft_msn'),
				'aircraft_rgistration_number' => Input::get('aircraft_rgistration_number'),
				'final_regulation_date' => Input::get('final_regulation_date'),
				'final_regulation_month' => Input::get('final_regulation_month'),
				'final_regulation_year' => Input::get('final_regulation_year'),
				'final_regulation_inspector' => Input::get('final_regulation_inspector'),
				'final_regulation_method' => Input::get('final_regulation_method'),
				'residual_risk' => Input::get('residual_risk'),
				'actual_finding' => Input::get('actual_finding'),
				'safety_concern' => Input::get('safety_concern'),
				'risk_statement' => Input::get('risk_statement'),
					
				'updated_at' =>time()	
			));
		return Redirect::back()->with('message', 'Successfully Updated!!');
		
	}
	public function saveCorrectiveAction(){
		$corrective_action_file=parent::fileUpload('corrective_action_file','sc_corrective_action_file');
		
		$sc=new SCCorrectiveAction;		
		
		$sc->safety_issue_number=Input::get('safety_issue_number');
		$sc->currective_action=Input::get('currective_action');
		$sc->revived_date=Input::get('revived_date');
		$sc->revived_month=Input::get('revived_month');
		$sc->revived_year=Input::get('revived_year');
		$sc->concern_authority_officer=Input::get('concern_authority_officer');
		$sc->regulation_mitigation=Input::get('regulation_mitigation');
		$sc->regulation_mitigation_date=Input::get('regulation_mitigation_date');
		$sc->regulation_mitigation_month=Input::get('regulation_mitigation_month');
		$sc->regulation_mitigation_year=Input::get('regulation_mitigation_year');
		$sc->corrective_action_file=$corrective_action_file;
		
		$sc->row_creator=Auth::user()->getName();
		$sc->row_updator=Auth::user()->getName();
		$sc->approve=0;
		$sc->warning=0;
		$sc->soft_delete=0;
		$sc->save();
		
		return Redirect::back()->with('message', 'Successfully Saved Corrective Action!!');
		
	}
	public function updateCorrectiveAction(){
		$corrective_action_file=parent::updateFileUpload('old_corrective_action_file','corrective_action_file','sc_corrective_action_file');
		
		$id= Input::get('id');
			$update=DB::table('sc_corrective_action')
            ->where('id','=',$id)
            ->update(array(
				'currective_action' => Input::get('currective_action'),
				'revived_date' => Input::get('revived_date'),
				'revived_month' => Input::get('revived_month'),
				'revived_year' => Input::get('revived_year'),
				'concern_authority_officer' => Input::get('concern_authority_officer'),
				'regulation_mitigation' => Input::get('regulation_mitigation'),
				'regulation_mitigation_date' => Input::get('regulation_mitigation_date'),
				'regulation_mitigation_month' => Input::get('regulation_mitigation_month'),
				'regulation_mitigation_year' => Input::get('regulation_mitigation_year'),
				'corrective_action_file' => $corrective_action_file,
				'row_updator' => Auth::user()->getName(),					
				'updated_at' =>time()	
			));
			if($update)
				return Redirect::back()->with('message', 'Successfully Updated!!');
				return Redirect::back()->with('message', 'Not Updated!!');
	}
	
	public function saveFollowUp(){
		$follow_up_file=parent::fileUpload('follow_up_file','sc_follow_up_file');
		
		$sc=new SCFollowUp;		
		
		$sc->safety_issue_number=Input::get('sc_num');
		$sc->image=Employee::profilePic(Auth::User()->emp_id());
		$sc->user_name=Auth::User()->getName();
		$sc->user_id=Auth::User()->emp_id();
		$sc->follow_up=Input::get('follow_up');
		$sc->follow_up_file=$follow_up_file;
		$sc->chat_time=time('A');	
	
		
		$sc->row_creator=Auth::user()->getName();
	
		$sc->soft_delete=0;
		$sc->save();
		
		return Redirect::back()->with('message', '');
		
	}
	public function saveApprovalForm(){
		
		
		$sc=new SCApprovalInfo;		
		
		$sc->safety_issue_number=Input::get('safety_issue_number');
		$sc->approved_by=Input::get('approved_by');
		$sc->designation=Input::get('designation');
		$sc->approval_date=Input::get('approval_date');
		$sc->approval_month=Input::get('approval_month');
		$sc->approval_year=Input::get('approval_year');
		$sc->approval_note=Input::get('approval_note');
		
		
		
	
		
		$sc->row_creator=Auth::user()->getName();
		$sc->row_updator=Auth::user()->getName();
	
		$sc->soft_delete=0;
		$sc->save();
		
		return Redirect::back()->with('message', 'Approved!!');
		
	}
	public function updateApprovalForm(){		
		
		$id= Input::get('id');
			$update=DB::table('sc_approval_info')
            ->where('id','=',$id)
            ->update(array(
			
				'approved_by' => Input::get('approved_by'),
				'designation' => Input::get('e_designation'),
				'approval_date' => Input::get('approval_date'),
				'approval_month' => Input::get('approval_month'),
				'approval_year' => Input::get('approval_year'),
				'approval_note' => Input::get('approval_note'),
				
				'row_updator' => Auth::user()->getName(),					
				'updated_at' =>time()	
			));
			if($update)
				return Redirect::back()->with('message', 'Successfully Updated!!');
				return Redirect::back()->with('message', 'Not Updated!!');
	}
	public function saveForwardingInfo(){
		
		
		$sc=new SCForwarding;		
		
		$sc->safety_issue_number=Input::get('safety_issue_number');
		
		$sc->forwarding_to=Input::get('forwarding_to');
		$sc->designation=Input::get('designation');
		$sc->forwarding_note=Input::get('forwarding_note');	
		$sc->forwarding_date=date('d F Y');	
		
		$sc->row_creator=Auth::user()->getName();
		$sc->row_updator=Auth::user()->getName();
	
		$sc->soft_delete=0;
		$sc->save();
		
		return Redirect::back()->with('message', 'Forwarded!!');
		
	}
	public function updateForwardingInfo(){		
		$id= Input::get('id');
			$update=DB::table('sc_forwarding')
            ->where('id','=',$id)
            ->update(array(
			
				'forwarding_to' => Input::get('forwarding_to'),
				'designation' => Input::get('designation'),
				'forwarding_note' => Input::get('forwarding_note'),
				
				'row_updator' => Auth::user()->getName(),					
				'updated_at' =>time()	
			));
			if($update)
				return Redirect::back()->with('message', 'Successfully Updated!!');
				return Redirect::back()->with('message', 'Not Updated!!');

	}
	public function saveLegalOpinion(){
		$sc=new SCLegalOpenion;		
		
		$sc->safety_issue_number=Input::get('safety_issue_number');
		
		$sc->legal_openion=Input::get('legal_openion');
		
		$sc->row_creator=Auth::user()->getName();
		$sc->creator_emp_id=Auth::user()->emp_id();
		$sc->row_updator=Auth::user()->getName();
		$sc->updater_emp_id=Auth::user()->emp_id();
	
		$sc->soft_delete=0;
		$sc->save();
		
		return Redirect::back()->with('message', 'Legal Opinion Saved!!');
	}
	public function updateLegalOpinion(){
		$id= Input::get('id');
			$update=DB::table('sc_legal_openion')
            ->where('id','=',$id)
            ->update(array(
			
				'legal_openion' => Input::get('legal_openion'),
				
				'row_updator' => Auth::user()->getName(),					
				'updater_emp_id' => Auth::user()->emp_id(),					
				'updated_at' =>time()	
			));
			if($update)
				return Redirect::back()->with('message', 'Successfully Updated!!');
				return Redirect::back()->with('message', 'Not Updated!!');
	}
//save info 

}