@extends('layout')
@section('content')
<style>

</style>
<section class='content' >
<div style='display:none'>
{{$role = Auth::user()->Role();}}
</div>

    <div class="row" style='margin:0px 0px 0px 0px;;'>
                      
						
						<div class="row">
						@if($role=='Chief Admin')
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
						<div class="small-box bg-aqua height" >
							<div class="inner">
								<h4 style='font-weight:bold;'>Action Entry</h4>
							</div>
							<div class="icon">
								<i class=" icon ion-social-buffer"></i>
							</div>
							<a class="small-box-footer" href="#">
								More info <i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
                        </div><!-- ./col -->
						@endif
						@if($role=='Chief Admin')
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-green height" >
                                <div class="inner">
                                    <h4 style='font-weight:bold;'> Safety Concern</h4>
                                    
                                </div>
                                <div class="icon">
                                    <i class="icon ion-alert-circled"></i>
                                </div>
                                <a class="small-box-footer" href="{{'safety/main'}}">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						@endif
						@if($role=='Chief Admin'||$role=='Director'||$role=='Deputy Director'||$role=='Inspector'||$role=='Maintenance Eng.')
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-yellow height" >
                                <div class="inner">
                                   <h4 style='font-weight:bold;'>Air Craft</h4>
                                   
                                </div>
                                <div class="icon">
                                    <i class="icon ion-plane"></i>
                                </div>
                                <a class="small-box-footer" href="{{'aircraft/main'}}">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						@endif
						@if($role=='Chief Admin')
                        <div class="col-lg-3 col-xs-6 col-md-3 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-red height">
                                <div class="inner">
                                   <h4 style='font-weight:bold;'>Organization</h4>
                                 
                                </div>
                                <div class="icon">
                                    <i class="icon ion-briefcase"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						@endif
                    </div>
					<div class="row">
					@if($role=='Chief Admin')
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-blue height">
                                <div class="inner">
                                    <h4 class='title'>
                                        PEL
                                    </h4>
                                   
                                </div>
                                <div class="icon">
                                    <i class="icon ion-key"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						@endif
						@if($role=='Chief Admin')
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-purple height">
                                <div class="inner">
                                    <h4 class="title">
                                         Admin Tracking
                                    </h4>
                                  
                                </div>
                                <div class="icon">
                                    <i class="icon ion-eye"></i>
                                </div>
                                <a class="small-box-footer" href="{{'admin/main'}}">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						@endif
						@if($role=='Chief Admin')
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-teal height">
                                <div class="inner">
                                    <h4 class='title'>
                                         Document Control 
                                    </h4>
                                    
                                </div>
                                <div class="icon">
                                    <i class="icon ion-pricetags"></i>
                                </div>
                                <a class="small-box-footer" href="{{'doc/main'}}">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						@endif
						@if($role=='Chief Admin'|| $role=='Employee'|| $role=='Director'|| $role=='Inspector')
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-maroon height">
                                <div class="inner">
                                    <h4 class='title'>
                                        Employee
                                    </h4>
                                   
                                </div>
                                <div class="icon">
                                   <a href="{{URL::to('qualification/main');}}"> <i class="icon ion-person-stalker"></i></a>
                                </div>
                                <a class="small-box-footer" href="{{URL::to('qualification/main');}}">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						@endif
                    </div>
					<div class="row">
					@if($role=='Chief Admin')
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-aqua height">
                                <div class="inner">
                                    <h4 class='title'> 
                                        ANS/AGS
                                    </h4>
                                    <p>
                                        
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						@endif
						@if($role=='Chief Admin')
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-green height">
                                <div class="inner">
                                    <h4 class='title'>
                                        Report
                                    </h4>
                                </div>
                                <div class="icon">
                                    <i class="icon ion-clipboard"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						@endif
						@if($role=='Chief Admin')
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-yellow height">
                                <div class="inner">
                                    <h4 class='title'>
                                        Wild Life Stack
                                    </h4>
                                    
                                </div>
                                <div class="icon">
                                    <i class="icon ion-alert"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						@endif
						@if($role=='Chief Admin')
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-red height">
                                <div class="inner">
                                    <h4 class='title'> 
											Accident And Incident Investigation 
                                    </h4>
                                   
                                </div>
                                <div class="icon">
                                    <i class="icon ion-ios7-compose"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						@endif

                    </div>
					<div class="row">
					@if($role=='Chief Admin')
                        <div class="col-lg-3 col-xs-6 col-md-3 ">
                            <!-- small box -->
                            <div class="small-box bg-blue height">
                                <div class="inner">
                                    <h4 class='title'>
                                         E-Library
                                    </h4>
                                    
                                </div>
                                <div class="icon">
                                    <i class="icon ion-document-text"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
					@endif
					@if($role=='Chief Admin')
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-purple height">
                                <div class="inner">
                                    <h4 class='title'>
                                        Volunteer Reporting 
                                    </h4>
                                    <p>
                                        
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="icon ion-flag"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						@endif
						@if($role=='Chief Admin')
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-teal height">
                                <div class="inner">
                                    <h4 class='title'>
                                        Notifications
                                    </h4>
                                    <p>
                                        
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios7-alarm-outline"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						@endif
						@if($role=='Chief Admin')
                        <div class="col-lg-3 col-xs-6 col-md-3">
                            <!-- small box -->
                            <div class="small-box bg-maroon height">
                                <div class="inner">
                                    <h4 class='title'>
                                        Settings
                                    </h4>                                    
                                </div>
                                <div class="icon">
                                    <i class="icon ion-ios7-gear"></i>
                                </div>
                                <a class="small-box-footer" href="#">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						@endif
                    </div>
	</div>
	
 

{{--Password Change Check --}}
@if(Auth::User()->PassChange()!='1')

	<style>
.modal-headerontest {
    padding:9px 15px;
    border-bottom:1px solid #FCD209;
    background-color: #FCD209;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
 }
</style>
<!-- Modal -->
<div class="modal fade" id="ontest" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true" style="z-index:9999">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-headerontest">
            <button type="button" class="close" data-dismiss="modal" 
               aria-hidden="true">
            </button>
            <h4 class="modal-title" id="myModalLabel">
              Change Your Default Password
            </h4>
         </div>
         <div class="modal-body">
           <h4> <p>Please Change Your Default Password For Security purpose.</br> Thanks</p></h4>
		  
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">Close
            </button>
 
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
   $(function () { $('#ontest').modal({
      keyboard: true
   })});
</script>
<!------End ON TEST MODAL--------->

	{{--End Password Change--}}
@endif
</section>
@stop