
<!DOCTYPE HTML>
<html>
<head>
<title>Report ID</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link rel="icon" href="images/favicon-32x32.png">
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>

<div id="wrapper">
     <!-- Navigation -->
	 <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">School Portal</a>
            </div>
            <!-- /.navbar-header -->

			<!--top dropdown for messages and chats -->
            <ul class="nav navbar-nav navbar-right">

			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="../images/{{Auth::user()->image}}" alt=""/><span class="badge">9</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Notification <span class="label label-info">42</span></a></li>
						</li>
						<li class="divider"></li>
						<form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li class="m_2"><a :href="route('logout')"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();"><i class="fa fa-lock"></i>
                                    Log out</a>
                            </li>	
                        </form>
	        		</ul>
	      		</li>

			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search portal..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search portal...';}">
            </form>
			<!--top dropdown for messages and chats -->



			<!--left menu-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw nav_icon"></i>Student profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>E-learning<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Courses</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>ID card<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="id-request">Request ID</a>
                                </li>
                                <li>
                                    <a href="id-report">Report Id</a>
                                </li>
                                <li>
                                    <a href="id/{{urlencode(urlencode(Auth::user()->ident_number))}}">View Id</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Notifications<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">peyment alert</a>
                                </li>
                                <li>
                                    <a href="#">ID card alerts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                         <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Manage Payments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">View payments</a>
                                </li>
                                <li>
                                    <a href="#">Print</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Academic Calendar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">View calendar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		
          <!--body section for forms.php-->
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
        
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
                   
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @elseif($errors->isNotEmpty())
                        <div class="alert alert-danger">
                            <x-input-error :messages="$errors->get('ident_number')" class="mt-2" />
                        </div>
                        @endif
                        <h5 style =" text-align:center; margin:auto; padding:10px;">Carefully fill the form to report for your ID card</h5>
                <form class="form-horizontal" method="POST" action="{{ route('id-report') }}">
                @csrf
                <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-8">
                    <input type="text" class="form-control1" ng-model="model.name" name="name" required="">
									</div>
								</div>

                <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-8">
                    <input type="email" class="form-control1" ng-model="model.email" name="email" required="">
									</div>
								</div>

                <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Staffno/Studentno</label>
									<div class="col-sm-8">
                    <input type="text" class="form-control1" ng-model="model.number" name="ident_number"  required="">
                    
									</div>
								</div>

                  
                  <div class="panel-footer">
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <button class="btn-success btn">Submit</button>
                        <button class="btn-default btn">Cancel</button>
                        <a href="id-report" class="btn-inverse btn">Reset</a>
                      </div>
                    </div>
                  </div>
               


							</form>
						</div>
					</div>
					
			
        </div>
                  <div class="copy_layout">
                    <p>Copyright © 2022. All Rights Reserved | Design by <a href="#" target="_blank">UNN ID</a> </p>
                  </div>
        </div>
   </div>
              <!-- /#page-wrapper -->
</div>
				<!-- /#wrapper -->
			<!-- Nav CSS -->
			<link href="css/custom.css" rel="stylesheet">
			<!-- Metis Menu Plugin JavaScript -->
			<script src="js/metisMenu.min.js"></script>
			<script src="js/custom.js"></script>
	</body>
</html>
