@extends('users/layout')

@section('main-content')
<!-- ======= Main Section ======= -->
<main id="main">

    <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                    <h3>Having Trouble Renting A Car?</h3>
                    <p>
                        Skip the waiting on the phone and simply request a car online.
                    </p>
                    <div class="text-left">
                        <a href="javascript:(void)" class="more-btn" id="appointment">Browse Cars <i class="bx bx-chevron-right"></i></a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-xl-4 d-flex align-items-stretch">
                        <div class="icon-box mt-4 mt-xl-0">
                            <img src="/users/img/icons/car_1.png" alt="" class="img-fluid mb-3">
                            <h4>Need a Car in Dhaka?</h4>
                            <p>Renting a Car is just few clicks away!</p>
                            <div class="text-center">
                                <a href="javascript:(void)" class="custom-btn" id="appointment">Check Prices</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                        <div class="icon-box mt-4 mt-xl-0">
                            <img src="/users/img/icons/money_1.png" alt="" class="img-fluid mb-3">
                            <h4>Offers & <br>Packages</h4>
                            <p>Our Car Rental packages that will cover you well!</p>
                            <div class="text-center">
                                <a href="javascript:(void)" class="custom-btn" id="appointment">More Details</a>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                        <div class="icon-box mt-4 mt-xl-0">
                            <img src="/users/img/icons/car_2.png" alt="" class="img-fluid mb-3">
                            <h4>Make Money From Your Car</h4>
                            <p>Rent your<br> car with us</p>
                            <div class="text-center">
                                <a href="javascript:(void)" class="custom-btn" id="appointment">Register Now!</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div><!-- End .content-->
                </div>
                </div>

            </div>
        </section>
    <!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                    <a href="javascript:(void)" class="glightbox mb-4"></a>
                </div>

                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center pt-2 pb-5 px-lg-5">
                    <h4>ABOUT US</h4>
                    <h3>Welcome To Take A Ride!</h3>
                    <p>
                        Takearide.com is a long-standing online car rental service provider in Bangladesh.
                        You can rely on us for all of your travel requirements.
                        In Bangladesh, we have implemented an online booking system, and for the convenience of our customers,
                        we accept all major credit/debit cards such as American Express, MasterCard, Discover, and Visa.
                    </p>

                    <div class="icon-box zoom-hover">
                    <div class="icon">
                        <img src="/users/img/icons/bulb_1.png" alt="" class="about-icon">
                    </div>
                    <h4 class="title">OUR MISSION</h4>
                    <p class="description">
                        To provide safe and dependable car rental services to our valued customers
                        while maintaining the highest levels of safety, quality, and customer service.
                    </p>
                    </div>

                    <div class="icon-box zoom-hover">
                    <div class="icon">
                        <img src="/users/img/icons/cog_1.png" alt="" class="about-icon">
                    </div>
                    <h4 class="title">OUR VISION</h4>
                    <p class="description">
                        To become the first choice of both domestic and international travelers.
                    </p>
                    </div>

                    <div class="icon-box zoom-hover">
                        <div class="icon">
                        <img src="/users/img/icons/like_1.png" alt="" class="about-icon">
                        </div>
                    <h4 class="title">OUR COMMITMENT</h4>
                    <p class="description">
                        We are dedicated to providing the best transportation service possible,
                        with the highest level of safety and comfort for each passenger.
                    </p>
                    </div>

                </div>
                </div>

            </div>
        </section>
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg pt-0">

            <div class="container p-3" data-aos="fade-up">
                <div class="section-title">
                <h2>Top Rented Cars</h2>
                </div>
                <div class="clients-slider swiper-container">
                    <div class="swiper-wrapper align-items-center mb-3">
                        @php
                            $cars = \App\Models\Cars::all();
                        @endphp

                        @foreach($cars as $cars)

                            <div class="swiper-slide" style="margin: 30px !important">
                                <div class="vehicle-card">
                                    <div class="details">
                                        <div class="thumb-gallery">
                                            <img class="first" src="https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2017/03/2018-Bugatti-Chiron-117.jpg?crop=1xw:1xh;center,center&resize=480:*" />
                                        </div>
                                        <div class="info text-center">
                                        <h3>{{ $cars -> car_name}}</h3>
                                            <div class="price">
                                                <span>Price Starting at</span>
                                                <h4>{{ $cars -> car_price}}</h4>
                                            </div>
                                            <div class="ctas text-center">
                                                <a href="#" class="btn btn-outline-primary col-12">Rent Now!</a>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <div class="desc">
                                                <p>{{ $cars -> car_price}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                    <div class="swiper-pagination mt-5"></div>
                </div>
            </div>

        </section>
    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
        <section id="resources" class="resources">
            <div class="container">

                <div class="section-title">
                <h2>Services</h2>
                </div>

                <div class="row">

                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                    <li class="nav-item zoom-hover">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Airport Transfer</a>
                    </li>
                    <li class="nav-item zoom-hover">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Hourly Car Rent</a>
                    </li>
                    <li class="nav-item zoom-hover">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Daily Basis Rent [ Inside Dhaka ]</a>
                    </li>
                    <li class="nav-item zoom-hover">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Daily Basis Rent [ Outside Dhaka ]</a>
                    </li>
                    <li class="nav-item zoom-hover">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Monthly Car Rent</a>
                    </li>
                    <li class="nav-item zoom-hover">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Office Pick & Drop</a>
                    </li>
                    <li class="nav-item zoom-hover">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Inter District Pick & Drop</a>
                    </li>
                    <li class="nav-item zoom-hover">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Tour Package</a>
                    </li>
                    </ul>
                </div>

                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                        <div class="col-lg-7 details order-2 order-lg-1">
                            <h3>Airport Transfer</h3>
                            <p>
                                Airport Transfer in Dhaka/Chittagong/Sylhet/Cox's Bazar/Jessore/Saidpur
                            </p>
                            <h3>Pick & Drop to and from Airport</h3>
                            <p>
                                Travelling to and from different airports; whether it is an international or national one, is always worrying.
                                A certain degree of nervousness and frustration stay there no matter if it is a business travel, casual visits or holidays.
                                Furthermore, the prices of transportation and the load of luggage can add additional trouble.
                                <br><br>
                                If you really want to lower down the price of transportation, reduce the tension of weighty luggage and pressure of travelling as a whole then a good Airport
                                Shuttle option is actually effective for you.
                                It is the finest mode of transportation.
                                Icing on the cake is that if you are wandering about cutting your travel and parking expenses then these Shuttles are for you.
                            </p>
                            <a href="javascript:(void)" target="_blank" class="resource-btn zoom-hover">Rent A Car!</a>
                        </div>
                        <div class="col-lg-5 text-center order-1 order-lg-2 resource-bg" style="background-image: url(/users/img/service/airport.jpg);border-radius:10px;">
                        </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                        <div class="col-lg-6 details order-2 order-lg-1">
                            <h3>Hourly Car Rental</h3>
                            <h3>Only for Travelling inside Dhaka Metro</h3>
                            <p>
                                If you are tired of conventional ways of traveling then you must embrace the contemporary ones. Why always depend on
                                public transport services when you have better options like Hourly car rental services?
                                When you have progressed a lot in other fields of your life, why not you’re traveling, trips and holidays too?
                                <br><br>
                                Actually these Hourly service is a wonderful and contemporary alternative for both individuals and tiny groups.
                                You can easily rent the cars of your choice for visiting any spot you want.
                                No matter whether you are here for a business meeting, get together, party, wedding or holidays, these cars will suffice all your expectations.
                            </p>
                            <a href="javascript:(void)" target="_blank" class="resource-btn zoom-hover">Rent A Car!</a>
                        </div>
                        <div class="col-lg-5 text-center order-1 order-lg-2 resource-bg" style="background-image: url(/users/img/service/dhaka.jpg);border-radius:10px;">
                        </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                        <div class="col-lg-6 details order-2 order-lg-1">
                            <h3>Rent Without Fuel - Inside Dhaka</h3>
                            <h3>Excluding Fuel & Driver Cost</h3>
                            <p>
                                If you have a day long program to attend inside or nearby Dhaka city then we have several options for you!!
                                We are specialized in offering clean and modern vehicles to meet the needs of every purpose.
                                <br><br>
                                A full range of vehicles including Corolla, Axio, Allion, Premio, Town_Ace_Noah, X_Noah, Hiace and SUVs are available in our fleet.
                                With takearide.com.bd's discounted car rental rates and NO mileage limits, you can meet all of your Official & Personal Transport requirements.
                            </p>
                            <a href="javascript:(void)" target="_blank" class="resource-btn zoom-hover">Rent A Car!</a>
                        </div>
                        <div class="col-lg-5 text-center order-1 order-lg-2 resource-bg" style="background-image: url(/users/img/service/dhaka_2.jpg);border-radius:10px;">
                        </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                        <div class="col-lg-6 details order-2 order-lg-1">
                            <h3>Rent Without Fuel For Travelling Outside Dhaka</h3>
                            <h3>Excluding Fuel & Driver Cost</h3>
                            <p>
                                Thinking about Renting a Car daily basis for exploring Bangladesh?
                                A full range of vehicles including Corolla, Axio, Allion, Premio, Town_Ace_Noah, X_Noah, Hiace and SUVs are available in our fleet. With takearide.com.bd's discounted car rental rates and NO mileage limits,
                                you can meet all of your Official & Personal Transport requirements.
                                Our car will take you to 64 districts and 469 upazilas!
                            </p>
                            <a href="javascript:(void)" target="_blank" class="resource-btn zoom-hover">Rent A Car!</a>
                        </div>
                        <div class="col-lg-5 text-center order-1 order-lg-2 resource-bg" style="background-image: url(/users/img/service/bangladesh.jpg);border-radius:10px;">
                        </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab-5">
                        <div class="row">
                        <div class="col-lg-6 details order-2 order-lg-1">
                            <h3>Long-Term & Monthly Car Rentals</h3>
                            <p>
                                Need a #Car for a #Month or more? Our Multi-Month Program is available on a full range of vehicles including #Axio,
                                #Allion, #Premio, #Town_Ace_Noah, #X_Noah, #Hiace and #SUVs.
                                <br><br>
                                With takearide.com.bd's
                                discounted car rental rates and NO mileage limits, you can meet all of your #Official & #Personal #Transport requirements!
                            </p>
                            <a href="javascript:(void)" target="_blank" class="resource-btn zoom-hover">Rent A Car!</a>
                        </div>
                        <div class="col-lg-5 text-center order-1 order-lg-2 resource-bg" style="background-image: url(/users/img/service/month.jpg);border-radius:10px;">
                        </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab-6">
                        <div class="row">
                        <div class="col-lg-6 details order-2 order-lg-1">
                            <h3>Office Pick & Drop</h3>
                            <h3>Smart Tranportation Solution for Office Going People</h3>
                            <p>
                                Cars are the most important and comfortable mode for commute of employees. Our state of the art Staff
                                Transportation Solution is more than a conventional shuttle service;
                                we offer need based personalized solutions on most competitive and cost-effective basis.
                                <br><br>
                                If you are looking for daily staff pick and drop services to reach office timely,
                                takearide.com.bd conveniently gets you to a listing of best services in Dhaka city for the below routes .
                            </p>
                            <a href="javascript:(void)" target="_blank" class="resource-btn zoom-hover">Rent A Car!</a>
                        </div>
                        <div class="col-lg-5 text-center order-1 order-lg-2 resource-bg" style="background-image: url(/users/img/service/office.jpg);border-radius:10px;">
                        </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab-7">
                        <div class="row">
                        <div class="col-lg-6 details order-2 order-lg-1">
                            <h3>Inter District Drop <br>Travel Anywhere in Bangladesh</h3>
                            <h3>Our car will take you to 64 districts and 469 upazilas!</h3>

                            <p>
                                You can enjoy your travel anywhere in Bangladesh.
                                <br>
                                Whether you're visiting family and friends,
                                or taking a business trip, you can rent luxury vehicles from us.
                            </p>
                            <a href="javascript:(void)" target="_blank" class="resource-btn zoom-hover">Rent A Car!</a>
                        </div>
                        <div class="col-lg-5 text-center order-1 order-lg-2 resource-bg" style="background-image: url(/users/img/service/bangladesh_2.jpg);border-radius:10px;">
                        </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab-8">
                        <div class="row">
                        <div class="col-lg-6 details order-2 order-lg-1">
                            <h3>Go Travel with our Cars</h3>

                            <p>
                                Shopping to exploration, monuments to gardens, sightseeing spots to other destinations,
                                everything will get accessible once you have Rented A Car from www.takearide.com.bd
                            </p>
                            <a href="javascript:(void)" target="_blank" class="resource-btn zoom-hover">Rent A Car!</a>
                        </div>
                        <div class="col-lg-5 text-center order-1 order-lg-2 resource-bg" style="background-image: url(/users/img/service/travel.jpg);border-radius:10px;">
                        </div>
                        </div>
                    </div>

                    </div>
                </div>

                </div>

            </div>
        </section>
    <!-- End Services Section -->

    <!-- ======= strip Section ======= -->
        <section id="portal-strip" class="strip">
            <div class="container-fluid strip-container" data-aos="zoom-in">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-11 text-center">
                <h3><marquee scrollamount="8">Skip the waiting on the phone and simply request a car online.</marquee></h3>
                <a class="strip-btn" href="javascript:(void)">Browse Cars</a>
                </div>
            </div>
            </div>
        </section>
    <!-- End strip Section -->

    <!-- ======= Team ======= -->
        {{-- <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                <h2>Team</h2>
                </div>

                <div class="row">

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                    <div class="pic"><img src="users/img/doctors/doctors-1.webp" class="img-fluid lazyload" alt="doctor-1"></div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <span>Chief Medical Officer</span>
                        <div class="social">
                        <a href="javascript:(void)"><i class="ri-twitter-fill"></i></a>
                        <a href="javascript:(void)"><i class="ri-facebook-fill"></i></a>
                        <a href="javascript:(void)"><i class="ri-instagram-fill"></i></a>
                        <a href="javascript:(void)"> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                    <div class="pic"><img src="users/img/doctors/doctors-2.webp" class="img-fluid lazyload" alt="doctor-2"></div>
                    <div class="member-info">
                        <h4>Sarah Jhonson</h4>
                        <span>Anesthesiologist</span>
                        <div class="social">
                        <a href="javascript:(void)"><i class="ri-twitter-fill"></i></a>
                        <a href="javascript:(void)"><i class="ri-facebook-fill"></i></a>
                        <a href="javascript:(void)"><i class="ri-instagram-fill"></i></a>
                        <a href="javascript:(void)"> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                    <div class="pic"><img src="users/img/doctors/doctors-3.webp" class="img-fluid lazyload" alt="doctor-3"></div>
                    <div class="member-info">
                        <h4>William Anderson</h4>
                        <span>Cardiology</span>
                        <div class="social">
                        <a href="javascript:(void)"><i class="ri-twitter-fill"></i></a>
                        <a href="javascript:(void)"><i class="ri-facebook-fill"></i></a>
                        <a href="javascript:(void)"><i class="ri-instagram-fill"></i></a>
                        <a href="javascript:(void)"> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                    <div class="pic"><img src="users/img/doctors/doctors-4.webp" class="img-fluid lazyload" alt="doctor-4"></div>
                    <div class="member-info">
                        <h4>Amanda Jepson</h4>
                        <span>Neurosurgeon</span>
                        <div class="social">
                        <a href="javascript:(void)"><i class="ri-twitter-fill"></i></a>
                        <a href="javascript:(void)"><i class="ri-facebook-fill"></i></a>
                        <a href="javascript:(void)"><i class="ri-instagram-fill"></i></a>
                        <a href="javascript:(void)"> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                    </div>
                </div>

                </div>

            </div>
        </section> --}}
    <!-- End Team -->

    <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                <h2>Contact</h2>
                </div>
            </div>

            <div class="container">
                <div class="row mt-5">

                <div class="col-lg-12">
                    <div class="info">
                        <div class="row">

                            <div class="col-lg-4">
                                <div class="address zoom-hover">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p> 51 Siddheswari Rd, Dhaka 1217</p>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="phone zoom-hover">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>02-58315626</p>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="email zoom-hover">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>support@takearide.com</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                </div>

            </div>
        </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->

@endsection
