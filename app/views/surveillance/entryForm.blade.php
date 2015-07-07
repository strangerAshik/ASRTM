@if($PageName=='New Program')
@section('newProgram')
<div class="modal fade" id="newProgram" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add New Program</h4>
            </div>

            <div class="modal-body"> 
                              
				{{Form::open(array('url'=>'surveillance/saveProgram','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
				  
				{{Form::hidden('sia_number','SIA'.'_'.date('d').'_'.date('m').'_'.date('Y').'_'.time())}}
					<div class="form-group required">
                                           
											{{Form::label('sia_number', 'SIA / Tracking Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('sia_number','SIA'.'_'.date('d').'_'.date('m').'_'.date('Y').'_'.time(), array('class' => 'form-control','placeholder'=>'','required'=>'','disabled'=>''))}}
											</div>
											
                    </div>
                    <div class="form-group ">
                                           
											{{Form::label('org_name', 'Organization Name', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="organizations" name='org_name' class="demo-default" placeholder="Select  Org...">
												<option value="">Select  Org...</option>
												@foreach($organizations as $organization)
												<option value="{{$organization}}">{{$organization}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>
                    <div class="form-group ">
                                           
											{{Form::label('event','Event', array('class' => 'col-xs-4 control-label'))}}
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
               
					 <div class="form-group required">
	                                           
												{{Form::label('date', 'Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
						
					<div class="form-group ">
                                           
											{{Form::label('time', 'Time ( In GMT )', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('time','', array('class' => 'form-control','placeholder'=>'In GMT'))}}
											</div>
											
                    </div>
                    
                    <div class="form-group ">
                                        
											{{Form::label('team_members', 'Team Members', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
											<select   id="team_members"  multiple name="team_members[]" class="demo-default" >
												<option value="">Select Team Lead First...</option>
												@foreach($inspectors as $inspector)
												<option  value="{{$inspector->name.'-'.$inspector->emp_id}}">{{$inspector->name.'-'.$inspector->emp_id}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>
					
					
					<div class="form-group ">
                                           
											{{Form::label('remark', 'Remark', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('remarks','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					
					<div class="form-group">
                       
                            <button type="submit" name='saveAndContinue' value='' class="btn btn-primary btn-lg btn-block">Save</button>
                       
                    </div>
					</div>
					{{Form::close()}}
            </div>
        </div>
    </div>
</div>

<script>
	$(document).ready(function(){
	//$('#org_name').selectize();
	$('#event').selectize();
	$('#organizations').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});
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
	});


           
           
</script>
@stop
@endif
@if($PageName=='New Action Entry')
@section('newActionEntry')
<div class="modal fade" id="newActionEntry" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">New Action Entry</h4>
            </div>

            <div class="modal-body"> 
                              
				{{Form::open(array('url'=>'organization/saveOrgPrimary','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
				  
				{{Form::hidden('sia_number','SIA'.'_'.date('d').'_'.date('m').'_'.date('Y').'_'.time())}}
					<div class="form-group required">
                                           
											{{Form::label('sia_number', 'SIA / Tracking Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('sia_number','SIA'.'_'.date('d').'_'.date('m').'_'.date('Y').'_'.time(), array('class' => 'form-control','placeholder'=>'','required'=>'','disabled'=>''))}}
											</div>
											
                    </div>
                    <div class="form-group ">
                                           
											{{Form::label('org_name', 'Organization Name', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="organizations" name='org_name' class="demo-default" placeholder="Select  Org...">
												<option value="">Select  Org...</option>
												@foreach($organizations as $organization)
												<option value="{{$organization}}">{{$organization}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>
                    <div class="form-group ">
                                           
											{{Form::label('event','Event', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<?php $options=CommonFunction::getOptions('org29_primaryOrg_type');?>
											<select id="event" name='event' class="demo-default" placeholder="Select Event Type...">
												<option value="">Select Event Type...</option>
												@foreach($options as $option)
												<option value="{{$option}}">{{$option}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>
                   
					 <div class="form-group required">
	                                           
												{{Form::label('date', 'Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
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
                                           
											{{Form::label('remark', 'Remark', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('remark','', array('class' => 'form-control','placeholder'=>'',''=>'','size'=>'4x1'))}}
											</div>
											
                    </div>
					
					<div class="form-group">
                       
                            <button type="submit" name='saveAndContinue' value='' class="btn btn-primary btn-lg btn-block">Save</button>
                       
                    </div>
					</div>
					{{Form::close()}}
            </div>
        </div>
    </div>
</div>

<script>
	$(document).ready(function(){
	//$('#org_name').selectize();
	$('#event').selectize();
	$('#organizations').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});
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
	});


</script>
@stop
@endif
@if($PageName=='SIA Corrective Action')	
@section('correctiveIssue')
<div class="modal fade" id="correctiveIssue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Corrective Action</h4>
            </div>

            <div class="modal-body">
                
               
				{{Form::open(array('url' => 'surveillance/saveCorrectiveAction', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form','files'=>true))}}
					
						
							{{Form::hidden('sia_number',$sia_number)}}							
						
					
						
					
					<div class="form-group required ">
                                        
											{{Form::label('currective_action', 'Corrective Action', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('currective_action','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1','required'=>''))}}
											</div>
											
                    </div>
					
					<div class="form-group ">
                                           
											{{Form::label('revived_date', 'Revived Date', array('class' => 'col-xs-4 control-label'))}}
											<div class="row">
														<div class="col-xs-2">
														{{Form::select('revived_date', $dates,'0',array('class'=>'form-control',''=>''))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('revived_month',$months,'0',array('class'=>'form-control',''=>''))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('revived_year',$years,'0',array('class'=>'form-control',''=>''))}}
														</div>
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('concern_authority_officer', 'Concern Authority Officer', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('concern_authority_officer','', array('class' => 'form-control','placeholder'=>'',''=>''))}}
											</div>
											
                    </div>
					<div class="form-group  ">
                                        
											{{Form::label('regulation_mitigation', 'Regulation Mitigation', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('regulation_mitigation','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1',''=>''))}}
											</div>
											
                    </div>
					
					
					<div class="form-group ">
                                           
											{{Form::label('regulation_mitigation_date', 'Regulation Mitigation Date', array('class' => 'col-xs-4 control-label'))}}
											<div class="row">
														<div class="col-xs-2">
														{{Form::select('regulation_mitigation_date', $dates,'0',array('class'=>'form-control',''=>''))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('regulation_mitigation_month',$months,'0',array('class'=>'form-control',''=>''))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('regulation_mitigation_year',$years,'0',array('class'=>'form-control',''=>''))}}
														</div>
													</div>
											
                    </div>
					<div class="form-group ">
                                           
                                            
											 {{ Form::label('corrective_action_file', 'Upload Corrective Action File: ',array('class'=>'control-label col-xs-4')) }}
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
	
@stop
@endif

@if($PageName=='Single Program')	
@section('approvalForm')
<div class="modal fade" id="approvalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Approval Form</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'surveillance/saveApprovalForm', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form'))}}
					
				  
						
							{{Form::hidden('sia_number',$sia_number)}}							
						
				
					
					
					
					<div class="form-group required">
                                        
											{{Form::label('approved_by', 'Approved By', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('approved_by', Auth::User()->getName() , array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('designation', 'Designation', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
											{{Form::text('designation', Auth::User()->Role() , array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					
					<div class="form-group required">
                                           
											{{Form::label('approval_date', 'Approval Date', array('class' => 'col-xs-4 control-label'))}}
											<div class="row">
														<div class="col-xs-2">
														{{Form::select('approval_date', $dates , date('d') ,array('class'=>'form-control','required'=>''))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('approval_month', $months , date('F') ,array('class'=>'form-control','required'=>''))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('approval_year', $years , date('Y') ,array('class'=>'form-control','required'=>''))}}
														</div>
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('approval_note', 'Note', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::textarea('approval_note','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1','required'=>''))}}
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

});
</script>
@stop
@endif