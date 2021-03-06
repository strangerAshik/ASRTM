{{--
Page Description:
Library Main page, 
1. Supporting Docs info.
--}}
@extends('layout')
@section('content')

<section class='content' >

    <div class="row" style='margin:0px 0px 0px 0px;;'>
                      
						
						<div class="row">
					@if('true'==CommonFunction::hasPermission('e_library',Auth::user()->emp_id(),'entry'))	
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
						<div class="small-box bg-aqua " >
							<div class="inner">
								<h4 style='font-weight:bold;'>New Supporting Document</h4>
							</div>
							
							<a class="small-box-footer" href="{{URL::to('library/newSupportingDocuments');}}">
								More info <i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
                        </div><!-- ./col -->
                    @endif
						
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-green " >
                                <div class="inner">
                                    <h4 style='font-weight:bold;'>View Supporting Document</h4>
                                    
                                </div>
                             
                              <a class="small-box-footer" href="{{URL::to('library/privateView');}}">
								Add New <i class="fa fa-arrow-circle-right"></i>
							</a>
                            </div>
                        </div><!-- ./col -->
                        @if('true'==CommonFunction::hasPermission('e_library',Auth::user()->emp_id(),'entry'))
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-yellow " >
                                <div class="inner">
                                   <h4 style='font-weight:bold;'>Report</h4>
                                   
                                </div>
                           
                                <a class="small-box-footer" href="{{--URL::to('aircraft/report')--}}">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        @endif
                       
                    </div>
	</div>
	
</section>
@stop