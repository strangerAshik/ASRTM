@extends('layout')
@section('content')
<section class='content widthController'>

         <div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
									
                                    <h3 class="box-title">Safety Concerns List</h3>
									<div class="col-md-4 col-md-offset-3  position">
										<form action="" class="search-form">
											<div class="form-group has-feedback">
												<label for="search" class="sr-only">Search</label>
												<input type="text" class="form-control" name="search" id="search" placeholder="search">
												<span class="glyphicon glyphicon-search form-control-feedback"></span>
											</div>
										</form>
									</div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
								
                                    <table class="table table-bordered">
										<thead>
											<tr>
												<th>No.</th>
												<th>Corrective Status</th>
												<th>Initial Risk Analysis</th>
												<th>Curative Priority</th>
												<th>Details</th>
												<th>Update</th>
												<th>Delete</th>
											</tr>
										</thead>
										@foreach($infos as $info)
										<tbody>
											<tr>
												<td class='text-centre'>{{++$sl}}</td>
												<td class='text-centre'>{{$info->corrective_status	}}</td>
												<td class='text-centre'>{{$info->initial_risk_analysis}}</td>
												<td class='text-centre'>{{$info->curative_priority}}</td>
												<td class='text-centre'>
													<a data-toggle="modal" data-target="#view{{$info->id}}" href='' style=''>
													<span class="glyphicons glyphicons-list-alt"></span>View
													</a>
												</td>
												<td class='text-centre'>
													<a data-toggle="modal" data-target="#edit{{$info->id}}" href='' style='color:green;float:right;padding:5px;'>
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
												</td>
												<td class='text-centre'>
													<a href="{{'deleteSafety/'.$info->id}}" style='color:red;float:right;padding:5px;'><span class="glyphicon glyphicon-trash"></span></a>
												</td>
											</tr>
										</tbody>
										@endforeach
									</table>
									
                                </div><!-- /.box-body -->
                            </div>    
                            </div>    
      </div>    
	<!---Start View The Safety Concern--->
	@foreach($infos as $info)
	<div class="modal fade" id="view{{$info->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Safety Concern Details</h4>
            </div>

            <div class="modal-body">
				   <table class="table table-bordered">
                                        <tbody>
										<tr>                                           
                                            <th colspan='2' >Action No #1
											
											<a href="{{'deleteSafety/'.$info->id}}" style='color:red;float:right;padding:5px;'><span class="glyphicon glyphicon-trash"></span></a>
											<a data-toggle="modal" data-target="#edit{{$info->id}}" href='' style='color:green;float:right;padding:5px;'>
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
											</th>
                                        </tr>
                                        <tr>
                                           
                                            <td class="col-md-4">Assigned Inspector</td>
                                            <td >{{$info->assigned_inspector}}</td>
											                                          
                                        </tr>
										<tr>
											<td>Corrective Status</td>
											<td>{{$info->corrective_status}}</td>
										</tr>
                                        <tr>
											<td>Initial Risk Analysis</td>
											<td>{{$info->initial_risk_analysis}}</td>
										</tr>
										<tr>
											<td>Type Of Issue</td>
											<td>{{$info->type_of_issue}}</td>
										</tr>
										<tr>
											<td>Published Practice</td>
											<td>{{$info->published_practice}}</td>
										</tr>
										<tr>
											<td>Regulation</td>
											<td>{{$info->regulation}}</td>
										</tr>
										<tr>
											<td>Job Aid</td>
											<td>{{$info->job_aid}}</td>
										</tr>
                                        <tr>
											<td>Questions</td>
											<td>{{$info->questions}}</td>
										</tr>
                                        <tr>
											<td>Organization</td>
											<td>{{$info->organization}}</td>
										</tr>
                                        <tr>
											<td>Aircraft Registration</td>
											<td>{{$info->aircraft_registration}}</td>
										</tr>
                                        <tr>
											<td>PEL Number</td>
											<td>{{$info->pel_number}}</td>
										</tr>
										<tr>
											<td> Provided To</td>
											<td>{{$info->provided_to}}</td>
										</tr>
                                        <tr>
											<td> Curative Priority </td>
											<td>{{$info->curative_priority}}</td>
										</tr>
                                        <tr>
											<td>Target Date</td>
											<td>{{$info->target_date}}</td>
										</tr>
                                        <tr>
											<td>EIR</td>
											<td>{{$info->eir}}</td>
										</tr> 
										<tr>
											<td>Final Res Date</td>
											<td>{{$info->final_res_date}}</td>
										</tr>
                                        <tr>
											<td>Final Res Inspector</td>
											<td>{{$info->final_res_inspector}}</td>
										</tr>
										<tr>
											<td>Final Res Method</td>
											<td>{{$info->final_res_method}}</td>
										</tr>
                                        <tr>
											<td>Residual Risk</td>
											<td>{{$info->residual_risk}}</td>
										</tr>
                                         <tr>
											<td>Safety Concern</td>
											<td>
											{{$info->safety_concern}}
											</td>
										</tr>
                                        
                                    </tbody>
								</table>
								
            </div><!-- /.box-body -->
        </div>    
    </div>    
 </div>		
 @endforeach
<!---End View The Safety Concern--->
<!--Start Editing -->	
@foreach($infos as $info)
<div class="modal fade" id="edit{{$info->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Update Safety Concern</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'safety/safetyConcern/update', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form'))}}
						@if (Auth::check())						
							   {{Form::hidden('user_id',Auth::user()->id)}}							
						@endif
					{{Form::hidden('receipt_date',$toDay)}}
					{{Form::hidden('id',$info->id)}}
					<div class="form-group ">
                                        
											{{Form::label('assigned_inspector', 'Assigned Inspector', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('assigned_inspector', array('Null' => '--Select--', 'Mr.X' => 'Mr.X','Mr.Y'=>'Mr.Y'), $info->assigned_inspector,array('class'=>'form-control','id'=>'category'))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('corrective_status', 'Corrective Status', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('corrective_status', array('' => '--Select--', 'R-Resolved' => 'R-Resolved','R-Open'=>'R-Open','X-Cancelled'=>'X-Cancelled','A-All Ready In Progress'=>'A-All Ready In Progress'),  $info->corrective_status ,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('initial_risk_analysis', 'Initial Risk Analysis', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('initial_risk_analysis', array('' => '--Select--', 'H-High Risk' => 'H-High Risk','M-Medium Risk'=>'M-Medium Risk','L-Low Risk'=>'L-Low Risk','N-No Risk'=>'N-No Risk'), $info->initial_risk_analysis,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('type_of_issue', 'Type Of Issue', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('type_of_issue', array('' => '--Select--', 
										'A=Non-Conformance: State Law' => 'A=Non-Conformance: State Law',
										'B=Non-Conformance: State Regulations'=>'B=Non-Conformance: State Regulations','C=Non-Adherence: Published Standard'=>'C=Non-Adherence: Published Standard','D=Non-Adherence: Relevant Safety Practice'=>'D=Non-Adherence: Relevant Safety Practice','E=Non-Adherence: CAA Guidance'=>'E=Non-Adherence: CAA Guidance','F=Non-Conformance: ICAO Standard'=>'F=Non-Conformance: ICAO Standard','G=Inadequate System Function'=>'G=Inadequate System Function','I=Initial Investigation'=>'I=Initial Investigation'), $info->type_of_issue,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					
				
					<div class="form-group ">
                                        
											{{Form::label('published_practice', 'Published Practice', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('published_practice',$info->published_practice, array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('regulation', 'Regulation', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('regulation',$info->regulation, array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('job_aid', 'Job Aid', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('job_aid',$info->job_aid, array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('questions', 'Questions', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('questions',$info->questions, array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('organization', 'Organization', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('organization', array('' => '--Select--'), $info->organization,array('class'=>'form-control','id'=>'category'))}}
											</div>
											
                    </div>
					
					<div class="form-group ">
                                        
											{{Form::label('aircraft_registration', 'Aircraft Registration', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('aircraft_registration',$info->aircraft_registration, array('class' => 'form-control','placeholder'=>'',))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('pel_number', 'PEL Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('pel_number',$info->pel_number, array('class' => 'form-control','placeholder'=>'',))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('provided_to', 'Provided To', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('provided_to',$info->provided_to, array('class' => 'form-control','placeholder'=>'',))}}
											</div>
											
                    </div>
					
					
					<div class="form-group required">
                                        
											{{Form::label('curative_priority', 'Curative Priority ', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('curative_priority', array('' => '--Select--','0=Safety of Flight Concern'=>'0=Safety of Flight Concern','1=Needs Priority Correction'=>'1=Needs Priority Correction','2=Needs Corrective Action'=>'2=Needs Corrective Action','3=Inspector Observation'=>'3=Inspector Observation'), $info->curative_priority,array('class'=>'form-control','id'=>'category','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
												
													{{Form::label('target_date', 'Target Date', array('class' => 'col-xs-4 control-label'))}}
												
													<div class="row">
														<div class="col-xs-2">
														{{Form::select('target_date',$dates,$info->target_date,array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('target_month',$months,$info->target_month,array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('target_year',$year,$info->target_year,array('class'=>'form-control'))}}
														</div>
													</div>
					</div>
					<div class="form-group">
												
													{{Form::label('eir', 'EIR#', array('class' => 'col-xs-4 control-label'))}}
												
													<div class="col-xs-6">			
														
														{{Form::text('eir',$info->eir, array('class' => 'form-control','placeholder'=>''))}}
													</div>
														
					</div>
					<div class="form-group ">
												
													{{Form::label('final_res_date', 'Final Res Date', array('class' => 'col-xs-4 control-label'))}}
												
													<div class="row">
														<div class="col-xs-2">
														{{Form::select('final_res_date',$dates, $info->final_res_date ,array('class'=>'form-control'))}}
														</div>
														<div class="col-xs-3">
														{{Form::select('final_res_month',$months, $info->final_res_month ,array('class'=>'form-control'))}}
											
															
														</div>
														<div class="col-xs-2">
															{{Form::select('final_res_year',$year, $info->final_res_year ,array('class'=>'form-control'))}}
														</div>
													</div>
					</div>
					<div class="form-group ">
                                        
											{{Form::label('final_res_inspector', 'Final Res Inspector', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('final_res_inspector', array('' => '--Select--'), $info->final_res_inspector,array('class'=>'form-control','id'=>'category'))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('final_res_method', 'Final Res Method', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('final_res_method', array('' => '--Select--'), $info->final_res_method,array('class'=>'form-control','id'=>'category'))}}
											</div>
											
                    </div>
					<div class="form-group ">
                                        
											{{Form::label('residual_risk', 'Residual Risk', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::select('residual_risk', array('' => '--Select--'), $info->residual_risk,array('class'=>'form-control','id'=>'category'))}}
											</div>
											
                    </div>
					
					<div class="form-group required">											
											{{Form::label('safety_concern', 'Safety Concern', array('class' => 'control-label col-xs-4'))}}
											<div class="col-xs-6">
											{{Form::textarea('safety_concern',$info->safety_concern, array('class' => 'form-control','placeholder'=>'','size'=>'30x3','required'=>''))}}
											 </div>
										</div>
					
					
                    

                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                       
                    </div>
					{{Form::close()}}
            </div>
        </div>
    </div>
	</div>
</div>
@endforeach
<!--End  Editing -->	
                           
</section>
@stop