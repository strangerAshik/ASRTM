@extends('layout')
@section('content')
<section class='content widthController' >
<div class="row" >
                        
		 
                 <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary ">
							 <div class="box-header col-md-6">
									<h3 class="box-title">My Profile</h3>
							 </div>	
							 <div class="box-header col-md-6">
							 <a data-toggle="modal" data-target="#profileView" href='' style='color:green;float:right;padding:5px;'>
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</a>
							</div>						
				@foreach($userInfos as $info)
					<div class="box-body">
					
                    <table class="table table-bordered">
                        <tbody>
						
                            <tr>
                                <td class="col-md-3">									
									Empoloyee ID
								</td>
                                <td>{{$info->emp_id}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Full Name
								</td>
                                <td>{{$info->name}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Role
								</td>
                                <td>{{$info->role}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Organization
								</td>
                                <td>{{$info->organization}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Email
								</td>
                                <td>{{$info->email}}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Photo
								</td>
                                <td>{{ HTML::image('files/userPhoto/'.$info->photo, 'Employee Photo', array('class' => 'img-thumbnail','width'=>'160','height'=>'120')) }}</td>
                            </tr>
                            <tr>
                                <td class="col-md-3">									
									Password
								</td>
                                <td><a class="small-box-footer" href="#" data-toggle="modal" data-target="#changePassword">
                                    Change Password <i class="fa fa-arrow-circle-right"></i>
                                </a></td>
                            </tr>
                            
                        
                      	  </tbody>
                   		</table>

						</div>
				@endforeach	
               	</div>
                <!-- /.box-body -->
                               
                            </div>
</div>
</section>
@foreach($userInfos as $info)
<div class="modal fade" id="profileView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Update Profile</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                
				{{Form::open(array('url'=>'updateMyProfile','method'=>'post','class'=>'form-horizontal','data-toggle'=>'validator','role'=>'form','files'=>'true'))}}
                    {{Form::hidden('id',$info->id)}}               
                    {{Form::hidden('old_photo',$info->photo)}}                
				
					<div class="form-group">
                                           
											{{Form::label('emp_id','Employee Id', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-7">
											{{Form::text('emp_id',$info->emp_id, array('class' => 'form-control','placeholder'=>'','required'=>'','disabled'=>'diabled'))}}
											</div>
											
                    </div>
					<div class="form-group">
                                           
											{{Form::label('name','Full Name', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-7">
											{{Form::text('name',$info->name, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group">
                                           
											{{Form::label('role','Role', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-7">
											{{Form::text('role',$info->role, array('class' => 'form-control','placeholder'=>'','required'=>'','disabled'=>'diabled'))}}
											</div>
											
                    </div>
					<div class="form-group">
                                           
											{{Form::label('organization','Organization', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-7">
											{{Form::text('organization',$info->organization, array('class' => 'form-control','placeholder'=>'','required'=>'','disabled'=>'diabled'))}}
											</div>
											
                    </div>
					<div class="form-group">
                                           
											{{Form::label('email','Email', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-7">
											{{Form::text('email',$info->email, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					
                                           
					<div class="form-group ">                                  
                    
					 {{ Form::label('image', 'Upload New Photo',array('class'=>'control-label col-xs-4')) }}
					 <div class="col-xs-6">
					 {{ HTML::image('files/userPhoto/'.$info->photo, 'User Photo', array('class' => 'img-thumbnail','width'=>'250','height'=>'250')) }}
					 {{ Form::file('photo') }}
					 
					 <p class="help-block">Photo size : 300px250px</p>
					 </div>
                	</div>
											
                    
					<!-- <div class="form-group">
					                                           
											{{Form::label('new_password','New Password', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-7">
											{{Form::text('new_password','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
					                    </div>
					<div class="form-group">
					                                           
											{{Form::label('conform_password','Conform Password', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-7">
											{{Form::text('conform_password','', array('class' => 'form-control','placeholder'=>'','required'=>''))}}  
											</div>
											
					                    </div> -->
					

					<div class="form-group">                       
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>                       
                    </div>
					
					{{Form::close()}}
            </div>
        </div>
    </div>
</div>
@endforeach
@include('settings.entryForm')
@yield('changePass')
@stop