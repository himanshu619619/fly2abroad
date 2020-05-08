@section('title', 'Fly 2 Abroad')
@include('header')
<div id="post-174"
    class="page-content post-174 page type-page status-publish hentry no-post-thumbnail single-page-details">



    <section class="wide-60 hero-section hero-3" id="hero-3">
        <div class="container">
            <div class="row d-flex align-items-center">



                <div class="col-lg-7 col-xl-7">
                    <div class="hero-3-txt mb-40">


                        <h2 class='darkblue-color'>Professional Assistance of Visas and Immigration</h2><!-- Title -->

                        <!-- Text Box #1 -->
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p class="p-md">We was built up in India with the intend to comprehensively take into account the migration needs of the competitors.</p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p class="p-md">Having a rich reputation of effectively handling of more than Thousands applications; subsequently upon examine about our association you would find that we are among the best movement specialist co-op in India.</p>
                        </div>


                    </div>
                </div> <!-- END HERO TEXT -->


                <!-- HERO REQUEST FORM -->
                <div class="col-lg-5 col-xl-5">
                    <div role="form" class="wpcf7" id="wpcf7-f293-p174-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form  action="{{url('sendmail/send')}}"  method="post" class="wpcf7-form">
                        {{ csrf_field() }}
                            <div id="hero-form" class="text-center mb-40">
                                <div class="row hero-request-form bg-darkblue">
                                    <div class="col-md-12 white-color">
                                        <h5 class="h5-lg">Request Free Consultation</h5>
                                    </div>
                                    <div id="input-name" class="col-md-12"><span
                                            class="wpcf7-form-control-wrap your-name"><input type="text"
                                                name="name" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control name"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Enter Your Name" /></span></div>
                                    <div id="input-email" class="col-md-12"><span
                                            class="wpcf7-form-control-wrap your-email"><input type="email"
                                                name="email" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control email"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="Enter Your Email" /></span></div>
                                    <div id="input-phone" class="col-md-12"><span
                                            class="wpcf7-form-control-wrap phone"><input type="tel" name="phone"
                                                value="Enter Your Phone Number" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control phone"
                                                aria-required="true" aria-invalid="false" /></span></div>
                                    <div id="input-visa" class="col-md-12 input-visa"><span
                                            class="wpcf7-form-control-wrap visa"><select name="visa"
                                                class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required custom-select visa">
                                                <option value="Visa For">Visa For</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Canada">Canada</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="USA">USA</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Netherlands">Netherlands</option>
                                            </select></span></div>
                                    <div class="col-md-12 form-btn"><input type="submit" value="Send Request"
                                            class="wpcf7-form-control wpcf7-submit btn btn-primary tra-white-hover submit" />
                                        <div class="white-color">
                                        @if (session('success'))
                  <div class="alert alert-success text-center">
                      {{ session('success') }}
                  </div>
                  @endif
                                        @if (session('error'))
                  <div class="alert alert-danger text-center">
                      {{ session('error') }}
                  </div>
                  @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- END HERO REQUEST FORM -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>



    <section class="bg-darkblue white-color cta-section cta-3" id="cta-3">
        <div class="container white-color">
            <div class="row d-flex align-items-center">


                <!-- CALL TO ACTION TEXT -->
                <div class="col-lg-12">

                    <!-- Title  -->
                    <div class="cta-txt text-center">
                        <h4 class="h4-xs txt-400">Need  &#038; visa consultation? <a
                                href="mailto:support@fly2abroad.com">Send a request</a> for free consultation</h4>
                    </div>

                </div>

            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>

    @include('ourservies');

    <div class="section-divider">
        <div class="container">
            <div class="row">
                <div class="grey-border"></div>
            </div>
        </div>
    </div>


    <section class="wide-60 about-section about-2" id="about-2">
        <div class="container">

            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="about-img about-2-img text-center mb-40">
                        <img class="img-fluid" src="{{asset('public/images/image-03.png')}}"
                            alt="about-image" />
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-2-txt pc-20 mb-40">
                        <span class='section-id id-color'></span>
                        <h3 class='h3-lg darkblue-color'>Consultations for prospective immigrants</h3>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum vitae purus
                                primis pretium ligula rutrum luctus blandit porta justo integer. Feugiat a primis
                                ultrice ligula </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>Nemo ipsam egestas volute turpis dolores and aliquam quaerat sodales sapien undo pretium
                                purus ligula a tempus ipsum undo auctor a mauris lectus ipsum blandit egestas magna
                                ligula </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum vitae purus
                                primis pretium ligula rutrum luctus blandit porta justo integer. Feugiat a primis
                                ultrice ligula </p>
                        </div>
                    </div>
                </div> <!-- END ABOUT TEXT	-->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>



    <section class="bg-lightgrey pt-100 about-section about-4 bg-tra-city" id="about-4">
        <div class="container">

            <div class="row d-flex flex-row-reverse align-items-center">
                <div class="col-lg-5 col-xl-5 offset-xl-1">
                    <div class="about-img about-4-img text-center ">
                        <img class="img-fluid" src="{{asset('public/images/immigration.jpg')}}"
                            alt="about-image" />
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="about-4-txt pc-20 mb-40">
                        <span class='section-id id-color'>Professional Advisors</span>
                        <h3 class='h3-lg darkblue-color'>We provide the best consulting services in the industry since
                            2009</h3>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>AFly 2 Abroad  has been conveying customized answers for its regarded customers for as far back as decade and a half. Our easy to understand and straightforward method of customer managing has upset the usefulness of visa consultancies. </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>We help people in migration to Canada, Australia, New Zealand, Hong Kong, Denmark, Germany, and Gulf nations. Migrating to another nation either for study or occupation isn't a simple assignment. A great deal of documentation and confirmation work should be done previously, which you can't think now. Many individuals could even lose their rest over it; in any case, you don't have to stress as our specialists are consistently close to you to help on each progression of the procedure </p>
                        </div>
                        <a class='btn btn-arrow btn-md btn-primary' href='tel:+1(778) 929 9866'><span>Call: +1(778) 929 9866<i
                                    class='fas fa-arrow-right'></i></span></a>
                    </div>
                </div> <!-- END ABOUT TEXT	-->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>


    <div class="section-divider">
        <div class="container">
            <div class="row">
                <div class="grey-border"></div>
            </div>
        </div>
    </div>


    <section class="wide-60 countries-section countries-2" id="countries-2">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-md-12 section-title center">


                    <h2 class='h2-xs'>Opportunities In Top Country's </h2><!-- Title -->


                                    <!-- Text -->

                </div>
            </div> <!-- END SECTION TITLE -->


            <div class="row">

                <!-- COUNTRY BOX -->
                <div class="col-md-6 col-lg-4">
                    <div class="cbox-2">

                        <!-- Flag -->
                        <div class="country-flag">
                            <img class="img-fluid" src="{{asset('public/images/australia.png')}}"
                                alt="Australia">
                            <h5 class='h5-xl darkblue-color'>Australia</h5>
                        </div>

                        <!-- Text -->
                        <p class='p-xs'>With an excellent public education and health sector, globally recognised universities, world class infrastructure and plenty of open space, Australia is a great place to raise a family and has some of the most liveable cities in the world </p>

                        <!-- Links List -->
                     
                    </div>
                </div><!-- COUNTRY BOX -->
                <div class="col-md-6 col-lg-4">
                    <div class="cbox-2">

                        <!-- Flag -->
                        <div class="country-flag">
                            <img class="img-fluid" src="{{asset('public/images/canada.png')}}" alt="Canada">
                            <h5 class='h5-xl darkblue-color'>Canada</h5>
                        </div>

                        <!-- Text -->
                        <p class='p-xs'>Canada is one of the best study destinations for the students in the world offering high-quality education at an affordable fee structure with degrees that are recognized worldwide.</p>

                        <!-- Links List -->
                      

                    </div>
                </div><!-- COUNTRY BOX -->
                <div class="col-md-6 col-lg-4">
                    <div class="cbox-2">

                        <!-- Flag -->
                        <div class="country-flag">
                            <img class="img-fluid" src="{{asset('public/images/united-kingdom.png')}}"
                                alt="United Kingdom">
                            <h5 class='h5-xl darkblue-color'>United Kingdom</h5>
                        </div>

                        <!-- Text -->
                        <p class='p-xs'>Working in the UK opens up many possibilities with there are long-term benefits to your career. Find out how our global opportunities team can help.</p>

                        <!-- Links List -->
                     
                    </div>
                </div><!-- COUNTRY BOX -->
                <div class="col-md-6 col-lg-4">
                    <div class="cbox-2">

                        <!-- Flag -->
                        <div class="country-flag">
                            <img class="img-fluid" src="{{asset('public/images/new-zealand.png')}}"
                                alt="New Zealand">
                            <h5 class='h5-xl darkblue-color'>New Zealand</h5>
                        </div>

                        <!-- Text -->
                        <p class='p-xs'>New Zealand has many job openings for specialists in sectors such as health, engineering and IT. But there are also opportunities for workers with more generalist skills, particularly in construction/trades and in business services</p>

                        <!-- Links List -->
                      
                    </div>
                </div><!-- COUNTRY BOX -->
                <div class="col-md-6 col-lg-4">
                    <div class="cbox-2">

                        <!-- Flag -->
                        <div class="country-flag">
                            <img class="img-fluid" src="{{asset('public/images/singapore.png')}}"
                                alt="Singapore">
                            <h5 class='h5-xl darkblue-color'>Singapore</h5>
                        </div>

                        <!-- Text -->
                        <p class='p-xs'>Explore opportunities to take your career to the next level. Whether you are a student, a graduate or an experienced professional, discover the impact you could make with a career at Shell.</p>

                        <!-- Links List -->
                       
                    </div>
                </div><!-- COUNTRY BOX -->
                <div class="col-md-6 col-lg-4">
                    <div class="cbox-2">

                        <!-- Flag -->
                        <div class="country-flag">
                            <img class="img-fluid" src="{{asset('public/images/usa.png')}}" alt="USA">
                            <h5 class='h5-xl darkblue-color'>USA</h5>
                        </div>

                        <!-- Text -->
                        <p class='p-xs'>U.S. Study Opportunities Abound ... flexibility, the United States offers a wealth of higher-education opportunities that you will not find anywhere else in the world!</p>

                        <!-- Links List -->
                     
                    </div>
                </div>
            </div><!-- End row -->
        </div> <!-- End container -->
    </section>

    <div class="section-divider">
        <div class="container">
            <div class="row">
                <div class="grey-border"></div>
            </div>
        </div>
    </div>


    




    @include('footer')
