<?php

class OrganizationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /organization
	 *
	 * @return Response
	 */
	public function main()
	{
		return View::make('organization.main')
		->with('PageName','Organization Dashbord');
	}
public function organizationList(){

$infos=DB::table('org_primary')			
			->where('soft_delete','<>','1')
			->get();
	return View::make('organization.listOrg')
		->with('PageName','Organization List')
		->with('infos',$infos);
}


	public function newOrganization()
	{
		return View::make('organization.newOrg')
		->with('PageName','New Organization');
	}
 
	
	public function saveOrgPrimary()
	{
		$org=new OrgPrimary;    

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');

		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::to('organization/singleOrganization/'.Input::get('org_number'));


	}
	public function singleOrganization($orgNum){
	
$orgPrimary=DB::table('org_primary')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_business_name=DB::table('org_business_name')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_certificates=DB::table('org_certificates')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_base_location=DB::table('org_base_location')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_management_contacts=DB::table('org_management_contacts')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_caa_contacts=DB::table('org_caa_contacts')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_exemptions_divinations=DB::table('org_exemptions_divinations')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_aircraft_listings=DB::table('org_aircraft_listings')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_policy_menual_approvals=DB::table('org_policy_menual_approvals')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_complexity_reviews=DB::table('org_complexity_reviews')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_aerial_work_approvals=DB::table('org_aerial_work_approvals')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_non_certificated_operations=DB::table('org_non_certificated_operations')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_flight_operation_approvals=DB::table('org_flight_operation_approvals')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_fleet_operation_approvals=DB::table('org_fleet_operation_approvals')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_fleet_maintanance_approvals=DB::table('org_fleet_maintanance_approvals')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_airport_auth=DB::table('org_airport_auth')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_leasing_arrangment=DB::table('org_leasing_arrangment')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_contracted_services=DB::table('org_contracted_services')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_amo_approvals=DB::table('org_amo_approvals')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_ato_approvals=DB::table('org_ato_approvals')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_aoc_approvals_areas=DB::table('org_aoc_approvals_areas')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_aoc_approval_routes=DB::table('org_aoc_approval_routes')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_aoc_maintenance_arrangement=DB::table('org_aoc_maintenance_arrangement')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_aoc_training_arrangement=DB::table('org_aoc_training_arrangement')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
$org_approval_simulators=DB::table('org_approval_simulators')
			->where('org_number','=',$orgNum)
			->where('soft_delete','<>','1')
			->get();
		return View::make('organization.singleOrg')
		->with('PageName','Single Organization')
		->with('orgPrimary',$orgPrimary)
		->with('dates',parent::dates())
		->with('months',parent::months())
		->with('years',parent::years())
		->with('years_from',parent::years_from())
		->with('org_business_name',$org_business_name)
		->with('org_certificates',$org_certificates)
		->with('org_base_location',$org_base_location)
		->with('org_management_contacts',$org_management_contacts)
		->with('org_caa_contacts',$org_caa_contacts)
		->with('org_exemptions_divinations',$org_exemptions_divinations)
		->with('org_aircraft_listings',$org_aircraft_listings)
		->with('org_policy_menual_approvals',$org_policy_menual_approvals)
		->with('org_complexity_reviews',$org_complexity_reviews)
		->with('org_aerial_work_approvals',$org_aerial_work_approvals)
		->with('org_non_certificated_operations',$org_non_certificated_operations)
		->with('org_flight_operation_approvals',$org_flight_operation_approvals)
		->with('org_fleet_operation_approvals',$org_fleet_operation_approvals)
		->with('org_fleet_maintanance_approvals',$org_fleet_maintanance_approvals)
		->with('org_airport_auth',$org_airport_auth)
		->with('org_leasing_arrangment',$org_leasing_arrangment)
		->with('org_leasing_arrangment',$org_leasing_arrangment)
		->with('org_contracted_services',$org_contracted_services)
		->with('org_amo_approvals',$org_amo_approvals)
		->with('org_ato_approvals',$org_ato_approvals)
		->with('org_aoc_approvals_areas',$org_aoc_approvals_areas)
		->with('org_aoc_approval_routes',$org_aoc_approval_routes)
		->with('org_aoc_maintenance_arrangement',$org_aoc_maintenance_arrangement)
		->with('org_aoc_training_arrangement',$org_aoc_training_arrangement)
		->with('org_approval_simulators',$org_approval_simulators)
		;
	}


	public function saveOrgbusinessName(){
		$org=new OrgBusinessName;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_business_name=Input::get('org_business_name');
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_business_name_note=Input::get('org_business_name_note');
		


		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Business Name Saved');
	}
	
	public function saveOrgCertificate(){
		$org=new OrgCertificate;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_certificate_type=Input::get('org_certificate_type');

		$org->org_issued_date=Input::get('org_issued_date');
		$org->org_issued_month=Input::get('org_issued_month');
		$org->org_issued_year=Input::get('org_issued_year');

		$org->org_expiration_date=Input::get('org_expiration_date');
		$org->org_expiration_month=Input::get('org_expiration_month');
		$org->org_expiration_year=Input::get('org_expiration_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->org_control_number=Input::get('org_control_number');
		$org->org_basis_note=Input::get('org_basis_note');


		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Certificate Information Saved');

	}

	public function saveOrgBaseLocation(){
		
		$org=new OrgBaseLocation;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_location_type=Input::get('org_location_type');
		$org->contract_person=Input::get('contract_person');
		$org->org_telephone_number=Input::get('org_telephone_number');
		$org->org_fax_number=Input::get('org_fax_number');
		$org->org_lecation=Input::get('org_lecation');
		$org->org_address=Input::get('org_address');
		$org->org_city=Input::get('org_city');
		$org->org_state_province=Input::get('org_state_province');
		$org->org_postal_code=Input::get('org_postal_code');
		$org->org_country=Input::get('org_country');
		$org->memo_note=Input::get('memo_note');

		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Base Location Saved');
	}
	
	public function saveOrgManagementContact(){
		$org=new OrgManagementContact;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->management_position=Input::get('management_position');
		$org->first_name=Input::get('first_name');
		$org->last_name=Input::get('last_name');
		$org->actual_title=Input::get('actual_title');
		$org->work_phone=Input::get('work_phone');
		$org->cell_number=Input::get('cell_number');
		$org->fax_number=Input::get('fax_number');
		$org->location=Input::get('location');
		$org->email=Input::get('email');
		$org->address=Input::get('address');
		$org->city=Input::get('city');
		$org->state_province=Input::get('state_province');
		$org->postal_code=Input::get('postal_code');
		$org->country=Input::get('country');
		$org->control_number=Input::get('control_number');
		$org->memo_note=Input::get('memo_note');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Management Contact Saved');
	}
	public function saveOrgCAAContact(){
		$org=new OrgCAAContact;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->inspector_position=Input::get('inspector_position');
		$org->first_name=Input::get('first_name');
		$org->last_name=Input::get('last_name');
		$org->actual_title=Input::get('actual_title');
		$org->work_phone=Input::get('work_phone');
		$org->cell_number=Input::get('cell_number');
		$org->fax_number=Input::get('fax_number');
		$org->location=Input::get('location');
		$org->email=Input::get('email');
		$org->address=Input::get('address');
		$org->city=Input::get('city');
		$org->state_province=Input::get('state_province');
		$org->postal_code=Input::get('postal_code');
		$org->country=Input::get('country');
		$org->control_number=Input::get('control_number');
		$org->basis_note=Input::get('basis_note');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','CAA Contact Saved');
	}
	public function saveOrgExemptionsDivination(){
		$org=new OrgExemptionsDivination;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->type=Input::get('type');
		$org->assigned_number=Input::get('assigned_number');
		$org->regulation=Input::get('regulation');
		$org->control_number=Input::get('control_number');
		$org->basis_note=Input::get('basis_note');

		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Exemptions Divination Saved');
	}
	public function saveOrgAircraftListing(){
		$org=new OrgAircraftListing;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->aircraft_mms=Input::get('aircraft_mms');
		$org->registration_number=Input::get('registration_number');
		$org->control_number=Input::get('control_number');
		$org->rvsm=Input::get('rvsm');
		$org->parts_pool=Input::get('parts_pool');
		$org->reliability=Input::get('reliability');
		$org->lease_acceptable=Input::get('lease_acceptable');
		$org->interchange=Input::get('interchange');
		$org->note=Input::get('note');

		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Aircraft Listing Saved');
	}
	public function saveOrgPolicyMenualApproval(){
		$org=new OrgPolicyMenualApproval;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->type_of_approval=Input::get('type_of_approval');
		$org->revision_number=Input::get('revision_number');
		$org->control_number=Input::get('control_number');
		$org->basis_note=Input::get('basis_note');

		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Policy Menual Approval Saved');
	}
	public function saveOrgComplexityReview(){
		$org=new OrgComplexityReview;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_review_date=Input::get('org_review_date');
		$org->org_review_month=Input::get('org_review_month');
		$org->org_review_year=Input::get('org_review_year');
		$org->purpose_of_review=Input::get('purpose_of_review');
		$org->total_employees=Input::get('total_employees');
		$org->total_flt_ops_employees=Input::get('total_flt_ops_employees');
		$org->total_pilots=Input::get('total_pilots');
		$org->total_check_airmen=Input::get('total_check_airmen');
		$org->total_flight_attendants=Input::get('total_flight_attendants');
		$org->total_aircraft_dispatchers=Input::get('total_aircraft_dispatchers');
		$org->flight_followers=Input::get('flight_followers');
		$org->total_load_controllers=Input::get('total_load_controllers');
		$org->total_maint_employees=Input::get('total_maint_employees');
		$org->total_av_maint_technicians=Input::get('total_av_maint_technicians');
		$org->total_av_repair_specialists=Input::get('total_av_repair_specialists');
		$org->total_quality_assurance=Input::get('total_quality_assurance');
		$org->note=Input::get('note');

		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Complexity Review Saved');
	}
	public function saveOrgAerialWorkApproval(){

		$org=new OrgAerialWorkApproval;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->type_of_approval=Input::get('type_of_approval');
		$org->revision_number=Input::get('revision_number');
		$org->aircraft_mms=Input::get('aircraft_mms');
		$org->control_number=Input::get('control_number');
		$org->method=Input::get('method');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Aerial Work Approval Saved');
	}
	public function saveOrgNonCertificatedOperation(){

		$org=new OrgNonCertificatedOperation;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->operations_type=Input::get('operations_type');
		$org->revision_number=Input::get('revision_number');
		$org->aircraft_mms=Input::get('aircraft_mms');
		$org->limiting_factor=Input::get('limiting_factor');
		$org->control_number=Input::get('control_number');
		$org->method=Input::get('method');
		$org->basis_notes=Input::get('basis_notes');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Non Certificated Operation Saved');
	}
	public function saveOrgFlightOperationsApproval(){

		$org=new OrgFlightOperationsApproval;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->type_of_approval=Input::get('type_of_approval');
		$org->revision_number=Input::get('revision_number');
		$org->limiting_factor=Input::get('limiting_factor');
		$org->control_number=Input::get('control_number');
		$org->method=Input::get('method');
		$org->basis_notes=Input::get('basis_notes');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Flight Operations Approval Saved');
	}
	public function saveOrgFleetOperationApproval(){

		$org=new OrgFleetOperationApproval;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->type_of_approval=Input::get('type_of_approval');
		$org->revision_number=Input::get('revision_number');
		$org->limiting_factor=Input::get('limiting_factor');
		$org->aircraft_mms=Input::get('aircraft_mms');
		$org->control_number=Input::get('control_number');
		$org->equipment=Input::get('equipment');
		$org->method=Input::get('method');
		$org->basis_note=Input::get('basis_note');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Fleet Operation Approval Saved');
	}
	
	public function saveOrgFleetMaintananceApproval(){

		$org=new OrgFleetMaintananceApproval;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->type_of_approval=Input::get('type_of_approval');
		$org->revision_number=Input::get('revision_number');
		$org->limiting_factor=Input::get('limiting_factor');
		$org->aircraft_mms=Input::get('aircraft_mms');
		$org->control_number=Input::get('control_number');
		$org->equipment=Input::get('equipment');
		$org->method=Input::get('method');
		$org->basis_note=Input::get('basis_note');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Fleet Maintanance Approval Information Saved');
	}
	
	public function saveOrgAirportAuth(){

		$org=new OrgAirportAuth;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->location=Input::get('location');
		$org->type_of_approval=Input::get('type_of_approval');
		$org->revision_number=Input::get('revision_number');
		$org->limiting_factor=Input::get('limiting_factor');
		$org->limiting_factor=Input::get('limiting_factor');
		$org->aircraft_mms=Input::get('aircraft_mms');
		$org->control_number=Input::get('control_number');
		$org->note=Input::get('note');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Airport Auth. Information Saved');
	}
	public function saveOrgLeasingArrangment(){

		$org=new OrgLeasingArrangment;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->arrangement=Input::get('arrangement');
		$org->revision_number=Input::get('revision_number');
		$org->other=Input::get('other');
		$org->control_number=Input::get('control_number');
		$org->notes=Input::get('notes');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Leasing Arrangment Information Saved');
	}
	public function saveOrgContractedService(){

		$org=new OrgContractedService;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');
		
		$org->issued_date=Input::get('issued_date');
		$org->issued_month=Input::get('issued_month');
		$org->issued_year=Input::get('issued_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->type_of_approval=Input::get('type_of_approval');
		$org->revision_number=Input::get('revision_number');
		$org->aircraft_mms=Input::get('aircraft_mms');
		$org->limiting_factor=Input::get('limiting_factor');
		$org->control_number=Input::get('control_number');
		$org->basis_note=Input::get('basis_note');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Contracted Service Information Saved');
	}
	public function saveOrgAmoApproval(){

		$org=new OrgAmoApproval;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');		
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->category_rating=Input::get('category_rating');
		$org->class_rating=Input::get('class_rating');
		$org->rating_description=Input::get('rating_description');
		$org->revision_number=Input::get('revision_number');
		$org->contractor=Input::get('contractor');
		$org->control_number=Input::get('control_number');
		$org->specific_equipment=Input::get('specific_equipment');
		$org->available_method=Input::get('available_method');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','AMO Approval Information Saved');
	}
	public function saveOrgAtoApproval(){

		$org=new OrgAtoApproval;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');		
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->ato_category=Input::get('ato_category');
		$org->ato_curriculums=Input::get('ato_curriculums');
		$org->revision_number=Input::get('revision_number');
		$org->control_number=Input::get('control_number');
		$org->approved_training_equipment=Input::get('approved_training_equipment');
		$org->approved_method=Input::get('approved_method');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','ATO Approval Information Saved');
	}
	
	public function saveOrgAocApprovalArea(){

		$org=new OrgAocApprovalArea;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');		
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->approved_areas_of_operation=Input::get('approved_areas_of_operation');		
		$org->revision_number=Input::get('revision_number');
		$org->control_number=Input::get('control_number');
		$org->aircraft_authorized=Input::get('aircraft_authorized');
		$org->special_authorizations=Input::get('special_authorizations');
		$org->limitations=Input::get('limitations');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Aoc Approval Area Information Saved');
	}
	
	public function saveOrgAocApprovalRoute(){

		$org=new OrgAocApprovalRoute;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');		
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->origination_city=Input::get('origination_city');
		$org->destination_city=Input::get('destination_city');
		$org->revision_number=Input::get('revision_number');
		$org->control_number=Input::get('control_number');
		$org->special_route=Input::get('special_route');
		$org->operational_limitations=Input::get('operational_limitations');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Aoc Approval Route Information Saved');
	}
	
	public function saveOrgAocMaintenanceArrangement(){

		$org=new OrgAocMaintenanceArrangement;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');		
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		$org->type_of_approval=Input::get('type_of_approval');
		$org->location=Input::get('location');
		$org->service_provider=Input::get('service_provider');
		$org->control_number=Input::get('control_number');
		$org->applicable_aircraft=Input::get('applicable_aircraft');
		$org->specific_authorizations=Input::get('specific_authorizations');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','AOC Maintenance Arrangement Information Saved');
	}
	public function saveOrgAocTrainingArrangement(){

		$org=new OrgAocTrainingArrangement;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');		
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->org_terminated_date=Input::get('org_terminated_date');
		$org->org_terminated_month=Input::get('org_terminated_month');
		$org->org_terminated_year=Input::get('org_terminated_year');

		
		$org->location=Input::get('location');
		$org->service_provider=Input::get('service_provider');
		$org->control_number=Input::get('control_number');
		$org->authorized_training=Input::get('authorized_training');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','AOC Training Arrangement Information Saved');
	}
	
	public function saveOrgApprovalSimulator(){

		$org=new OrgApprovalSimulator;

		$org->org_number=Input::get('org_number');
		$org->org_name=Input::get('org_name');
		$org->active=Input::get('active');
		$org->org_identifier=Input::get('org_identifier');		
		
		$org->org_effective_date=Input::get('org_effective_date');
		$org->org_effective_month=Input::get('org_effective_month');
		$org->org_effective_year=Input::get('org_effective_year');

		$org->aircraft_mms=Input::get('aircraft_mms');
		$org->assigned_level=Input::get('assigned_level');
		$org->location=Input::get('location');
		$org->simulator_number=Input::get('simulator_number');
		$org->simulator_provider=Input::get('simulator_provider');
		$org->control_number=Input::get('control_number');
		$org->authorized_purpose=Input::get('authorized_purpose');
		
		$org->row_creator=Auth::user()->getName();
		$org->row_updator=Auth::user()->getName();
		$org->approve=0;
		$org->warning=0;
		$org->soft_delete=0;
		$org->save();

		return Redirect::back()->with('message','Approval Simulator Information Saved');
	}
	
	

}