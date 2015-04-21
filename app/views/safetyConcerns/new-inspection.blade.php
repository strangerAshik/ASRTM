@extends('layout')
@section('content')
<span style='display:none'>
{{$role=Auth::User()->Role()}}
</span>
<div class='content' style="max-width:760px;margin:0 auto;">
@include('safetyConcerns/menu')
@yield('menuNewInspection')
</div>

{{--Entry form --}}
<div class="modal fade" id="inspectionInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Inspection Primary Information</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'safety/savePrimaryInspection', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form'))}}

					{{Form::hidden('inspection_number','Inspection_'.date('d').'_'.date('m').'_'.date('y').'_'.time())}}
					<div class="form-group ">
                                        
											{{Form::label('inspection_number', 'Inspection Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('inspection_number','Inspection_'.date('d').'_'.date('m').'_'.date('y').'_'.time(), array('class' => 'form-control','placeholder'=>'','disabled'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('inspection_title', 'Inspection Title', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('inspection_title','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('lead_inspector', 'Lead Inspector', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id='lead_inspector' name='lead_inspector' class="demo-default" placeholder="Select Lead Inspector">
												<option value="">Select Lead Inspector</option>
												<option value="Ashik">Ashik</option>
												<option value="Roman">Roman</option>
												{{--@foreach($roles as $role)
												<option value="{{$role}}">{{$role}}</option>
												@endforeach --}}
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

@stop