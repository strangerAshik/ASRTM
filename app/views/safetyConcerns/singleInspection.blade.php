@extends('layout')
@section('content')
<section class='content widthController'>

<span style='display:none'>
{{$role=Auth::User()->Role()}}
</span>
         <div class="row" >
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
							 <div class="box-header">
									<h3 class="box-title">Inspection Info.</h3>							
							  </div>		 
							 
                <!-- /.box-header -->
				
					<div class="box-body">
				
                    <table class="table table-bordered">
                        <tbody>
						  <tr>
						  {{-- @include('safetyConcerns/options')                                
						  @yield('primaryInspection')--}}
                           </tr>
							@foreach($ins_primary_infos as $info)
                            <tr>               
								<th colspan='2' style='color:#72C2E6'>
									  @if('true'==CommonFunction::hasPermission('sc_new_inspection',Auth::user()->emp_id(),'par_delete'))
										{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('sc_primary_inspection',$info->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
									 @endif
									 @if('true'==CommonFunction::hasPermission('sc_new_inspection',Auth::user()->emp_id(),'sof_delete'))
										{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('sc_primary_inspection', $info->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
									 @endif								
									 @if('true'==CommonFunction::hasPermission('sc_new_inspection',Auth::user()->emp_id(),'update'))
										 <a data-toggle="modal" data-target="#inspectionInfo{{$info->id}}" href='' style='color:green;float:right;padding:5px;'>
											<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
										</a>
									 @endif
								</th>
								
						    </tr>
							<tr>
                                <th>									
									Inspection Number
								</th>
                                <td>{{$info->inspection_number}}</td>
                            </tr>
                            <tr>
                                <th>Inspection Title</th>
                                <td>{{$info->inspection_title}}</td>
                            </tr>
                            <tr>
                                <th>Lead Inspector</th>
                                <td>{{$info->lead_inspector}}</td>
                            </tr>
                            <tr>
                                <th>Team Members</th>
                                <td>{{$info->team_members}}</td>
                            </tr>
                            <tr>
                                <th>Type Of Inspection</th>
                                <td>{{$info->type_of_inspection}}</td>
                            </tr>
							 
                            <tr>
                                <th>Against Organization</th>
                                <td>{{$info->against_organization}}</td>
                            </tr>
							@endforeach
							
                        </tbody>
                    </table>
				
                </div>
                <!-- /.box-body -->
                               
                            </div><!-- /.box -->
						</div>
						
				</div>
				@include('safetyConcerns.menu')
				@yield('menuIssueSafetyConcern')
				
				
				@include('safetyConcerns.entryForm')
				@yield('issueSafety')
				@foreach($safety_concerns as $sc)
			    <div class="row" >
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
							<div class="box-header">
									<h3 class="box-title" ><a style='color:#367FA9;font-weight:bold;' href="{{URL::to('safety/singlesafetyConcern/'.$sc->safety_issue_number);}}">{{$sc->safety_issue_title}}</a></h3>
									
									<a class='btn btn-primary pull-right 'style='color: #fff;
margin: 9px 10px 0 0;' href="{{URL::to('safety/singlesafetyConcern/'.$sc->safety_issue_number);}}"> Details</a>
							</div>							 
                <!-- /.box-header -->
				
					<div class="box-body">
				
                    <table class="table table-bordered">
                        <tbody>
						                       
							<tr>
                                <th>									
									Safety Issue Number
								</th>
                                <td>{{$sc->safety_issue_number}}</td>
                            </tr>
                            
                            <tr>
                                <th>Type Of Issue</th>
                                <td>{{$sc->type_of_issue}}</td>
                            </tr>
                            <tr>
                                <th>POI/Responsible</th>
                                <td>{{$sc->poi_or_responsible}}</td>
                            </tr>
                            <tr>
                                <th>Issue Finding Status</th>
                                <td>{{$sc->issue_finding_status}}</td>
                            </tr>
							 
                            <tr>
                                <th>Assigned Inspector</th>
                                <td>{{$sc->assigned_inspector}}</td>
                            </tr>
                            <tr>
                                <th>Issue Finding Date</th>
                                <td>{{$sc->issue_finding_date.' '.$sc->issue_finding_month.' '.$sc->issue_finding_year}}</td>
                            </tr>
                            <tr>
                                <th>Issue Finding Local Time</th>
                                <td>{{$sc->issue_finding_local_time}}</td>
                            </tr>
                            <tr>
                                <th>Place/Airport</th>
                                <td>{{$sc->place_or_airport}}</td>
                            </tr>
                            <tr>
                                <th>CVR Statement</th>
                                <td>{{$sc->cvr_statement}}</td>
                            </tr>
                            <tr>
                                <th>Initial Risk Analysis</th>
                                <td>{{$sc->initial_risk_analysis}}</td>
                            </tr>
                            <tr>
                                <th>Corrective Status</th>
                                <td>{{$sc->corrective_satatus}}</td>
                            </tr>
                            <tr>
                                <th>Corrective Priority</th>
                                <td>{{$sc->corrective_priority}}</td>
                            </tr>
                            
                            <tr>
                                <th>Provided To</th>
                                <td>{{$sc->provided_to}}</td>
                            </tr>
                            <tr>
                                <th>Target Date</th>
                                <td>{{$sc->target_date.' '.$sc->target_month.' '.$sc->target_year}}</td>
                            </tr>
                            <tr>
                                <th>EIR File</th>
                                <td>
								@if($sc->eir_file!='Null'){{HTML::link('files/sc_eir_file/'.$sc->eir_file,'Document',array('target'=>'_blank'))}}
								@else
									{{HTML::link('#','No Document Provided')}}
								@endif
								</td>
                            </tr>
                            <tr>
                                <th>Regulation Issue</th>
                                <td>{{$sc->regulation_issue}}</td>
                            </tr>
                            <tr>
                                <th>Public Practise</th>
                                <td>{{$sc->public_practise}}</td>
                            </tr>
                            <tr>
                                <th>Regulation</th>
                                <td>{{$sc->regulation}}</td>
                            </tr>
                            <tr>
                                <th>Job Aid File</th>
                                <td>
								@if($sc->job_aid_file!='Null'){{HTML::link('files/sc_job_aid_file/'.$sc->job_aid_file,'Document',array('target'=>'_blank'))}}
								@else
									{{HTML::link('#','No Document Provided')}}
								@endif
								</td>
                            </tr>
                            <tr>
                                <th>Question</th>
                                <td>{{$sc->question}}</td>
                            </tr>
                            <tr>
                                <th>Answer</th>
                                <td>{{$sc->answer}}</td>
                            </tr>
                            <tr>
                                <th>Responsible Pels</th>
                                <td>{{$sc->responsible_pels}}</td>
                            </tr>
                            <tr>
                                <th>Aircraft MSN</th>
                                <td>{{$sc->aircraft_msn}}</td>
                            </tr>
                            <tr>
                                <th>Aircraft Registration Number</th>
                                <td>{{$sc->aircraft_rgistration_number}}</td>
                            </tr>
                            <tr>
                                <th>Final Regulation Date</th>
                                <td>{{$sc->final_regulation_date.' '.$sc->final_regulation_month.' '.$sc->final_regulation_year}}</td>
                            </tr>
                            <tr>
                                <th>Final Regulation Inspector</th>
                                <td>{{$sc->final_regulation_inspector}}</td>
                            </tr>
                            <tr>
                                <th>Final Regulation Method</th>
                                <td>{{$sc->final_regulation_method}}</td>
                            </tr>
                            <tr>
                                <th>Residual Risk</th>
                                <td>{{$sc->residual_risk}}</td>
                            </tr>
                            <tr>
                                <th>Actual Finding</th>
                                <td>{{$sc->actual_finding}}</td>
                            </tr>
                            <tr>
                                <th>Safety Concern</th>
                                <td>{{$sc->safety_concern}}</td>
                            </tr>
                            <tr>
                                <th>Risk Statement</th>
                                <td>{{$sc->risk_statement}}</td>
                            </tr>
							
							
                        </tbody>
                    </table>
				
                </div>
                <!-- /.box-body -->
                               
                            </div><!-- /.box -->
						</div>
						
				</div>
				@endforeach
				
				
{{--Entry form --}}
@foreach($ins_primary_infos as $info)
<div class="modal fade" id="inspectionInfo{{$info->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Inspection Primary Information</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'safety/updatePrimaryInspection', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form'))}}

					{{Form::hidden('id',$info->id)}}
					<div class="form-group ">
                                        
											{{Form::label('inspection_number', 'Inspection Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('inspection_number',$info->inspection_number, array('class' => 'form-control','placeholder'=>'','disabled'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('inspection_title', 'Inspection Title', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('inspection_title',$info->inspection_title, array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('lead_inspector', 'Lead Inspector', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id='lead_inspector' name='lead_inspector' class="demo-default" placeholder="Select Lead Inspector">
												<option value="">Select Lead Inspector</option>
												<option selected='selected' value="{{$info->lead_inspector}}">{{$info->lead_inspector}}</option>
												<option value="Ashik">Ashik</option>
												<option value="Roman">Roman</option>
												
											</select>
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('team_members', 'Team Members', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
											<select id="team_members"  multiple name="team_members[]" class="demo-default" >
												<option value="">Select Team Members...</option>
												<option value="AL">Alabama</option>
												<option value="AK">Alaska</option>
												<option value="AZ">Arizona</option>
											</select>
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('type_of_inspection', 'Type Of Inspection', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id='type_of_inspection' name='type_of_inspection' class="demo-default" placeholder="Select Lead Inspector">
												<option  value="">Select Lead Inspector</option>
													<option selected='selected' value="{{$info->type_of_inspection}}">{{$info->type_of_inspection}}</option>
												<option value="Ashik">Ashik</option>
												<option value="Roman">Roman</option>
												{{--@foreach($roles as $role)
												<option value="{{$role}}">{{$role}}</option>
												@endforeach --}}
											</select>
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('against_organization', 'Against Organization', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="against_organization" name='against_organization' class="demo-default" placeholder="Against Organization">
												<option value="">Against Organization</option>
												<option selected='selected' value="{{$info->against_organization}}">{{$info->against_organization}}</option>
												<option value="Ashik">Ashik</option>
												<option value="Roman">Roman</option>
												{{--@foreach($roles as $role)
												<option value="{{$role}}">{{$role}}</option>
												@endforeach --}}
											</select>
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


$('#lead_inspector').selectize({
    create: true,
    sortField: {
        field: 'text',
        direction: 'asc'
    }
});
$('#type_of_inspection').selectize({
    create: true,
    sortField: {
        field: 'text',
        direction: 'asc'
    }
});
$('#against_organization').selectize({
    create: true,
    sortField: {
        field: 'text',
        direction: 'asc'
    }
});

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
//end multiple selection from options	
});
</script>
{{--End Entry form --}}
	</section>
@stop
