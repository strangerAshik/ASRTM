{{--
Page Description:
Action Entry landing page, 
--}}
@extends('layout')
@section('content')

<section class='content' >

    <div class="row" style='margin:0px 0px 0px 0px;;'>
                      
						
						<div class="row">
						
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
						<div class="small-box bg-aqua " >
							<div class="inner">
								<h4 style='font-weight:bold;'>View</h4>
							</div>
							
							<a class="small-box-footer" href="{{--URL::to('organization/organizationList');--}}">
								More info <i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-green " >
                                <div class="inner">
                                    <h4 style='font-weight:bold;'>Entry</h4>
                                    
                                </div>
                             
                              <a class="small-box-footer" href="{{URL::to('action/newActionEnrty');}}">
								Add New <i class="fa fa-arrow-circle-right"></i>
							</a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-yellow " >
                                <div class="inner">
                                   <h4 style='font-weight:bold;'>Report</h4>
                                   
                                </div>
                           
                                <a class="small-box-footer" href="{{--URL::to('organization/report')--}}">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                       
                    </div>
	</div>
	
</section>
@stop