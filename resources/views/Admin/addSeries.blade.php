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
                    <form method="post" action="{{url('/')}}/AddSeries" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="id" value="{{isset($data)? $data->id :''}}">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-10">
                                    <h3 class="mb-0">Add Series </h3>
                                </div>
                                <div class="col-1 text-right">
                                    <button type="submit" id="saveSeries" class="btn btn-primary">Save</button>
                                </div>
                                <div class="col-1 text-right">
                                    <button type="button" class="btn btn-danger">Cancel</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                                <h6 class="heading-small text-muted mb-4">Series information</h6>
                                <div class="pl-lg-4">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-first-name">Title</label>
                                                <input type="text" class="form-control form-control-alternative" name="title" placeholder="Title" required value="{{isset($data)? $data->title :''}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">thumbnail</label>
                                                <input type="file"  class="form-control form-control-alternative" name="thumbnail" {{isset($data)? '' :'required'}}>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-username">Show Time</label>
                                                <input type="time" class="form-control form-control-alternative" name="show_time" placeholder="Username" required value="{{isset($data)? $data->show_time :''}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Show Day</label>

                                                <div class="row Days">
                                                    <div class="col-lg-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" value="Sun" id="Sun" {{isset($data) && strpos($data->show_day, 'Sun')? 'checked' :''}}>
                                                            <label class="custom-control-label" for="Sun">Sun</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" value="Mon" id="Mon" {{isset($data) && strpos($data->show_day, 'Mon')? 'checked' :''}}>
                                                            <label class="custom-control-label" for="Mon">Mon</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" value="Tue" id="Tue" {{isset($data) && strpos($data->show_day, 'Tue')? 'checked' :''}}>
                                                            <label class="custom-control-label" for="Tue">Tue</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" value="Wed" id="Wed" {{isset($data) && strpos($data->show_day, 'Wed')? 'checked' :''}}>
                                                            <label class="custom-control-label" for="Wed">Wed</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" value="Thu" id="Thu" {{isset($data) && strpos($data->show_day, 'Thu')? 'checked' :''}}>
                                                            <label class="custom-control-label" for="Thu">Thu</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" value="Fri" id="Fri" {{isset($data) && strpos($data->show_day, 'Fri')? 'checked' :''}}>
                                                            <label class="custom-control-label" for="Fri">Fri</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" value="Sat" id="Sat" {{isset($data) && strpos($data->show_day, 'Sat')? 'checked' :''}}>
                                                            <label class="custom-control-label" for="Sat">Sat</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!----------- Show Day input ---------->
                                    <input type="hidden" name="show_day" id="showDay">
                                    <!----------- End Show Day input ---------->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control form-control-alternative" name="description" id="description" rows="3" placeholder="Description" style="resize: none" required>{{isset($data)? $data->description :''}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--                <hr class="my-4" />-->
                                <!-- Address -->
                                <!--                <h6 class="heading-small text-muted mb-4">Contact information</h6>-->
                                <!--                <div class="pl-lg-4">-->
                                <!--                  <div class="row">-->
                                <!--                    <div class="col-md-12">-->
                                <!--                      <div class="form-group">-->
                                <!--                        <label class="form-control-label" for="input-address">Address</label>-->
                                <!--                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">-->
                                <!--                      </div>-->
                                <!--                    </div>-->
                                <!--                  </div>-->
                                <!--                  <div class="row">-->
                                <!--                    <div class="col-lg-4">-->
                                <!--                      <div class="form-group">-->
                                <!--                        <label class="form-control-label" for="input-city">City</label>-->
                                <!--                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="New York">-->
                                <!--                      </div>-->
                                <!--                    </div>-->
                                <!--                    <div class="col-lg-4">-->
                                <!--                      <div class="form-group">-->
                                <!--                        <label class="form-control-label" for="input-country">Country</label>-->
                                <!--                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States">-->
                                <!--                      </div>-->
                                <!--                    </div>-->
                                <!--                    <div class="col-lg-4">-->
                                <!--                      <div class="form-group">-->
                                <!--                        <label class="form-control-label" for="input-country">Postal code</label>-->
                                <!--                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">-->
                                <!--                      </div>-->
                                <!--                    </div>-->
                                <!--                  </div>-->
                                <!--                </div>-->
                                <!--                <hr class="my-4" />-->
                                <!-- Description -->
                                <!--                <h6 class="heading-small text-muted mb-4">About me</h6>-->
                                <!--                <div class="pl-lg-4">-->
                                <!--                  <div class="form-group">-->
                                <!--                    <label>About Me</label>-->
                                <!--                    <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>-->
                                <!--                  </div>-->
                                <!--                </div>-->

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


@section('script')
    <script>


        $('#saveSeries').click(function() {

            var val = [];

            // add ons Category control type (check box)
            $('.Days input:checked').each(function (i) {
                val[i] = $(this).val();
                // label[i] = $(this).parent().text().trim();
            });
            $("#showDay").val(val);

        });




    </script>







@endsection
