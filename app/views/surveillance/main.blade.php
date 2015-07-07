{{--
Page Description:
Action Entry landing page, 
--}}
@extends('layout')
@section('content')

<section class='content' >


						<div class="row">
						
                        <div class="col-lg-3 col-xs-12 col-md-3 col-sm-4">
                            <!-- small box -->
                        <div class="small-box bg-aqua " >
                            <div class="inner">
                                <h4 style='font-weight:bold;'>Today Task List </h4>
                            </div>
                            
                            <a class="small-box-footer" href="{{URL::to('surveillance/todayTaskList');}}">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        </div> 
                        <div class="col-lg-3 col-xs-12 col-md-3 col-sm-4">
                            <!-- small box -->
                        <div class="small-box bg-aqua " >
                            <div class="inner">
                                <h4 style='font-weight:bold;'>Add New Program</h4>
                            </div>
                            
                            <a class="small-box-footer" href="{{URL::to('surveillance/newProgram');}}">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        </div>
                        <div class="col-lg-3 col-xs-12 col-md-3 col-sm-4">
                            <!-- small box -->
                        <div class="small-box bg-aqua " >
                            <div class="inner">
                                <h4 style='font-weight:bold;'>List Of Program</h4>
                            </div>
                            
                            <a class="small-box-footer" href="{{URL::to('surveillance/programList');}}">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-3 col-xs-12 col-md-3 col-sm-4">
                            <!-- small box -->
                        <div class="small-box bg-aqua " >
                            <div class="inner">
                                <h4 style='font-weight:bold;'>New Action Entry</h4>
                            </div>
                            
                            <a class="small-box-footer" href="{{URL::to('surveillance/newActionEnrty');}}">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-12 col-md-3 col-sm-4">
                            <!-- small box -->
						<div class="small-box bg-aqua " >
							<div class="inner">
								<h4 style='font-weight:bold;'>Action Entry List</h4>
							</div>
							
							<a class="small-box-footer" href="{{URL::to('surveillance/surveillanceList');}}">
								More info <i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-12 col-md-3 col-sm-4">
                            <!-- small box -->
                            <div class="small-box bg-green " >
                                <div class="inner">
                                    <h4 style='font-weight:bold;'>Inspection Check List</h4>
                                    
                                </div>
                             
                              <a class="small-box-footer" href="{{URL::to('surveillance/inspectionCheckList');}}">
								Add New <i class="fa fa-arrow-circle-right"></i>
							</a>
                            </div>
                        </div><!-- ./col -->
                        <div style='display: none'class="col-lg-3 col-xs-12 col-md-3 col-sm-4">
                            <!-- small box -->
                            <div class="small-box bg-yellow " >
                                <div class="inner">
                                   <h4 style='font-weight:bold;'>Report</h4>
                                   
                                </div>
                           
                                <a class="small-box-footer" target="_blank" href="{{URL::to('surveillance/report');}}">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                       
                    </div>

	
</section>
@stop