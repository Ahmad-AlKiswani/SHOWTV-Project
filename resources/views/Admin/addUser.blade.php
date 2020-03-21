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



    <!-- Page content -->



    <div class="container-fluid mt--7">

        <div class="col-md-12 pl-3 pr-3">
            @if(Session::has('error'))
                <p class="alert alert-danger" style="margin-top: 20px;">{{ Session::get('error') }}</p>
            @endif

            @if(Session::has('success'))
                <p class="alert alert-success" style="margin-top: 20px;">{{ Session::get('success') }}</p>
            @endif
        </div>
      <div class="row">
<!--        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">-->
<!--          <div class="card card-profile shadow">-->
<!--            <div class="row justify-content-center">-->
<!--              <div class="col-lg-3 order-lg-2">-->
<!--                <div class="card-profile-image">-->
<!--                  <a href="#">-->
<!--                    <img src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">-->
<!--                  </a>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">-->
<!--              <div class="d-flex justify-content-between">-->
<!--                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>-->
<!--                <a href="#" class="btn btn-sm btn-default float-right">Message</a>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="card-body pt-0 pt-md-4">-->
<!--              <div class="row">-->
<!--                <div class="col">-->
<!--                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">-->
<!--                    <div>-->
<!--                      <span class="heading">22</span>-->
<!--                      <span class="description">Friends</span>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                      <span class="heading">10</span>-->
<!--                      <span class="description">Photos</span>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                      <span class="heading">89</span>-->
<!--                      <span class="description">Comments</span>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="text-center">-->
<!--                <h3>-->
<!--                  Jessica Jones<span class="font-weight-light">, 27</span>-->
<!--                </h3>-->
<!--                <div class="h5 font-weight-300">-->
<!--                  <i class="ni location_pin mr-2"></i>Bucharest, Romania-->
<!--                </div>-->
<!--                <div class="h5 mt-4">-->
<!--                  <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer-->
<!--                </div>-->
<!--                <div>-->
<!--                  <i class="ni education_hat mr-2"></i>University of Computer Science-->
<!--                </div>-->
<!--                <hr class="my-4" />-->
<!--                <p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music.</p>-->
<!--                <a href="#">Show more</a>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
              <form method="post" action="{{url('/')}}/AddUser" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <input type="hidden" name="id" value="{{isset($data)? $data->id :''}}">
                <div class="card-header bg-white border-0">
                  <div class="row align-items-center">
                    <div class="col-10">
                      <h3 class="mb-0">Add User </h3>
                    </div>
                    <div class="col-1 text-right">
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    <div class="col-1 text-right">
                      <button type="button" class="btn btn-danger">Cancel</button>
                    </div>
                  </div>
                </div>
                <div class="card-body">

                    <h6 class="heading-small text-muted mb-4">User information</h6>
                    <div class="pl-lg-4">

                      <div class="row">
                        <div class="col-lg-5">
                          <div class="form-group">

                              @php  isset($data)?  $name = explode(" " , $data->name) :'' ; @endphp
                            <label class="form-control-label" for="input-first-name">First name</label>
                            <input type="text" id="input-first-name" class="form-control form-control-alternative" name="fname" placeholder="First name" required value="{{isset($data)? $name[0] :''}}">
                          </div>
                        </div>
                        <div class="col-lg-5">
                          <div class="form-group">
                            <label class="form-control-label" for="input-last-name">Last name</label>
                            <input type="text" id="input-last-name" class="form-control form-control-alternative" name="lname" placeholder="Last name" required value="{{isset($data)? $name[1] :''}}">
                          </div>
                        </div>

                          <div class="col-lg-1">
                              <div class="form-group mt-5">
                                  <div class="custom-control custom-radio mb-3">
                                      <input type="radio" id="customRadio1" value="0" name="access" class="custom-control-input"  {{isset($data) && $data->access==0? 'checked' :''}}>
                                      <label class="custom-control-label" for="customRadio1">Access</label>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-1">
                              <div class="form-group mt-5">
                                  <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio2"value="1" name="access" class="custom-control-input" required {{isset($data) && $data->access==1? 'checked' :''}}>
                                      <label class="custom-control-label" for="customRadio2">Only View</label>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-email">Email address</label>
                            <input type="email" id="input-email" class="form-control form-control-alternative" name="email" placeholder="jesse@example.com" required value="{{isset($data)? $data->email :''}}">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-email">Password</label>
                            <input type="password"  class="form-control form-control-alternative" name="password" placeholder="password "  {{isset($data)? '' :'required'}}>
                          </div>
                        </div>

                      </div>

                    </div>

                </div>
              </form>
          </div>
        </div>
      </div>
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
