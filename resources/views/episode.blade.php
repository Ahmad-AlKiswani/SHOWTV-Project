@extends('layout.master')


@section('content')

    <!-- bradcam_area_start  -->
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>{{$episodes->title}}</h3>
                        <p><a href="index.html">Home /</a> {{$episodes->title}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
<!--                                <img class="card-img rounded-0" src="img/blog/single_blog_1.png" alt="">-->
                                </iframe>
                                <video class="card-img rounded-0" controls>
                                    <source src="{{URL::asset('Thumbnails_series_file\Video/'.$episodes->video_content)}}" type="video/mp4">
{{--                                    <source src="{{$episodes->video_content}}" type="video/ogg">--}}
                                </video>
<!--                                <a href="#" class="blog_item_date">-->
<!--                                    <h3>15</h3>-->
<!--                                    <p>Jan</p>-->
<!--                                </a>-->
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block">
                                    <h2>{{$episodes->duration}}</h2>
                                </a>
                                <p>{{$episodes->description}}</p>
                                <ul class="blog-info-link">
                                    <li><button id="like"   class="genric-btn default-border radius" onclick="addLike()" style="font-size: 15px;"><i class="fa fa-thumbs-up"></i> Like {{$episodes->likes}}</button> </li>
                                    <li><button id="dislike" class="genric-btn default-border radius" onclick="addDislike()" style="font-size: 15px;"><i class="fa fa-thumbs-down"></i> Dislike {{$episodes->dislikes}}</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    @endsection


    @section('script')

        <script>

            function addLike(){
                request = $.ajax({
                    url : "{{url('/')}}/addLike/{{$episodes->id}}",
                    type : 'GET',

                });

                request.done(function (data) {
                    $('#like').html('<i class="fa fa-thumbs-up"></i> Like '+data)
                    $('.radius').prop('disabled', true);
                });

                request.fail(function (jqXHR, textStatus, errorThrown){
                    // Log the error to the console
                    console.error(
                        "The following error occurred: "+
                        textStatus, errorThrown
                    );
                });
            }

            function addDislike(){
                request = $.ajax({
                    url : "{{url('/')}}/addDislike/{{$episodes->id}}",
                    type : 'GET',

                });

                request.done(function (data) {
                    $('#dislike').html('<i class="fa fa-thumbs-down"></i> Dislike '+data)
                    $('.radius').prop('disabled', true);
                });

                request.fail(function (jqXHR, textStatus, errorThrown){
                    // Log the error to the console
                    console.error(
                        "The following error occurred: "+
                        textStatus, errorThrown
                    );
                });
            }


        </script>

    @endsection
