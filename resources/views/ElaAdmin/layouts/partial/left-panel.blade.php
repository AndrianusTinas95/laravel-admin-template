<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{!! url('/') !!}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">UI elements</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Components</a>
                    <ul class="sub-menu children dropdown-menu">                            
                        <li><i class="fa fa-puzzle-piece"></i><a href="{!! url('/ui-buttons') !!}">Buttons</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{!! url('/ui-badges') !!}">Badges</a></li>
                        <li><i class="fa fa-bars"></i><a href="{!! url('/ui-tabs') !!}">Tabs</a></li>

                        <li><i class="fa fa-id-card-o"></i><a href="{!! url('/ui-cards') !!}">Cards</a></li>
                        <li><i class="fa fa-exclamation-triangle"></i><a href="{!! url('/ui-alerts') !!}">Alerts</a></li>
                        <li><i class="fa fa-spinner"></i><a href="{!! url('/ui-progressbar') !!}">Progress Bars</a></li>
                        <li><i class="fa fa-fire"></i><a href="{!! url('/ui-modals') !!}">Modals</a></li>
                        <li><i class="fa fa-book"></i><a href="{!! url('/ui-switches') !!}">Switches</a></li>
                        <li><i class="fa fa-th"></i><a href="{!! url('/ui-grids') !!}">Grids</a></li>
                        <li><i class="fa fa-file-word-o"></i><a href="{!! url('/ui-typgraphy') !!}">Typography</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{!! url('/tables-basic') !!}">Basic Table</a></li>
                        <li><i class="fa fa-table"></i><a href="{!! url('/tables-data') !!}">Data Table</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{!! url('/forms-basic') !!}">Basic Form</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{!! url('/forms-advanced') !!}">Advanced Form</a></li>
                    </ul>
                </li>

                <li class="menu-title">Icons</li><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{!! url('/font-fontawesome') !!}">Font Awesome</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="{!! url('/font-themify') !!}">Themefy Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{!! url('/widgets') !!}"> <i class="menu-icon ti-email"></i>Widgets </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="{!! url('/charts-chartjs') !!}">Chart JS</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="{!! url('/charts-flot') !!}">Flot Chart</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="{!! url('/charts-peity') !!}">Peity Chart</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-map-o"></i><a href="{!! url('/maps-gmap') !!}">Google Maps</a></li>
                        <li><i class="menu-icon fa fa-street-view"></i><a href="{!! url('/maps-vector') !!}">Vector Maps</a></li>
                    </ul>
                </li>
                <li class="menu-title">Extras</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="{!! url('/auth-login') !!}" target="_blank">Login</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="{!! url('/auth-register') !!}" target="_blank">Register</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="{!! url('/auth-forget') !!}" target="_blank">Forget Pass</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>