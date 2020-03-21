@extends('layout.master')


@section('content')


    <!-- bradcam_area_start  -->
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Series</h3>
                        <p><a href="{{url('/')}}/index">Home /</a> Series</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->



    <!-- offers_area_start -->
    <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Series</h3>
{{--                        <p>Esteem spirit temper too say adieus who direct esteem. <br>--}}
{{--                            It esteems luckily or picture placing drawing. </p>--}}
                    </div>
                </div>
            </div>
            <div class="row">


                @foreach($series as $ser)
                    <div class="col-xl-3 col-md-3 col-lg-3">
                        <div class="single_department">
                            <div class="department_thumb">
                                <a href="{{url('/')}}/ListEpisodes/{{$ser->id}}" >
                                    <img src="{{URL::asset('Thumbnails_series_file/'.$ser->thumbnail)}}" alt="">
                                </a>
                            </div>
                            <div class="department_content">
                                <h3><a href="#">{{$ser->title}}</a></h3>
                                <p>{{$ser->description}}</p>
                                <a href="" class="learn_more">Follow</a>

                            </div>
                        </div>
                    </div>
                @endforeach







{{--                <div class="col-xl-3 col-md-3 col-lg-3">--}}
{{--                    <div class="single_department">--}}
{{--                        <div class="department_thumb">--}}
{{--                            <img src="img/department/2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="department_content">--}}
{{--                            <h3><a href="#">Physical Therapy</a></h3>--}}
{{--                            <p>Esteem spirit temper too say adieus who direct esteem.</p>--}}
{{--                            <a href="#" class="learn_more">Learn More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-md-3 col-lg-3">--}}
{{--                    <div class="single_department">--}}
{{--                        <div class="department_thumb">--}}
{{--                            <img src="img/department/3.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="department_content">--}}
{{--                            <h3><a href="#">Dental Care</a></h3>--}}
{{--                            <p>Esteem spirit temper too say adieus who direct esteem.</p>--}}
{{--                            <a href="#" class="learn_more">Learn More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-md-3 col-lg-3">--}}
{{--                    <div class="single_department">--}}
{{--                        <div class="department_thumb">--}}
{{--                            <img src="img/department/4.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="department_content">--}}
{{--                            <h3><a href="#">Diagnostic Test</a></h3>--}}
{{--                            <p>Esteem spirit temper too say adieus who direct esteem.</p>--}}
{{--                            <a href="#" class="learn_more">Learn More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
<!--                <div class="col-xl-3 col-md-3 col-lg-3">-->
<!--                    <div class="single_department">-->
<!--                        <div class="department_thumb">-->
<!--                            <img src="img/department/5.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="department_content">-->
<!--                            <h3><a href="#">Skin Surgery</a></h3>-->
<!--                            <p>Esteem spirit temper too say adieus who direct esteem.</p>-->
<!--                            <a href="#" class="learn_more">Learn More</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-xl-3 col-md-3 col-lg-3">-->
<!--                    <div class="single_department">-->
<!--                        <div class="department_thumb">-->
<!--                            <img src="img/department/6.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="department_content">-->
<!--                            <h3><a href="#">Surgery Service</a></h3>-->
<!--                            <p>Esteem spirit temper too say adieus who direct esteem.</p>-->
<!--                            <a href="#" class="learn_more">Learn More</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <!-- offers_area_end -->

@endsection
