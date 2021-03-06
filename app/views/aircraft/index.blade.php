
@extends('layout')
<div style='display:none'>
{{$role=Auth::User()->Role()}}
{{$org=Auth::User()->Organization()}}
{{$counter=0;}}
</div>
@section('content')

<section class='content widthController'>

         <div class="row">
                        <div class="col-md-12">
							<div class="box box-primary">
                                <div class="box-header">
									<div class="col-md-6 ">
                                    <h3 class="box-title">All Aircrafts</h3>
									</div>
									<div class="col-md-6 col-sm-6  col-xs-6 position searchingBox">
										<form action="JDKGF" class="search-form">
											
										<select id="searching" class="demo-default" placeholder="Search...">
												<option value="">Select  Designation...</option>
												@foreach ($aircrafts as $aircraft)
												<option value="{{$aircraft->serial_number}}">{{$aircraft->serial_number}}</option>
												<option value="{{$aircraft->aircraft_MM}}">{{$aircraft->aircraft_MM}}</option>
												<option value="{{$aircraft->aircraft_MSN}}">{{$aircraft->aircraft_MSN}}</option>
												<option value="{{$aircraft->registration_no}}">{{$aircraft->registration_no}}</option>
												@endforeach
											</select>
																					
										
										</form>
									</div>
									
                                </div><!-- /.box-header -->
                                <div style="display:none">{{$num=0}}</div>
                                <div class="box-body">
								
                                    <table class="table table-bordered">
										<thead>
											<tr>
												<th>No.</th>
												<th>Operator</th>
												<th>Serial Number </th>
												<th>Registration No# </th>
												<th>Aircraft MM </th>
												<th>Aircraft MSN </th>
												<th>Assigned Inspector</th>												
												<th>View Details</th>
											</tr>
										</thead>
										
										<tbody>
										@foreach ($aircrafts as $aircraft)
											 @if('true'==CommonFunction::hasPermission('airaft_admin_list',Auth::user()->emp_id(),'access'))
											 <tr>
												<td class='text-centre'>{{++$num}}</td>
												<td class='text-centre'>{{$aircraft->aircraft_operator}}</td>
												<td class='text-centre'>{{$aircraft->serial_number}}</td>
												<td class='text-centre'>{{$aircraft->registration_no}}</td>
												<td class='text-centre'>{{$aircraft->aircraft_MM}}</td>
												<td class='text-centre'>{{$aircraft->aircraft_MSN}}</td>
												<td class='text-centre'>{{$aircraft->assigned_inspector}}</td>
												
												
												<td class='text-centre'>
												<a target='_blank' href="single/{{$aircraft->aircraft_MM.'/'.$aircraft->aircraft_MSN}}">view Details</a>
												</td>
												
											</tr>
											@elseif($aircraft->aircraft_operator==$org )
											<tr>
												<td class='text-centre'>{{++$num}}</td>
												<td class='text-centre'>{{$aircraft->serial_number}}</td>
												<td class='text-centre'>{{$aircraft->registration_no}}</td>
												<td class='text-centre'>{{$aircraft->aircraft_MM}}</td>
												<td class='text-centre'>{{$aircraft->aircraft_MSN}}</td>
												<td class='text-centre'>{{$aircraft->assigned_inspector}}</td>
												<td class='text-centre'>{{$aircraft->aircraft_operator}}</td>
												
												<td class='text-centre'>
												<a target='_blank' href="single/{{$aircraft->aircraft_MM.'/'.$aircraft->aircraft_MSN}}" >view Details</a>
												</td>
												
											</tr>
											@else
											@if($counter==0)
											<?php $counter++;?>
											<tr><td colspan='7'>No Aircraft Added Yet!!</td></tr>
											@endif

											@endif
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
	<script>
$(document).ready(function(){
  
$('#searching').selectize();
	
});
</script>
@stop