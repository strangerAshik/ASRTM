
<span style='display:none'>
{{$role=Auth::User()->Role()}}
</span>
<style>
	
</style>
<section class='content widthController'>        
						
				
				
			    	@foreach($safetyConcernDatas as $sc)
						@include('safetyConcerns.menu')
						@yield('menuSingleSafetyConcern')	
			    <div class="row" >
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
							<div class="box-header">
									<h3 class="box-title" ><a style='color:#367FA9;font-weight:bold;' href="{{URL::to('safety/singlesafetyConcern/'.$sc->safety_issue_number);}}">{{$sc->safety_issue_title}}</a></h3>	
						
							
					
							</div>							 
                <!-- /.box-header -->
				
					<div class="box-body">
				
                    <table class="table table-bordered">
                        <tbody>
						    <tr>                
								<td colspan='2'>
								@include('safetyConcerns.options')
								@yield('scInfos')
								</td>
						    </tr>                
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
                                <th>Revised Date</th>
                                <td>{{$sc->resived_date.' '.$sc->resived_month.' '.$sc->resived_year}}</td>
                            </tr>
                            <tr>
                                <th>Revised Time</th>
                                <td>{{$sc->revised_time}}</td>
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
				@include('safetyConcerns.editForm')
				@yield('editIssueSafety')
				
				<div class="row" >
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
							<div class="box-header">
									<h3 class="box-title"style='color:#367FA9;font-weight:bold;' >Corrective Action</h3>									
							</div>							 
                <!-- /.box-header -->
					<div class='disNon'>
					{{$num=0}}
					</div>
					<div class="box-body">
				
                    <table class="table table-bordered">
					@if($correctiveActions)
					@foreach($correctiveActions as $action)
                        <tbody>
						    <tr>               
								<th colspan='2' style='color:#72C2E6'>Corrective Action #{{++$num}}
									 @if($role=='Chief Admin'||$role=='Director')
										{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('sc_corrective_action',$action->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
									 @endif
									 @if($role=='Chief Admin')
										{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('sc_corrective_action', $action->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
									 @endif
										
									
									 @if($role=='Chief Admin'||$role=='Director')
										 <a data-toggle="modal" data-target="#editCorrectiveIssue{{$action->id}}" href='' style='color:green;float:right;padding:5px;'>
											<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
										</a>
									 @endif
								</th>
								
						    </tr>               
							<tr>
                                <th>									
									Corrective Action
								</th>
                                <td>{{$action->currective_action}}</td>
                            </tr>
                            
                            <tr>
                                <th>Revived Date</th>
                                <td>{{$action->revived_date.' '.$action->revived_month.' '.$action->revived_year}}</td>
                            </tr>
                            <tr>
                                <th>Concern Authority Officer</th>
                                <td>{{$action->concern_authority_officer}}</td>
                            </tr>
                            <tr>
                                <th>Regulation Mitigation</th>
                                <td>{{$action->regulation_mitigation}}</td>
                            </tr>
							 <tr>
                                <th>Revived Date</th>
                                <td>{{$action->regulation_mitigation_date.' '.$action->regulation_mitigation_month.' '.$action->regulation_mitigation_year}}</td>
                            </tr>
							 <tr>
                                <th>Job Aid File</th>
                                <td>
								@if($action->corrective_action_file!='Null'){{HTML::link('files/sc_corrective_action_file/'.$action->corrective_action_file,'Document',array('target'=>'_blank'))}}
								@else
									{{HTML::link('#','No Document Provided')}}
								@endif
								</td>
                            </tr>
						</tbody>
					 @endforeach
					 @else
						 <tbody>
							<tr>
								<td colspan='2'>
								No Corrective Action Given Yet!!
								</td>
							</tr>
						 </tbody>
					 @endif
					 
					</table>
					</div>
						</div>
					</div>
					
						@include('safetyConcerns.editForm')
						@yield('editCorrectiveIssue')
					
					
				</div>
				
				<div class="row" >
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
							<div class="box-header">
									<h3 class="box-title"style='color:#367FA9;font-weight:bold;' >Approval Information</h3>									
									
							</div>							 
                <!-- /.box-header -->
					
					<div class="box-body">
					<div class='disNon'>
					{{$num=0}}
					</div>	
                    <table class="table table-bordered">
					@if($approvalInfos)
					@foreach($approvalInfos as $info)
                        <tbody>
						    <tr>               
								<th colspan='2' style='color:#72C2E6'>Approval Info. #{{++$num}}
									 @if($role=='Chief Admin'||$role=='Director')
										{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('sc_approval_info',$info->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
									 @endif
									 @if($role=='Chief Admin')
										{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('sc_approval_info',$info->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
									 @endif
										
									
									 @if($role=='Chief Admin'||$role=='Director')
										 <a data-toggle="modal" data-target="#editapprovalInfos{{$info->id}}" href='' style='color:green;float:right;padding:5px;'>
											<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
										</a>
									 @endif
								</th>
								
						    </tr>        
							<tr>
                                <th>									
									Approved By
								</th>
                                <td>{{$info->approved_by}}</td>
                            </tr>
							<tr>
                                <th>									
									Designation
								</th>
                                <td>{{$info->designation}}</td>
                            </tr>
							<tr>
                                <th>									
									Approval Date
								</th>
                                <td>{{$info->approval_date.' '.$info->approval_month.' '.$info->approval_year}}</td>
                            </tr>
                            
                            <tr>
                                <th>Approval Note</th>
                                <td>{{$info->approval_note}}</td>
                            </tr>
                          
						</tbody>
					 @endforeach
					 @else
						 <tbody>
							<tr>
								<td colspan='2'>
								Not Approved Yet!!
								</td>
							</tr>
						 </tbody>
					 @endif
					 
					</table>
					</div>
						</div>
					</div>
					@include('safetyConcerns.editForm')
					@yield('updateApprovalForm')
				</div>
				<div class="row" >
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
							<div class="box-header">
									<h3 class="box-title"style='color:#367FA9;font-weight:bold;' >Legal Opinion</h3>									
									
							</div>							 
                <!-- /.box-header -->
					
					<div class="box-body">
					<div class='disNon'>
					{{$num=0}}
					</div>	
                    <table class="table table-bordered">
					@if($legalOpinions)
					@foreach($legalOpinions as $opinion)
                        <tbody>
						    <tr>               
								<th colspan='2' style='color:#72C2E6'>Approval Info. #{{++$num}}
									 @if($role=='Chief Admin'||$role=='Director')
										{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('sc_legal_openion',$opinion->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
									 @endif
									 @if($role=='Chief Admin')
										{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('sc_legal_openion',$opinion->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
									 @endif
										
									
									 @if($role=='Chief Admin'||$role=='Director')
										 <a data-toggle="modal" data-target="#updatelegalOpenion{{$opinion->id}}" href='' style='color:green;float:right;padding:5px;'>
											<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
										</a>
									 @endif
								</th>
								
						    </tr>        
							<tr>
                                <th>									
									Legal Opinion
								</th>
                                <td>{{$opinion->legal_openion}}</td>
                            </tr>
							<tr>
                                <th>									
									Author Of Legal Opinion
								</th>
                                <td>{{$opinion->row_creator}}</td>
                            </tr>
							<tr>
                                <th>									
									Given at [Date and Time]
								</th>
                                <td>{{$opinion->created_at}}</td>
                            </tr>
							
						</tbody>
					 @endforeach
					 @else
						 <tbody>
							<tr>
								<td colspan='2'>
								No Legal Opinion Written Yet!!
								</td>
							</tr>
						 </tbody>
					 @endif
					 
					</table>
					</div>
						</div>
					</div>
					@include('safetyConcerns.editForm')
					@yield('updateApprovalForm')
				</div>
				
				<div class="row" >
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
							<div class="box-header">
									<h3 class="box-title"style='color:#367FA9;font-weight:bold;' >Responsible History Of This SC Issue</h3>									
							</div>							 
                <!-- /.box-header -->
					
					<div class="box-body">
				
                    <table class="table table-bordered">
				
					
                        <tbody>
						                 
							
							<tr>
                                <th>Date</th><th>Name</th><th>Designation</th><th>Forwarding Note</th><th>Edit</th><th>P. Delete</th><th>S. Delete</th>
                                
                            </tr>
							
							@foreach($safetyConcernDatas as $sc)
							
							<tr>
                                <td>{{$sc->created_at}}</td><td>{{$sc->assigned_inspector}}</td><td>Inspector</td><td>SC Initialize</td>
                                
                            </tr>
							
                            @endforeach
							@foreach($forwardings as $forwarding)
							
							<tr>
                                <td>{{$forwarding->forwarding_date}}</td>
								<td>{{$forwarding->forwarding_to}}</td>
								<td>{{$forwarding->forwarding_to}}</td>
								<td>{{$forwarding->forwarding_note}}</td>
								<td>
								<a data-toggle="modal" data-target="#editForwardings{{$forwarding->id}}" href='' style='color:green;float:right;padding:5px;'>
											<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
										</a>
								</td>
								<td>{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('sc_forwarding',$forwarding->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}</td>
								<td>
								{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('sc_forwarding',$forwarding->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
								</td>
                                
                            </tr>
							
                            @endforeach
						</tbody>
					
					
					 
					</table>
					</div>
						</div>
					</div>
						
				</div>
				
              
	</section>
	
				@include('safetyConcerns.entryForm')
				@yield('issueSafety')
				@yield('correctiveIssue')
				@yield('forwardingForm')
				@yield('approvalForm')
				@yield('legalOpenion')
				
				@include('safetyConcerns.editForm')
				@yield('updateApprovalForm')
				@yield('updateForwardingForm')
				@yield('updatelegalOpenion')
	