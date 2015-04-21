
@section('inspectionPrimary')
<!--@ single Inspection-->
@stop

@section('editIssueSafety')
	@foreach($safetyConcernDatas as $sc)
<div class="modal fade" id="editIssueSafety{{$sc->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Update Safety Concern</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'safety/updateSafetyConcern', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form','files'=>true))}}
					@if($PageName=='Single Inspection')
						@foreach($ins_primary_infos as $info)
						{{Form::hidden('inspection_number',$info->inspection_number)}}
						@endforeach
					@else
						
						{{Form::hidden('inspection_number','Null')}}{{--'Null'Has Dependency @saveSafetyConcern method --}}
					@endif
					{{Form::hidden('id',$sc->id)}}
					{{Form::hidden('old_eir_file',$sc->eir_file)}}
					{{Form::hidden('old_job_aid_file',$sc->job_aid_file)}}
					
					<div class="form-group ">
                                        
											{{Form::label('safety_issue_number', 'Safety Issue Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('safety_issue_number',$sc->safety_issue_number, array('class' => 'form-control','placeholder'=>'','disabled'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required ">
                                        
											{{Form::label('safety_issue_title', 'Safety Issue Title', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('safety_issue_title',$sc->safety_issue_title, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('type_of_issue', 'Type Of Issue', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{--<select id="type_of_issue" name="type_of_issue" class="demo-default" placeholder="Select Type Of Issue">
												<option value="">Select Type Of Issue</option>
												@foreach($roles as $role)
												<option value="{{$role}}">{{$role}}</option>
												@endforeach 
											</select> --}}
											{{Form::select('type_of_issue', array(
											'' => '--Select Type Of Issue--', 
										'Non-Conformance: State Law' => 'Non-Conformance: State Law',
										'Non-Conformance: State Regulations'=>'Non-Conformance: State Regulations',
										'Non-Adherence: Published Standard'=>'Non-Adherence: Published Standard',
										'Non-Adherence: Relevant Safety Practice'=>'Non-Adherence: Relevant Safety Practice',
										'Non-Adherence: CAA Guidance'=>'Non-Adherence: CAA Guidance',
										'Non-Conformance: ICAO Standard'=>'Non-Conformance: ICAO Standard',
										'Inadequate System Function'=>'Inadequate System Function',
										'Initial Investigation'=>'Initial Investigation'), $sc->type_of_issue ,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('poi_or_responsible', 'POI/Responsible', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('poi_or_responsible', $sc->poi_or_responsible , array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					
					<div class="form-group ">
                                        
											{{Form::label('issue_finding_status', 'Issue Finding Status', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('issue_finding_status',$sc->issue_finding_status, array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('assigned_inspector', 'Assigned Inspector', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select required id="assigned_inspector" name='assigned_inspector'class="demo-default" >
												<option value="">Select Assigned Inspector</option>
													<option selected="selected" value="{{$sc->assigned_inspector}}">{{$sc->assigned_inspector}}</option>
												{{--@foreach($roles as $role)
												<option value="{{$role}}">{{$role}}</option>
												@endforeach --}}
											</select>
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('issue_finding_date', 'Issue Finding Date', array('class' => 'col-xs-4 control-label'))}}
											<div class="row">
														<div class="col-xs-2">
														{{Form::select('issue_finding_date', $dates, $sc->issue_finding_date ,array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('issue_finding_month',$months,$sc->issue_finding_month,array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('issue_finding_year',$years,$sc->issue_finding_year,array('class'=>'form-control'))}}
														</div>
													</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('issue_finding_local_time', 'Issue Finding Local Time', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('issue_finding_local_time',$sc->issue_finding_local_time, array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('place_or_airport', 'Place/Airport', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('place_or_airport',$sc->place_or_airport, array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('cvr_statement', 'CVR Statement', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('cvr_statement',$sc->cvr_statement, array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
				
					<div class="form-group ">
                                        
											{{Form::label('initial_risk_analysis', 'Initial Risk Analysis', array('class' => 'col-xs-4 control-label'))}}
										
											<div class="col-xs-6">
											{{Form::select('initial_risk_analysis', array('' => '--Select Initial Risk Analysis--', 'High Risk' => 'High Risk','Medium Risk'=>'Medium Risk','Low Risk'=>'Low Risk','No Risk'=>'No Risk'),$sc->initial_risk_analysis,array('class'=>'form-control','required'=>''))}}
											</div>
											
											
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('corrective_satatus', 'Corrective Status', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('corrective_satatus', array('' => '--Select Corrective Status--', 'Resolved' => 'Resolved','Open'=>'Open','Cancelled'=>'Cancelled'), $sc->corrective_satatus ,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('corrective_priority', 'Corrective Priority', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('corrective_priority', array('' => '--Select Corrective Priority--','Safety of Flight Concern'=>'Safety of Flight Concern','Needs Priority Correction'=>'Needs Priority Correction','Needs Corrective Action'=>'Needs Corrective Action','Inspector Observation'=>'Inspector Observation'), $sc->corrective_priority ,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					<!--
					<div class="form-group ">
                                           
											{{Form::label('resived_date', 'Revised Date', array('class' => 'col-xs-4 control-label'))}}
											<div class="row">
														<div class="col-xs-2">
														{{Form::select('resived_date', $dates,$sc->resived_date,array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('resived_month',$months,$sc->resived_month,array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('resived_year',$years, $sc->resived_year,array('class'=>'form-control'))}}
														</div>
													</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('revised_time', 'Revised Time', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('revised_time',$sc->revised_time , array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					-->
					
					<div class="form-group ">
                                        
											{{Form::label('provided_to', 'Provided To', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="provided_to" name='provided_to' class="demo-default" placeholder="SelectProvided To">
												<option value="">Select Provided To</option>
												<option selected="selected" value="{{$sc->provided_to}}">{{$sc->provided_to}}</option>
												{{--@foreach($roles as $role)
												<option value="{{$role}}">{{$role}}</option>
												@endforeach --}}
											</select>
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('target_date', 'Target Date', array('class' => 'col-xs-4 control-label'))}}
											<div class="row">
														<div class="col-xs-2">
														{{Form::select('target_date', $dates, $sc->target_date ,array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('target_month',$months, $sc->target_month ,array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('target_year',$years, $sc->target_year,array('class'=>'form-control'))}}
														</div>
													</div>
											
                    </div>
					<div class="form-group ">
                                           
                                            
												 {{ Form::label('eir_file', 'Uploaded EIR File: ',array('class'=>'control-label col-xs-4')) }}
												<div class="col-xs-6">
												@if($sc->eir_file!='Null'){{HTML::link('files/sc_eir_file/'.$sc->eir_file,'Document',array('target'=>'_blank'))}}
												@else
													{{HTML::link('#','No Document Provided')}}
												@endif
												</div>
											
											 
											 
											 
                    </div>
					<div class="form-group ">
                                           
                                          
											 {{ Form::label('eir_file', 'Upload Updated EIR File: ',array('class'=>'control-label col-xs-4')) }}
											 <div class="col-xs-6">
											 {{ Form::file('eir_file') }}
											 
											 
											 </div>
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('regulation_issue', 'Regulation Issue', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('regulation_issue',$sc->regulation_issue , array('class' => 'form-control','placeholder'=>'','size'=>'4x1','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('public_practise', 'Public Practise', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('public_practise',$sc->public_practise, array('class' => 'form-control','placeholder'=>'','size'=>'4x1','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('regulation', 'Regulation', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('regulation',$sc->regulation , array('class' => 'form-control','placeholder'=>'','size'=>'4x1','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                           
                                            
											 {{ Form::label('job_aid_file', 'Upload Job Aid File: ',array('class'=>'control-label col-xs-4')) }}
											 <div class="col-xs-6">
											 	@if($sc->job_aid_file!='Null'){{HTML::link('files/sc_job_aid_file/'.$sc->job_aid_file,'Document',array('target'=>'_blank'))}}
												@else
													{{HTML::link('#','No Document Provided')}}
												@endif										 
											 </div>
                    </div>		
					<div class="form-group ">
                                           
                                            
											 {{ Form::label('job_aid_file', 'Upload Updated Job Aid File: ',array('class'=>'control-label col-xs-4')) }}
											 <div class="col-xs-6">
											 {{ Form::file('job_aid_file') }}							 
											 
											 </div>
                    </div>					
					
					<div class="form-group ">
                                        
											{{Form::label('question', 'Question', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('question',$sc->question, array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('answer', 'Answer', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('answer',$sc->answer, array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('responsible_pels', 'Responsible Pels', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('responsible_pels', $sc->responsible_pels , array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('aircraft_msn', 'Aircraft MSN', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="aircraft_msn" name='aircraft_msn' class="demo-default" placeholder="Select Aircraft MSN">
												<option value="">Select Aircraft MSN</option>
												<option selected="selected" value="{{$sc->aircraft_msn}}">{{$sc->aircraft_msn}}</option>
												{{--@foreach($roles as $role)
												<option value="{{$role}}">{{$role}}</option>
												@endforeach --}}
											</select>
											</div>
											
                    </div>
					
					<div class="form-group ">
                                        
											{{Form::label('aircraft_rgistration_number', 'Aircraft Registration Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('aircraft_rgistration_number', $sc->aircraft_rgistration_number , array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('final_regulation_date', 'Final Regulation Date', array('class' => 'col-xs-4 control-label'))}}
											<div class="row">
														<div class="col-xs-2">
														{{Form::select('final_regulation_date', $dates, $sc->final_regulation_date ,array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('final_regulation_month',$months, $sc->final_regulation_month,array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('final_regulation_year',$years, $sc->final_regulation_year,array('class'=>'form-control'))}}
														</div>
													</div>
											
                    </div>
					
					<div class="form-group ">
                                        
											{{Form::label('final_regulation_inspector', 'Final Regulation Inspector', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="final_regulation_inspector" name='final_regulation_inspector' class="demo-default" placeholder="Select Final Regulation Inspector">
												<option value="">Select Final Regulation Inspector</option>
													<option selected="selected" value="{{$sc->final_regulation_inspector}}">{{$sc->final_regulation_inspector}}</option>
												{{--@foreach($roles as $role)
												<option value="{{$role}}">{{$role}}</option>
												@endforeach --}}
											</select>
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('final_regulation_method', 'Final Regulation Method', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="final_regulation_method" name='final_regulation_method' class="demo-default" placeholder="Select Final Regulation Method">
												<option value="">Select Final Regulation Method</option>
												<option selected="selected" value="{{$sc->final_regulation_method}}">{{$sc->final_regulation_method}}</option>
												{{--@foreach($roles as $role)
												<option value="{{$role}}">{{$role}}</option>
												@endforeach --}}
											</select>
											</div>
											
                    </div>
					
					<div class="form-group ">
                                        
											{{Form::label('residual_risk', 'Residual Risk', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('residual_risk', $sc->residual_risk , array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('actual_finding', 'Actual Finding', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
										{{Form::textarea('actual_finding', $sc->actual_finding , array('class' => 'form-control','placeholder'=>'','size'=>'4x1','required'=>''))}}
											</div>
											
                    </div>
					
					<div class="form-group ">
                                        
											{{Form::label('safety_concern', 'Safety Concern', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('safety_concern', $sc->safety_concern , array('class' => 'form-control','placeholder'=>'','size'=>'4x1','required'=>''))}}
											</div>
											
                    </div>
					
					<div class="form-group ">
                                        
											{{Form::label('risk_statement', 'Risk Statement', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('risk_statement', $sc->risk_statement , array('class' => 'form-control','placeholder'=>'','size'=>'4x1','required'=>''))}}
											</div>
											
                    </div>
                    <div class="form-group">
                      
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                    
					{{Form::close()}}
					</div>
        </div>
    </div>
	</div>
	</div>
	@endforeach
	<script>
	$(document).ready(function(){

$('#type_of_issue').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});
$('#assigned_inspector').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});
$('#aircraft_msn').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});
$('#provided_to').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});
$('#final_regulation_inspector').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});
$('#final_regulation_method').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});


	
});
	</script>
	
@stop
@section('editCorrectiveIssue')
@foreach($correctiveActions as $action)
<div class="modal fade" id="editCorrectiveIssue{{$action->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Update Corrective Issue</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'safety/updateCorrectiveAction', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form','files'=>true))}}
					@if($PageName=='Single Safety concern')	
						@foreach($safetyConcernDatas as $sc)
							{{Form::hidden('safety_issue_number',$sc->safety_issue_number)}}							
						@endforeach
					@endif
					
					{{Form::hidden('id',$action->id)}}							
					{{Form::hidden('old_corrective_action_file',$action->corrective_action_file)}}							
						
					
					<div class="form-group required">
                                        
											{{Form::label('currective_action', 'Corrective Action', array('class' => 'col-xs-4 control-label','required'=>''))}}
											<div class="col-xs-6">
											{{Form::textarea('currective_action',$action->currective_action, array('class' => 'form-control','placeholder'=>'','size'=>'4x1','required'=>''))}}
											</div>
											
                    </div>
					
					<div class="form-group required">
                                           
											{{Form::label('revived_date', 'Revived Date', array('class' => 'col-xs-4 control-label'))}}
											<div class="row">
														<div class="col-xs-2">
														{{Form::select('revived_date', $dates, $action->revived_date ,array('class'=>'form-control','required'=>''))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('revived_month',$months, $action->revived_month ,array('class'=>'form-control','required'=>''))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('revived_year',$years, $action->revived_year ,array('class'=>'form-control','required'=>''))}}
														</div>
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('concern_authority_officer', 'Concern Authority Officer', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('concern_authority_officer',$action->concern_authority_officer , array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('regulation_mitigation', 'Regulation Mitigation', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('regulation_mitigation',$action->regulation_mitigation, array('class' => 'form-control','placeholder'=>'','size'=>'4x1','required'=>''))}}
											</div>
											
                    </div>
					
					
					<div class="form-group required">
                                           
											{{Form::label('regulation_mitigation_date', 'Regulation Mitigation Date', array('class' => 'col-xs-4 control-label'))}}
											<div class="row">
														<div class="col-xs-2">
														{{Form::select('regulation_mitigation_date', $dates,$action->regulation_mitigation_date ,array('class'=>'form-control','required'=>''))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('regulation_mitigation_month',$months,'0',array('class'=>'form-control','required'=>''))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('regulation_mitigation_year',$years,$action->regulation_mitigation_year ,array('class'=>'form-control','required'=>''))}}
														</div>
													</div>
											
                    </div>
					<div class="form-group ">
                                           
                                            
											 {{ Form::label('corrective_action_file', 'Uploaded Corrective Action File: ',array('class'=>'control-label col-xs-4')) }}
											 <div class="col-xs-6">
											 @if($action->corrective_action_file!='Null'){{HTML::link('files/sc_corrective_action_file/'.$action->corrective_action_file,'Document',array('target'=>'_blank'))}}
												@else
													{{HTML::link('#','No Document Provided')}}
												@endif
											 
											 </div>
                    </div>
					<div class="form-group ">
                                           
                                            
											 {{ Form::label('corrective_action_file', 'Upload Updated Corrective Action File: ',array('class'=>'control-label col-xs-4')) }}
											 <div class="col-xs-6">
											 {{ Form::file('corrective_action_file') }}
											 
											 
											 </div>
                    </div>
					
                    <div class="form-group">
                      
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                    
					{{Form::close()}}
					</div>
        </div>
    </div>
	</div>
	</div>
	<script>
	$(document).ready(function(){
$('#').selectize();
	
});
	</script>

@endforeach
@stop

@section('updateApprovalForm')
@foreach($approvalInfos as $info)
<div class="modal fade" id="editapprovalInfos{{$info->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Update Approval Info.</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'safety/updateApprovalForm', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form'))}}
					
				  				
					
					{{Form::hidden('id',$info->id)}}							
					
					<div class="form-group required">
                                        
											{{Form::label('approved_by', 'Approved By', array('class' => 'col-xs-4 control-label','required'=>''))}}
											<div class="col-xs-6">
											{{Form::text('approved_by', $info->approved_by , array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('designation', 'Designation', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('e_designation', $info->designation , array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					
					<div class="form-group required">
                                           
											{{Form::label('approval_date', 'Approval Date', array('class' => 'col-xs-4 control-label'))}}
											<div class="row">
														<div class="col-xs-2">
														{{Form::select('approval_date', $dates , $info->approval_date ,array('class'=>'form-control','required'=>''))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('approval_month', $months , $info->approval_month ,array('class'=>'form-control','required'=>''))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('approval_year', $years , $info->approval_year ,array('class'=>'form-control','required'=>''))}}
														</div>
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('approval_note', 'Approval Note', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('approval_note',$info->approval_note, array('class' => 'form-control','placeholder'=>'','size'=>'4x1','required'=>''))}}
											</div>
											
                    </div>
					
                    <div class="form-group">
                      
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                    
					{{Form::close()}}
            </div>
        </div>
    </div>
	</div>
	</div>
	<script>
$(document).ready(function(){


//$('#approved_by').selectize({create: true, sortField: {field: 'text',direction: 'asc' }});

});
</script>
@endforeach
@stop

@section('updateForwardingForm')
@foreach($forwardings as $forwarding)
<div class="modal fade" id="editForwardings{{$forwarding->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Update Forwarding</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'safety/updateForwardingInfo', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form'))}}
					
									
					{{Form::hidden('id',$info->id)}}							
					
					<div class="form-group required">
                                        
											{{Form::label('forwarding_to', 'Forwarding To', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select required e_forwarding_toid='e_forwarding_to' name='forwarding_to' class="demo-default" placeholder="Select  Inspector">
												<option value="">Select  Inspector</option>
												<option selected='selected' value="{{$forwarding->forwarding_to}}">{{$forwarding->forwarding_to}}</option>							
												<option value="Roman">Roman</option>
												{{--@foreach($roles as $role)
												<option value="{{$role}}">{{$role}}</option>
												@endforeach --}}
											</select>
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('designation', 'Designation', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select required id='e_designation' name='designation' class="demo-default" placeholder="Select  Designation">
												<option value="">Select  Designation</option>
												<option selected='selected' value="{{$forwarding->designation}}">{{$forwarding->designation}}</option>
												<option value="Director">Director</option>
												
												
											</select>
											</div>
											
                    </div>
					
					<div class="form-group required">
                                        
											{{Form::label('forwarding_note', 'Forwarding note', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('forwarding_note',$forwarding->forwarding_note, array('class' => 'form-control','placeholder'=>'','size'=>'4x1','required'=>''))}}
											</div>
											
                    </div>
					
                    <div class="form-group">
                      
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                    
					{{Form::close()}}
            </div>
        </div>
    </div>
	</div>
	</div>
	<script>
$(document).ready(function(){
$('#e_forwarding_to').selectize();
$('#e_designation').selectize();
});
</script>
@endforeach
@stop

@section('updatelegalOpenion')
@foreach($legalOpinions as $opinion)
<div class="modal fade" id="updatelegalOpenion{{$opinion->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Update Opinion Of Legal Department </h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'safety/updateLegalOpinion', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form'))}}
					
				  {{Form::hidden('id',$opinion->id)}}
				  
					<div class="form-group required">
                                        
											{{Form::label('legal_openion', 'Legal Opinion', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('legal_openion',$opinion->legal_openion, array('class' => 'form-control','placeholder'=>'','size'=>'4x3','required'=>''))}}
											</div>
											
                    </div>
					
                    <div class="form-group">
                      
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                    
					{{Form::close()}}
            </div>
        </div>
    </div>
	</div>
	</div>
	@endforeach
	<script>
$(document).ready(function(){


//$('#approved_by').selectize({create: true, sortField: {field: 'text',direction: 'asc' }});

});
</script>
@stop