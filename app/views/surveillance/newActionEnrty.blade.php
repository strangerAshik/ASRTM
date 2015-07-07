@extends('layout')
@section('content')
<section class='content widthController' style='margin: 0 auto; max-width: 1000px;'>
{{--<p class="text-center">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#newAction" >New SIA</button>
	
</p>--}}
               <div class="col-md-12">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <h3 class="box-title">New Action Entry</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div class="box-group" id="accordion">
                                        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                        <div class="panel box box-primary">
                                            <div class="box-header">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        
                                                    </a>
                                                </h4>
                                            </div>
               
				{{Form::open(array('url' => 'surveillance/saveAction', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form','files'=>true))}}
					
					<div class="form-group ">
                                        
											{{Form::label('program_type', 'Program Type', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
												{{Form::select('program_type', array(''=>'--select--','Planned'=>'Planned','Not Planned'=>'Not Planned'),'',array('class'=>'form-control'))}}

											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('sia_number ', 'SIA/ Tracking Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="sia_number" onchange='setSiaNumber(this.value)' name='sia_number' class="demo-default" placeholder="Select 70000 if program type is Not Planned...">
												<option value="">Select 70000 if program type is Not Planned...</option>
												@foreach($toDayProgram as $option)
												<option value="{{$option}}">{{$option}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>
                     <div class="form-group ">
                                        
											{{Form::label('team_members', 'Team Members', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
											<select id="team_members"  multiple name="team_members[]" class="demo-default" >
												<option value="">Select Team Lead First...</option>
												@foreach($inspectors as $inspector)
												<option  value="{{$inspector->name.'-'.$inspector->emp_id}}">{{$inspector->name.'-'.$inspector->emp_id}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>
                    <div class="form-group ">
                                           
											{{Form::label('event','Type of SIA (Event)', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<?php $options=CommonFunction::getOptions('SIA_Event');?>
											<select id="event" name='event' class="demo-default" placeholder="Select Event Type...">
												<option value="">Select Event Type...</option>
												@foreach($options as $option)
												<option value="{{$option}}">{{$option}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>
                    

                    <div class="form-group question ">
                                        
						{{Form::label('objective', 'Objective ', array('class' => 'col-xs-4 control-label',"title"=>"Objective Defecation"))}}

											<div class="col-xs-6">
												{{Form::textarea('objective','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
                    <div class="form-group ">
                                           
											{{Form::label('iats_code','IATS code', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<?php $options=CommonFunction::getOptions('SIA_IATS_Code');?>
											<select id="iats_code" name='iats_code' class="demo-default" placeholder="Select IATS Code...">
												<option value="">Select IATS Code...</option>
												@foreach($options as $option)
												<option value="{{$option}}">{{$option}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>

                    <div class="form-group ">
                                           
											{{Form::label('org_name', 'Organization Name', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="organizations" name='organization' class="demo-default" placeholder="Select  Org...">
												<option value="">Select  Org...</option>
												@foreach($organizations as $organization)
												<option value="{{$organization}}">{{$organization}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>
                     <div class="form-group ">
                                        
											{{Form::label('location', 'Location', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
												{{Form::text('location','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
                     <div class="form-group ">
	                                           
												{{Form::label('date', 'Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('date', $dates,date('d'),array('class'=>'form-control',''=>''))}}
															</div>
															<div class="col-xs-2">
															{{Form::select('month',$months,date('F'),array('class'=>'form-control',''=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('year',$years,date('Y'),array('class'=>'form-control',''=>''))}}
															</div>
														</div>
												
	                    </div>	
						
					<div class="form-group ">
                                           
											{{Form::label('time', 'Time ( In GMT )', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('time','', array('class' => 'form-control','placeholder'=>'In GMT',''=>''))}}
											</div>
											
                    </div>

                    <div class="form-group ">
                                        
											{{Form::label('flight_number', 'Flight Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
												{{Form::text('flight_number','', array('class' => 'form-control','placeholder'=>''))}}
												
											</select>
											</div>
											
                    </div>
                    <div class="form-group ">
                                        
											{{Form::label('departure_airfield ', 'Departure Airfield', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
												{{Form::text('departure_airfield','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('arrival_airfield ', 'Arrival Airfield', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
												{{Form::text('arrival_airfield','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
												{{Form::text('aircraft_mms','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('aircraft_registration_no', 'Aircraft Registration
No.', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
												{{Form::text('aircraft_registration_no','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('pic', 'PIC', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
												{{Form::text('pic','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>

                     <div class="form-group ">
                                        
											{{Form::label('pel_num', 'PEL Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
											<select id="pel_num"  multiple name="pel_numbers[]" class="demo-default" >
												<option value="">Select Team Lead First...</option>
												@foreach($inspectors as $inspector)
												<option  value="{{$inspector->name.'-'.$inspector->emp_id}}">{{$inspector->name.'-'.$inspector->emp_id}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>

                    <div class="form-group ">
                                        
											{{Form::label('other_personal_inspected', 'Any Other personal
Inspected ', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
												{{Form::textarea('other_personal_inspected','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
                    <div class="form-group ">
	                                           
												{{Form::label('has_finding', 'Has Finding?', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('has_finding', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('has_finding', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
                    <div class="form-group ">
                                        
											{{Form::label('findings', 'Finding(s)', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
												{{Form::textarea('findings','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
                    <div class="form-group ">
                                        
											{{Form::label('result ', 'Result', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
												{{Form::select('result', array(''=>'--select--','Satisfactory'=>'Satisfactory','Unsatisfactory'=>'Unsatisfactory','Enforcement'=>'Enforcement','Follow Up'=>'Follow Up'),'',array('class'=>'form-control'))}}

											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('edp', 'EDP ', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
												<p class="text-center">
    <a class="btn btn-primary btn-block" data-toggle="modal" data-target="#edp" >Add EDP</a>
	
</p>
											</div>
											
                    </div>
<div class="form-group " style="background: #D0F4B3">
                    <div class="form-group ">
                                        
											{{Form::label('', '', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
												{{Form::label('', 'SMS Area', array('class' => 'col-xs-4 control-label'))}}
											</div>
											
                    </div>
                    <div class="form-group ">
                                        
											{{Form::label('corrective_action_plan', 'Corrective Action Plan', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
												{{Form::textarea('corrective_action_plan','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
                    

				<div class="form-group ">
                                    
										{{Form::label('hazard_identification', 'Hazard Identification', array('class' => 'col-xs-4 control-label'))}}
										<div class="col-xs-6">
											{{Form::text('hazard_identification','', array('class' => 'form-control','placeholder'=>''))}}
										</div>
										
                </div>
                
                <div class="form-group ">
                                           
											{{Form::label('initial_risk','Asses Initial risk', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('initial_risk','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
           		
                <div class="form-group ">
                                           
											{{Form::label('determine_severity','Determine Severity', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<?php $options=CommonFunction::getOptions('SIA_Determine_Severity');?>
											<select id="determine_severity" name='determine_severity' class="demo-default" placeholder="Select ...">
												<option value="">Select ...</option>
												@foreach($options as $option)
												<option value="{{$option}}">{{$option}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>
                <div class="form-group ">
                                           
											{{Form::label('determine_likelyhood','Determine Likelihood', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<?php $options=CommonFunction::getOptions('SIA_Likelihood');?>
											<select id="determine_likelyhood" name='determine_likelihood' class="demo-default" placeholder="Select ...">
												<option value="">Select ...</option>
												@foreach($options as $option)
												<option value="{{$option}}">{{$option}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>

				<div class="form-group ">
                                       
										{{Form::label('determine_risk','Determine risk [risk matrix] ', array('class' => 'col-xs-4 control-label'))}}
										<div class="col-xs-6">
										<?php $options=CommonFunction::getOptions('SIA_Risk_Matrix');?>
										<select id="determination_risk" name='determine_risk' class="demo-default" placeholder="Select ...">
											<option value="">Select ...</option>
											@foreach($options as $option)
											<option value="{{$option}}">{{$option}}</option>
											@endforeach
										</select>
										</div>
										
                </div>
				<div class="form-group ">
                                    
										{{Form::label('violation_of_safety_standard', 'Violation Of Safety Standard', array('class' => 'col-xs-4 control-label'))}}
										<div class="col-xs-6">
											{{Form::text('violation_of_safety_standard','', array('class' => 'form-control','placeholder'=>''))}}
										</div>
										
                </div>
				<div class="form-group ">
                                    
										{{Form::label('safety_risk_management', 'Safety Risk Management', array('class' => 'col-xs-4 control-label'))}}
										<div class="col-xs-6">
											{{Form::text('safety_risk_management','', array('class' => 'form-control','placeholder'=>''))}}
										</div>
										
                </div>
                <div class="form-group ">
                                    
										{{Form::label('risk_statement ', 'Final Risk Statement', array('class' => 'col-xs-4 control-label'))}}
										<div class="col-xs-6">
											{{Form::textarea('risk_statement','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
										</div>
										
                </div>
				<div class="form-group ">
	                                           
												{{Form::label('has_saf_cons', 'Has Safety Concern?', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> {{ Form::radio('has_safety_concern', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('has_safety_concern', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                  
					<div class="form-group ">
                                        
											{{Form::label('safety_concern', 'Safety Concern ', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
												<p class="text-center">
    <a class="btn btn-primary btn-block" data-toggle="modal" data-target="#issueSafety" >Add New Concern</a>
	
</p>
											</div>
											
                    </div>
                   
  					</div><!-- Green SMS end -->				
                    <div class="form-group">
                      
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
					</div>

					{{Form::close()}}
				</div>
				</div>
				</div>
				</div>
				</div>

 @include('safetyConcerns/entryForm')
@yield('issueSafety')
@yield('edp')
	<script>
	function setSiaNumber(siaNumber){
		document.getElementById("test1").innerHTML = "Paragraph changed!";
	}
	$(document).ready(function(){

$('#lead_inspector').selectize();
//$('#location').selectize();
$('#organizations').selectize();
$('#iats_code').selectize();
$('#sia_number').selectize();
$('#task').selectize();
$('#event').selectize();
//$('#initial_risk').selectize();
$('#determination_risk').selectize();
$('#determine_severity').selectize();
$('#determine_likelyhood').selectize();
//$('#training').selectize();
$('#msn').selectize();

 $('[data-toggle="popover"]').popover();



//multiple selection from options
var eventHandler = function(name) {
					return function() {
						console.log(name, arguments);
						$('#log').append('<div><span class="name">' + name + '</span></div>');
					};
				};
var $select = $('#team_members').selectize({
					create          : true,
					onChange        : eventHandler('onChange'),
					onItemAdd       : eventHandler('onItemAdd'),
					onItemRemove    : eventHandler('onItemRemove'),
					onOptionAdd     : eventHandler('onOptionAdd'),
					onOptionRemove  : eventHandler('onOptionRemove'),
					onDropdownOpen  : eventHandler('onDropdownOpen'),
					onDropdownClose : eventHandler('onDropdownClose'),
					onFocus         : eventHandler('onFocus'),
					onBlur          : eventHandler('onBlur'),
					onInitialize    : eventHandler('onInitialize'),
				});
var $select = $('#pel_num').selectize({
					create          : true,
					onChange        : eventHandler('onChange'),
					onItemAdd       : eventHandler('onItemAdd'),
					onItemRemove    : eventHandler('onItemRemove'),
					onOptionAdd     : eventHandler('onOptionAdd'),
					onOptionRemove  : eventHandler('onOptionRemove'),
					onDropdownOpen  : eventHandler('onDropdownOpen'),
					onDropdownClose : eventHandler('onDropdownClose'),
					onFocus         : eventHandler('onFocus'),
					onBlur          : eventHandler('onBlur'),
					onInitialize    : eventHandler('onInitialize'),
				});


var $select = $('#notify_other').selectize({
					create          : true,
					onChange        : eventHandler('onChange'),
					onItemAdd       : eventHandler('onItemAdd'),
					onItemRemove    : eventHandler('onItemRemove'),
					onOptionAdd     : eventHandler('onOptionAdd'),
					onOptionRemove  : eventHandler('onOptionRemove'),
					onDropdownOpen  : eventHandler('onDropdownOpen'),
					onDropdownClose : eventHandler('onDropdownClose'),
					onFocus         : eventHandler('onFocus'),
					onBlur          : eventHandler('onBlur'),
					onInitialize    : eventHandler('onInitialize'),
				});


	
});
	</script>


	</section>

@stop