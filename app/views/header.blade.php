 @section('header')
 <div style='display:none'>
{{$emp_id = Auth::user()->emp_id();}}
</div>
 <a href="#" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
				
                ASRTM
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
			<a class="navbar-btn sidebar-toggle" role="button" data-toggle="offcanvas" href="#">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</a>
                <!-- Sidebar toggle button-->
               
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                       
                        <!-- Notifications: style can be found in dropdown.less -->
                        
                        <!-- Tasks: style can be found in dropdown.less -->
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>@if(Auth::check())
										{{$id = Auth::user()->getName();}} @endif<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
							
                                <li class="user-header bg-light-blue">
                                   
									{{HTML::Image('img/PersonnelPhoto/'.Employee::profilePic($emp_id),'User image',array('class'=>'img-circle'))}}
                                   <!-- <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>-->
                                </li>
							
                                <!-- Menu Body -->
                               
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
									{{ HTML::linkAction('SettingsController@index', 'Settings',array(), array('class' => 'btn btn-default btn-flat')) }}
									
                                    </div>
                                    <div class="pull-right">
										{{ HTML::linkAction('SettingsController@logout', 'Sign out',array(), array('class' => 'btn btn-default btn-flat')) }}
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
@endsection