@extends('layout')
@section('content')

<section class='content' >

    <div class="row" style='margin:0px 0px 0px 0px;;'>
                      
						
	<div class="row">
			@if('true'==CommonFunction::hasPermission('sc_new_inspection',Auth::user()->emp_id(),'access'))			
			<div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
				<!-- small box -->
			<div class="small-box bg-aqua " >
				<div class="inner">
					<h4 style='font-weight:bold;'>New Inspection</h4>
				</div>
				
				<a class="small-box-footer" href="{{URL::to('safety/newInspection');}}">
					More info <i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
			</div><!-- ./col -->
			@endif		
			@if('true'==CommonFunction::hasPermission('sc_issue_safety_concern',Auth::user()->emp_id(),'access'))	
			<div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
				<!-- small box -->
			<div class="small-box bg-red  " >
				<div class="inner">
					<h4 style='font-weight:bold;'>Issue Safety Concern</h4>
				</div>
				
				<a class="small-box-footer" href="{{URL::to('safety/newSafetyConcern');}}">
					More info <i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
			</div><!-- ./col -->
			@endif
			@if('true'==CommonFunction::hasPermission('sc_safety_concerns_list',Auth::user()->emp_id(),'access'))
			<div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
				<!-- small box -->
				<div class="small-box bg-green " >
					<div class="inner">
						<h4 style='font-weight:bold;'> Safety Concerns List</h4>
						
					</div>
				  
					<a class="small-box-footer" href="{{URL::to('safety/issuedList')}}">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			@endif
			@if('true'==CommonFunction::hasPermission('sc_safety_concerns_list',Auth::user()->emp_id(),'access'))
			<div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
				<!-- small box -->
				<div class="small-box bg-green " >
					<div class="inner">
						<h4 style='font-weight:bold;'>Non Standard Issue List</h4>
						
					</div>
				  
					<a class="small-box-footer" href="{{URL::to('safety/nonStandardIssuedList')}}">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			@endif
			@if('true'==CommonFunction::hasPermission('sc_report',Auth::user()->emp_id(),'access'))
			<div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
				<!-- small box -->
				<div class="small-box bg-blue " >
					<div class="inner">
						<h4 style='font-weight:bold;'>Report</h4>
						
					</div>
				  
					<a class="small-box-footer" href="{{URL::to('safety/issuedList')}}">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			@endif
						
					
	</div>
</section>
@stop