@include('header')



<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>+971 58 175 4773</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>info@mashareqalrabie.com</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
               
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0"><img class="img-fluid me-3" src="img/icon/icon-02-primary.png" alt=""></h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light pe-4 py-3 py-lg-0">
                <a href="#home" class="nav-item nav-link active">{{__('message.Home')}}</a>
                <a href="#aboutus" class="nav-item nav-link">{{__('message.About')}}</a>
                <a href="#WhyUs" class="nav-item nav-link">{{__('message.WhyUs')}}</a>
                <a href="#OurServices" class="nav-item nav-link">{{__('message.OurServices')}}</a>
                <a href="#goals" class="nav-item nav-link">{{__('message.goals')}}</a>
                

                <a href="{{__('message.langLink')}}" class="nav-item nav-link">{{__('message.lang')}}</a>
                
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> -->
                
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
               
                <a class="btn btn-square rounded-circle bg-light text-primary me-0" href="https://www.instagram.com/mashareqalrabie/"><i class="fab fa-instagram"></i></a>
                
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5"  id="home" > 
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-4 animated slideInDown">
                                    {{__('message.We_Provide_Best_AC_Repair_Services')}}
                                      
                                    </h1>
                                    <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">
                                      
                                    {{__('message.service_p_provide')}}
                                </p>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">
                                        <i class="fa fa-call"></i>
                                    {{__('message.Call_Us')}}    
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-4 animated slideInDown">
                                    {{__('message.Quality_Heating_Air_Condition_Services')}}  
                                   </h1>
                                    <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">{{__('message.service_p_provide')}} </p>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">     {{__('message.Call_Us')}} </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5"  id="aboutus">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-5">
                        {{__('message.welcome_to_center')}}    
                      </h1>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="img/icon/icon-07-primary.png" alt="">
                                    <h5 class="mb-0">{{__('message.Experts_Technician')}}</h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 me-3" src="img/icon/icon-09-primary.png" alt="">
                                    <h5 class="mb-0">
                                        
                                    {{__('message.Best_Quality_Services')}}</h5>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4">{{__('message.aboutP')}}</p>
                        <div class="border-top mt-4 pt-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-phone-alt text-white"></i>
                                        </div>
                                        <h5 class="mb-0">+971 581754773</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                                            <i class="fa fa-envelope text-white"></i>
                                        </div>
                                        <h5 class="mb-0">info@mashariqalrabie.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" >
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-1.jpg">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="text-primary">  {{__('message.Happy_Clients')}}</span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="text-primary">  {{__('message.Projects_Succeed')}}</span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="text-primary">  {{__('message.Awards_Achieved')}}</span>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">10</h1>
                    <span class="text-primary">  {{__('message.Team_Members')}}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5" id="WhyUs">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-5">{{__('message.Few_Reasons_Why_People_Choosing_Us')}}</h1>
                    <p class="mb-5">
                    {{__('message.few_resons_p')}}
                </p>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="img/icon/icon-08-light.png" alt="">
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3">
                            {{__('message.Trusted_Service_Center')}}    
                          </h5>
                            <span> {{__('message.Trusted_Service_Center_p')}}    </span>
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="img/icon/icon-10-light.png" alt="">
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3">{{__('message.Reasonable_Price')}}</h5>
                            <span>{{__('message.Reasonable_Price_p')}}</span>
                        </div>
                    </div>
                    <div class="d-flex mb-0">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="img/icon/icon-06-light.png" alt="">
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3">{{__('message.Response_and_quick_response')}}</h5>
                            <span>{{__('message.Response_and_quick_response_p')}}  .</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/feature.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl py-5"  id="OurServices">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">{{__('message.We_Provide_professional_Heating__Cooling_Services')}} </h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/service-1.jpg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="img/icon/icon-01-light.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">{{__('message.AC_Installation')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/service-2.jpg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="img/icon/icon-02-light.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">{{__('message.Cooling_Services')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/service-3.jpg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="img/icon/icon-03-light.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">{{__('message.Heating_Services')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/service-4.jpg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="img/icon/icon-04-light.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">{{__('message.Maintenance_Repair')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/service-5.jpg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="img/icon/icon-05-light.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">{{__('message.Indoor_Air_Quality')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/service-6.jpg" alt="">
                        <div class="d-flex align-items-center bg-light">
                            <div class="service-icon flex-shrink-0 bg-primary">
                                <img class="img-fluid" src="img/icon/icon-06-light.png" alt="">
                            </div>
                            <a class="h4 mx-4 mb-0" href="">{{__('message.Plumbing')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Quote Start -->
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 quote-text" data-parallax="scroll" data-image-src="img/carousel-1.jpg">
                    <div class="h-100 px-4 px-sm-5 ps-lg-0 wow " data-wow-delay="0.1s">
                        <h1 class="text-white mb-4">{{__('message.Mission')}}</h1>
                        <p class="text-light mb-5">{{__('message.MissionP')}}</p>

                        <h1 class="text-white mb-4">{{__('message.Our_message')}}</h1>
                        <p class="text-light mb-5">{{__('message.MissionP')}}</p>
                        
                    </div>
                    
                    
                </div>
                <div class="col-lg-6 quote-form" data-parallax="scroll" data-image-src="img/carousel-2.jpg">
                    <div class="h-100 px-4 px-sm-5 pe-lg-0 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-white p-4 p-sm-5">
                           <!-- Features Start -->
    <div class="container-xxl py-5" id="goals">
        <div class="container">
         
                    <h1 class="display-6 mb-5">{{__('message.goals')}}</h1>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="img/icon/icon-08-light.png" alt="">
                        </div>
                        <div class="ms-4">
                            <h5 class="mb-3">{{__('message.promote')}}</h5>
                            <span>{{__('message.promote_p')}}</span>
                        </div>
                    </div>
                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="img/icon/icon-10-light.png" alt="">
                        </div>
                        <div class="ms-4">
                        <h5 class="mb-3">{{__('message.improve')}}</h5>
                        <span>{{__('message.improve_p')}}</span>
                        </div>
                    </div>
                    <div class="d-flex mb-0">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle" style="width: 90px; height: 90px;">
                            <img class="img-fluid" src="img/icon/icon-06-light.png" alt="">
                        </div>
                        <div class="ms-4">
                        <h5 class="mb-3">{{__('message.PIONEERS')}}</h5>
                        <span>{{__('message.PIONEERS_p')}}</span>
                        </div>
               
            
            </div>
        </div>
    </div>
    <!-- Features End -->
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">{{__('message.offers')}}</h1>
            </div>
            <div class="row g-4">
                
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-ite">
                        <div class="team-img position-relative overflow-hidden">
                        <iframe width="320" height="440" src="https://www.instagram.com/p/C74Q4NhSN4w/embed/" frameborder="0"></iframe>

                         
                        </div>
                      
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-ite">
                        <div class="team-img position-relative overflow-hidden">
                        <iframe width="320" height="440" src="https://www.instagram.com/p/C8CMnFvSNVQ/embed/" frameborder="0"></iframe>

                         
                        </div>
                      
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-ite">
                        <div class="team-img position-relative overflow-hidden">
                        <iframe width="320" height="440" src="https://www.instagram.com/p/C8w3M8Qtu88/embed/" frameborder="0"></iframe>

                         
                        </div>
                      
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-ite">
                        <div class="team-img position-relative overflow-hidden">
                        <iframe width="320" height="440" src="https://www.instagram.com/p/C74SxyQS4S1/embed/" frameborder="0"></iframe>

                         
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">What They Say About Our Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <img class="img-fluid mx-auto mb-4" src="img/testimonial-1.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid mx-auto mb-4" src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid mx-auto mb-4" src="img/testimonial-3.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class=">
                    <h1 class="text-white "><img class="img-fluid me-3" src="img/icon/icon-02-light.png" alt=""></h1>
                </div>
          
                <div class="col-lg-3 col-md-6 text-light">
                    <h5 class="text-light mb-4">
                    
                        {{__('message.Get In Touch')}}   
                    </h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>
                    {{__('message.Dubai')}}   
                    </p>
                    <p><i class="fa fa-phone-alt me-3"></i>+971 58 175 4773</p>
                    <p><i class="fa fa-envelope me-3"></i>info@mashareqalrabie.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">
                    {{__('message.OurServices')}}       
                    </h5>
                    <a class="btn btn-link" href="">{{__('message.Maintenance_Repair')}}</a>
                    <a class="btn btn-link" href="">{{__('message.Heating_Services')}}</a>
                    <a class="btn btn-link" href="">{{__('message.Cooling_Services')}}</a>
                    <a class="btn btn-link" href="">{{__('message.AC_Installation')}}</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">
                    {{__('message.Quick Links')}} 
                    </h5>
                    <a class="btn btn-link" href="#aboutus">{{__('message.About')}}</a>
                    <a class="btn btn-link" href="#OurServices">{{__('message.OurServices')}}</a>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">
                    {{__('message.Follow Us')}}     
                  </h5>
                    <div class="d-flex">
                        <a class="btn btn-square rounded-circle me-1" href="https://www.instagram.com/mashareqalrabie/"><i class="fab fa-instagram"></i></a>
                     
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Mashareq Alrabie</a>,<span class="text-light"> All Right Reserved. </span>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                       \
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


 
</body>


    </html>
@include('footer')

  