
@section('orgPrimaryUpdate')
@foreach($orgPrimary as $item)
<div class="modal fade" id="orgPrimaryUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Update Organization Primary Information</h4>
            </div>

            <div class="modal-body"> 
                              
				{{Form::open(array('url'=>'organization/updateOrgPrimary','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}

				  	{{Form::hidden('id',$item->id)}}			  	
				  			  	

					<div class="form-group required">
                                           
											{{Form::label('org_number', 'Organization Number', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('org_number',$item->org_number, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
                    <div class="form-group required">
                                           
											{{Form::label('org_name', 'Organization Name', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<select id="org_name" name='org_name' class="demo-default" placeholder="Select  Operator...">
												<option value="{{$item->org_name}}">{{$item->org_name}}</option>
												@foreach($organizations as $organization)
												<option value="{{$organization}}">{{$organization}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>

                    <div class="form-group required">
                                           
											{{Form::label('org_type','Organization Type', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											<?php $options=CommonFunction::getOptions('org29_primaryOrg_type');?>
											<select id="org_type{{$item->id}}" name='org_type' class="demo-default" placeholder="Select  Type...">
												<option value="{{$item->org_type}}">{{$item->org_type}}</option>
												@foreach($options as $option)
												<option value="{{$option}}">{{$option}}</option>
												@endforeach
											</select>
											</div>
											
                    </div>
					
					
					<div class="form-group required">
                                           
											{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
											
                                <div class="col-xs-6">
								    <div class="radio">									 
									 <label> {{ Form::radio('active', 'Yes',Input::old('active', $primary->active == 'Yes'),array()) }} &nbsp  Yes</label>
									 <label> {{ Form::radio('active', 'No',Input::old('active', $primary->active == 'No'),array()) }} &nbsp  No</label>
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
@endforeach
<script>
$(document).ready(function(){
$('#org_name').selectize();	
$('#org_type{{$item->id}}').selectize();	
});
</script>
@stop


<!-- Business Name Form -->
	@section('orgbusinessNameUpdate')
	@foreach($org_business_name as $name)
	<div class="modal fade" id="orgbusinessNameUpdate{{$name->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Organization Business Name</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgbusinessName','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					  
							{{Form::hidden('id',$item->id)}}			  	
				  			{{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
												<div class="radio">									 
												 <label> {{ Form::radio('active', 'Yes',Input::old('active', $name->active == 'Yes'),array()) }} &nbsp  Yes</label>
												 <label> {{ Form::radio('active', 'No',Input::old('active', $name->active == 'No'),array()) }} &nbsp  No</label>
												</div>
										
									</div>
	                    </div>
						
	                    <div class="form-group required">
	                                           
												{{Form::label('org_business_name', 'Org Business Name', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_business_name',$name->org_business_name, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>		
	                    <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$name->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$name->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$name->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	

	                    <div class="form-group ">
	                                           
												{{Form::label('org_business_name_note', 'Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('org_business_name_note',$name->org_business_name_note, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop
<!-- End Business Name Form -->
	@section('orgCertificateUpdate')
	 @foreach($org_certificates as $item)
	<div class="modal fade" id="orgCertificateUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Organization Certificates</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgCertificate','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						  
						 {{Form::hidden('id',$item->id)}}			  	
				  		 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">                                           
							{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}									
	                        <div class="col-xs-6">
								<div class="radio">									 
												 <label> {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes</label>
												 <label> {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No</label>
								</div>
							</div>
	                    </div>
						

						<div class="form-group required">
	                                           
												{{Form::label('org_certificate_type', 'Certificate Type', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org1_certificate_certificate_type');?>
												<div class="col-xs-6">
												{{Form::select('org_certificate_type',$options,$item->org_certificate_type, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
												
	                    </div>
	                   	
	                    <div class="form-group ">
	                                           
												{{Form::label('issued_date', 'Date Issued', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_issued_date', $dates,$item->org_issued_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_issued_month',$months,$item->org_issued_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_issued_year',$years,$item->org_issued_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>

	                    <div class="form-group ">
	                                           
												{{Form::label('expiration_date', 'Date Of Expiration', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_expiration_date', $dates,$item->org_expiration_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_expiration_month',$months,$item->org_expiration_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_expiration_year',$years_from,$item->org_expiration_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Date Of Terminated', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years_from,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>

						<div class="form-group ">
	                                           
												{{Form::label('org_control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_control_number',$item->org_control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('org_basis_note', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('org_basis_note',$item->org_basis_note, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop


	@section('orgBaseLocationUpdate')
	 @foreach($org_base_location as $item)	
	<div class="modal fade" id="orgBaseLocationUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Organization Base Locations</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgBaseLocation','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						  {{Form::hidden('id',$item->id)}}			  	
				  		  {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">									 
												 <label> {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes</label>
												 <label> {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No</label>
											</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
						

						<div class="form-group required">
	                                           
												{{Form::label('org_location_type', 'Location Type', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org2_baseLocation_location_type');?>
												<div class="col-xs-6">
												{{Form::select('org_location_type',$options,$item->org_location_type, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('contract_person', 'Contract Person', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('contract_person',$item->contract_person, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('org_telephone_number', 'Telephone Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_telephone_number',$item->org_telephone_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('org_fax_number', 'Fax Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_fax_number',$item->org_fax_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('org_lecation', 'Lecation', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org3_baseLocation_location');?>
												<div class="col-xs-6">
												{{Form::select('org_lecation',$options,$item->org_lecation, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('org_address', 'Address', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('org_address',$item->org_address, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	

	                   	<div class="form-group ">
	                                           
												{{Form::label('org_city', 'City', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_city',$item->org_city, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('org_state_province', 'State Or Province', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_state_province',$item->org_state_province, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('org_postal_code', 'Postal Code', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_postal_code',$item->org_postal_code, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('org_country', 'Country', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('org_country',$item->org_country, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('memo_note', 'Memo/Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('memo_note',$item->memo_note, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop

	@section('orgManagementContactsUpdate')
	@foreach($org_management_contacts as $item)	
	<div class="modal fade" id="orgManagementContactsUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Organization Management Contacts</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgManagementContact','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					
					 	{{Form::hidden('id',$item->id)}}			  	
				  		{{Form::hidden('org_number',$item->org_number)}}						
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
										<div class="radio">									 
												<label> {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes</label>
												 <label> {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
						

						<div class="form-group required">
	                                           
												{{Form::label('management_position', 'Management Position', array('class' => 'col-xs-4 control-label'))}}

												<?php $options=CommonFunction::getOptions('org4_managementContact_management_position');?>
												<div class="col-xs-6">
												{{Form::select('management_position',$options,$item->management_position, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
												
	                    </div>
	                   	<div class="form-group required">
	                                           
												{{Form::label('first_name', 'First Name', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('first_name',$item->first_name, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group required">
	                                           
												{{Form::label('last_name', 'Last Name', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('last_name',$item->last_name, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('actual_title', 'Actual Title', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('actual_title',$item->actual_title, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                  

	                   	<div class="form-group">
	                                           
												{{Form::label('work_phone', 'Work Phone', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('work_phone',$item->work_phone, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group">
	                                           
												{{Form::label('cell_number', 'Cell Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('cell_number',$item->cell_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                    <div class="form-group">
	                                           
												{{Form::label('fax_number', 'Fax Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('fax_number',$item->fax_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('location', 'Location', array('class' => 'col-xs-4 control-label'))}}

												<?php $options=CommonFunction::getOptions('org5_managmentContanct_location');?>
												<div class="col-xs-6">
												{{Form::select('location',$options,$item->location, array('class' => 'form-control','placeholder'=>''))}}
												</div>

	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('email', 'Email', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('email',$item->email, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('address', 'Address', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('address',$item->address, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	

	                   	<div class="form-group ">
	                                           
												{{Form::label('city', 'City', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('city',$item->city, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('state_province', 'State Or Province', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('state_province',$item->state_province, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('postal_code', 'Postal Code', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('postal_code',$item->postal_code, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('country', 'Country', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('country',$item->country, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('memo_note', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('memo_note',$item->memo_note, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop

	@section('orgCAAContactsUpdate')
	@foreach($org_caa_contacts as $item)	
	<div class="modal fade" id="orgCAAContactsUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Organization CAA Contacts</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgCAAContact','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
						 {{Form::hidden('id',$item->id)}}			  	
					  	 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
											<label> {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes</label>
											<label> {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No</label>
											</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
						

						<div class="form-group required">
	                                           
												{{Form::label('inspector_position', 'Inspector Position', array('class' => 'col-xs-4 control-label'))}}

												<?php $options=CommonFunction::getOptions('org6_caaContact_inspector_position');?>
												<div class="col-xs-6">
												{{Form::select('inspector_position',$options,$item->inspector_position, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group required">
	                                           
												{{Form::label('first_name', 'First Name', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('first_name',$item->first_name, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group required">
	                                           
												{{Form::label('last_name', 'Last Name', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('last_name',$item->last_name, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('actual_title', 'Actual Title', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('actual_title',$item->actual_title, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                   	

	                   	<div class="form-group ">
	                                           
												{{Form::label('work_phone', 'Work Phone', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('work_phone',$item->work_phone, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('cell_number', 'Cell Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('cell_number',$item->cell_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                    <div class="form-group ">
	                                           
												{{Form::label('fax_number', 'Fax Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('fax_number',$item->fax_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('location', 'Location', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org7_caaContanct_location');?>
												<div class="col-xs-6">

												{{Form::select('location',$options,$item->location, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('email', 'Email', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('email',$item->email, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('address', 'Address', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('address',$item->address, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	

	                   	<div class="form-group ">
	                                           
												{{Form::label('city', 'City', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('city',$item->city, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('state_province', 'State Or Province', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('state_province',$item->state_province, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('postal_code', 'Postal Code', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('postal_code',$item->postal_code, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                   	<div class="form-group ">
	                                           
												{{Form::label('country', 'Country', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('country',$item->country, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('basis_note', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_note',$item->basis_note, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop

	@section('orgExemptionsDivinationUpdate')
	@foreach($org_exemptions_divinations as $item)	
	<div class="modal fade" id="orgExemptionsDivinationUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Organization Exemptions Divinations</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgExemptionsDivination','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 	 
					 	 {{Form::hidden('id',$item->id)}}			  	
					  	 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										 <label> {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes</label>
											<label> {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group ">
	                                           
												{{Form::label('type', 'Type', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org8_exemptionsDivination_type');?>
												<div class="col-xs-6">
												{{Form::select('type',$options,$item->type, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('assigned_number', 'Assigned Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('assigned_number',$item->assigned_number, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('regulation', 'Regulation', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('regulation',$item->regulation, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

						
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('basis_note', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_note',$item->basis_note, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop
	@section('orgAircraftListingUpdate')
	@foreach($org_aircraft_listings as $item)	
	<div class="modal fade" id="orgAircraftListingUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Organization Aircraft Listing</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgAircraftListing','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}

					{{Form::hidden('id',$item->id)}}			  	
					{{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 	<label> {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes</label>
											<label> {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group required">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms',$item->aircraft_mms, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

	                    <div class="form-group required">
	                                           
												{{Form::label('registration_number', 'Registration Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('registration_number',$item->registration_number, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    
	                    
						<div class="form-group ">
	                                           
												{{Form::label('rvsm', 'RVSM', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
										<div class="radio">
										 <label>
										 	 {{ Form::radio('rvsm', 'Yes',Input::old('rvsm', $item->rvsm == 'Yes'),array()) }} &nbsp  Yes
										</label>
										<label>
										 {{ Form::radio('rvsm', 'No',Input::old('rvsm', $item->rvsm == 'No'),array()) }} &nbsp  No
										</label>
										 
										</div>
										
									</div>
	                    </div>

						<div class="form-group ">
	                                           
												{{Form::label('parts_pool', 'Parts Pool', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
										<div class="radio">
											  <label>
											 	 {{ Form::radio('parts_pool', 'Yes',Input::old('parts_pool', $item->parts_pool == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('parts_pool', 'No',Input::old('parts_pool', $item->parts_pool == 'No'),array()) }} &nbsp  No
											</label>
										
										</div>
										
									</div>
	                    </div>

						<div class="form-group ">
	                                           
												{{Form::label('reliability', 'Reliability', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										  <label>
											 	 {{ Form::radio('reliability', 'Yes',Input::old('reliability', $item->reliability == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('reliability', 'No',Input::old('reliability', $item->reliability == 'No'),array()) }} &nbsp  No
											</label>
										  
										</div>
										
									</div>
	                    </div>

						<div class="form-group ">
	                                           
												{{Form::label('lease_acceptable', 'Lease Acceptable', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
											 <label>
											 	 {{ Form::radio('lease_acceptable', 'Yes',Input::old('lease_acceptable', $item->lease_acceptable == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('lease_acceptable', 'No',Input::old('lease_acceptable', $item->lease_acceptable == 'No'),array()) }} &nbsp  No
											</label>
										 
										</div>
										
									</div>
	                    </div>

						<div class="form-group ">
	                                           
												{{Form::label('interchange', 'Interchange', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										  <label>
											 	 {{ Form::radio('interchange', 'Yes',Input::old('interchange', $item->interchange == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('interchange', 'No',Input::old('interchange', $item->interchange == 'No'),array()) }} &nbsp  No
											</label>
										  
										</div>
										
									</div>
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('note', 'Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('note',$item->note, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop

	@section('orgPolicyMenualApprovalUpdate')
	@foreach($org_policy_menual_approvals as $item)	
	<div class="modal fade" id="orgPolicyMenualApprovalUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Organization Policy Manual Approval</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgPolicyMenualApproval','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
					 {{Form::hidden('id',$item->id)}}			  	
					 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										  <label>
											 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
											</label>
										 
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group required">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org9_menualApproval_type_of_approval');?>
												<div class="col-xs-6">
												{{Form::select('type_of_approval',$options,$item->type_of_approval, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number',$item->revision_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('basis_note', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_note',$item->basis_note, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop

	@section('orgComplexityReviewUpdate')
	@foreach($org_complexity_reviews as $item)	
	<div class="modal fade" id="orgComplexityReviewUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Organization Complexity Review</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgComplexityReview','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
					 {{Form::hidden('id',$item->id)}}			  	
					 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										  <label>
											 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
											</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('review_date', 'Review Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_review_date', $dates,$item->org_review_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_review_month',$months,$item->org_review_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_review_year',$years,$item->org_review_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                   
						
	                    <div class="form-group required">
	                                           
												{{Form::label('purpose_of_review', 'Purpose Of Review', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org10_complexityReview_purpose_of_review');?>
												<div class="col-xs-6">
												{{Form::select('purpose_of_review',$options,$item->purpose_of_review, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('total_employees', 'Total Employees', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_employees',$item->total_employees, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('total_flt_ops_employees', 'Total FLt Ops Employees', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_flt_ops_employees',$item->total_flt_ops_employees, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('total_pilots', 'Total Pilots', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_pilots',$item->total_pilots, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>   

	                   	<div class="form-group ">
	                                           
												{{Form::label('total_check_airmen', 'Total Check Airmen', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_check_airmen',$item->total_check_airmen, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>  

	                   	<div class="form-group ">
	                                           
												{{Form::label('total_flight_attendants', 'Total Flight Attendants', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_flight_attendants',$item->total_flight_attendants, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                 	
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('total_aircraft_dispatchers', 'Total Aircraft Dispatchers', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_aircraft_dispatchers',$item->total_aircraft_dispatchers, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>  
	                    <div class="form-group ">
	                                           
												{{Form::label('flight_followers', 'Flight Followers', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('flight_followers',$item->flight_followers, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>  

	                    <div class="form-group ">
	                                           
												{{Form::label('total_load_controllers', 'Total Load Controllers', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_load_controllers',$item->total_load_controllers, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>  

	                    <div class="form-group required">
	                                           
												{{Form::label('total_maint_employees', 'Total Maint Employees', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_maint_employees',$item->total_maint_employees, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

	                    <div class="form-group ">
	                                           
												{{Form::label('total_av_maint_technicians', 'Total Av Maint Technicians', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_av_maint_technicians',$item->total_av_maint_technicians, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('total_av_repair_specialists', 'Total Av Repair Specialists', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_av_repair_specialists',$item->total_av_repair_specialists, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('total_quality_assurance', 'Total Quality Assurance', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('total_quality_assurance',$item->total_quality_assurance, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                      
	                    <div class="form-group ">
	                                           
												{{Form::label('note', 'Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('note',$item->note, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop

	@section('orgAerialWorkApprovalUpdate')
	@foreach($org_aerial_work_approvals as $item)	
	<div class="modal fade" id="orgAerialWorkApprovalUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Aerial Work Approval</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgAerialWorkApproval','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					
					 {{Form::hidden('id',$item->id)}}			  	
					 {{Form::hidden('org_number',$item->org_number)}}	

						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										  	<label>
											 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
											</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group ">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}										
												<?php $options=CommonFunction::getOptions('org11_aerialWorkApproval_type_of_approval');?>
												<div class="col-xs-6">
												{{Form::select('type_of_approval',$options,$item->type_of_approval, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number',$item->revision_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms',$item->aircraft_mms, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('method', 'Method', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('method',$item->method, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop

	@section('orgNonCertificatedOperationsUpdate')
	@foreach($org_non_certificated_operations as $item)	
	<div class="modal fade" id="orgNonCertificatedOperationsUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Non-Certificated Operations</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgNonCertificatedOperation','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
					 	 {{Form::hidden('id',$item->id)}}			  	
					  	 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  	<label>
											 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
											</label>
											</div>
										
									</div>
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group ">
	                                           
												{{Form::label('operations_type', 'Operations Type', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org11_nonCertificatedOperation_operations_type');?>
												<div class="col-xs-6">
												{{Form::select('operations_type',$options,$item->operations_type, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number',$item->revision_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms',$item->aircraft_mms, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                     <div class="form-group ">
	                                           
												{{Form::label('limiting_factor', 'Limiting Factor', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('limiting_factor',$item->limiting_factor, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('method', 'Method', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('method',$item->method, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						<div class="form-group ">
	                                           
												{{Form::label('basis_notes', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_notes',$item->basis_notes, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop

	@section('orgFlightOperationsApprovalsUpdate')
	@foreach($org_flight_operation_approvals as $item)	
	<div class="modal fade" id="orgFlightOperationsApprovalsUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Flight Operations Approvals</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgFlightOperationsApproval','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 	
					 	{{Form::hidden('id',$item->id)}}			  	
					  	{{Form::hidden('org_number',$item->org_number)}}	
						  
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label>
											 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
											</label>
										</div>
										
									</div>
	                    </div>
	                   <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group required">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}

												<?php $options=CommonFunction::getOptions('org12_flightOperationsApproval_type_of_approval');?>
												<div class="col-xs-6">
												{{Form::select('type_of_approval',$options,$item->type_of_approval, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number',$item->revision_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('limiting_factor', 'Limiting Factor', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('limiting_factor',$item->limiting_factor, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>    
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    
	                    <div class="form-group ">
	                                           
												{{Form::label('method', 'Method', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('method',$item->method, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						
	                    <div class="form-group ">
	                                           
												{{Form::label('basis_notes', 'Basis & Notes', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_notes',$item->basis_notes, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop

	@section('orgFleetOperationsApprovalUpdate')
	@foreach($org_fleet_operation_approvals as $item)	
	<div class="modal fade" id="orgFleetOperationsApprovalUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Fleet Operations Approval</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgFleetOperationApproval','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
						 {{Form::hidden('id',$item->id)}}			  	
					  	 {{Form::hidden('org_number',$item->org_number)}}	
						  
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  	<label>
											 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
											</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group ">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}

												<?php $options=CommonFunction::getOptions('org13_fleetOperationsApproval_type_of_approval');?>
												<div class="col-xs-6">
												{{Form::select('type_of_approval',$options,$item->type_of_approval, array('class' => 'form-control','placeholder'=>''))}}
												</div>												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number',$item->revision_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                    <div class="form-group ">
	                                           
												{{Form::label('limiting_factor', 'Limiting Factor', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('limiting_factor',$item->limiting_factor, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms',$item->aircraft_mms, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    <div class="form-group ">
	                                           
												{{Form::label('equipment', 'Equipment', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('equipment',$item->equipment, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('method', 'Method', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('method',$item->method, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						 <div class="form-group ">
	                                           
												{{Form::label('basis_note', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_note',$item->basis_note, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop

	@section('orgFleetMaintananceApprovalUpdate')
	@foreach($org_fleet_maintanance_approvals as $item)	
	<div class="modal fade" id="orgFleetMaintananceApprovalUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Fleet Maintenance Approval</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgFleetMaintananceApproval','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
					 {{Form::hidden('id',$item->id)}}			  	
					 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 	<label>
											 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
											</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group required ">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org14_fleetMaintananceApproval_type_of_approval');?>
												<div class="col-xs-6">
												{{Form::select('type_of_approval',$options,$item->type_of_approval, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number',$item->revision_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('limiting_factor', 'Limiting Factor', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('limiting_factor',$item->limiting_factor, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms',$item->aircraft_mms, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    <div class="form-group ">
	                                           
												{{Form::label('equipment', 'Equipment', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('equipment',$item->equipment, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('method', 'Method', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('method',$item->method, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
						 <div class="form-group ">
	                                           
												{{Form::label('basis_note', 'Basis & Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_note',$item->basis_note, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop

	@section('orgAirportAuthUpdate')
	@foreach($org_airport_auth as $item)	
	<div class="modal fade" id="orgAirportAuthUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Airport Authorization</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgAirportAuth','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					
					 {{Form::hidden('id',$item->id)}}			  	
					 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 	<label>
											 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
											</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group required">
	                                           
												{{Form::label('location', 'Location', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org15_airportAuth_location');?>
												<div class="col-xs-6">
												{{Form::select('location',$options,$item->location, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required ">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}

												<?php $options=CommonFunction::getOptions('org15_airportAuth_type_of_approval');?>
												<div class="col-xs-6">
												{{Form::select('type_of_approval',$options,$item->type_of_approval, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number',$item->revision_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms',$item->aircraft_mms, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    
	                     <div class="form-group required">
	                                           
												{{Form::label('limiting_factor', 'Limiting Factor', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('limiting_factor',$item->limiting_factor, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    <div class="form-group ">
	                                           
												{{Form::label('note', 'Note', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('note',$item->note, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop

	@section('orgLeasingArrangmentUpdate')
	@foreach($org_leasing_arrangment as $item)	
	<div class="modal fade" id="orgLeasingArrangmentUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Leasing Arrangement</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgLeasingArrangment','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					{{Form::hidden('id',$item->id)}}			  	
					{{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 	<label>
											 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
											</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('effective_date', 'Effective date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group required">
	                                           
												{{Form::label('arrangement', 'Arrangement', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org16_leasingArrangment_arrangement');?>
												<div class="col-xs-6">
												{{Form::select('arrangement',$options,$item->arrangement, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number',$item->revision_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group ">
	                                           
												{{Form::label('other', 'Other', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('other',$item->other, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    <div class="form-group ">
	                                           
												{{Form::label('notes', 'Notes', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('notes',$item->notes, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop

	@section('orgContractedServicesUpdate')
	@foreach($org_contracted_services as $item)	
	<div class="modal fade" id="orgContractedServicesUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update Contracted Services</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgContractedService','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
					 {{Form::hidden('id',$item->id)}}			  	
					 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
										<div class="radio">
										<label>
											 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
											</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('issued_date', 'Date Issued', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('issued_date', $dates,$item->issued_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('issued_month',$months,$item->issued_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('issued_year',$years,$item->issued_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group required">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org17_contractedServices_type_of_approval');?>
												<div class="col-xs-6">
												{{Form::select('type_of_approval',$options,$item->type_of_approval, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number',$item->revision_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms',$item->aircraft_mms, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

	                     <div class="form-group ">
	                                           
												{{Form::label('limiting_factor', 'Limiting Factor', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('limiting_factor',$item->limiting_factor, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                   
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   	
	                    <div class="form-group ">
	                                           
												{{Form::label('basis_note', 'Basis & Notes', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('basis_note',$item->basis_note, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop

	@section('orgAmoApprovalsUpdate')
	@foreach($org_amo_approvals as $item)	
	<div class="modal fade" id="orgAmoApprovalsUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update AMO Approvals</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgAmoApproval','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}

					 {{Form::hidden('id',$item->id)}}			  	
					 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
											 <label>
											 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
											</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('org_effective_date', 'Effective Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group required">
	                                           
												{{Form::label('category_rating', 'Category Rating', array('class' => 'col-xs-4 control-label'))}}

												<?php $options=CommonFunction::getOptions('org18_amoApproval_category_rating');?>
												<div class="col-xs-6">
												{{Form::select('category_rating',$options,$item->category_rating, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   
	                    <div class="form-group ">
	                                           
												{{Form::label('class_rating', 'Class Rating', array('class' => 'col-xs-4 control-label'))}}

												<?php $options=CommonFunction::getOptions('org19_amoApproval_class_rating');?>
												<div class="col-xs-6">
												{{Form::select('class_rating',$options,$item->class_rating, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>

	                    <div class="form-group ">
	                                           
												{{Form::label('rating_description', 'Rating Description', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('rating_description',$item->rating_description, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number',$item->revision_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                     
	                    
	                    <div class="form-group required">
	                                           
												{{Form::label('contractor', 'Contractor', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('contractor',$item->contractor, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   

	                    <div class="form-group ">
	                                           
												{{Form::label('specific_equipment', 'Specific Equipment', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('specific_equipment',$item->specific_equipment, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('available_method', 'Available Method', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('available_method',$item->available_method, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop

	@section('orgAtoApprovalsUpdate')
	@foreach($org_ato_approvals as $item)	
	<div class="modal fade" id="orgAtoApprovalsUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update ATO Approvals</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgAtoApproval','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
					 {{Form::hidden('id',$item->id)}}			  	
					 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
												<label>
												 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
												</label>
												<label>
												 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
												</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('org_effective_date', 'Effective Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group required">
	                                           
												{{Form::label('ato_category', 'ATO Category', array('class' => 'col-xs-4 control-label'))}}

												<?php $options=CommonFunction::getOptions('org20_atoApproval_ato_category');?>
												<div class="col-xs-6">
												{{Form::select('ato_category',$options,$item->ato_category, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   
	                    <div class="form-group required">
	                                           
												{{Form::label('ato_curriculums', 'ATO Curriculums', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org21_atoApproval_ato_curriculums');?>
												<div class="col-xs-6">
												{{Form::select('ato_curriculums',$options,$item->ato_curriculums, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>

	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number',$item->revision_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   

	                    <div class="form-group ">
	                                           
												{{Form::label('approved_training_equipment', 'Approved Training Equipment', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('approved_training_equipment',$item->approved_training_equipment, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('approved_method', 'Approved Method', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('approved_method',$item->approved_method, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop
	<!-- AOC Approval(Areas) -->
	@section('orgAocApprovalsAreasUpdate')
	@foreach($org_aoc_approvals_areas as $item)	
	<div class="modal fade" id="orgAocApprovalsAreasUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update AOC Approvals(Areas)</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgAocApprovalArea','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					
					{{Form::hidden('id',$item->id)}}			  	
					 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  		<label>
												 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
												</label>
												<label>
												 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
												</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('org_effective_date', 'Effective Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}															
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group required">
	                                           
												{{Form::label('approved_areas_of_operation', 'Approved Areas Of Operation', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org22_aocApprovalArea_approved_areas_of_operation');?>
												<div class="col-xs-6">
												{{Form::select('approved_areas_of_operation',$options,$item->approved_areas_of_operation, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                   
	                  

	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number',$item->revision_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   

	                    <div class="form-group ">
	                                           
												{{Form::label('aircraft_authorized', 'Aircraft Authorized', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('aircraft_authorized',$item->aircraft_authorized, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('special_authorizations', 'Special Authorizations', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('special_authorizations',$item->special_authorizations, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>
	                   <div class="form-group ">
	                                           
												{{Form::label('limitations', 'Limitations', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('limitations',$item->limitations, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop	
	<!-- End AOC Approval(Areas) -->

	<!-- AOC Approval(Routes) -->
	@section('orgAocApprovalsRoutesUpdate')
	@foreach($org_aoc_approval_routes as $item)	
	<div class="modal fade" id="orgAocApprovalsRoutesUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update AOC Approvals(Routes)</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgAocApprovalRoute','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 {{Form::hidden('id',$item->id)}}			  	
					 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
										<div class="radio">
											<label>
											 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
											</label>
											<label>
											 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
											</label>
										</div>
										
									</div>
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('org_effective_date', 'Effective Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group required">
	                                           
												{{Form::label('origination_city', 'Origination City', array('class' => 'col-xs-4 control-label'))}}
												
												<?php $options=CommonFunction::getOptions('org23_aocApprovalRoute_origination_city');?>
												<div class="col-xs-6">
												{{Form::select('origination_city',$options,$item->origination_city, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>

	                    </div>
	                   
	                    <div class="form-group required">
	                                           
												{{Form::label('destination_city', 'Destination City', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org24_aocApprovalRoute_destination_city');?>
												<div class="col-xs-6">
												{{Form::select('destination_city',$options,$item->destination_city, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>												
	                    </div>
	                  

	                    <div class="form-group ">
	                                           
												{{Form::label('revision_number', 'Revision Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('revision_number',$item->revision_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   

	                    <div class="form-group ">
	                                           
												{{Form::label('special_route', 'Special Route', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('special_route',$item->special_route, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('operational_limitations', 'Operational Limitations', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('operational_limitations',$item->operational_limitations, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop	
	<!-- End AOC Approval(Routes) -->

	<!-- AOC Maintenance Arrangement -->
	@section('orgAocMaintenanceArrangementUpdate')
	@foreach($org_aoc_maintenance_arrangement as $item)	
	<div class="modal fade" id="orgAocMaintenanceArrangementUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update AOC Maintenance Arrangement</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgAocMaintenanceArrangement','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 {{Form::hidden('id',$item->id)}}			  	
					 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">										 
												 <label>
												 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
												</label>
												<label>
												 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
												</label>
											</div>
										
									</div>
	                    </div>
	                    
	                    <div class="form-group required">
	                                           
												{{Form::label('org_effective_date', 'Effective Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    <div class="form-group required">
	                                           
												{{Form::label('type_of_approval', 'Type Of Approval', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org25_aocMaintenanceArrangement_type_of_approval');?>
												<div class="col-xs-6">
												{{Form::select('type_of_approval',$options,$item->type_of_approval, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
	                    </div>
	                   
	                    <div class="form-group ">
	                                           
												{{Form::label('location', 'Location', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org26_aocMaintenanceArrangement_location');?>
												<div class="col-xs-6">
												{{Form::select('location',$options,$item->location, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                  

	                    <div class="form-group ">
	                                           
												{{Form::label('service_provider', 'Service Provider', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('service_provider',$item->service_provider, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   

	                    <div class="form-group ">
	                                           
												{{Form::label('applicable_aircraft', 'Applicable Aircraft', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('applicable_aircraft',$item->applicable_aircraft, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
												</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('specific_authorizations', 'Specific Authorizations', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('specific_authorizations',$item->specific_authorizations, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop	
	<!-- End AOC Maintenance Arrangement -->
	<!-- AOC Training Arrangement -->
	@section('orgAocTrainingArrangementUpdate')
	@foreach($org_aoc_training_arrangement as $item)	
	<div class="modal fade" id="orgAocTrainingArrangementUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update AOC Training Arrangement</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgAocTrainingArrangement','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 {{Form::hidden('id',$item->id)}}			  	
					 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
												<label>
												 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
												</label>
												<label>
												 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
												</label>
										</div>
										
									</div>
	                    </div>	                     
	                    <div class="form-group required">
	                                           
												{{Form::label('org_effective_date', 'Effective Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    <div class="form-group ">
	                                           
												{{Form::label('terminated_date', 'Terminated date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_terminated_date', $dates,$item->org_terminated_date,array('class'=>'form-control'))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_terminated_month',$months,$item->org_terminated_month,array('class'=>'form-control'))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_terminated_year',$years,$item->org_terminated_year,array('class'=>'form-control'))}}
															</div>
														</div>
												
	                    </div>	
						
	                    
	                    <div class="form-group required">
	                                           
												{{Form::label('location', 'Location', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org27_aocTrainingArrangement_location');?>
												<div class="col-xs-6">
												{{Form::select('location',$options,$item->location, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                  

	                    <div class="form-group required">
	                                           
												{{Form::label('service_provider', 'Service Provider', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('service_provider',$item->service_provider, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   

	                    <div class="form-group ">
	                                           
												{{Form::label('authorized_training', 'Authorized Training', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('authorized_training',$item->authorized_training, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop	
	<!-- End AOC Training Arrangement -->
<!--  Approval Simulators  -->
	@section('orgApprovalSimulatorsUpdate')
	@foreach($org_approval_simulators as $item)	
	<div class="modal fade" id="orgApprovalSimulatorsUpdate{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Update AOC Approved Simulators</h4>
	            </div>

	            <div class="modal-body">
	                              
					{{Form::open(array('url'=>'organization/updateOrgApprovalSimulator','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form'))}}
					 
					 {{Form::hidden('id',$item->id)}}			  	
					 {{Form::hidden('org_number',$item->org_number)}}	
						<div class="form-group required">
	                                           
												{{Form::label('active', 'Active', array('class' => 'col-xs-4 control-label'))}}
												
	                                <div class="col-xs-6">
											<div class="radio">
										 
										  <label>
												 	 {{ Form::radio('active', 'Yes',Input::old('active', $item->active == 'Yes'),array()) }} &nbsp  Yes
												</label>
												<label>
												 {{ Form::radio('active', 'No',Input::old('active', $item->active == 'No'),array()) }} &nbsp  No
												</label>
										</div>
										
									</div>
	                    </div>
	                     <div class="form-group required">
	                                           
												{{Form::label('org_effective_date', 'Effective Date', array('class' => 'col-xs-4 control-label'))}}
												
														<div class="row">
															<div class="col-xs-2">
															{{Form::select('org_effective_date', $dates,$item->org_effective_date,array('class'=>'form-control','required'=>''))}}
															</div>
															<div class="col-xs-3">
															{{Form::select('org_effective_month',$months,$item->org_effective_month,array('class'=>'form-control','required'=>''))}}
												
																
															</div>
															<div class="col-xs-2">
																{{Form::select('org_effective_year',$years,$item->org_effective_year,array('class'=>'form-control','required'=>''))}}
															</div>
														</div>
												
	                    </div>	
	                    
						
	                    <div class="form-group required">
	                                           
												{{Form::label('aircraft_mms', 'Aircraft MMS', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('aircraft_mms',$item->aircraft_mms, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    
	                    <div class="form-group required">
	                                           
												{{Form::label('assigned_level', 'Assigned Level', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('assigned_level',$item->assigned_level, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
												
	                    </div>
	                    <div class="form-group required">
	                                           
												{{Form::label('location', 'Location', array('class' => 'col-xs-4 control-label'))}}
												<?php $options=CommonFunction::getOptions('org28_approvalSimulator_location');?>
												<div class="col-xs-6">
												{{Form::select('location',$options,$item->location, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
												</div>
	                    </div>
	                  

	                    <div class="form-group ">
	                                           
												{{Form::label('simulator_number', 'Simulator Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('simulator_number',$item->simulator_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                 <div class="form-group ">
	                                           
												{{Form::label('simulator_provider', 'Simulator Provider', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('simulator_provider',$item->simulator_provider, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>
	                   	<div class="form-group ">
	                                           
												{{Form::label('control_number', 'Control Number', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::text('control_number',$item->control_number, array('class' => 'form-control','placeholder'=>''))}}
												</div>
												
	                    </div>                   

	                    <div class="form-group ">
	                                           
												{{Form::label('authorized_purpose', 'Authorized Purpose', array('class' => 'col-xs-4 control-label'))}}
												<div class="col-xs-6">
												{{Form::textarea('authorized_purpose',$item->authorized_purpose, array('class' => 'form-control','placeholder'=>'','size'=>'4x1'))}}
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
	@endforeach
	@stop	
	<!-- End Approval Simulators -->
