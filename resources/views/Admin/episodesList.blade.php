@extends("Admin.layout.master")
@section('content')
<div class="main-content">









    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.html">Tables</a>
            <!-- Form -->
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg">
                </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>

                        <div class="dropdown-divider"></div>
                        <a href="#!" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                </div>
            </div>
        </div>
    </div>







    <div class="container-fluid mt--7">

        <div class="col-md-12 pl-3 pr-3">
            @if(Session::has('error'))
                <p class="alert alert-danger" style="margin-top: 20px;">{{ Session::get('error') }}</p>
            @endif

            @if(Session::has('success'))
                <p class="alert alert-success" style="margin-top: 20px;">{{ Session::get('success') }}</p>
            @endif
        </div>
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Series Table</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Series</th>
                                <th scope="col">Title</th>
                                <th scope="col">duration</th>
                                <th scope="col">Airing Time</th>
                                <th scope="col">Airing Day</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($episode as $epis)
                                <tr>
                                    <th scope="row">{{$epis->id}}</th>
                                    <td>{{$epis->Series->title}}</td>
                                    <td>{{$epis->title}}</td>
                                    <td>{{$epis->duration}}</td>
                                    <td>{{$epis->airing_time}}</td>
                                    <td>{{$epis->airing_day}}</td>
                                    <td>{{$epis->description}}</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            @if(Session::get('rule') == 1)
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="{{url('/')}}/editEpisodes/{{$epis->id}}">Edit</a>
                                                    <a class="dropdown-item" href="{{url('/')}}/deleteEpisodes/{{$epis->id}}">Delete</a>
                                                </div>
                                            @elseif(Session::get('rule') == 3 && Auth::user()->access == 0 )
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="{{url('/')}}/editEpisodes/{{$epis->id}}">Edit</a>
                                                    <a class="dropdown-item" href="{{url('/')}}/deleteEpisodes/{{$epis->id}}">Delete</a>
                                                </div>

                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <!--              <nav aria-label="...">-->
                        <!--                <ul class="pagination justify-content-end mb-0">-->
                        <!--                  <li class="page-item disabled">-->
                        <!--                    <a class="page-link" href="#" tabindex="-1">-->
                        <!--                      <i class="fas fa-angle-left"></i>-->
                        <!--                      <span class="sr-only">Previous</span>-->
                        <!--                    </a>-->
                        <!--                  </li>-->
                        <!--                  <li class="page-item active">-->
                        <!--                    <a class="page-link" href="#">1</a>-->
                        <!--                  </li>-->
                        <!--                  <li class="page-item">-->
                        <!--                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>-->
                        <!--                  </li>-->
                        <!--                  <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                        <!--                  <li class="page-item">-->
                        <!--                    <a class="page-link" href="#">-->
                        <!--                      <i class="fas fa-angle-right"></i>-->
                        <!--                      <span class="sr-only">Next</span>-->
                        <!--                    </a>-->
                        <!--                  </li>-->
                        <!--                </ul>-->
                        <!--              </nav>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark table -->
        <!-- Footer -->



        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        <!--              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>-->
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection
