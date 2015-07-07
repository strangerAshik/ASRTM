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
							
                                 	@foreach($users as $info)
                        <div class="col-lg-3 col-md-3 col-xs-6">
                            <!-- small box -->
                             <div class="icon">
                                    <a href="{{'singleUser/'.$info->emp_id}}"> <i > @if($info->photo)
                            {{HTML::image('files/userPhoto/'.$info->photo,'User',array('class'=>'img-thumbnail','width'=>'60px','height'=>'60px'))}}
                          @else
                            {{HTML::image('img/PersonnelPhoto/'.'anonymous.png','User',array('class'=>'img-thumbnail','width'=>'60px','height'=>'60px'))}}
                          @endif</i></a>
                                </div>
                            <a class="small-box-footer" href="{{'singleUser/'.$info->emp_id}}" >
                                   View Details <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            <div class="small-box bg-green height">

                                <div class="inner">
                                    <h6 class='title'>
                                      {{$info->name}}
                                    </h6>
                                    Role:{{$info->role}}</br>
                                    Emp Id:{{$info->emp_id}}</br>
                                    Org:{{$info->organization}}
                                   
                                </div>                                
                              
                                
                            </div>
                        </div>
 @endforeach
									
                                </div><!-- /.box-body -->
                            </div>    
                            </div>    
      </div>  

               
</section>

@stop