@extends('layout')
@section('content')
<section class="content widthController">
<div class='row col-md-12 hidden-print'>

				<p class="text-center col-md-4">
				<a class="btn btn-primary btn-block"  href="{{URL::to('surveillance/correctiveAction/'.$sia_number);}}">Corrective Action</a>
				</p>

				<p class="text-center col-md-4">
				<a class="btn btn-primary btn-block" target="_blink" href="{{URL::to('surveillance/followUp/'.$sia_number);}}">Follow Up</a>
				</p>

				<p class="text-center col-md-4">
				<button class="btn btn-primary btn-block"   data-toggle="modal" data-target="#approvalForm">Approval</button>
</div>

<!--Program descripton-->
<div class="row" >
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
							<div class="box-header">
									<h3 class="box-title"style='color:#367FA9;font-weight:bold;' >Program Details</h3>
							<span class='hidden-print'>
								@if('true'==CommonFunction::hasPermission('aircraft',Auth::user()->emp_id(),'par_delete'))

									{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
								@endif
								@if('true'==CommonFunction::hasPermission('aircraft',Auth::user()->emp_id(),'sof_delete'))	
									{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
								@endif
								@if('true'==CommonFunction::hasPermission('aircraft',Auth::user()->emp_id(),'approve'))

									{{ HTML::linkAction('AircraftController@approve', '',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-ok','style'=>'color:green;float:right;padding:5px;')) }}
									
									{{ HTML::linkAction('AircraftController@notApprove', '',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-ok','style'=>'color:red;float:right;padding:5px;')) }}
								@endif
								@if('true'==CommonFunction::hasPermission('aircraft',Auth::user()->emp_id(),'worning'))	
									{{ HTML::linkAction('AircraftController@removeWarning', '',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-bell','style'=>'color:green;float:right;padding:5px;')) }}
									{{ HTML::linkAction('AircraftController@warning', '',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-bell','style'=>'color:red;float:right;padding:5px;')) }}
								@endif
								@if('true'==CommonFunction::hasPermission('aircraft',Auth::user()->emp_id(),'update'))
									<a data-toggle="modal" data-target="#editSTCForm{{$sia_number}}" href='' style='color:green;float:right;padding:5px;'>
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</a>
								@endif
									
							</span>				
									
							</div>							 
                <!-- /.box-header -->
					
					<div class="box-body">
					<div class='disNon'>
					{{$num=0}}
					</div>	
                    <table class="table table-bordered">
				
					
            <tbody>
            @if($programDetails)
            @foreach ($programDetails as $info) 
			   <tr><th class='col-md-4'>SIA / Tracking Number</th><td>{{$info->sia_number}}</td></tr>
			   <tr><th>Organization Name</th><td>{{$info->org_name}}</td></tr>
			   <tr><th>Event</th><td>{{$info->event}}</td></tr>
			   <tr><th>Date</th><td>{{$info->date}}</td></tr>
			   <tr><th>Time ( In GMT )</th><td>{{$info->time}}</td></tr>
			   <tr><th>Team Members</th><td> 
			   @if($authors=CommonFunction::updateMultiSelection('sia_program', 'id',$info->id,'team_members'))
                                               @if($authors!=null)
                                                    @foreach($authors as $key=>$value)
                                                        {{$value}},
                                                    @endforeach
                                               
                                                @endif
                @else
                    No Members Added!!
                @endif</td>
               </tr>
			   <tr><th>Remarks</th><td>{{$info->remarks}}</td></tr>
			@endforeach
			@else 
			<tr><td colspan="2">This is Not Planned Program!</td></tr>
			@endif
			</tbody>
					 
					 
					
					 
					</table>
					</div>
						</div>
					</div>
					
</div> 
<!--Action descripton-->
<div class="row" >
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
							<div class="box-header">
									<h3 class="box-title"style='color:#367FA9;font-weight:bold;' >Action Details</h3>									
							<span class='hidden-print'>
								@if('true'==CommonFunction::hasPermission('aircraft',Auth::user()->emp_id(),'par_delete'))

									{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
								@endif
								@if('true'==CommonFunction::hasPermission('aircraft',Auth::user()->emp_id(),'sof_delete'))	
									{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
								@endif
								@if('true'==CommonFunction::hasPermission('aircraft',Auth::user()->emp_id(),'approve'))

									{{ HTML::linkAction('AircraftController@approve', '',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-ok','style'=>'color:green;float:right;padding:5px;')) }}
									
									{{ HTML::linkAction('AircraftController@notApprove', '',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-ok','style'=>'color:red;float:right;padding:5px;')) }}
								@endif
								@if('true'==CommonFunction::hasPermission('aircraft',Auth::user()->emp_id(),'worning'))	
									{{ HTML::linkAction('AircraftController@removeWarning', '',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-bell','style'=>'color:green;float:right;padding:5px;')) }}
									{{ HTML::linkAction('AircraftController@warning', '',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-bell','style'=>'color:red;float:right;padding:5px;')) }}
								@endif
								@if('true'==CommonFunction::hasPermission('aircraft',Auth::user()->emp_id(),'update'))
									<a data-toggle="modal" data-target="#editSTCForm{{$sia_number}}" href='' style='color:green;float:right;padding:5px;'>
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</a>
								@endif
									
							</span>			
							</div>							 
                <!-- /.box-header -->
					
					<div class="box-body">
					<div class='disNon'>
					{{$num=0}}
					</div>	
                    <table class="table table-bordered">
				
				
                    <tbody>
                    @if($actionDetails)
                    @foreach($actionDetails as $info)
					   <tr><th class='col-md-4'>Program Type</th><td>{{$info->program_type}}</td></tr>
					   <tr><th>Team Members</th><td>
						 @if($authors=CommonFunction::updateMultiSelection('sia_action', 'id',$info->id,'team_members'))
                                               @if($authors!=null)
                                                    @foreach($authors as $key=>$value)
                                                        {{$value}},
                                                    @endforeach
                                               
                                                @endif
                                                @else
                                                    No Members Added!!
                                                @endif
					   </td></tr>
					   <tr><th>Type of SIA (Event)</th><td>{{$info->event}}</td></tr>
					   <tr><th>Objective</th><td>{{$info->objective}}</td></tr>
					   <tr><th>IATS code</th><td>{{$info->iats_code}}</td></tr>
					   <tr><th>Organization Name</th><td>{{$info->organization}}</td></tr>
					   <tr><th>Location</th><td>{{$info->location}}</td></tr>
					   <tr><th>Date</th><td>{{$info->date}}</td></tr>
					   <tr><th>Time ( In GMT )</th><td>{{$info->time}}</td></tr>
					   <tr><th>Flight Number</th><td>{{$info->flight_number}}</td></tr>
					   <tr><th>Departure Airfield</th><td>{{$info->departure_airfield}}</td></tr>
					   <tr><th>Arrival Airfield</th><td>{{$info->arrival_airfield}}</td></tr>
					   <tr><th>Aircraft MMS</th><td>{{$info->aircraft_mms}}</td></tr>
					   <tr><th>Aircraft Registration No.</th><td>{{$info->aircraft_registration_no}}</td></tr>
					   <tr><th>PIC</th><td>{{$info->pic}}</td></tr>
					   <tr><th>PEL Number</th><td>
							 @if($authors=CommonFunction::updateMultiSelection('sia_action', 'id',$info->id,'pel_numbers'))
                                               @if($authors!=null)
                                                    @foreach($authors as $key=>$value)
                                                        {{$value}},
                                                    @endforeach
                                               
                                                @endif
                                                @else
                                                    No PEL Added!!
                                                @endif
					   </td></tr>
					   <tr><th>Any Other personal Inspected </th><td>{{$info->other_personal_inspected}}</td></tr>
					   <tr><th>Has Finding?</th><td>{{$info->has_finding}}</td></tr>
					   <tr><th>Finding(s)</th><td>{{$info->findings}}</td></tr>
					   <tr><th>Result</th><td>{{$info->result}}</td></tr>
					   <tr><th>Corrective Action Plan</th><td>{{$info->corrective_action_plan}}</td></tr>
					   <tr><th>Hazard Identification</th><td>{{$info->hazard_identification}}</td></tr>
					   <tr><th>Initial Risk</th><td>{{$info->initial_risk}}</td></tr>
					   <tr><th>Determine Risk</th><td>{{$info->determine_risk}}</td></tr>
					   <tr><th>Determine Severity</th><td>{{$info->determine_severity}}</td></tr>
					   <tr><th>Determine risk [risk matrix] </th><td>{{$info->determine_risk}}</td></tr>
					   <tr><th>Violation of Safety Standard</th><td>{{$info->violation_of_safety_standard}}</td></tr>
					   <tr><th>Safety Risk Management</th><td>{{$info->safety_risk_management}}</td></tr>
					   <tr><th>Determine Likelihood</th><td>{{$info->determine_likelihood}}</td></tr>
					   <tr><th>Final Risk Determination</th><td>{{$info->final_risk_determination}}</td></tr>
					   <tr><th>Risk Statement</th><td>{{$info->risk_statement}}</td></tr>
					   <tr><th>Has Safety Concern?</th><td>{{$info->has_safety_concern}}</td></tr>
					@endforeach
					@else 
						<tr><td colspan="2">No Action Taken Yet! Go For Action Entry <a class="hidden-print" href="{{URL::to('surveillance/newActionEnrty')}}">[Action Entry]</a> </td></tr>
					@endif
						
					</tbody>
				 
					 
					
					 
					</table>
					</div>
						</div>
					</div>
					
</div> 
<!--Safety concern descripton-->
<div class="row" >
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
							<div class="box-header">
									<h3 class="box-title"style='color:#367FA9;font-weight:bold;' >Safety Concern</h3>									
									
							</div>							 
                <!-- /.box-header -->
					
					<div class="box-body">
					<div class='disNon'>
					{{$num=0}}
					</div>	
                    <table class="table table-bordered">
				
				
                    <tbody>					   
						
						<tr><th>SC Number</th><th>Title</th><th>Approved</th><th>Details</th></tr>
						@if($safetyCons)
						@foreach ($safetyCons as $info) 
						<tr><td>{{$info->safety_issue_number}}</td><td>{{$info->safety_issue_title}}</td><td>No</td><td><a target="_blink" href="{{URL::to('safety/singlesafetyConcern/'.$info->safety_issue_number)}}">Details</a></td></tr>
						@endforeach
						@else 
						<tr><td colspan="4">No Safety Concern Found.</td></tr>
						@endif
						
					</tbody>
				 
					 
					
					 
					</table>
					</div>
						</div>
					</div>
					
</div> 
<!--EDP descripton-->
<div class="row" >
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
							<div class="box-header">
									<h3 class="box-title"style='color:#367FA9;font-weight:bold;' >EDP</h3>									
									
							</div>							 
                <!-- /.box-header -->
					
					<div class="box-body">
					<div class='disNon'>
					{{$num=0}}
					</div>	
                    <table class="table table-bordered">
				
				
                    <tbody>					   
						
						<tr><th>EDP Number</th><th>Title</th><th>Approved</th><th>Details</th></tr>
						<tr><td>39024329045</td><td>TItle Of Safety Concern</td><td>No</td><td><a href="">Details</a></td></tr>
						
					</tbody>
				 
					 
					
					 
					</table>
					</div>
						</div>
					</div>
					
</div>  
<!--Approval Info-->
<div class="row" >
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
							<div class="box-header">
									<h3 class="box-title"style='color:#367FA9;font-weight:bold;' >Approval Info</h3>	
								<span class='hidden-print'>
								@if('true'==CommonFunction::hasPermission('aircraft',Auth::user()->emp_id(),'par_delete'))

									{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
								@endif
								@if('true'==CommonFunction::hasPermission('aircraft',Auth::user()->emp_id(),'sof_delete'))	
									{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
								@endif
								@if('true'==CommonFunction::hasPermission('aircraft',Auth::user()->emp_id(),'approve'))

									{{ HTML::linkAction('AircraftController@approve', '',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-ok','style'=>'color:green;float:right;padding:5px;')) }}
									
									{{ HTML::linkAction('AircraftController@notApprove', '',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-ok','style'=>'color:red;float:right;padding:5px;')) }}
								@endif
								@if('true'==CommonFunction::hasPermission('aircraft',Auth::user()->emp_id(),'worning'))	
									{{ HTML::linkAction('AircraftController@removeWarning', '',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-bell','style'=>'color:green;float:right;padding:5px;')) }}
									{{ HTML::linkAction('AircraftController@warning', '',array('aircraft_stc_info',$sia_number), array('class' => 'glyphicon glyphicon-bell','style'=>'color:red;float:right;padding:5px;')) }}
								@endif
								@if('true'==CommonFunction::hasPermission('aircraft',Auth::user()->emp_id(),'update'))
									<a data-toggle="modal" data-target="#editSTCForm{{$sia_number}}" href='' style='color:green;float:right;padding:5px;'>
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</a>
								@endif
									
							</span>									
									
							</div>							 
                <!-- /.box-header -->
					
					<div class="box-body">
					<div class='disNon'>
					{{$num=0}}
					</div>	
                    <table class="table table-bordered">
				
				
                    <tbody>		
					<tr><th>Approved By</th><th>Designation</th><th>Approval Date</th><th>Note</th></tr>
					@if($approvalInfo)
					@foreach($approvalInfo as $info)
					<tr><td>{{$info->approved_by}}</td><td>{{$info->designation}}</td><td>{{$info->approval_date}}</td><td>{{$info->approval_note}}</td></tr>
					@endforeach
					@else
						<tr><td>Not Approved Yet!</td></tr>
					@endif
						
					</tbody>
				 
					 
					
					 
					</table>
					</div>
						</div>
					</div>
					
</div>   
@include('common')
@yield('print')
</section>
@include('surveillance.entryForm')
@yield('approvalForm')
@stop