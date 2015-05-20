@section('left_sidebar')
 <!-- sidebar: style can be found in sidebar.less -->
 <div style='display:none'>
 @if(Auth::check())
{{$role = Auth::user()->Role();}}
{{$emp_id = Auth::user()->emp_id();}}
@endif
</div>
                <section class="sidebar">
                    <!-- Sidebar user panel -->
				    @if(Auth::check())
				   <div class="user-panel">
				
                        <div class="pull-left image">
						
							{{HTML::image('img/PersonnelPhoto/'.Employee::profilePic($emp_id),'User',array('class'=>'img-circle'))}}						 
						
                        </div>
                        <div class="pull-left info">
                            <p>{{Auth::user()->getName()}}</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
						
                    </div>
					@endif
					
                    <!-- search form -->
                    <!--<form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>-->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
					@if(Auth::check())
                        <li class="active">
                            <a href="{{URL::to('dashboard')}}">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
						@endif
						
                        @if(Auth::check())
                      @if($role=='Chief Admin'||$role=='Employee'||$role=='Director'||$role=='Inspector')
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-screenshot"></i> <span>SIA</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{URL::to('action/main');}}"><i class="fa fa-angle-double-right"></i>Main</a></li>
                                 <li><a href="{{URL::to('action/newActionEnrty');}}"><i class="fa fa-angle-double-right"></i>New SIA Entry</a></li>  
                                 <li><a href="{{--URL::to('action/newActionEnrty');--}}"><i class="fa fa-angle-double-right"></i>SIA List</a></li> 
                               
                            </ul>
                        </li>
                        @endif
                        @endif
						@if(Auth::check())
                      @if($role=='Chief Admin'||$role=='Employee'||$role=='Director'||$role=='Inspector')
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i> <span>Employee</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{URL::to('qualification/main');}}"><i class="fa fa-angle-double-right"></i>Main</a></li>  
								@if($role=='Chief Admin')
								<li><a href="{{URL::to('qualification/employees');}}"><i class="fa fa-angle-double-right"></i>Employees List</a></li> 
							    @endif
								<li><a href="{{URL::to('qualification/personnel');}}"><i class="fa fa-angle-double-right"></i>Personal Info. </a></li>
                                <li><a href="{{URL::to('qualification/education')}}"><i class="fa fa-angle-double-right"></i>Education</a></li>
                                <li><a href="{{URL::to('qualification/employment')}}"><i class="fa fa-angle-double-right"></i>Employment</a></li>
                                <li><a href="{{URL::to('qualification/pro_degree')}}"><i class="fa fa-angle-double-right"></i>Professional Degree</a></li>
                                <li><a href="{{URL::to('qualification/taining_work_ojt')}}"><i class="fa fa-angle-double-right"></i>Training/Workshop/OJT</a></li>
                                <li><a href="{{URL::to('qualification/language')}}"><i class="fa fa-angle-double-right"></i>Language</a></li>
                                <li><a href="{{URL::to('qualification/technical_licence')}}"><i class="fa fa-angle-double-right"></i>CAA Technical Licence</a></li>
                                <li><a href="{{URL::to('qualification/aircraft_qualification')}}"><i class="fa fa-angle-double-right"></i>CAA Aircraft Qualification</a></li>
								 <li><a href="{{URL::to('qualification/reference')}}"><i class="fa fa-angle-double-right"></i>References</a></li>
								 <li><a href="{{URL::to('qualification/emp_verification')}}"><i class="fa fa-angle-double-right"></i>Employee Assignments</a></li>
                                <li><a href="{{URL::to('qualification/other')}}"><i class="fa fa-angle-double-right"></i>Others</a></li>
                                <li><a href="{{URL::to('qualification/comp_view')}}"><i class="fa fa-angle-double-right"></i>Comprehensive View </a></li>
                            </ul>
                        </li>
						@endif
						@endif
						
						@if(Auth::check())
						@if($role=='Chief Admin')
						<li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-warning-sign"></i> <span>Safety Concerns</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{URL::to('safety/main');}}"><i class="fa fa-angle-double-right"></i>Main</a></li>
								<li><a href="{{URL::to('safety/newInspection');}}"><i class="fa fa-angle-double-right"></i>New Inspection</a></li>
								<li><a href="{{URL::to('safety/newSafetyConcern');}}"><i class="fa fa-angle-double-right"></i>New Safety Concern </a></li>
                                <li><a href="{{URL::to('safety/issuedList');}}"><i class="fa fa-angle-double-right"></i>Safety Concerns List </a></li>
                            </ul>
                        </li>
						@endif
						@endif

                        @if(Auth::check())
                        @if($role=='Chief Admin')
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-briefcase"></i> <span>Organizations</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{URL::to('organization/main');}}"><i class="fa fa-angle-double-right"></i>Main</a></li>
                                <li><a href="{{URL::to('organization/newOrganization');}}"><i class="fa fa-angle-double-right"></i>Add Organization</a></li>
                                <li><a href="{{URL::to('organization/organizationList');}}"><i class="fa fa-angle-double-right"></i>Organizations List </a></li>
                            </ul>
                        </li>
                        @endif
                        @endif

						@if(Auth::check())
						@if($role=='Chief Admin')
						<li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-eye-open"></i> <span>Admin Tracking </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{URL::to('admin/main');}}"><i class="fa fa-angle-double-right"></i>Main</a></li>
								<li><a href="{{URL::to('admin/entry');}}"><i class="fa fa-angle-double-right"></i>Admin Tracking Entry</a></li>
                                <li><a href="{{URL::to('admin/issuedList');}}"><i class="fa fa-angle-double-right"></i>Admin Tracking View</a></li>
                            </ul>
                        </li>
						@endif
						@endif
						@if(Auth::check())
						@if( $role=='Chief Admin')
						<li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-tags"></i> <span>Document Control</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{URL::to('doc/main');}}"><i class="fa fa-angle-double-right"></i>Main</a></li>
								<li><a href="{{URL::to('doc/entry');}}"><i class="fa fa-angle-double-right"></i>Document Control Entry</a></li>
                                <li><a href="{{URL::to('doc/listView');}}"><i class="fa fa-angle-double-right"></i>Document Control List</a></li>
                            </ul>
                        </li>
						@endif	
						@endif	
						
						
						
						@if(Auth::check())
						@if($role=='Chief Admin'||$role=='Director'||$role=='Deputy Director'||$role=='Inspector'||$role=='Maintenance Eng.')
						<li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-plane"></i> <span> Aircraft </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{URL::to('aircraft/main');}}"><i class="fa fa-angle-double-right"></i>Main</a></li>	
								@if($role=='Chief Admin'||$role=='Maintenance Eng.')
                                <li><a href="{{URL::to('aircraft/new_aircraft');}}"><i class="fa fa-angle-double-right"></i>Add New Aircraft</a></li>							
							    @endif
								@if($role=='Chief Admin'||$role=='Director'||$role=='Deputy Director'||$role=='Inspector'||$role=='Maintenance Eng.')
                                <li><a href="{{URL::to('aircraft/aircraftList');}}"><i class="fa fa-angle-double-right"></i>Aircraft List</a></li>	
								@endif
                            </ul>
                        </li>						
						@endif
						@endif
					
			<li class="treeview">
                            <a href="#">
                                <i class="glyphicon  glyphicon-book"></i> <span>Library</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                              @if(Auth::check())
								  <li><a href="{{URL::to('library/main');}}"><i class="fa fa-angle-double-right"></i>Main</a></li>
								<li><a href="{{URL::to('library/newSupportingDocuments');}}"><i class="fa fa-angle-double-right"></i>Add Supporting Doc</a></li>
                                <li><a href="{{URL::to('library/privateView');}}"><i class="fa fa-angle-double-right"></i>Private  SD List View</a></li>
								 <li><a href="{{URL::to('library/publicView');}}"><i class="fa fa-angle-double-right"></i>Public SD List View</a></li>
								@else                               
                                <li><a href="{{URL::to('libraryPublicView');}}"><i class="fa fa-angle-double-right"></i>Public SD List View</a></li>
								@endif
                            </ul>
                        </li>
						  
					  
                    </ul>
                </section>
                <!-- /.sidebar -->
@endsection