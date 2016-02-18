<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Administrator | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="http://localhost/appts.local/public/packages/pingpong/admin/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="http://localhost/appts.local/public/packages/pingpong/admin/components/fontawesome/css/font-awesome.min.css" rel="stylesheet"
type="text/css"/>
<!-- Ionicons -->
<link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
<!-- Morris chart -->
<link href="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/css/morris/morris.css" rel="stylesheet" type="text/css"/>
<!-- jvectormap -->
<link href="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css"/>
<!-- Date Picker -->
<link href="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css"/>
<!-- Daterange picker -->
<link href="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<!-- bootstrap wysihtml5 - text editor -->
<link href="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css"/>
<!-- Theme style -->
<link href="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/css/AdminLTE.css" rel="stylesheet" type="text/css"/>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<style type="text/css">
    .required{
          color:red;
    }
</style>
    </head>
<body class="skin-blue fixed">

    <!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="http://localhost/appts.local/public" target="_blank" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        My Site Name
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu hidden">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/img/avatar3.png" class="img-circle" alt="User Image"/>
                                        </div>
                                        <h1>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h1>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/img/avatar2.png" class="img-circle" alt="user image"/>
                                        </div>
                                        <h1>
                                            AdminLTE Design Team
                                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                        </h1>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/img/avatar.png" class="img-circle" alt="user image"/>
                                        </div>
                                        <h1>
                                            Developers
                                            <small><i class="fa fa-clock-o"></i> Today</small>
                                        </h1>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/img/avatar2.png" class="img-circle" alt="user image"/>
                                        </div>
                                        <h1>
                                            Sales Department
                                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                        </h1>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/img/avatar.png" class="img-circle" alt="user image"/>
                                        </div>
                                        <h1>
                                            Reviewers
                                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                                        </h1>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu  hidden">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-warning"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page
                                        and may cause design problems
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users warning"></i> 5 new members joined
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="ion ion-ios7-cart success"></i> 25 sales made
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion ion-ios7-person danger"></i> You changed your username
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu hidden">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Design some buttons
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end task item -->
                            <li><!-- Task item -->
                                <a href="#">
                                    <h3>
                                        Create a nice theme
                                        <small class="pull-right">40%</small>
                                    </h3>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">40% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- end task item -->
                        <li><!-- Task item -->
                            <a href="#">
                                <h3>
                                    Some task I need to do
                                    <small class="pull-right">60%</small>
                                </h3>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- end task item -->
                    <li><!-- Task item -->
                        <a href="#">
                            <h3>
                                Make beautiful transitions
                                <small class="pull-right">80%</small>
                            </h3>
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end task item -->
            </ul>
        </li>
        <li class="footer">
            <a href="#">View all tasks</a>
        </li>
    </ul>
</li>
<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="glyphicon glyphicon-user"></i>
        <span>admin <small>(admin@appts.local)</small><i class="caret"></i></span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header bg-light-blue">
            <img src="http://www.gravatar.com/avatar/812ce67ef0e24ed21c7b63ec1630f81f?s=100&d=mm&r=g" class="img-circle" alt="User Image"/>

            <p>
                admin
                <small>Member since Feb, 2016</small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class="user-body hidden">
            <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
            </div>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="http://localhost/appts.local/public/admin/settings" class="btn btn-default btn-flat">Settings</a>
            </div>
            <div class="pull-right">
                <a href="http://localhost/appts.local/public/admin/logout" class="btn btn-default btn-flat">Sign out</a>
            </div>
        </li>
    </ul>
</li>
</ul>
</div>
</nav>
</header>

    <div class="wrapper row-offcanvas row-offcanvas-left">

        <!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://www.gravatar.com/avatar/812ce67ef0e24ed21c7b63ec1630f81f?s=60&d=mm&r=g" class="img-circle" alt="admin"/>
            </div>
            <div class="pull-left info">
                <p>Hello, admin</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
        <form method="GET" action="http://localhost/appts.local/public/admin" accept-charset="UTF-8">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i
                        class="fa fa-search"></i></button>
                    </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        
<ul class="sidebar-menu">
<li class="active"><a href="http://localhost/appts.local/public/admin" ><i class="fa fa-dashboard"></i> Dashboard</a></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Articles</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://localhost/appts.local/public/admin/articles"  1="1"> All Articles</a></li>
<li><a href="http://localhost/appts.local/public/admin/articles/create"  2="2"> Add New</a></li>
<li class="divider"></li><li><a href="http://localhost/appts.local/public/admin/categories"  4="4"> Categories</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-flag"></i>
                    <span>Pages</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://localhost/appts.local/public/admin/pages"  1="1"> All Pages</a></li>
<li><a href="http://localhost/appts.local/public/admin/pages/create"  2="2"> Add New</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://localhost/appts.local/public/admin/users"  1="1"> All Users</a></li>
<li><a href="http://localhost/appts.local/public/admin/users/create"  2="2"> Add New</a></li>
<li class="divider"></li><li><a href="http://localhost/appts.local/public/admin/roles"  4="4"> Roles</a></li>
<li><a href="http://localhost/appts.local/public/admin/permissions"  5="5"> Permissions</a></li>

                </ul>
            </li>
</ul>

    </section>
    <!-- /.sidebar -->
</aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="alert flash-message text-center alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  Login Success!
</div>
                
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>
                    1
                </h3>

                <p>
                    All Users
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="http://localhost/appts.local/public/admin/users" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>
                    0
                </h3>

                <p>
                    All Articles
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-book"></i>
            </div>
            <a href="http://localhost/appts.local/public/admin/articles" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>
                    0
                </h3>

                <p>
                    All Pages
                </p>
            </div>
            <div class="icon">
                <i class="fa fa-flag"></i>
            </div>
            <a href="http://localhost/appts.local/public/admin/pages" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>
                    65
                </h3>

                <p>
                    Unique Visitors
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->

<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable">


        <!-- Custom tabs (Charts with tabs)-->
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
                <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
                <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
                <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
            </ul>
            <div class="tab-content no-padding">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>
        </div>
        <!-- /.nav-tabs-custom -->

        <!-- Chat box -->
        <div class="box box-success">
            <div class="box-header">
                <i class="fa fa-comments-o"></i>

                <h3 class="box-title">Chat</h3>

                <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                    <div class="btn-group" data-toggle="btn-toggle">
                        <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                    </div>
                </div>
            </div>
            <div class="box-body chat" id="chat-box">
                <!-- chat item -->
                <div class="item">
                    <img src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/img/avatar.png" alt="user image" class="online"/>

                    <p class="message">
                        <a href="#" class="name">
                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                            Mike Doe
                        </a>
                        I would like to meet you to discuss the latest news about
                        the arrival of the new theme. They say it is going to be one the
                        best themes on the market
                    </p>
                    <div class="attachment">
                        <h1>Attachments:</h1>

                        <p class="filename">
                            Theme-thumbnail-image.jpg
                        </p>

                        <div class="pull-right">
                            <button class="btn btn-primary btn-sm btn-flat">Open</button>
                        </div>
                    </div>
                    <!-- /.attachment -->
                </div>
                <!-- /.item -->
                <!-- chat item -->
                <div class="item">
                    <img src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/img/avatar2.png" alt="user image" class="offline"/>

                    <p class="message">
                        <a href="#" class="name">
                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                            Jane Doe
                        </a>
                        I would like to meet you to discuss the latest news about
                        the arrival of the new theme. They say it is going to be one the
                        best themes on the market
                    </p>
                </div>
                <!-- /.item -->
                <!-- chat item -->
                <div class="item">
                    <img src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/img/avatar3.png" alt="user image" class="offline"/>

                    <p class="message">
                        <a href="#" class="name">
                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                            Susan Doe
                        </a>
                        I would like to meet you to discuss the latest news about
                        the arrival of the new theme. They say it is going to be one the
                        best themes on the market
                    </p>
                </div>
                <!-- /.item -->
            </div>
            <!-- /.chat -->
            <div class="box-footer">
                <div class="input-group">
                    <input class="form-control" placeholder="Type message..."/>

                    <div class="input-group-btn">
                        <button class="btn btn-success"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box (chat box) -->

        <!-- TO DO List -->
        <div class="box box-primary">
            <div class="box-header">
                <i class="ion ion-clipboard"></i>

                <h3 class="box-title">To Do List</h3>

                <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <ul class="todo-list">
                    <li>
                        <!-- drag handle -->
                        <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                        </span>
                        <!-- checkbox -->
                        <input type="checkbox" value="" name=""/>
                        <!-- todo text -->
                        <span class="text">Design a nice theme</span>
                        <!-- Emphasis label -->
                        <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                        </span>
                        <input type="checkbox" value="" name=""/>
                        <span class="text">Make the theme responsive</span>
                        <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                        </span>
                        <input type="checkbox" value="" name=""/>
                        <span class="text">Let theme shine like a star</span>
                        <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                        </span>
                        <input type="checkbox" value="" name=""/>
                        <span class="text">Let theme shine like a star</span>
                        <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                        </span>
                        <input type="checkbox" value="" name=""/>
                        <span class="text">Check your messages and notifications</span>
                        <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li>
                        <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                        </span>
                        <input type="checkbox" value="" name=""/>
                        <span class="text">Let theme shine like a star</span>
                        <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
                <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
            </div>
        </div>
        <!-- /.box -->

        <!-- quick email widget -->
        <div class="box box-info">
            <div class="box-header">
                <i class="fa fa-book"></i>

                <h3 class="box-title">Quick Post</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i
                        class="fa fa-times"></i></button>
                    </div>
                    <!-- /. tools -->
                </div>
                <div class="box-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="title" class="form-control" name="title" placeholder="Title:"/>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="category_id"><option selected="selected" value="">Category:</option><option value="1">General</option></select>
                        </div>
                        <div>
                            <textarea class="textarea" placeholder="Content"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                    </form>
                </div>
                <div class="box-footer clearfix">
                    <button class="pull-right btn btn-default" id="sendEmail">Save <i class="fa fa-arrow-circle-right"></i></button>
                </div>
            </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

            <!-- Map box -->
            <div class="box box-solid bg-light-blue-gradient">
                <div class="box-header">
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"><i
                            class="fa fa-calendar"></i></button>
                            <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip"
                            title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /. tools -->

                        <i class="fa fa-map-marker"></i>

                        <h3 class="box-title">
                            Visitors
                        </h3>
                    </div>
                    <div class="box-body">
                        <div id="world-map" style="height: 250px;"></div>
                    </div>
                    <!-- /.box-body-->
                    <div class="box-footer no-border">
                        <div class="row">
                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                <div id="sparkline-1"></div>
                                <div class="knob-label">Visitors</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                <div id="sparkline-2"></div>
                                <div class="knob-label">Online</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-4 text-center">
                                <div id="sparkline-3"></div>
                                <div class="knob-label">Exists</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.box -->

                <!-- solid sales graph -->
                <div class="box box-solid bg-teal-gradient">
                    <div class="box-header">
                        <i class="fa fa-th"></i>

                        <h3 class="box-title">Sales Graph</h3>

                        <div class="box-tools pull-right">
                            <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body border-radius-none">
                        <div class="chart" id="line-chart" style="height: 250px;"></div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer no-border">
                        <div class="row">
                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                                data-fgColor="#39CCCC"/>

                                <div class="knob-label">Mail-Orders</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                                <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                                data-fgColor="#39CCCC"/>

                                <div class="knob-label">Online</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-4 text-center">
                                <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                                data-fgColor="#39CCCC"/>

                                <div class="knob-label">In-Store</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->

                <!-- Calendar -->
                <div class="box box-solid bg-green-gradient">
                    <div class="box-header">
                        <i class="fa fa-calendar"></i>

                        <h3 class="box-title">Calendar</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <!-- button with a dropdown -->
                            <div class="btn-group">
                                <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i
                                    class="fa fa-bars"></i></button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Add new event</a></li>
                                        <li><a href="#">Clear events</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">View calendar</a></li>
                                    </ul>
                                </div>
                                <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <!--The calendar -->
                            <div id="calendar" style="width: 100%"></div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Progress bars -->
                                    <div class="clearfix">
                                        <span class="pull-left">Task #1</span>
                                        <small class="pull-right">90%</small>
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                                    </div>

                                    <div class="clearfix">
                                        <span class="pull-left">Task #2</span>
                                        <small class="pull-right">70%</small>
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                    <div class="clearfix">
                                        <span class="pull-left">Task #3</span>
                                        <small class="pull-right">60%</small>
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                                    </div>

                                    <div class="clearfix">
                                        <span class="pull-left">Task #4</span>
                                        <small class="pull-right">40%</small>
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.box -->

                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->

                        </section>
        </aside>
        <!-- /.right-side -->
    </div>
    <!-- ./wrapper -->

    <!-- add new calendar event modal -->
    <script src="http://localhost/appts.local/public/packages/pingpong/admin/components/jquery/dist/jquery.min.js"></script>
<script src="http://localhost/appts.local/public/packages/pingpong/admin/components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="http://localhost/appts.local/public/packages/pingpong/admin/components/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<!-- Sparkline -->
<script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- jvectormap -->
<script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- datepicker -->
<script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/AdminLTE/app.js" type="text/javascript"></script>
<script src="http://localhost/appts.local/public/packages/pingpong/admin/js/all.js" type="text/javascript"></script>
        <script src="http://localhost/appts.local/public/packages/pingpong/admin/components/raphael/raphael-min.js"></script>
    <script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/morris/morris.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/AdminLTE/dashboard.js" type="text/javascript"></script>

</body>
</html>
