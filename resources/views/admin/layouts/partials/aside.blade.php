<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('adminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ \Auth::user()->name }}</p>                
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            @auth
            <?php $role = Auth::user()->role; ?>
            <li><a href="{{ url('admin/registerusers') }}"><i class="fa fa-user"></i> <span>Register Users</span></a></li>
            <li><a href="{{ url('admin/customers') }}"><i class="fa fa-user-circle"></i> <span>Customers</span></a></li>
            @if(Auth::user()->isAdmin)
            <li><a href="{{ url('admin/partners') }}"><i class="fa fa-user-circle"></i> <span>Partners</span></a></li>
            <li><a href="{{ url('admin/demorequests') }}"><i class="fa fa-files-o"></i> <span>Demo Requests</span></a></li>
            <li><a href="{{ url('admin/contactus') }}"><i class="fa fa-user-circle"></i> <span>Contact Us</span></a></li>
            <li  class="treeview"><a href="{{ url('admin/cms') }}"><i class="fa fa-files-o"></i> <span>Cms</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/products') }}"><i class="fa fa-circle-o"></i> Products</a></li>
                </ul></li>
            <li><a href="{{ url('admin/settings') }}"> <i class="fa fa-cog"></i> <span>Settings</span> </a> </li>
            @endif
            @endauth
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>