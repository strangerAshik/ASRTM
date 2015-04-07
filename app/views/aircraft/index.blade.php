
@extends('layout')
@section('content')
<section class='content widthController'>

         <div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
									
                                    <h3 class="box-title">All Aircrafts</h3>
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
												<th>Serial Number </th>
												<th>Registration No# </th>
												<th>Aircraft MM </th>
												<th>Aircraft MSN </th>
												<th>View Details</th>
											</tr>
										</thead>
										
										<tbody>
										@foreach ($aircrafts as $aircraft)
											<tr>
												
												<td class='text-centre'>{{$aircraft->serial_number}}</td>
												<td class='text-centre'>{{$aircraft->registration_no}}</td>
												<td class='text-centre'>{{$aircraft->aircraft_MM}}</td>
												<td class='text-centre'>{{$aircraft->aircraft_MSN}}</td>
												
												<td class='text-centre'>
												<a href="single/{{$aircraft->aircraft_MM.'/'.$aircraft->aircraft_MSN}}">view Details</a>
												</td>
												
											</tr>
										@endforeach
										</tbody>
										
									</table>
									
                                </div><!-- /.box-body -->
                            </div>    
                            </div>    
      </div> 
	  <!-- delete -->


   <!-- End delete User-->         
	</section>
@stop