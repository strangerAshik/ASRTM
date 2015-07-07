<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SafetyConcernDatabase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sc_primary_inspection',function($table){
			$table->increments('id');
			
			$table->string('inspection_number');
			$table->string('inspection_title');
			$table->string('lead_inspector');
			$table->string('team_members');
			$table->string('type_of_inspection');
			$table->string('against_organization');
			
			$table->string('row_creator');
			$table->string('row_updator');
			$table->integer('approve');
			$table->integer('warning');
			$table->integer('soft_delete');
			$table->timestamps();
		});
		
		Schema::create('sc_safety_concern',function($table){
			$table->increments('id');
			
			$table->string('inspection_number');
			//$table->foreign('sc_inspection_number')->references('inspection_number')->on('sc_primary_inspection');
			
			$table->string('safety_issue_number');
			$table->string('sia_number');
			
			
			$table->string('safety_issue_title');
			$table->string('type_of_concern');
			$table->string('type_of_issue');
			$table->string('poi_or_responsible');
			$table->string('issue_finding_status');
			$table->string('assigned_inspector');
			$table->string('issue_finding_date');
			$table->string('issue_finding_month');
			$table->string('issue_finding_year');
			$table->string('issue_finding_local_time');
			$table->string('place_or_airport');
			$table->string('cvr_statement');
			$table->string('initial_risk_analysis');
			$table->string('corrective_satatus');
			$table->string('corrective_priority');
			//$table->string('resived_date');
			//$table->string('resived_month');
			//$table->string('resived_year');
			//$table->string('revised_time');
			$table->string('provided_to');
			$table->string('target_date');
			$table->string('target_month');
			$table->string('target_year');
			$table->string('eir_file');
			$table->string('regulation_issue');
			$table->string('public_practise');
			$table->string('regulation');
			$table->string('job_aid_file');
			$table->string('question');
			$table->string('answer');
			$table->string('responsible_pels');
			$table->string('aircraft_msn');
			$table->string('aircraft_rgistration_number');
			$table->string('final_regulation_date');
			$table->string('final_regulation_month');
			$table->string('final_regulation_year');
			$table->string('final_regulation_inspector');
			$table->string('final_regulation_method');
			$table->string('residual_risk');
			$table->string('actual_finding',600);
			$table->string('safety_concern',600);
			$table->string('risk_statement',600);
		
			
			$table->string('row_creator');
			$table->string('row_updator');
			$table->integer('approve');
			$table->integer('warning');
			$table->integer('soft_delete');
			$table->timestamps();
		});
		Schema::create('sc_corrective_action',function($table){
			$table->increments('id');
			
			$table->string('safety_issue_number');
			$table->string('currective_action');
			$table->string('revived_date');
			$table->string('revived_month');
			$table->string('revived_year');
			$table->string('concern_authority_officer');
			$table->string('regulation_mitigation');
			$table->string('regulation_mitigation_date');
			$table->string('regulation_mitigation_month');
			$table->string('regulation_mitigation_year');
			$table->string('corrective_action_file');
			
			$table->string('row_creator');
			$table->string('row_updator');
			$table->integer('approve');
			$table->integer('warning');
			$table->integer('soft_delete');
			$table->timestamps();
	
	});
	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sc_primary_inspection');
		Schema::drop('sc_safety_concern');
		Schema::drop('sc_corrective_action');
		
	}

}
