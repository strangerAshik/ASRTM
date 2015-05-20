@extends('layout')
@section('content')
<section class='content widthController'>

         <div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
									
                                    <h3 class="box-title">All Users</h3>
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
												<th>Emp ID</th>
												<th>Full Name</th>
												<th>Email</th>
												<th>Role</th>
												<th>Update</th>
												<th>Delete</th>
											</tr>
										</thead>
										
										<tbody>
										@foreach($users as $user)
											<tr>
												<td class='text-centre'>{{$user->emp_id}}</td>
												<td class='text-centre'>{{$user->name}}</td>
												<td class='text-centre'>{{$user->email}}</td>
												<td class='text-centre'>{{$user->role}}</td>
												
												<td class='text-centre'>
													<a data-toggle="modal" data-target="#updateUser{{$user->id}}" href='' style='color:green;float:right;padding:5px;'>
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
												</td>
												<td class='text-centre'>
													<a data-toggle="modal" data-target="#delete{{$user->id}}" href="#" style='color:red;float:right;padding:5px;'><span class="glyphicon glyphicon-trash"></span>
													</a>
												</td>
											</tr>
										@endforeach
										</tbody>
										
									</table>
									
                                </div><!-- /.box-body -->
                            </div>    
                            </div>    
      </div>    
	<!-- update User-->
@foreach($users as $user)
<div class="modal fade" id="updateUser{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add User</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'newUser/update', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form'))}}
					
					@if (Auth::check())						
							   {{Form::hidden('id',$user->id)}}							
					@endif
					<div class="form-group required">
                                        
											{{Form::label('name', 'Full Name', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('name',$user->name, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('emp_id', 'Employee ID', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('emp_id',$user->emp_id, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('email', 'Email', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::text('email',$user->email, array('class' => 'form-control','placeholder'=>'','required'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('designation', 'Designation', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											
											{{Form::select('designation', $roles, $user->role, array('class' => 'form-control'));}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('organization', 'Organization', array('class' => 'col-xs-4 control-label'))}}
											
											
											<div class="col-xs-6">											
											<select id="organizations{{$user->id}}" name='organization' class="demo-default" placeholder="Select  Organization...">
												<option  selected='selected'value="{{$user->organization}}">{{$user->organization}}</option>
												@foreach($organizations as $organization)
												<option value="{{$organization}}">{{$organization}}</option>
												@endforeach
											</select>										
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('password', 'New Password', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::password('password',array('class' => 'form-control','placeholder'=>''))}}
											</div>
											
                    </div>
					<div class="form-group required">
                                        
											{{Form::label('password_confirmation', 'Conform Password', array('class' => 'col-xs-4 control-label'))}}
											<div class="col-xs-6">
											{{Form::password('password_confirmation', array('class' => 'form-control','placeholder'=> '' ))}}
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
	<script>
$(document).ready(function(){
//$('#organization').selectize();
$('#organizations{{$user->id}}').selectize({ create: true, sortField: {field: 'text',direction: 'asc'}});
	
});
</script>
@endforeach
   <!-- End update User-->    
<!-- delete -->
@foreach($users as $user)
<div class="modal fade" id="delete{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"></h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
               
				{{Form::open(array('url' => 'user/delete', 'method' => 'post',  'class'=>'form-horizontal','data-toggle'=>'validator', 'role'=>'form'))}}
					
					@if (Auth::check())						
							   {{Form::hidden('id',$user->id)}}							
					@endif
					<div class="pull-centre">
                                          <h3> Really Want To Delete ?</h3>										
                    </div>                   

                    <div class="form-group">
                       
                            <button type="submit" class="btn btn-danger btn-lg btn-block">Yes!! Delete</button>
                       
                    </div>
					{{Form::close()}}
            </div>
        </div>
    </div>
	</div>
@endforeach
   <!-- End delete User-->                        
</section>

@stop