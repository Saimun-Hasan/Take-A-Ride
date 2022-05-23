@extends('users/layout')

@section('main-content')
<main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Do You Need An Appointment?</h3>
              <p>
                Skip the waiting on the phone and simply request an appointment onlineSkip the waiting on the phone and simply request an appointment online
              </p>
              <div class="text-center">
                <a href="#" class="more-btn" id="appointment">Make An Appointment <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4><a onclick=" window.open('https://rtpmedsol.rtpdemo.com/demoforms/mfamnewpt', '_blank'); return false;">New Patient Forms</a></h4>
                    <p>If you are a new patient and save time on your first visit by filling out the New Patient Packet here</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4><a>Patient Portal</a></h4>
                    <p>Access for current patients to their Patient Portal. Access your medical records and much more</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4><a onclick=" window.open('https://rtpmedsol.rtpdemo.com/demoforms/survey', '_blank'); return false;">Survey</a></h4>
                    <p>We’d love to hear about your experience with us.</p>
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
            <a href="#" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center pt-2 pb-5 px-lg-5">
            <h4>ABOUT US</h4>
            <h3>WELCOME TO RTP MEDICAL SOLUTION</h3>
            <p>We are a leading medical solutions expert in the United States.
              The idea behind RTP Medical Solution was to develop a long term concept which aims to improve people’s medical care.
              </p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="javascript:(void)">Trained Physician</a></h4>
              <p class="description">Our highly trained physicians and front of office carry out only the highest quality medical services that are of the finest standard</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="javascript:(void)">Extra Care</a></h4>
              <p class="description">We pride ourselves on getting to see our patients FAST – taking extra care to ensure you land a same-day appointment with a short waiting time</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="javascript:(void)">24 X 7 Support</a></h4>
              <p class="description">Please feel free to view our range of insurance options. We also offer a 24-hour service for out of hour questions and emergency services</p>
            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg pt-0">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
         <h2>Follow us</h2>
        </div>
        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a href="https://www.facebook.com/RTPMedSol" target="_blank"><img src="users/img/icons/03.png" class="img-fluid lazyload" alt="facebook"></a></div>
            <div class="swiper-slide"><a href="https://www.google.com/search?rlz=1C1GCEA_enUS878US878&sxsrf=ALeKk0035SPZlyQXIWXYmhwEd0uDnGWMoA%3A1598546999959&ei=N-RHX6SJOu6k_QaZ_angBQ&q=reviewthatplace&oq=reviewthatplace&gs_lcp=CgZwc3ktYWIQAzIECCMQJzIECCMQJzIECAAQDTIGCAAQDRAeMgYIABANEB4yBggAEA0QHjIICAAQCBANEB4yCAgAEAgQDRAeMggIABAIEA0QHjIICAAQCBANEB46BAgAEEc6BwgjELACECc6CAgAEAgQBxAeUL0vWIs4YN05aABwAXgAgAF5iAHvAZIBAzAuMpgBAKABAaoBB2d3cy13aXrAAQE&sclient=psy-ab&ved=0ahUKEwjkgNvQ67vrAhVuUt8KHZl-ClwQ4dUDCA0&uact=5#lrd=0x88e7775087a21f57:0x568749b03f559c74,1" target="_blank"><img src="users/img/icons/04.png" class="img-fluid lazyload" alt="google"></a></div>
            <div class="swiper-slide"><a href="https://www.youtube.com/user/sansari2" target="_blank"><img src="users/img/icons/13.png" class="img-fluid lazyload" alt="youtube"></a></div>
            <div class="swiper-slide"><a href="https://www.healthgrades.com/" target="_blank"><img src="users/img/icons/06.png" class="img-fluid lazyload" alt="healthgrades"></a></div>
            <div class="swiper-slide"><a href="https://www.instagram.com/rtpmedsol/" target="_blank"><img src="users/img/icons/07.png" class="img-fluid lazyload" alt="instagram"></a></div>
            <div class="swiper-slide"><a href="https://www.ratemds.com/" target="_blank"><img src="users/img/icons/08.png" class="img-fluid lazyload" alt="ratemds"></a></div>
            <div class="swiper-slide"><a href="https://twitter.com/MedRtp" target="_blank"><img src="users/img/icons/09.png" class="img-fluid lazyload" alt="twitter"></a></div>
            <div class="swiper-slide"><a href="https://www.vitals.com/" target="_blank"><img src="users/img/icons/10.png" class="img-fluid lazyload" alt="vitals"></a></div>
            <div class="swiper-slide"><a href="https://www.webmd.com/" target="_blank"><img src="users/img/icons/11.png" class="img-fluid lazyload" alt="webmd"></a></div>
            <div class="swiper-slide"><a href="https://www.yelp.com/" target="_blank"><img src="users/img/icons/12.jpg" class="img-fluid lazyload" alt="yelp"></a></div>
            <div class="swiper-slide"><a href="https://www.doctor.com/" target="_blank"><img src="users/img/icons/01.png" class="img-fluid lazyload" alt="doctor"></a></div>
          </div>
          <div class="swiper-pagination mt-5"></div>
        </div>
      </div>

    </section>
    <!-- End Clients Section -->

    <!-- ======= Patient Resource Center Section ======= -->
    <section id="resources" class="resources">
      <div class="container">

        <div class="section-title">
          <h2>Patient Resource Center</h2>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Request Forms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Update Demo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Authorization Release</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">New Patient Forms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Book Appointments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Patient Portal</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-6 details order-2 order-lg-1">
                    <h3>Request Forms</h3>
                    <p>Save time and request any type of form you need from our office online</p>
                    <a href="https://rtpmedsol.rtpdemo.com/demoforms/requestform" target="_blank" class="resource-btn">Click Here</a>
                  </div>
                  <div class="col-lg-6 text-center order-1 order-lg-2 resource-bg" style="background-image: url(assets/img/resources/section8.1.webp);height: 335px;">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-6 details order-2 order-lg-1">
                    <h3>Update Demo</h3>
                    <p>Update your demographics; Address, Phone, Email, etc.</p>
                    <a href="https://rtpmedsol.rtpdemo.com/demoforms/updatedemo" target="_blank" class="resource-btn">Click Here</a>
                  </div>
                  <div class="col-lg-6 text-center order-1 order-lg-2 resource-bg" style="background-image: url(assets/img/resources/section8.2.webp);height: 335px;">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-6 details order-2 order-lg-1">
                    <h3>Authorization Release</h3>
                    <p>This forms gives us the ability to obtain or release your medical records</p>
                    <a href="https://rtpmedsol.rtpdemo.com/demoforms/authorizationrelease" target="_blank" class="resource-btn">Click Here</a>
                  </div>
                  <div class="col-lg-6 text-center order-1 order-lg-2 resource-bg" style="background-image: url(assets/img/resources/section8.3.webp);height: 335px;">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-6 details order-2 order-lg-1">
                    <h3>New Patient Forms</h3>
                    <p>If you are a new patient and save time on your first visit by filling out the New Patient Packet here</p>
                    <a href="https://rtpmedsol.rtpdemo.com/demoforms/mfamnewpt" target="_blank" class="resource-btn">Click Here</a>
                  </div>
                  <div class="col-lg-6 text-center order-1 order-lg-2 resource-bg" style="background-image: url(assets/img/resources/section8.4.webp);height: 335px;">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-6 details order-2 order-lg-1">
                    <h3>Book Appointments</h3>
                    <p>Skip the waiting on the phone and simply request an appointment online</p>
                    <a href="https://rtpmedsol.rtpdemo.com/demoforms/bookappointment" target="_blank" class="resource-btn">Click Here</a>
                  </div>
                  <div class="col-lg-6 text-center order-1 order-lg-2 resource-bg" style="background-image: url(assets/img/resources/section8.5.webp);height: 335px;">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-6">
                <div class="row">
                  <div class="col-lg-6 details order-2 order-lg-1">
                    <h3>Patient Portal</h3>
                    <p>Access for current patients to their Patient Portal. Access your medical records and much more</p>
                    <a href="#" class="resource-btn">Click Here</a>
                  </div>
                  <div class="col-lg-6 text-center order-1 order-lg-2 resource-bg" style="background-image: url(assets/img/resources/section8.6.webp);height: 335px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Patient Resource Center Section -->

    <!-- ======= strip Section ======= -->
    <section id="paperwork-strip" class="strip">
      <div class="container-fluid strip-container" data-aos="zoom-in">
       <div class="row justify-content-center">
        <div class="col-lg-8 col-11 text-center">
          <h3><marquee scrollamount="8">Get your message to your patients....reduce staff hours on paperwork.</marquee></h3>
          <div><h3><a style="color: yellow;">Save Money!</a></h3></div>
        </div>
       </div>
      </div>
    </section>
    <!-- End strip Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <h2>Medical Services</h2>
        </div>

        <div class="row" id="service1">
         <ul class="nav nav-tabs row d-flex">
           <li class="nav-item col-3" data-aos="zoom-in">
             <a class="nav-link active show" data-bs-toggle="tab" href="#service-1">
               <i class="ri-gps-line"></i>
               <h4 class="d-none d-lg-block">Sports Physicals</h4>
             </a>
           </li>
           <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
             <a class="nav-link" data-bs-toggle="tab" href="#service-2">
               <i class="ri-body-scan-line"></i>
               <h4 class="d-none d-lg-block">Camp Physicals</h4>
             </a>
           </li>
           <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
             <a class="nav-link" data-bs-toggle="tab" href="#service-3">
               <i class="ri-sun-line"></i>
               <h4 class="d-none d-lg-block">Including Gyn Services</h4>
             </a>
           </li>
           <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
             <a class="nav-link" data-bs-toggle="tab" href="#service-4">
               <i class="ri-store-line"></i>
               <h4 class="d-none d-lg-block">School Physicals</h4>
             </a>
           </li>
         </ul>

         <div class="tab-content" data-aos="fade-up">
           <div class="tab-pane active show" id="service-1">
             <div class="row">
               <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                 <h3>Sports Physicals</h3>
                 <p class="font-italic">
                  Seeing your doctor for routine well-child visits and sports physicals helps keep your child's medical records and health history up to date.
                 </p>
               </div>
               <div class="col-lg-12 order-1 order-lg-2 text-center service-bg" style="background-image: url(assets/img/service/image1.webp);height:500px;">
               </div>
             </div>
           </div>
           <div class="tab-pane" id="service-2">
             <div class="row">
               <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                 <h3>Camp Physicals</h3>
                 <p>
                  Also called pre-participation physicals, camp physical examinations are an essential part of registering children for camps.
                 </p>
               </div>
               <div class="col-lg-12 order-1 order-lg-2 text-center service-bg" style="background-image: url(assets/img/service/image2.webp);height:500px;">
               </div>
             </div>
           </div>
           <div class="tab-pane" id="service-3">
             <div class="row">
               <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                 <h3>Including Gyn Services</h3>
                 <p>
                  Our OB/GYNs offer expert care for women of all ages. Whether you're pregnant or need specialized gynecological treatment.
                 </p>
               </div>
               <div class="col-lg-12 order-1 order-lg-2 text-center service-bg" style="background-image: url(assets/img/service/image3.webp);height:500px;">
               </div>
             </div>
           </div>
           <div class="tab-pane" id="service-4">
             <div class="row">
               <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                 <h3>School Physicals</h3>
                 <p>
                  School physicals are wellness checkups that are required by most schools before a student can participate in sports and other activities.
                 </p>
               </div>
               <div class="col-lg-12 order-1 order-lg-2 text-center service-bg" style="background-image: url(assets/img/service/image4.webp);height:500px;">
               </div>
             </div>
           </div>
         </div>
        </div>

        <div class="row" id="service2" style="display: none;">
         <ul class="nav nav-tabs row d-flex">
           <li class="nav-item col-3" data-aos="zoom-in">
             <a class="nav-link active show" data-bs-toggle="tab" href="#service-5">
               <i class="ri-gps-line"></i>
               <h4 class="d-none d-lg-block">FAA exams</h4>
             </a>
           </li>
           <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
             <a class="nav-link" data-bs-toggle="tab" href="#service-6">
               <i class="ri-body-scan-line"></i>
               <h4 class="d-none d-lg-block">Laboratory Services</h4>
             </a>
           </li>
           <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
             <a class="nav-link" data-bs-toggle="tab" href="#service-7">
               <i class="ri-sun-line"></i>
               <h4 class="d-none d-lg-block">EKG’s</h4>
             </a>
           </li>
           <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
             <a class="nav-link" data-bs-toggle="tab" href="#service-8">
               <i class="ri-store-line"></i>
               <h4 class="d-none d-lg-block">Well Child Care</h4>
             </a>
           </li>
         </ul>

         <div class="tab-content" data-aos="fade-up">
           <div class="tab-pane active show" id="service-5">
             <div class="row">
               <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                 <h3>FAA exams</h3>
                 <p class="font-italic">
                  An AME who knows you well is more likely to answer questions for you over the phone. Understand the three possible outcomes of an FAA medical examination.
                 </p>
               </div>
               <div class="col-lg-12 order-1 order-lg-2 text-center service-bg" style="background-image: url(assets/img/service/image5.webp);height:500px;">
               </div>
             </div>
           </div>
           <div class="tab-pane" id="service-6">
             <div class="row">
               <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                 <h3>Laboratory Services</h3>
                 <p>
                  Learn about medical tests, including what the tests are used for, why a doctor may order a test, how a test will feel, and what the results may mean.
                 </p>
               </div>
               <div class="col-lg-12 order-1 order-lg-2 text-center service-bg" style="background-image: url(assets/img/service/image6.webp);height:500px;">
               </div>
             </div>
           </div>
           <div class="tab-pane" id="service-7">
             <div class="row">
               <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                 <h3>EKG’s</h3>
                 <p>
                  Your doctor may suggest you get an electrocardiogram also called an EKG or ECG to check for signs of heart disease.
                 </p>
               </div>
               <div class="col-lg-12 order-1 order-lg-2 text-center service-bg" style="background-image: url(assets/img/service/image7.webp);height:500px;">
               </div>
             </div>
           </div>
           <div class="tab-pane" id="service-8">
             <div class="row">
               <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                 <h3>Well Child Care</h3>
                 <p>
                  Parents know who they should go to when their child is sick. But pediatrician visits are just as important for healthy children
                 </p>
               </div>
               <div class="col-lg-12 order-1 order-lg-2 text-center service-bg" style="background-image: url(assets/img/service/image8.webp);height:500px;">
               </div>
             </div>
           </div>
         </div>
        </div>

         <div class="row mt-5 justify-content-center">
          <button type="button" class="btn service-btn" id="service-btn1" style="margin-right: 15px;">1</button>
          <button type="button" class="btn service-btn" id="service-btn2">2</button>
        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= strip Section ======= -->
    <section id="portal-strip" class="strip">
      <div class="container-fluid strip-container" data-aos="zoom-in">
       <div class="row justify-content-center">
        <div class="col-lg-8 col-11 text-center">
          <h3><marquee scrollamount="8">Need access to your records? Get them in your patient portal!</marquee></h3>
          <a class="strip-btn" href="#">Patient Portal</a>
        </div>
       </div>
      </div>
    </section>
    <!-- End strip Section -->

    <!-- ======= Insurance Section ======= -->
    <section id="insurances" class="insurances section-bg">
     <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Medical Insurance</h2>
      </div>

      <!-- Insurance Tabs -->
      <div class="row feture-tabs" data-aos="fade-up">
        <div class="col-lg-1"></div>
       <div class="col-lg-4">
         <img src="users/img/medicalinsurance.webp" class="img-fluid insurance-bg lazyload" alt="insurance">
       </div>
       <!-- Tab Content -->
       <div class="col-lg-6">
        <div class="tab-content">
          <!-- tab1 -->
          <div class="tab-pane fade show active" id="insurance1">
           <div class="row align-self-center gy-4">
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                          <div class="insurance-box d-flex align-items-center">
                           <img src="users/img/insurance/aetna.webp" class="img-fluid lazyload">
                         </div>
                       </div>

                       <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                        <div class="insurance-box d-flex align-items-center">
                         <img src="users/img/insurance/Ambetter.png" class="img-fluid lazyload">
                       </div>
                     </div>

                     <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                      <div class="insurance-box d-flex align-items-center">
                       <img src="users/img/insurance/avmed.webp" class="img-fluid lazyload">
                     </div>
                   </div>

                   <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                    <div class="insurance-box d-flex align-items-center">
                     <img src="users/img/insurance/cigna-logo-1.webp" class="img-fluid lazyload">
                   </div>
                 </div>

                 <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                  <div class="insurance-box d-flex align-items-center">
                   <img src="users/img/insurance/humana.webp" class="img-fluid lazyload">
                 </div>
               </div>

               <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="insurance-box d-flex align-items-center">
                 <img src="users/img/insurance/medicaid.webp" class="img-fluid lazyload">
               </div>
             </div>

             <div class="col-md-6" data-aos="zoom-out" data-aos-delay="800">
              <div class="insurance-box d-flex align-items-center">
               <img src="users/img/insurance/simply.webp" class="img-fluid lazyload">
             </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="900">
              <div class="insurance-box d-flex align-items-center">
               <img src="users/img/insurance/sunshine.webp" class="img-fluid lazyload">
             </div>
            </div>
           </div>
          </div>
          <!-- tab1 -->
          <!-- tab2 -->
          <div class="tab-pane fade show" id="insurance2">
           <div class="row align-self-center gy-4">
               <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                 <div class="insurance-box d-flex align-items-center">
                  <img src="users/img/insurance/aetna.webp" class="img-fluid lazyload">
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
               <div class="insurance-box d-flex align-items-center">
                <img src="users/img/insurance/avmed.webp" class="img-fluid lazyload">
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
             <div class="insurance-box d-flex align-items-center">
              <img src="users/img/insurance/humana.webp" class="img-fluid lazyload">
            </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="800">
             <div class="insurance-box d-flex align-items-center">
              <img src="users/img/insurance/simply.webp" class="img-fluid lazyload">
            </div>
            </div>
           </div>
          </div>
          <!-- tab2 -->
          <!-- tab3 -->
          <div class="tab-pane fade show" id="insurance3">
           <div class="row align-self-center gy-4">
              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="insurance-box d-flex align-items-center">
                 <img src="users/img/insurance/Ambetter.webp" class="img-fluid lazyload">
               </div>
             </div>

             <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="insurance-box d-flex align-items-center">
               <img src="users/img/insurance/cigna-logo-1.webp" class="img-fluid lazyload">
             </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
              <div class="insurance-box d-flex align-items-center">
               <img src="users/img/insurance/medicaid.webp" class="img-fluid lazyload">
             </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="900">
              <div class="insurance-box d-flex align-items-center">
               <img src="users/img/insurance/sunshine.webp" class="img-fluid lazyload">
             </div>
            </div>
           </div>
          </div>
          <!-- tab3 -->
        </div>
       </div><!-- Tab Content -->
       <div class="col-lg-1"></div>
      </div>
     </div>
    </section>
    <!-- End Insurances Section -->

    <!-- ======= strip Section ======= -->
    <section id="package-strip" class="strip">
      <div class="container-fluid strip-container" data-aos="zoom-in">
       <div class="row justify-content-center">
        <div class="col-lg-8 col-11 text-center">
          <h3><marquee scrollamount="8">Try our Resident package for 3 months.</marquee></h3>
          <div><h3><a style="color: yellow;">No Payment or Commitments Required!</a></h3></div>
          <a class="strip-btn" href="https://rtpmedicalsolution.com" target="_blank">Click Here!</a>
        </div>
       </div>
      </div>
    </section>
    <!-- End strip Section -->

    <!-- ======= Team ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Our Doctors</h2>
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
    </section>
    <!-- End Team -->

    <!-- ======= strip Section ======= -->
    <section id="review-strip" class="strip">
      <div class="container-fluid strip-container" data-aos="zoom-in">
       <div class="row justify-content-center">
        <div class="col-lg-8 col-11 text-center">
          <h3><marquee scrollamount="8">Collect and Distribute reviews from your patients from your RMS Listing!</marquee></h3>
          <a class="strip-btn" href="https://rtprms.com/rtpmedsol" target="_blank">Take Me To My Listing</a>
        </div>
       </div>
      </div>
    </section>
    <!-- End strip Section-->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>7037 Rose Ave Suite B Orlando, FL 32810</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>support@reviewthatplace.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>888-503-1636</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-self-center">
           <iframe src="https://rtprms.com/Home/Reviews/62340" frameborder="0" scrolling="" ;="" data-aos="fade-up" data-aos-delay="100" style="width: 100%;height: 330px;"></iframe>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main><!-- End #main -->

@endsection
