@extends('layout')
@section('content')
<section class="content widthController">
<p class="text-center">
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#correctiveIssue">Add Corrective Action</button>	
</p>
@include('surveillance.entryForm')
@yield('correctiveIssue')
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

									 @if('true'==CommonFunction::hasPermission('sc_issue_safety_concern',Auth::user()->emp_id(),'par_delete'))
										{{ HTML::linkAction('AircraftController@permanentDelete', 'P.D',array('sc_corrective_action',$action->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
									 @endif
									 @if('true'==CommonFunction::hasPermission('sc_issue_safety_concern',Auth::user()->emp_id(),'sof_delete'))
										{{ HTML::linkAction('AircraftController@softDelete', 'S.D',array('sc_corrective_action', $action->id), array('class' => 'glyphicon glyphicon-trash','style'=>'color:red;float:right;padding:5px;')) }}
									 @endif
										
									
									 @if('true'==CommonFunction::hasPermission('sc_issue_safety_concern',Auth::user()->emp_id(),'update'))
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
                                <td>{{$action->revived_date}}</td>
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
                                <td>{{$action->regulation_mitigation_date}}</td>
                            </tr>
							 <tr>
                                <th>Job Aid File</th>
                                <td>
								@if($action->corrective_action_file!='Null'){{HTML::link('files/sia_corrective_action_file/'.$action->corrective_action_file,'Document',array('target'=>'_blank'))}}
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
					
						
					
					
	</div>
</section>
@stop