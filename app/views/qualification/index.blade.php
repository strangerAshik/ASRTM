
@extends('layout')
@section('content')
<section class='content widthController'>

         <div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
									
                                    <h3 class="box-title">All Employees</h3>
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
												<th>Mobile</th>
												<th>Role</th>
												<th>View Details</th>
											</tr>
										</thead>
										
										<tbody>
										@foreach ($emps as $emp)
											<tr>
												<td class='text-centre'>{{$emp->emp_id}}</td>
												<td class='text-centre'>{{$emp->first_name.' '.$emp->middle_name.' '.$emp->last_name.' '}}</td>
												<td class='text-centre'>{{$emp->email}}</td>
												<td class='text-centre'>{{$emp->mobile_no}}</td>
												<td class='text-centre'>{{$emp->role}}</td>
												
												<td class='text-centre'>
												<a target="b_link" href="comp_view/{{$emp->emp_id}}">view Details</a>
												</td>
												
											</tr>
										@endforeach
										</tbody>
										
									</table>
									
                                </div><!-- /.box-body -->
                            </div>    
                            </div>    
      </div> 
	      
	</section>
@stop