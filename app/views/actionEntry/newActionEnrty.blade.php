@extends('layout')
@section('content')
<section class='content widthController' style='margin: 0 auto; max-width: 1000px;'>
{{--<p class="text-center">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#newAction" >New SIA</button>
	
</p>--}}

<div class="" id="" tabindex="-1" role="" aria-labelledby="" aria-hidden="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">New Surveillance Inspection & Audit </h4>
            </div>

            <div class="modal-body">
               
               
				{{Form::open(array('url' => '', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form','files'=>true))}}
					
					<div class="form-group required">
                                        
											{{Form::label('lead_inspector', 'Lead Inspector', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="lead_inspector" name="lead_inspector" class="demo-default" placeholder="Select Type Of Issue">
												<option value="">Select Type Of Issue</option>
												<option value="Mr. Jama">Mr. Jama</option>
												<option value="Mr. Kabir Hossain">Mr. Kabir Hossain</option>
												<option value="Mr. Someone">Mr. Someone</option>
												
											</select>
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('team_member', 'Team Member(s)', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
									<select id="team_member"  multiple name="team_member[]" class="demo-default" >
												<option value="">Select Team Member(s)...</option>
												<option value="Mr. Jama">Mr. Jama</option>
												<option value="Mr. Kabir Hossain">Mr. Kabir Hossain</option>
												<option value="Mr. Someone">Mr. Someone</option>
											</select>
											</div>
											
                    </div>
                    <div class="form-group required">
                                        
											{{Form::label('location', 'Location', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="location" name="location" class="demo-default" placeholder="Select location">
												<option value="">Select location</option>
												<option value="Mr. Jama">DIA</option>
												<option value="Mr. Kabir Hossain">CIA</option>
												<option value="Mr. Someone">SIA</option>
												
											</select>
											</div>
											
                    </div>

                    <div class="form-group required">
                                        
											{{Form::label('organization', 'Organization', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="organization" name="organization" class="demo-default" placeholder="Select location">
												<option value="">Select location</option>
												<option value="Mr. Jama">Nova Air</option>
												<option value="Mr. Kabir Hossain">Bangladesh Biman</option>
												
											</select>
											</div>
											
                    </div>

                    <div class="form-group required">
                                        
											{{Form::label('task', 'Task', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-7">
											<select id="task" name="task" class="demo-default" placeholder="Select location">
									<option value="">Select Task</option>	

												<option value="Mr. Jama">1010 STAFF/ADMINISTRATION/HUMAN RELATIONS</option>
												<option value="Mr. Kabir Hossain">1021 STAFF/ADMINISTRATION/FORMAL TRAINING</option>
												<option value="Mr. Someone">1024 STAFF/ADMINISTRATION/OJT TRAINER</option>	
											</select>
											</div>
											
                    </div>
                    <div class="form-group ">
                                        
											{{Form::label('event', 'Event', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="event" name="event" class="demo-default" placeholder="Select Event">
									<option value="">Select Event</option>	

												
											</select>
											</div>
											
                    </div>
                    <div class="form-group ">
                                        
											{{Form::label('project_number', 'Project Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('project_number','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
                    <div class="form-group ">
                                        
											{{Form::label('action_taken', 'Action Taken', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('action_taken',array(''=>'Select Action','In Progress'=>'In Progress','Complete'=>'Complete','Not Complete'=>'Not Complete','Cancel'=>'Cancel'),'0',array('class'=>'form-control'))}}
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
                                        
											{{Form::label('pel_nums', 'PEL Number(s)', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
									<select id="pel_nums"  multiple name="pel_nums[]" class="demo-default" >
												<option value="">Select PEL Number(s)...</option>
												<option value="Mr. Jama">13-45FEDD</option>
												<option value="Mr. Kabir Hossain">14-45FEDD</option>
												<option value="Mr. Someone">15-45FEDD</option>
											</select>
											</div>
											
                    </div>

                    <div class="form-group ">
                                        
											{{Form::label('msn', 'MSN', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="msn" name="msn" class="demo-default" placeholder="Select MSN">
									<option value="">Select MSN</option>	

												
											</select>
											</div>
											
                    </div>
                    <div class="form-group ">
                                        
											{{Form::label('aircraft_registration_number', 'Aircraft Registration Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('aircraft_registration_number','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>

                    <div class="form-group ">
                                        
											{{Form::label('flight_number', 'Flight Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('flight_number','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>

                    <div class="form-group ">
                                        
											{{Form::label('degigni_name', 'Degigni Name', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('degigni_name','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>

                    <div class="form-group ">
                                        
											{{Form::label('maintanence_representative', 'Maintanence Representative', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('maintanence_representative','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>

                    <div class="form-group ">
                                        
											{{Form::label('management_representative', 'Management Representative', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('management_representative','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>

                    <div class="form-group ">
                                        
											{{Form::label('semulator', 'Semulator', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('semulator','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
                     <div class="form-group required">
                                        
											{{Form::label('training', 'Training', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="training" name="training" class="demo-default" placeholder="Select Training">
											<option value="">Select Training</option>	

												
											</select>
											</div>
											
                    </div>
                    <div class="form-group ">
                                        
											{{Form::label('tracking_number', 'Tracking Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('tracking_number','15-4-23424', array('class' => 'form-control','placeholder'=>'','disabled'=>''))}}
											</div>
											
                    </div>
                    <div class="form-group ">
                                        
											{{Form::label('notify_other', 'Notify Other', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
									<select id="notify_other"  multiple name="notify_other[]" class="demo-default" >
												<option value="">Select Team Member(s)...</option>
												<option value="Mr. Jama">Mr. Jama</option>
												<option value="Mr. Kabir Hossain">Mr. Kabir Hossain</option>
												<option value="Mr. Someone">Mr. Someone</option>
											</select>
											</div>
											
                    </div>
                     <div class="form-group ">
                                        
											{{Form::label('memo', 'Memo', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('memo','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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

$('#lead_inspector').selectize();
$('#location').selectize();
$('#organization').selectize();
$('#task').selectize();
$('#event').selectize();
$('#training').selectize();
$('#msn').selectize();





//multiple selection from options
var eventHandler = function(name) {
					return function() {
						console.log(name, arguments);
						$('#log').append('<div><span class="name">' + name + '</span></div>');
					};
				};
var $select = $('#team_member').selectize({
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

var $select = $('#pel_nums').selectize({
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