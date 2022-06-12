@extends('users/layout')

@section('main-content')
<!-- ======= Main Section ======= -->
<main id="main">

    <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg pt-0">

            <div class="container p-3" data-aos="fade-up" style="margin-top: 150px">

                @php
                    $cars = \App\Models\Cars::all();
                @endphp

                <div class="container-fliud">
                    <div class="wrapper row">

                        @foreach($cars as $cars)
                            <div class="preview col-md-7 mb-5">

                                <div class="preview-pic tab-content">
                                    <div class="tab-pane active" id="pic-1">
                                        <img class="zoom-hover" style="width:100%; border-radius: 10px;" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2017/03/2018-Bugatti-Chiron-117.jpg?crop=1xw:1xh;center,center&resize=480:*" />
                                    </div>
                                </div>

                            </div>

                            <div class="details-car col-md-5 mb-5">
                                <h3 class="product-title"> {{ $cars -> car_name}}</h3>
                                <div class="rating">
                                    <div class="stars">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <span class="review-no">41 reviews</span>
                                </div>
                                <p class="product-description">
                                    {{ $cars -> car_description}}
                                </p>
                                <h4 class="price">current Rate: <span> {{ $cars -> car_price}} BDT</span></h4>


                                <div class="form-group col-md-12">
                                    <h4 class="price">Rent Time:</h4>
                                    <select name="" id="" class="form-control">
                                        <option value="">Hourly</option>
                                        <option value="">Daily</option>
                                        <option value="">Monthly</option>
                                    </select>
                                </div>

                                <div class="action">
                                    <button class="add-to-cart btn btn-default" type="button">Rent Now</button>
                                    <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>

            </div>


        </section>
    <!-- End Clients Section -->



    <div class="container">


	</div>


</main>
<!-- End #main -->

@endsection
