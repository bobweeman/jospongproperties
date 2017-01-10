<nav class="navbar navbar-default navbar-static-top">
    <div class="col-md-12">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{URL::asset('logo1.png')}}" class="navbar-brand">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Vendor <span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{route('vendor.create')}}" >New</a></li>
                        <li><a href="{{route('vendor.index')}}" >List</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Subsidiary <span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{route('subsidiary.create')}}" >New</a></li>
                        <li><a href="{{route('subsidiary.index')}}" >List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Tenant <span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">New</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item ">
                                    <a href="{{route('tenant.create')}}">Residential</a>
                                    <a href="{{route('tenant_com.create')}}">Commercial</a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">List</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item ">
                                    <a href="{{route('tenant.index')}}">Residential</a>
                                    <a href="{{route('tenant_com.index')}}">Commercial</a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Property <span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Single Residence</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item ">
                                <li><a href="{{route('single_building.create')}}" >New</a></li>
                                <li class="dropdown-submenu"><a href="" >Purchaser</a>
                                    <ul class="dropdown-menu ">
                                        <li class="menu-item ">
                                        <li><a href="{{route('single_building_purchaser.create')}}" >New</a></li>
                                        <li><a href="{{route('single_building_purchaser.index')}}" >List</a></li>

                                        </li>

                                        </li>
                                    </ul>
                                <li class="dropdown-submenu"><a href="" >Tenant</a>
                                    <ul class="dropdown-menu ">
                                        <li class="menu-item ">
                                        <li class="dropdown-submenu"><a href="" >Residential Tenant</a>
                                            <ul class="dropdown-menu ">
                                                <li><a href="{{route('tenant_res.create')}}" >New </a></li>
                                                <li><a href="{{route('tenant_res.index')}}" >List </a></li>

                                            </ul>
                                        </li>
                                        <li class="menu-item ">
                                        <li class="dropdown-submenu"><a href="" >Commercial Tenant</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('tenant_comm.create')}}" >New </a></li>
                                                <li><a href="{{route('tenant_comm.index')}}" >List </a></li>

                                            </ul>
                                        </li>
                                        </li>

                                        </li>
                                    </ul>
                                <li><a href="{{route('tenant_res.index')}}" >List</a></li>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bare Lands</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item ">
                                <li><a href="{{route('bare_land.create')}}" >New</a></li>
                                <li class="dropdown-submenu"><a href="" >Purchaser</a>
                                    <ul class="dropdown-menu ">
                                        <li class="menu-item ">
                                        <li><a href="{{route('bare_land_purchaser.create')}}" >New</a></li>
                                        <li><a href="{{route('bare_land_purchaser.index')}}" >List</a></li>

                                        </li>

                                        </li>
                                    </ul>

                                <li><a href="{{route('bare_land.index')}}" >List</a></li>
                                </li>

                            </ul>
                        </li>

                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Multi-Unit Building</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item ">
                                <li><a href="{{route('multi_unit_building.create')}}" >New</a></li>

                                <li><a href="{{route('multi_unit_building.index')}}" >List</a></li>
                                <li class="dropdown-submenu"><a href="" >Unit</a>
                                <ul class="dropdown-menu ">
                                <li class="menu-item ">
                                <li><a href="{{route('building_unit.create')}}">New</a></li>
                                <li><a href="{{route('building_unit.index')}}">List</a></li>
                                 <li><a href="{{route('building.index')}}" >Add Tenant</a></li>

                                </li>
                                </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Settings <span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Country</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item ">
                                    <a href="{{route('country.create')}}">New</a>
                                    <a href="{{route('tenant_com.create')}}">List</a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item ">
                                    <a href="{{route('account.create')}}">New</a>
                                    <a href="{{route('account.index')}}">List</a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Type of Payment</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item ">
                                    <a href="{{route('payment_type.create')}}">New</a>
                                    <a href="{{route('payment_type.index')}}">List</a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item ">
                                    <a href="{{route('category.create')}}">New</a>
                                    <a href="{{route('category.index')}}">List</a>

                                </li>

                            </ul>
                        </li>

                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">City</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item ">
                                    <a href="{{route('city.create')}}">New</a>
                                    <a href="{{route('city.index')}}">List</a>

                                </li>

                            </ul>
                        </li>
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">District</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item ">
                                    <a href="{{route('district.create')}}">New</a>
                                    <a href="{{route('district.index')}}">List</a>

                                </li>

                            </ul>
                        </li>
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Region/State</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item ">
                                    <a href="{{route('region_state.create')}}">New</a>
                                    <a href="{{route('region_state.index')}}">List</a>

                                </li>

                            </ul>
                        </li>
                      
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Physical <span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Single Residence</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item ">
                                <li><a href="{{route('single_physical.create')}}" >New</a></li>
                                <li><a href="{{route('single_physical.index')}}" >List</a></li>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bare Land</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item ">
                                {{--<li><a href="{{route('physical.create')}}" >New</a></li>--}}
                                {{--<li><a href="{{route('physical.index')}}" >List</a></li>--}}
                                </li>

                            </ul>
                        </li>
                        <li class="menu-item dropdown dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Multi Residence</a>
                            <ul class="dropdown-menu">
                                <li class="menu-item ">
                                {{--<li><a href="{{route('physical.create')}}" >New</a></li>--}}
                                {{--<li><a href="{{route('physical.index')}}" >List</a></li>--}}
                                </li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown disabled">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Legal <span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        {{--<li><a href="{{route('reports.create')}}" >New</a></li>--}}
                        {{--<li><a href="{{route('reports.index')}}" >List</a></li>--}}
                    </ul>
                </li>
                <li class="dropdown disabled">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Transactions <span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        {{--<li><a href="{{route('reports.create')}}" >New</a></li>--}}
                        {{--<li><a href="{{route('reports.index')}}" >List</a></li>--}}
                    </ul>
                </li>
                <li class="dropdown disabled">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Multimedia <span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        {{--<li><a href="{{route('reports.create')}}" >New</a></li>--}}
                        {{--<li><a href="{{route('reports.index')}}" >List</a></li>--}}
                    </ul>
                </li>
                <li class="dropdown disabled">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Reports <span class="fa fa-caret-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        {{--<li><a href="{{route('reports.create')}}" >New</a></li>--}}
                        {{--<li><a href="{{route('reports.index')}}" >List</a></li>--}}
                    </ul>
                </li>
                &nbsp;<li class="dropdown disabled">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                Accounting <span class="fa fa-caret-down"></span></a>
                <ul class="dropdown-menu" role="menu">
                {{--<li><a href="{{route('accounting.create')}}" >New</a></li>--}}
                {{--<li><a href="{{route('accounting.create')}}" >List</a></li>--}}


                </ul>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>