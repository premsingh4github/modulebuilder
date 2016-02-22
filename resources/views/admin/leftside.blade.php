        <!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        
<ul class="sidebar-menu">
<li class="active"><a href="{{url('admin')}}" ><i class="fa fa-dashboard"></i> Dashboard</a></li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-flag"></i>
        <span>Form Setting</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{url('admin/educationalqualifications')}}"  1="1">Education Qualification</a></li>
        <li><a href="{{url('admin/joblevels')}}"  2="2">Job Level</a></li>
        <li><a href="{{url('admin/industries')}}"  3="3">Industry</a></li>
        <li><a href="{{url('admin/jobtypes')}}" 4="4">Job Type</a></li>
        <li><a href="{{url('admin/jobcategories')}}">Job Categories</a></li>
        <li><a href="{{url('admin/questioncategories')}}">Question Categories</a></li>

    </ul>
</li>
<li class="active"><a href="{{url('admin/jobs')}}" ><i class="fa fa-book"></i> Post Job</a></li>


            
</ul>

    </section>
    <!-- /.sidebar -->
</aside>