@extends('layout')
@section('content')
<section class="content">
<div style="display:none">
{{$role=Auth::user()->Role()}}
</div>

<div class="row">
                        @if($role=="Chief Admin")
						<div class="col-lg-3 col-md-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow height">
                                <div class="inner">
                                    <h4 class='title'>
                                       Add User
                                    </h4>
                                   
                                </div>
                                
								<div class="icon">
                                    <a href="#" data-toggle="modal" data-target="#addUser"> <i class="ion ion-person-add"></i></a>
                                </div>
                                <a class="small-box-footer" href="#" data-toggle="modal" data-target="#addUser">
                                   Add User <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
						@endif
						@if($role=="Chief Admin")
                       <div class="col-lg-3 col-md-3 col-xs-6">
                            
                            <div class="small-box bg-red height">
                                <div class="inner">
                                  <h4 class='title'>
                                   All Users 
                                  </h4>
                                    
                                </div>
                                <div class="icon">
                                    <a href="{{'viewUsers'}}" > <i class="icon ion-person-stalker"></i></a>
                                </div>
                                <a class="small-box-footer" href="{{'viewUsers'}}">
                                    View All Users <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
						@endif
						@if($role=="Chief Admin"|| $role='Employee')
						<div class="col-lg-3 col-md-3 col-xs-6">
                            
                            <div class="small-box bg-aqua height">
                                <div class="inner">
                                  <h4 class='title'>
								   <h4 style='font-weight:bold;'>Change Password</h4>
                                  </h4>
                                    
                                </div>
                                <div class="icon">
                                    <a href="" href="#" data-toggle="modal" data-target="#changePassword"> <i class="ion ion-ios7-gear"></i></a>
                                </div>
                                <a class="small-box-footer" href="#" data-toggle="modal" data-target="#changePassword">
                                    Change Password <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
						@endif
</div>

<!-- Add User-->
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add User</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'newUser/save', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form'))}}
						@if (Auth::check())						
							   {{Form::hidden('user_id',Auth::user()->id)}}							
						@endif
					
					
					
				
					<div class="form-group required">
                                        
											{{Form::label('name', 'Full Name', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('name','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('emp_id', 'Employee ID', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('emp_id','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('email', 'Email', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('email','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('designation', 'Designation', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
											<select id="designation" name='designation' class="demo-default" placeholder="Select  Designation...">
												<option value="">Select  Designation...</option>
												@foreach($roles as $role)
												<option value="{{$role}}">{{$role}}</option>
												@endforeach
											</select>
											
											</div>
											
                    </div>
					
					
					<div class="form-group required">
                                        
											{{Form::label('organization', 'Organization', array('class' => 'col-xs-4 control-label'))}}
										<div class="col-xs-6">
											
											<select id="organization" name='organization' class="demo-default" placeholder="Select  Organization...">
												<option value="">Select  Organization...</option>
												@foreach($organizations as $organization)
												<option value="{{$organization}}">{{$organization}}</option>
												@endforeach
											</select>
											
										</div>
											
									
											
                    </div>
					
				
					<div class="form-group required">
                                        
											{{Form::label('password', 'Password', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::password('password','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('password_confirmation', 'Conform Password', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::password('password_confirmation','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>	
                    

                    <div class="form-group">
                       
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                       
                    </div>
					{{Form::close()}}
            </div>
        </div>
    </div>
	</div>
	</div>
<!--End Add User-->
<!-- User Settings-->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			   <!--<a style="color:green;float:right;margin-right:5px;" href="" data-target="#edit1" data-toggle="modal">
                            <span aria-hidden="true" class="glyphicon glyphicon-pencil"></span>
               </a>-->
               
                <h4 class="modal-title">Change Password</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'changePassword', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form'))}}
						
					
					<div class="form-group required">
                                        
											{{Form::label('Password', 'New Password', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::password('password','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('password_confirmation', 'Conform Password', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::password('password_confirmation','', array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>	
                    

                    <div class="form-group">
                        
                         <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                       
                    </div>
					{{Form::close()}}
            </div>
        </div>
    </div>
	</div>
	</div>
<!--End User Settings-->
</section>

<script>
$(document).ready(function(){
//$('#organization').selectize();
$('#organization').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});
$('#designation').selectize();
	
});
</script>
@stop