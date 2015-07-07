<?php

class SurveillanceController extends \BaseController {

	public function main()
	{
		return View::make('surveillance.main')
		->with('PageName','Action Main');
	}

	
	public function newActionEnrty()
	{
		$organizations=DB::table('users')->lists('organization');
		$inspectors=DB::table('users')->where('role','Inspector')->get();
		$undefineSurveillance=array('70000'.time()=>'70000-'.time().' if Unbdefine Program');
		$toDayProgram=DB::table('sia_program')->where('date',date('Y-m-d'))->lists('sia_number');
		$toDayProgram=array_merge($undefineSurveillance,$toDayProgram);
		return View::make('surveillance.newActionEnrty')
		->with('PageName','New Action Entry')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('years_from',parent::years_from())
		->with('years',parent::years())
		->with('organizations',$organizations)
		->with('inspectors',$inspectors)
		->with('toDayProgram',$toDayProgram)
		;
	}

	public function surveillanceList(){
		$actionList=DB::table('sia_action')->get();
		return View::make('surveillance.surveillanceList')
		->with('PageName','New Action Entry')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('years_from',parent::years_from())
		->with('years',parent::years())
		->with('actionList',$actionList)
		->with('from','1 January 2015')
		->with('to',date('d F Y'))
		;

	}
	public function actionListDateToDate(){
		//$from=Input::get('from_date').' '.Input::get('from_month').' '.Input::get('from_year');
		$from=Input::get('from_date').' '.Input::get('from_month').' '.Input::get('from_year');
		$timestamp = strtotime($from);
		$from =date('Y-m-d', $timestamp);
		$to=Input::get('to_date').' '.Input::get('to_month').' '.Input::get('to_year');
		$timestamp = strtotime($to);
		$to = date('Y-m-d', $timestamp);
		$actionList=DB::table('sia_action')->whereBetween('date',array($from,$to))->get();
		return View::make('surveillance.surveillanceList')
			->with('PageName','New Action Entry')
			->with('dates',parent::dates())
			->with('toDay',date("d F Y"))
			->with('months',parent::months())
			->with('years_from',parent::years_from())
			->with('years',parent::years())
			->with('actionList',$actionList)
			->with('from',$from)
			->with('to',$to)

			;
				}
	public function todayTaskList(){
		$prgramList=DB::table('sia_program')->orderBy('created_at','desc')->where('date',date("Y-m-d"))->get();
		return View::make('surveillance.todayTaskList')
		->with('PageName','Today Task List')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('years_from',parent::years_from())
		->with('years',parent::years())
		->with('prgramList',$prgramList)
		;
	}
	public function inspectionCheckList(){
		return View::make('surveillance.inspectionCheckList')
		->with('PageName','Inspection Check List')
		;
		/*
		*/
	}
	public function checkList(){
		$filename = 'test.pdf';
		$path ='files/inspectionCheckList/'.$filename;

		return Response::make(file_get_contents($path), 200, [
		    'Content-Type' => 'application/pdf',
		    'Content-Disposition' => 'inline; '.$filename,
		]);
	}
	public function report(){
		return View::make('surveillance.report')
		->with('PageName','Report')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('years_from',parent::years_from())
		->with('years',parent::years())
		;
	}
	public function singleSurveillance(){

		return View::make('surveillance.singleSurveillance')
		->with('PageName','New Action Entry')
		->with('dates',parent::dates())
		->with('toDay',date("d F Y"))
		->with('months',parent::months())
		->with('years_from',parent::years_from())
		->with('years',parent::years());

	}
	public function saveAction(){
		$date=Input::get('date').' '.Input::get('month').' '.Input::get('year');
		$timestamp = strtotime($date);
		$date =date('Y-m-d', $timestamp);
		$team_members=serialize(Input::get('team_members'));
		$pel_numbers=serialize(Input::get('pel_numbers'));
		DB::table('sia_action')->insert(
					array(
							'program_type'=>Input::get('program_type'),
							'sia_number'=>Input::get('sia_number'),
							'team_members'=>$team_members,
							'event'=>Input::get('event'),
							'objective'=>Input::get('objective'),
							'iats_code'=>Input::get('iats_code'),
							'organization'=>Input::get('organization'),
							'location'=>Input::get('location'),
							'date'=>$date,
							'time'=>Input::get('time'),
							'flight_number'=>Input::get('flight_number'),
							'departure_airfield'=>Input::get('departure_airfield'),
							'arrival_airfield'=>Input::get('arrival_airfield'),
							'aircraft_mms'=>Input::get('aircraft_mms'),
							'aircraft_registration_no'=>Input::get('aircraft_registration_no'),
							'pic'=>Input::get('pic'),
							'pel_numbers'=>$pel_numbers,
							'other_personal_inspected'=>Input::get('other_personal_inspected'),
							'has_finding'=>Input::get('has_finding'),
							'findings'=>Input::get('findings'),
							'result'=>Input::get('result'),
							'corrective_action_plan'=>Input::get('corrective_action_plan'),
							'hazard_identification'=>Input::get('hazard_identification'),
							'initial_risk'=>Input::get('initial_risk'),
							'determine_risk'=>Input::get('determine_risk'),
							
							'violation_of_safety_standard'=>Input::get('violation_of_safety_standard'),
							'safety_risk_management'=>Input::get('safety_risk_management'),

							'determine_severity'=>Input::get('determine_severity'),
							'determine_likelihood'=>Input::get('determine_likelihood'),
							'risk_statement'=>Input::get('risk_statement'),
							'has_safety_concern'=>Input::get('has_safety_concern'),
							
							
							'row_creator'=>Auth::user()->getName(),
							'row_updator'=>Auth::user()->getName(),
							'soft_delete'=>'0',
							'created_at'=>date('Y-m-d H:i:s'),
							'updated_at'=>date('Y-m-d H:i:s')
						)
				);
		return Redirect::back()->with('message','Action is Saved!');
	}

	public function newProgram(){
		$organizations=DB::table('users')->lists('organization');
		$inspectors=DB::table('users')->where('role','Inspector')->get();
		$prgramList=DB::table('sia_program')->orderBy('created_at','desc')->limit(5)->get();
		return View::make('surveillance.newProgram')
				->with('PageName','New Program')
				->with('organizations',$organizations)
				->with('dates',parent::dates())
				->with('toDay',date("d F Y"))
				->with('months',parent::months())
				->with('years_from',parent::years_from())
				->with('years',parent::years())
				->with('inspectors',$inspectors)
				->with('prgramList',$prgramList)
				;
	}
	public function saveProgram(){
		$date=Input::get('date').' '.Input::get('month').' '.Input::get('year');
		$timestamp = strtotime($date);
		$date = date('Y-m-d', $timestamp);
		$team_members=serialize(Input::get('team_members'));
		DB::table('sia_program')->insert(
					array(
							'sia_number'=>Input::get('sia_number'),
							'org_name'=>Input::get('org_name'),
							'event'=>Input::get('event'),
							'date'=>$date,
							'time'=>Input::get('time'),
							'team_members'=>$team_members,
							'remarks'=>Input::get('remarks'),
							
							'row_creator'=>Auth::user()->getName(),
							'row_updator'=>Auth::user()->getName(),
							'soft_delete'=>'0',
							'created_at'=>date('Y-m-d H:i:s'),
							'updated_at'=>date('Y-m-d H:i:s')
						)
				);
		return Redirect::back()->with('message','Program Saved!');
	}
	/*public function programList($from='1 January 2015',$to='26 June 2015'){
		$from=Input::get('from_date').' '.Input::get('from_month').' '.Input::get('from_year');
		$to=Input::get('to_date').' '.Input::get('to_month').' '.Input::get('to_year');
		$prgramList=DB::table('sia_program')->whereBetween('date',array($from,$to))->get();
		return View::make('surveillance.programList')
			->with('PageName','Program List')
			->with('dates',parent::dates())
			->with('toDay',date("d F Y"))
			->with('months',parent::months())
			->with('years_from',parent::years_from())
			->with('years',parent::years())
			->with('prgramList',$prgramList)
		;
	}*/
	public function programList(){
		//$from=Input::get('from_date').' '.Input::get('from_month').' '.Input::get('from_year');
		//$to=Input::get('to_date').' '.Input::get('to_month').' '.Input::get('to_year');
		$prgramList=DB::table('sia_program')->get();
		return View::make('surveillance.programList')
			->with('PageName','Program List')
			->with('dates',parent::dates())
			->with('toDay',date("d F Y"))
			->with('months',parent::months())
			->with('years_from',parent::years_from())
			->with('years',parent::years())
			->with('prgramList',$prgramList)
			->with('from','1 January 2015')
			->with('to',date('d F Y'))

		;
	}
	public function programListDateToDate(){
		//$from=Input::get('from_date').' '.Input::get('from_month').' '.Input::get('from_year');
		$from=Input::get('from_date').' '.Input::get('from_month').' '.Input::get('from_year');
		$timestamp = strtotime($from);
		$from =date('Y-m-d', $timestamp);
		$to=Input::get('to_date').' '.Input::get('to_month').' '.Input::get('to_year');
		$timestamp = strtotime($to);
		$to = date('Y-m-d', $timestamp);
		 $prgramList=DB::table('sia_program')->whereBetween('date',array($from,$to))->get();
		return View::make('surveillance.programList')
			->with('PageName','Program List')
			->with('dates',parent::dates())
			->with('toDay',date("d F Y"))
			->with('months',parent::months())
			->with('years_from',parent::years_from())
			->with('years',parent::years())
			->with('prgramList',$prgramList)
			->with('from',$from)
			->with('to',$to)
			;
				}

	public function singleProgram($sia_number){
		$programDetails=DB::table('sia_program')->where('sia_number',$sia_number)->get();
		$actionDetails=DB::table('sia_action')->where('sia_number',$sia_number)->get();
		$safetyCons=DB::table('sc_safety_concern')->where('sia_number',$sia_number)->get();
		//$edps=DB::table('edp')->where('sia_number',$sia_number)->get();
		$approvalInfo=DB::table('sia_approval')->where('sia_number',$sia_number)->limit(1)->get();

		return View::make('surveillance.singleProgram')
					->with('PageName','Single Program')
					->with('dates',parent::dates())
					->with('toDay',date("d F Y"))
					->with('months',parent::months())
					->with('years_from',parent::years_from())
					->with('years',parent::years())
					->with('sia_number',$sia_number)
					->with('programDetails',$programDetails)
					->with('actionDetails',$actionDetails)
					->with('safetyCons',$safetyCons)
					->with('approvalInfo',$approvalInfo)
					;
	}
	public function correctiveAction($sia_number){

		$correctiveActions=DB::table('sia_corrective_action')->where('sia_number','=',$sia_number)->get();
		return View::make('surveillance.correctiveAction')
					->with('PageName','SIA Corrective Action')
					->with('dates',parent::dates())
					->with('toDay',date("d F Y"))
					->with('months',parent::months())
					->with('years_from',parent::years_from())
					->with('years',parent::years())					
					->with('sia_number',$sia_number)
					->with('correctiveActions',$correctiveActions)
					;
	}
	public function saveCorrectiveAction(){
		$revived_date=Input::get('revived_date').' '.Input::get('revived_month').' '.Input::get('revived_year');
		$timestamp = strtotime($revived_date);
		$revived_date =date('Y-m-d', $timestamp);

		$regulation_mitigation_date=Input::get('regulation_mitigation_date').' '.Input::get('regulation_mitigation_month').' '.Input::get('regulation_mitigation_year');
		$timestamp = strtotime($regulation_mitigation_date);
		$regulation_mitigation_date = date('Y-m-d', $timestamp);

		$corrective_action_file=parent::fileUpload('corrective_action_file','sia_corrective_action_file');
		DB::table('sia_corrective_action')->insert(array(
				'sia_number'=>Input::get('sia_number'),
				'currective_action'=>Input::get('currective_action'),
				'revived_date'=>$revived_date,
				'concern_authority_officer'=>Input::get('concern_authority_officer'),
				'regulation_mitigation'=>Input::get('regulation_mitigation'),
				'regulation_mitigation_date'=>Input::get('regulation_mitigation_date'),
				'corrective_action_file'=>$corrective_action_file,

				'row_creator'=>Auth::user()->getName(),
				'row_updator'=>Auth::user()->getName(),
				'approve'=>0,
				'warning'=>0,
				'soft_delete'=>0,
			));
		
		
		return Redirect::back()->with('message', 'Successfully Saved Corrective Action!!');
		
	}
	public function followUp($sia_number){
		$folloUpInfos=DB::table('sia_follow_up')->where('sia_number','=',$sia_number)->get();
		return View::make('surveillance.followUp')
					->with('PageName','SIA Follow Up')
					->with('sia_number',$sia_number)
					->with('folloUpInfos',$folloUpInfos)
					;
	}
	public function saveFollowUp(){
		$follow_up_file=parent::fileUpload('follow_up_file','sia_follow_up_file');
		DB::table('sia_follow_up')->insert(array(
			'sia_number'=>Input::get('sia_number'),
			'image'=>Employee::followUpPic(Auth::User()->emp_id()),
			'user_name'=>Auth::User()->getName(),
			'user_id'=>Auth::User()->emp_id(),
			'follow_up'=>Input::get('follow_up'),
			'follow_up_file'=>$follow_up_file,
			'chat_time'=>time('A'),
			'row_creator'=>Auth::user()->getName(),
			'soft_delete'=>0,
			));
				
		return Redirect::back()->with('message', '');
	}
	public function saveApprovalForm(){
			$approval_date=Input::get('approval_date').' '.Input::get('approval_month').' '.Input::get('approval_year');
			$strtotime=strtotime($approval_date);
			$approval_date=date('Y-m-d',$strtotime);
			DB::table('sia_approval')->insert(array(
			'sia_number'=>Input::get('sia_number'),
			'approved_by'=>Input::get('approved_by'),
			'designation'=>Input::get('designation'),
			'approval_date'=>$approval_date,
			'approval_note'=>Input::get('approval_note'),
			'row_creator'=>Auth::User()->getName(),
			'row_updator'=>Auth::User()->getName(),
			'soft_delete'=>'0',			
			'created_at'=>date('Y-m-d H:i:s'),			
			'updated_at'=>date('Y-m-d H:i:s')			
			));

		return Redirect::back()->with('message','Aproved!');
	}


}