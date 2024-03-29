<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ url(auth()->user()->foto ?? '') }}" class="img-circle img-profil" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            @if (auth()->user()->level == 1)
            <li class="header">MASTER</li>
            <li>
                <a href="{{ route('events.index') }}">
                    <i class="fa fa-cube"></i> <span>Events</span>
                </a>
            </li>
            <li>
                <a href="{{ route('events.index') }}">
                    <i class="fa fa-cubes"></i> <span>Services</span>
                </a>
            </li>
            <li>
                <a href="{{ route('events.index') }}">
                    <i class="fa fa-id-card"></i> <span>Members</span>
                </a>
            </li>
            <li>
                <a href="{{ route('events.index') }}">
                    <i class="fa fa-truck"></i> <span>News</span>
                </a>
            </li>
           
            
            <li class="header">Website HomePage</li>
            <li>
                <a href="{{ route('events.index') }}">
                    <i class="fa fa-file-pdf-o"></i> <span>Images</span>
                </a>
            </li>
             <li>
                <a href="{{ route('events.index') }}">
                    <i class="fa fa-file-pdf-o"></i> <span>Descriptions</span>
                </a>
            </li>
            <li>
                <a href="{{ route('events.index') }}">
                    <i class="fa fa-file-pdf-o"></i> <span>Appointment</span>
                </a>
            </li>
            <li class="header">SYSTEM</li>
            <li>
                <a href="{{ route('events.index') }}">
                    <i class="fa fa-users"></i> <span>Members</span>
                </a>
            </li>
            <li>
                <a href="{{ route("setting.index") }}">
                    <i class="fa fa-cogs"></i> <span>Settings</span>
                </a>
            </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside><!-- visit "codeastro" for more projects! -->