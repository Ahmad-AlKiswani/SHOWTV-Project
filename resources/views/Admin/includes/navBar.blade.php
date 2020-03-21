<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <div class="navbar-brand pt-0" href="../index.html">
            <img src="{{URL::asset('admin-assets/img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
        </div>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{URL::asset('admin-assets/img/theme/team-1-800x800.jpg')}}">
              </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class="dropdown-divider"></div>
                    <a href="{{url('/')}}/logoutAdmin" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="../index.html">
                            <img src="{{URL::asset('admin-assets/img/brand/blue.png')}}">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <h6 class="navbar-heading text-muted">Lists</h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active " href="{{url('/')}}/userList">
                        <i class="ni ni-bullet-list-67 text-yellow"></i> User List
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/seriesList">
                        <i class="ni ni-bullet-list-67 text-red"></i> Series List
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{url('/')}}/episodesList">
                        <i class="ni ni-bullet-list-67 "></i> Episodes List
                    </a>
                </li>
            </ul>
            @if(Session::get('rule') == 1)
                <hr class="my-3">

                <h6 class="navbar-heading text-muted">Add</h6>
                <!-- Add -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('/')}}/addUser">
                            <i class="ni ni-fat-add text-yellow"></i> Add User
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('/')}}/addSeries">
                            <i class="ni ni-fat-add text-red"></i> Add Series
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('/')}}/addEpisode">
                            <i class="ni ni-fat-add "></i> Add Episode
                        </a>
                    </li>

                </ul>
            @elseif(Session::get('rule') == 3 && Auth::user()->access == 0 )
                <hr class="my-3">

                <h6 class="navbar-heading text-muted">Add</h6>
                <!-- Add -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('/')}}/addUser">
                            <i class="ni ni-fat-add text-yellow"></i> Add User
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('/')}}/addSeries">
                            <i class="ni ni-fat-add text-red"></i> Add Series
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{url('/')}}/addEpisode">
                            <i class="ni ni-fat-add "></i> Add Episode
                        </a>
                    </li>

                </ul>
            @endif
            <hr class="my-3">

            <!-- Action -->
            <h6 class="navbar-heading text-muted">Action</h6>
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/logoutAdmin">
                        <i class="ni ni-key-25 text-info"></i> logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
