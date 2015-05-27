
@section('orgPrimaryForm')
<div class="modal fade" id="orgPrimaryForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Organization Primary Information</h4>
            </div>

            <div class="modal-body"> 
                              
				{{Form::open(array('url'=>'organization/saveOrgPrimary','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
				  
					<div class="form-group required">
                                           
											{{Form::label('org_number', 'Organization Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('org_number','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
                    <div class="form-group required">
                                           
											{{Form::label('org_name', 'Organization Name', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="org_name" name='org_name' class="demo-default" placeholder="Select  Org...">
												<option value="">Select  Org...</option>
												@foreach($organizations as $organization)
												<option value="{{$organization}}">{{$organization}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>
					
					
					<div class="form-group required">
                                           
											{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
										<div class="radio">
									 
									  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
									 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
									</div>
									
								</div>
                    </div>
					
					<div class="form-group">
                       
                            <button type="submit" name='saveAndContinue' value='' class="btn btn-primary btn-lg btn-block">Save</button>
                       
                    </div>
					
					{{Form::close()}}
            </div>
        </div>
    </div>
</div>
<script>
	$(document).ready(function(){
	$('#org_name').selectize();
	//$('#organizations').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});
		
	});
</script>
@stop

@if($PageName=='Single Organization')
<!-- Business Name Form -->
	@section('orgbusinessNameForm')
	<div class="modal fade" id="orgbusinessNameForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Organization Business Name</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgbusinessName','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					  
					  @foreach($orgPrimary as $primary)
					  	{{Form::hidden('org_number',$primary->org_number)}}
					  	{{Form::hidden('org_name',$primary->org_name)}}
					  @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('org_business_name', 'Org Business Name', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_business_name','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>		
	                    <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	

	                    <div class="form-group ">
	                                           
												{{Form::label('org_business_name_note', 'Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('org_business_name_note','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						
						<div class="form-group">
	                       
	                            <button type="submit" name='saveAndContinue' value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop
<!-- End Business Name Form -->
	@section('orgCertificateForm')
	<div class="modal fade" id="orgCertificateForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Organization Certificates</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgCertificate','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						 
						<div class="form-group required">                                           
							{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}									
	                        <div class="col-xs-6">
								<div class="radio">									 
								  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
								  <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
								</div>
							</div>
	                    </div>
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

						<div class="form-group required">
	                                           
												{{Form::label('org_certificate_type', 'Certificate Type', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
	{{Form::select('org_certificate_type',array(''=>'--Select--','AOC1-Air Operator (Large Aircraft)'=>'AOC1-Air Operator (Large Aircraft)','AOC2-Air Operator (Commuter Aircraft)'=>'AOC2-Air Operator (Commuter Aircraft)','AOC3-Air Operator (Air Taxi Aircraft)'=>'AOC3-Air Operator (Air Taxi Aircraft)',
	'AMO-Approved Maintenance Organization'=>'AMO-Approved Maintenance Organization',
	'AEW-Approved Aerial Work Organization'=>'AEW-Approved Aerial Work Organization',
	'ATO-Approved Training Organization'=>'ATO-Approved Training Organization',
	'NON-Non-Certificated Organization'=>'NON-Non-Certificated Organization'

	),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   	
	                    <div class="form-group ">
	                                           
												{{Form::label('issued_date', 'Date Issued', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_issued_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_issued_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_issued_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>

	                    <div class="form-group ">
	                                           
												{{Form::label('expiration_date', 'Date Of Expiration', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_expiration_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_expiration_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_expiration_year',$years_from,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Date Of Terminated', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years_from,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>

						<div class="form-group ">
	                                           
												{{Form::label('org_control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('org_basis_note', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('org_basis_note','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop


	@section('orgBaseLocationForm')
	<div class="modal fade" id="orgBaseLocationForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Organization Base Locations</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgBaseLocation','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

						<div class="form-group required">
	                                           
												{{Form::label('org_location_type', 'Location Type', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_location_type',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('contract_person', 'Contract Person', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('contract_person','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('org_telephone_number', 'Telephone Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_telephone_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('org_fax_number', 'Fax Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_fax_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('org_lecation', 'Lecation', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_lecation',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('org_address', 'Address', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('org_address','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	

	                   	<div class="form-group ">
	                                           
												{{Form::label('org_city', 'City', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_city','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('org_state_province', 'State Or Province', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_state_province','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('org_postal_code', 'Postal Code', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_postal_code','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('org_country', 'Country', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_country','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('memo_note', 'Memo/Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('memo_note','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop

	@section('orgManagementContactsForm')
	<div class="modal fade" id="orgManagementContactsForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Organization Management Contacts</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgManagementContact','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

						<div class="form-group required">
	                                           
												{{Form::label('management_position', 'Management Position', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('management_position',array(''=>'--Select--','Accountable Manager-AAM'=>'Accountable Manager-AAM'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group required">
	                                           
												{{Form::label('first_name', 'First Name', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('first_name','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group required">
	                                           
												{{Form::label('last_name', 'Last Name', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('last_name','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('actual_title', 'Actual Title', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('actual_title','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                  

	                   	<div class="form-group">
	                                           
												{{Form::label('work_phone', 'Work Phone', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('work_phone','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group">
	                                           
												{{Form::label('cell_number', 'Cell Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('cell_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                    <div class="form-group">
	                                           
												{{Form::label('fax_number', 'Fax Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('fax_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('location', 'Location', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('location',array(''=>'--Select--','Accountable Manager-AAM'=>'Accountable Manager-AAM'),'0', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('email', 'Email', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('email','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('address', 'Address', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('address','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	

	                   	<div class="form-group ">
	                                           
												{{Form::label('city', 'City', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('city','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('state_province', 'State Or Province', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('state_province','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('postal_code', 'Postal Code', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('postal_code','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('country', 'Country', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('country','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('memo_note', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('memo_note','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop

	@section('orgCAAContactsForm')
	<div class="modal fade" id="orgCAAContactsForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Organization CAA Contacts</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgCAAContact','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

						<div class="form-group required">
	                                           
												{{Form::label('inspector_position', 'Inspector Position', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('inspector_position',array(''=>'--Select--','Accountable Manager-AAM'=>'Accountable Manager-AAM'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group required">
	                                           
												{{Form::label('first_name', 'First Name', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('first_name','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group required">
	                                           
												{{Form::label('last_name', 'Last Name', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('last_name','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('actual_title', 'Actual Title', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('actual_title','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                   	

	                   	<div class="form-group ">
	                                           
												{{Form::label('work_phone', 'Work Phone', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('work_phone','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('cell_number', 'Cell Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('cell_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                    <div class="form-group ">
	                                           
												{{Form::label('fax_number', 'Fax Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('fax_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('location', 'Location', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('location',array(''=>'--Select--','Accountable Manager-AAM'=>'Accountable Manager-AAM'),'0', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('email', 'Email', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('email','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('address', 'Address', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('address','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	

	                   	<div class="form-group ">
	                                           
												{{Form::label('city', 'City', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('city','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('state_province', 'State Or Province', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('state_province','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('postal_code', 'Postal Code', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('postal_code','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('country', 'Country', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('country','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('basis_note', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_note','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop

	@section('orgExemptionsDivinationForm')
	<div class="modal fade" id="orgExemptionsDivinationForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Organization Exemptions Divinations</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgExemptionsDivination','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('type', 'Type', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('type',array(''=>'--Select--','Accountable Manager-AAM'=>'Accountable Manager-AAM'),'0', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('assigned_number', 'Assigned Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('assigned_number','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('regulation', 'Regulation', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('regulation','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

						
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('basis_note', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_note','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>

	@stop
	@section('orgAircraftListingForm')
	<div class="modal fade" id="orgAircraftListingForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Organization Aircraft Listing</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgAircraftListing','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

	                    <div class="form-group required">
	                                           
												{{Form::label('registration_number', 'Registration Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('registration_number','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    
	                    
						<div class="form-group ">
	                                           
												{{Form::label('rvsm', 'RVSM', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('rvsm', 'Yes') }} &nbsp  Yes</label>
										 <label> {{ Form::radio('rvsm', 'No',true) }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>

						<div class="form-group ">
	                                           
												{{Form::label('parts_pool', 'Parts Pool', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('parts_pool', 'Yes') }} &nbsp  Yes</label>
										 <label> {{ Form::radio('parts_pool', 'No',true) }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>

						<div class="form-group ">
	                                           
												{{Form::label('reliability', 'Reliability', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('reliability', 'Yes') }} &nbsp  Yes</label>
										 <label> {{ Form::radio('reliability', 'No',true) }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>

						<div class="form-group ">
	                                           
												{{Form::label('lease_acceptable', 'Lease Acceptable', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('lease_acceptable', 'Yes') }} &nbsp  Yes</label>
										 <label> {{ Form::radio('lease_acceptable', 'No',true) }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>

						<div class="form-group ">
	                                           
												{{Form::label('interchange', 'Interchange', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('interchange', 'Yes') }} &nbsp  Yes</label>
										 <label> {{ Form::radio('interchange', 'No',true) }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('note', 'Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('note','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop

	@section('orgPolicyMenualApprovalForm')
	<div class="modal fade" id="orgPolicyMenualApprovalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Organization Policy Manual Approval</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgPolicyMenualApproval','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('type_of_approval',array(''=>'--Select--','Accountable Manager-AAM'=>'Accountable Manager-AAM'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('basis_note', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_note','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop

	@section('orgComplexityReviewForm')
	<div class="modal fade" id="orgComplexityReviewForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Organization Complexity Review</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgComplexityReview','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('review_date', 'Review Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_review_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_review_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_review_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                   
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('purpose_of_review', 'Purpose Of Review', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('purpose_of_review',array(''=>'--Select--','Accountable Manager-AAM'=>'Accountable Manager-AAM'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('total_employees', 'Total Employees', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_employees','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('total_flt_ops_employees', 'Total FLt Ops Employees', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_flt_ops_employees','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('total_pilots', 'Total Pilots', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_pilots','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>   

	                   	<div class="form-group ">
	                                           
												{{Form::label('total_check_airmen', 'Total Check Airmen', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_check_airmen','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>  

	                   	<div class="form-group ">
	                                           
												{{Form::label('total_flight_attendants', 'Total Flight Attendants', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_flight_attendants','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                 	
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('total_aircraft_dispatchers', 'Total Aircraft Dispatchers', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_aircraft_dispatchers','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>  
	                    <div class="form-group ">
	                                           
												{{Form::label('flight_followers', 'Flight Followers', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('flight_followers','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>  

	                    <div class="form-group ">
	                                           
												{{Form::label('total_load_controllers', 'Total Load Controllers', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_load_controllers','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>  

	                    <div class="form-group required">
	                                           
												{{Form::label('total_maint_employees', 'Total Maint Employees', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_maint_employees','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

	                    <div class="form-group ">
	                                           
												{{Form::label('total_av_maint_technicians', 'Total Av Maint Technicians', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_av_maint_technicians','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('total_av_repair_specialists', 'Total Av Repair Specialists', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_av_repair_specialists','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('total_quality_assurance', 'Total Quality Assurance', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_quality_assurance','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                      
	                    <div class="form-group ">
	                                           
												{{Form::label('note', 'Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('note','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop

	@section('orgAerialWorkApprovalForm')
	<div class="modal fade" id="orgAerialWorkApprovalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Aerial Work Approval</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgAerialWorkApproval','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('type_of_approval',array(''=>'--Select--','Accountable Manager-AAM'=>'Accountable Manager-AAM'),'0', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('method', 'Method', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('method','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop

	@section('orgNonCertificatedOperationsForm')
	<div class="modal fade" id="orgNonCertificatedOperationsForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Non-Certificated Operations</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgNonCertificatedOperation','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('operations_type', 'Operations Type', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('operations_type',array(''=>'--Select--','Accountable Manager-AAM'=>'Accountable Manager-AAM'),'0', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                     <div class="form-group ">
	                                           
												{{Form::label('limiting_factor', 'Limiting Factor', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('limiting_factor','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('method', 'Method', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('method','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						<div class="form-group ">
	                                           
												{{Form::label('basis_notes', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_notes','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop

	@section('orgFlightOperationsApprovalsForm')
	<div class="modal fade" id="orgFlightOperationsApprovalsForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Add Flight Operations Approvals</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgFlightOperationsApproval','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('type_of_approval',array(''=>'--Select--','Type Of Approval'=>'Type Of Approval'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('limiting_factor', 'Limiting Factor', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('limiting_factor','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>    
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('method', 'Method', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('method','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						
	                    <div class="form-group ">
	                                           
												{{Form::label('basis_notes', 'Basis & Notes', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_notes','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop

	@section('orgFleetOperationsApprovalForm')
	<div class="modal fade" id="orgFleetOperationsApprovalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Fleet Operations Approval</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgFleetOperationApproval','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('type_of_approval',array(''=>'--Select--','Accountable Manager-AAM'=>'Accountable Manager-AAM'),'0', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                    <div class="form-group ">
	                                           
												{{Form::label('limiting_factor', 'Limiting Factor', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('limiting_factor','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    <div class="form-group ">
	                                           
												{{Form::label('equipment', 'Equipment', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('equipment','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('method', 'Method', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('method','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						 <div class="form-group ">
	                                           
												{{Form::label('basis_note', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_note','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop

	@section('orgFleetMaintananceApprovalForm')
	<div class="modal fade" id="orgFleetMaintananceApprovalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Fleet Maintenance Approval</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgFleetMaintananceApproval','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required ">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('type_of_approval',array(''=>'--Select--','Accountable Manager-AAM'=>'Accountable Manager-AAM'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('limiting_factor', 'Limiting Factor', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('limiting_factor','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    <div class="form-group ">
	                                           
												{{Form::label('equipment', 'Equipment', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('equipment','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('method', 'Method', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('method','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						 <div class="form-group ">
	                                           
												{{Form::label('basis_note', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_note','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop

	@section('orgAirportAuthForm')
	<div class="modal fade" id="orgAirportAuthForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Airport Authorization</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgAirportAuth','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('location', 'Location', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('location',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required ">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('type_of_approval',array(''=>'--Select--','Accountable Manager-AAM'=>'Accountable Manager-AAM'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    
	                     <div class="form-group required">
	                                           
												{{Form::label('limiting_factor', 'Limiting Factor', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('limiting_factor','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    <div class="form-group ">
	                                           
												{{Form::label('note', 'Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('note','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>
	                   
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop

	@section('orgLeasingArrangmentForm')
	<div class="modal fade" id="orgLeasingArrangmentForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Add Leasing Arrangement</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgLeasingArrangment','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('arrangement', 'Arrangement', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('arrangement',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('other', 'Other', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('other','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    <div class="form-group ">
	                                           
												{{Form::label('notes', 'Notes', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('notes','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>
	                   
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop

	@section('orgContractedServicesForm')
	<div class="modal fade" id="orgContractedServicesForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Add Contracted Services</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgContractedService','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('issued_date', 'Date Issued', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('issued_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('issued_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('issued_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('type_of_approval',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

	                     <div class="form-group ">
	                                           
												{{Form::label('limiting_factor', 'Limiting Factor', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('limiting_factor','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                   
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    <div class="form-group ">
	                                           
												{{Form::label('basis_note', 'Basis & Notes', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_note','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>
	                   
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop

	@section('orgAmoApprovalsForm')
	<div class="modal fade" id="orgAmoApprovalsForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Add AMO Approvals</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgAmoApproval','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('org_effective_date', 'Effective Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('category_rating', 'Category Rating', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('category_rating',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   
	                    <div class="form-group ">
	                                           
												{{Form::label('class_rating', 'Class Rating', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('class_rating',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                    <div class="form-group ">
	                                           
												{{Form::label('rating_description', 'Rating Description', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('rating_description','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     
	                    
	                    <div class="form-group required">
	                                           
												{{Form::label('contractor', 'Contractor', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('contractor','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   

	                    <div class="form-group ">
	                                           
												{{Form::label('specific_equipment', 'Specific Equipment', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('specific_equipment','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('available_method', 'Available Method', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('available_method','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>
	                   
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop

	@section('orgAtoApprovalsForm')
	<div class="modal fade" id="orgAtoApprovalsForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Add ATO Approvals</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgAtoApproval','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('org_effective_date', 'Effective Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('ato_category', 'ATO Category', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('ato_category',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   
	                    <div class="form-group required">
	                                           
												{{Form::label('ato_curriculums', 'ATO Curriculums', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('ato_curriculums',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   

	                    <div class="form-group ">
	                                           
												{{Form::label('approved_training_equipment', 'Approved Training Equipment', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('approved_training_equipment','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('approved_method', 'Approved Method', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('approved_method','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>
	                   
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop
	<!-- AOC Approval(Areas) -->
	@section('orgAocApprovalsAreasForm')
	<div class="modal fade" id="orgAocApprovalsAreasForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Add AOC Approvals(Areas)</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgAocApprovalArea','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('org_effective_date', 'Effective Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('approved_areas_of_operation', 'Approved Areas Of Operation', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('approved_areas_of_operation',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   
	                  

	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   

	                    <div class="form-group ">
	                                           
												{{Form::label('aircraft_authorized', 'Aircraft Authorized', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('aircraft_authorized','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('special_authorizations', 'Special Authorizations', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('special_authorizations','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>
	                   <div class="form-group ">
	                                           
												{{Form::label('limitations', 'Limitations', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('limitations','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop	
	<!-- End AOC Approval(Areas) -->

	<!-- AOC Approval(Routes) -->
	@section('orgAocApprovalsRoutesForm')
	<div class="modal fade" id="orgAocApprovalsRoutesForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Add AOC Approvals(Routes)</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgAocApprovalRoute','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('org_effective_date', 'Effective Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('origination_city', 'Origination City', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('origination_city',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   
	                    <div class="form-group required">
	                                           
												{{Form::label('destination_city', 'Destination City', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('destination_city',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                  

	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   

	                    <div class="form-group ">
	                                           
												{{Form::label('special_route', 'Special Route', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('special_route','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('operational_limitations', 'Operational Limitations', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('operational_limitations','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>
	                  
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop	
	<!-- End AOC Approval(Routes) -->

	<!-- AOC Maintenance Arrangement -->
	@section('orgAocMaintenanceArrangementForm')
	<div class="modal fade" id="orgAocMaintenanceArrangementForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">AOC Maintenance Arrangement</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgAocMaintenanceArrangement','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                    
	                    <div class="form-group required">
	                                           
												{{Form::label('org_effective_date', 'Effective Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('type_of_approval',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   
	                    <div class="form-group ">
	                                           
												{{Form::label('location', 'Location', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('location',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                  

	                    <div class="form-group ">
	                                           
												{{Form::label('service_provider', 'Service Provider', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('service_provider','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   

	                    <div class="form-group ">
	                                           
												{{Form::label('applicable_aircraft', 'Applicable Aircraft', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('applicable_aircraft','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('specific_authorizations', 'Specific Authorizations', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('specific_authorizations','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>
	                  
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop	
	<!-- End AOC Maintenance Arrangement -->
	<!-- AOC Training Arrangement -->
	@section('orgAocTrainingArrangementForm')
	<div class="modal fade" id="orgAocTrainingArrangementForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">AOC Training Arrangement</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgAocTrainingArrangement','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>	                     
	                    <div class="form-group required">
	                                           
												{{Form::label('org_effective_date', 'Effective Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,'0',array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,'0',array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,'0',array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    
	                    <div class="form-group required">
	                                           
												{{Form::label('location', 'Location', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('location',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                  

	                    <div class="form-group required">
	                                           
												{{Form::label('service_provider', 'Service Provider', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('service_provider','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   

	                    <div class="form-group ">
	                                           
												{{Form::label('authorized_training', 'Authorized Training', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('authorized_training','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
	                    	                  
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop	
	<!-- End AOC Training Arrangement -->
<!--  Approval Simulators  -->
	@section('orgApprovalSimulatorsForm')
	<div class="modal fade" id="orgApprovalSimulatorsForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">AOC Approved Simulators</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/saveOrgApprovalSimulator','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						   @foreach($orgPrimary as $primary)
						  	{{Form::hidden('org_number',$primary->org_number)}}
						  	{{Form::hidden('org_name',$primary->org_name)}}
						   @endforeach
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label> <label> {{ Form::radio('active', 'Yes',true) }} &nbsp  Yes</label>
										 <label> {{ Form::radio('active', 'No') }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('org_effective_date', 'Effective Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,date('d'),array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,date('F'),array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,date('Y'),array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    
						<div class="form-group required">
	                                           
												{{Form::label('org_identifier', 'Org Identifier', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('org_identifier',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    
	                    <div class="form-group required">
	                                           
												{{Form::label('assigned_level', 'Assigned Level', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('assigned_level','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('location', 'Location', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::select('location',array(''=>'--Select--','1234'=>'1234'),'0', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                  

	                    <div class="form-group ">
	                                           
												{{Form::label('simulator_number', 'Simulator Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('simulator_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                 <div class="form-group ">
	                                           
												{{Form::label('simulator_provider', 'Simulator Provider', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('simulator_provider','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number','', array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   

	                    <div class="form-group ">
	                                           
												{{Form::label('authorized_purpose', 'Authorized Purpose', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('authorized_purpose','', array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
	                    	                  
						<div class="form-group">
	                       
	                            <button type="submit"  value='' class="btn btn-primary btn-lg btn-block">Save</button>
	                       
	                    </div>
						
						{{Form::close()}}
	            </div>
	        </div>
	    </div>
	</div>
	@stop	
	<!-- End Approval Simulators -->
@endif