@extends('layout')
@section('content')

<div class='content' style="max-width:760px;margin:0 auto;">

@include('safetyConcerns/menu')
@yield('menuIssueSafetyConcern')
</div>
<!--  -->
<div class="modal fade" id="issueSafety" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Issue New Safety Concern</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'safety/saveSafetyConcern', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form','files'=>true))}}
					@if($PageName=='Single Inspection') 
						@foreach($ins_primary_infos as $info)
						{{Form::hidden('inspection_number',$info->inspection_number)}}
						@endforeach
					@else
						
						{{Form::hidden('inspection_number','Null')}}{{--'Null'Has Dependency @saveSafetyConcern method --}}
					@endif
					{{Form::hidden('safety_issue_number','SC_'.date('d').'_'.date('m').'_'.date('y').'_'.time())}}
					<div class="form-group ">
                                        
											{{Form::label('safety_issue_number', 'Safety Issue Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('safety_issue_number','SC_'.date('d').'_'.date('m').'_'.date('y').'_'.time(), array('class' => 'form-control','placeholder'=>'','disabled'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required ">
                                        
											{{Form::label('safety_issue_title', 'Safety Issue Title', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('safety_issue_title','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('type_of_issue', 'Type Of Issue', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
											{{Form::select('type_of_issue', array(
											'' => '--Select Type Of Issue--', 
										'Non-Conformance: State Law' => 'Non-Conformance: State Law',
										'Non-Conformance: State Regulations'=>'Non-Conformance: State Regulations',
										'Non-Adherence: Published Standard'=>'Non-Adherence: Published Standard',
										'Non-Adherence: Relevant Safety Practice'=>'Non-Adherence: Relevant Safety Practice',
										'Non-Adherence: CAA Guidance'=>'Non-Adherence: CAA Guidance',
										'Non-Conformance: ICAO Standard'=>'Non-Conformance: ICAO Standard',
										'Inadequate System Function'=>'Inadequate System Function',
										'Initial Investigation'=>'Initial Investigation'), '',array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('poi_or_responsible', 'POI/Responsible', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('poi_or_responsible','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					
					<div class="form-group ">
                                        
											{{Form::label('issue_finding_status', 'Issue Finding Status', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('issue_finding_status','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('assigned_inspector', 'Assigned Inspector', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select required id="assigned_inspector" name='assigned_inspector'class="demo-default" >
												<option value="">Select Assigned Inspector</option>
												@foreach($inspectors as $inspector)
												<option value="{{$inspector}}">{{$inspector}}</option>
												@endforeach 
											</select>
											</div>
											
                    </div>
					<div class="form-group required">
                                           
											{{Form::label('issue_finding_date', 'Issue Finding Date', array('class' => 'col-xs-4 control-label'))}}
											<div class="row">
														<div class="col-xs-2">
														{{Form::select('issue_finding_date', $dates,'0',array('class'=>'form-control','required'=>''))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('issue_finding_month',$months,'0',array('class'=>'form-control','required'=>''))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('issue_finding_year',$years,'0',array('class'=>'form-control','required'=>''))}}
														</div>
													</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('issue_finding_local_time', 'Issue Finding Local Time', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('issue_finding_local_time','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('place_or_airport', 'Place/Airport', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('place_or_airport','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('cvr_statement', 'Severity Statement', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('cvr_statement','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>

                    <div class="form-group ">
                                        
											{{Form::label('hazard_statement', 'Hazard Statement', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('hazard_statement','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>

					<div class="form-group ">
                                        
											{{Form::label('risk_assesment', 'Risk Assesment', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('risk_assesment','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>

					<div class="form-group ">
                                        
											{{Form::label('risk_management', 'Risk Management', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('risk_management','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
				
					<div class="form-group required">
                                        
											{{Form::label('initial_risk_analysis', 'Initial Risk Analysis', array('class' => 'col-xs-4 control-label'))}}
										
											<div class="col-xs-6">
											{{Form::select('initial_risk_analysis', array('' => '--Select Initial Risk Analysis--', 'High Risk' => 'High Risk','Medium Risk'=>'Medium Risk','Low Risk'=>'Low Risk','No Risk'=>'No Risk'), 0,array('class'=>'form-control','required'=>''))}}
											</div>
											
											
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('corrective_satatus', 'Corrective Status', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('corrective_satatus', array('' => '--Select Corrective Status--', 'Resolved' => 'Resolved','Open'=>'Open','Cancelled'=>'Cancelled'),  '0',array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('corrective_priority', 'Corrective Priority', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('corrective_priority', array('' => '--Select Corrective Priority--','Safety of Flight Concern'=>'Safety of Flight Concern','Needs Priority Correction'=>'Needs Priority Correction','Needs Corrective Action'=>'Needs Corrective Action','Inspector Observation'=>'Inspector Observation'), '',array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					
					<div class="form-group required">
                                        
											{{Form::label('provided_to', 'Provided To', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="provided_to" name='provided_to' class="demo-default" placeholder="SelectProvided To">
												<option value="">Select Provided To</option>
												<option selected="selected" value="{{Auth::User()->getName()}}">{{Auth::User()->getName()}}</option>
												@foreach($inspectors as $inspector)
												<option value="{{$inspector}}">{{$inspector}}</option>
												@endforeach  
											</select>
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('target_date', 'Target Date', array('class' => 'col-xs-4 control-label'))}}
											<div class="row">
														<div class="col-xs-2">
														{{Form::select('target_date', $dates,'0',array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('target_month',$months,'0',array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('target_year',$years,'0',array('class'=>'form-control'))}}
														</div>
													</div>
											
                    </div>
					<div class="form-group ">
                                           
                                            
											 {{ Form::label('eir_file', 'Upload EIR File: ',array('class'=>'control-label col-xs-4')) }}
											 <div class="col-xs-6">
											 {{ Form::file('eir_file') }}
											 
											 
											 </div>
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('regulation_issue', 'Regulation Issue', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('regulation_issue','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('public_practise', 'Public Practise', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('public_practise','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('regulation', 'Regulation', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('regulation','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                           
                                            
											 {{ Form::label('job_aid_file', 'Upload Job Aid File: ',array('class'=>'control-label col-xs-4')) }}
											 <div class="col-xs-6">
											 {{ Form::file('job_aid_file') }}							 
											 
											 </div>
                    </div>					
					
					<div class="form-group ">
                                        
											{{Form::label('question', 'Question', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('question','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('answer', 'Answer', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('answer','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('responsible_pels', 'Responsible Pels', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('responsible_pels','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('aircraft_msn', 'Aircraft MSN', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="aircraft_msn" name='aircraft_msn' class="demo-default" placeholder="Select Aircraft MSN">
												<option value="">Select Aircraft MSN</option>
												@foreach($airMSMs as $airMSM)
												<option value="{{$airMSM}}">{{$airMSM}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>
					
					<div class="form-group ">
                                        
											{{Form::label('aircraft_rgistration_number', 'Aircraft Registration Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('aircraft_rgistration_number','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                           
											{{Form::label('final_regulation_date', 'Final Regulation Date', array('class' => 'col-xs-4 control-label'))}}
											<div class="row">
														<div class="col-xs-2">
														{{Form::select('final_regulation_date', $dates,'0',array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('final_regulation_month',$months,'0',array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('final_regulation_year',$years,'0',array('class'=>'form-control'))}}
														</div>
													</div>
											
                    </div>
					
					<div class="form-group ">
                                        
											{{Form::label('final_regulation_inspector', 'Final Regulation Inspector', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="final_regulation_inspector" name='final_regulation_inspector' class="demo-default" placeholder="Select Final Regulation Inspector">
												<option value="">Select Final Regulation Inspector</option>
												@foreach($inspectors as $inspector)
												<option value="{{$inspector}}">{{$inspector}}</option>
												@endforeach 
											</select>
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('final_regulation_method', 'Final Regulation Method', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="final_regulation_method" name='final_regulation_method' class="demo-default" placeholder="Select Final Regulation Method">
												<option value="">Select Final Regulation Method</option>
												{{--@foreach($roles as $role)
												<option value="{{$role}}">{{$role}}</option>
												@endforeach --}}
											</select>
											</div>
											
                    </div>
					
					<div class="form-group ">
                                        
											{{Form::label('residual_risk', 'Residual Risk', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('residual_risk','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('actual_finding', 'Actual Finding', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
										{{Form::textarea('actual_finding','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					
					<div class="form-group ">
                                        
											{{Form::label('safety_concern', 'Safety Concern', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('safety_concern','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					
					<div class="form-group ">
                                        
											{{Form::label('risk_statement', 'Risk Statement', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('risk_statement','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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

$('#type_of_issue').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});
$('#assigned_inspector').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});
$('#aircraft_msn').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});
$('#provided_to').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});
$('#final_regulation_inspector').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});
$('#final_regulation_method').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});


	
});
	</script>
	
@stop