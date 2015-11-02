<!DOCTYPE html>
<html lang="en">

<body>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/metisMenu/dist/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/dist/css/timeline.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/dist/css/sb-admin-2.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/morrisjs/morris.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/font-awesome/css/font-awesome.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]> -->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!-- <![endif] -->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-left">
            <li class="img">
                <img src="{{URL::asset('assets/images/logo3.png')}}" width="50px" height="40px">
            </li>
        </ul>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">

                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="signin"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Teams<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/register">Register Team Owner</a>
                            </li>
                            <li>
                                <a href="/all">All Team Owners </a>
                            </li>
                            <li>
                                <a href="players">Team Players</a>
                            </li>
                            <li>
                                <a href="create">Register Team Players</a>
                            </li>

                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
    </nav>

	<div id="wrapper">


		<!-- Page Content -->
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="page-header">

							<h4 >Team Items</h4>

							<div class="">
                            <table class="table">
                            <thead>
                              <tr>
                                <th>Owner Name</th>
                                <th>Owner phone</th>
                                <th>Player Name</th>
                                <th>Player phone</th>
                                <th>Player Number</th>
                                <th>Player Photo</th>
                              </tr>
                            </thead>
                            <tbody>
							@foreach($teams as $tests)
                            <tr>
                                <td>{{$tests->ownername}} </td>
                                <td>{{$tests->ownerphone}} </td>
                                <td>{{$tests->playername}} </td>
                                <td>{{$tests->phone}}</td>
                                <td>{{$tests->rand_num}} </td>
                                <td>
                                      <a class="pull-left" href="#">
                                        <img class="media-object thumbnail" height="100" width="100" src="/photo/{{$tests->photo}}">
                                      </a>
                                    </td>
                            </tr>
							@endforeach
                            </tbody>
                            </table>
							</div>
                            <div <?php echo $teams->links(); ?> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>        