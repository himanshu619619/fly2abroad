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
                            <p class="p-md">We was established in India with the aim to holistically cater to the immigration needs of the candidates.</p>
                        </div>

                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p class="p-md">Having a rich track record of successfully processing of over 50,000 applications; thus upon research about our organisation you would find that we are amongst the best immigration service provider in India.</p>
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
                        <img class="img-fluid" src="{{asset('public/images/image-04.png')}}"
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
                            <p>An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum vitae purus
                                primis pretium ligula rutrum luctus blandit porta justo integer. Feugiat a primis
                                ultrice ligula</p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>Quaerat sodales sapien undo euismod risus auctor egestas augue mauri undo viverra tortor
                                sapien sodales sapien and vitae donec gravida donec enim blandit ipsum at porta justo
                                integer </p>
                        </div>
                        <a class='btn btn-arrow btn-md btn-primary' href='tel:+1(778) 929 9866'><span>Call: +1(778) 929 9866<i
                                    class='fas fa-arrow-right'></i></span></a>
                    </div>
                </div> <!-- END ABOUT TEXT	-->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>



    <div class="wide-60 statistic-section statistic-2 bg-blue-map" id="statistic-2">
        <div class="container">


            <div class="row">
                <div class="col-md-12 section-title center white-color">


                    <h2 class='h2-xs'>Why Choose Us?</h2><!-- Title -->
                    <p class='p-md'>Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat,
                        felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa </p>
                    <!-- Text -->

                </div>
            </div> <!-- END SECTION TITLE -->

            <div class="row d-flex align-items-center">

                <div class="col-md-6 col-lg-3">
                    <div class="statistic-block icon-sm">

                    <i class="fas fa-user-graduate" style="font-size: 80px; color: #D33234;"></i><!-- Icon -->
                        <!-- Text -->
                        <h5 class="primary-color">
                            <span class="count-element">820</span>
                            + </h5>
                        <p class='p-md'>Students</p>

                    </div>
                </div><!-- STATISTIC BLOCK  -->
                <div class="col-md-6 col-lg-3">
                    <div class="statistic-block icon-sm">
                    <i class="fas fa-university" style="font-size: 80px; color: #D33234;"></i>
                    
                        <!-- Text -->
                        <h5 class="primary-color">
                            <span class="count-element">127</span>
                        </h5>
                        <p class='p-md'>Universities</p>

                    </div>
                </div><!-- STATISTIC BLOCK  -->
                <div class="col-md-6 col-lg-3">
                    <div class="statistic-block icon-sm">

                    <i class="fas fa-globe" style="font-size: 80px; color: #D33234;"></i>
                        <!-- Text -->
                        <h5 class="primary-color">
                            <span class="count-element">81</span>
                        </h5>
                        <p class='p-md'>Countries</p>

                    </div>
                </div><!-- STATISTIC BLOCK  -->
                <div class="col-md-6 col-lg-3">
                    <div class="statistic-block icon-sm">

                    <i class="fas fa-plane" style="font-size: 80px; color: #D33234;"></i>
                        <!-- Text -->
                        <h5 class="primary-color">
                            <span class="count-element">969</span>
                        </h5>
                        <p class='p-md'>Immigrations</p>

                    </div>
                </div><!-- STATISTIC BLOCK  -->

            </div> <!-- End row -->
        </div> <!-- End container -->
    </div>




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


                    <h2 class='h2-xs'>Immigration Durations</h2><!-- Title -->


                    <p class='p-md'>Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat,
                        felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa </p>
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
                        <p class='p-xs'>Study. Work. Live in Australia Aliqum mullam blandit tempor sapien gravida donec
                            ipsum, at porta&hellip;</p>

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
                        <p class='p-xs'>Study. Work. Live in Canada Aliqum mullam blandit tempor sapien gravida donec
                            ipsum, at porta&hellip;</p>

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
                        <p class='p-xs'>Study. Work. Live in United Kingdom Aliqum mullam blandit tempor sapien gravida
                            donec ipsum, at&hellip;</p>

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
                        <p class='p-xs'>Study. Work. Live in New Zealand Aliqum mullam blandit tempor sapien gravida
                            donec ipsum, at&hellip;</p>

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
                        <p class='p-xs'>Study. Work. Live in Singapore Aliqum mullam blandit tempor sapien gravida donec
                            ipsum, at porta&hellip;</p>

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
                        <p class='p-xs'>Study. Work. Live in USA Aliqum mullam blandit tempor sapien gravida donec
                            ipsum, at porta&hellip;</p>

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


    <section class="wide-100 brands-section brands-2" id="brands-2">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-md-12 section-title center">

                    <!-- Title -->
                    <!-- Title -->
                    <h5 class='h5-md grey-color'>We partner with companies of all sizes, all around the world
                    </h5><!-- Text -->

                </div>
            </div> <!-- END SECTION TITLE -->


            <div class="row brands-holder">


                <div id="bl-01" class="col-sm-6 col-md-3  b-bottom  b-right">
                    <div class="brand-logo">
                        <img class="img-fluid" src="{{asset('public/images/brand-1.png')}}"
                            alt="brand-logo">
                    </div>
                </div>
                <div id="bl-02" class="col-sm-6 col-md-3  b-bottom  b-right">
                    <div class="brand-logo">
                        <img class="img-fluid" src="{{asset('public/images/brand-2.png')}}"
                            alt="brand-logo">
                    </div>
                </div>
                <div id="bl-03" class="col-sm-6 col-md-3  b-bottom  b-right">
                    <div class="brand-logo">
                        <img class="img-fluid" src="{{asset('public/images/brand-3.png')}}"
                            alt="brand-logo">
                    </div>
                </div>
                <div id="bl-04" class="col-sm-6 col-md-3  b-bottom ">
                    <div class="brand-logo">
                        <img class="img-fluid" src="{{asset('public/images/brand-4.png')}}"
                            alt="brand-logo">
                    </div>
                </div>
                <div id="bl-05" class="col-sm-6 col-md-3   b-right">
                    <div class="brand-logo">
                        <img class="img-fluid" src="{{asset('public/images/brand-5.png')}}"
                            alt="brand-logo">
                    </div>
                </div>
                <div id="bl-06" class="col-sm-6 col-md-3   b-right">
                    <div class="brand-logo">
                        <img class="img-fluid" src="{{asset('public/images/brand-6.png')}}"
                            alt="brand-logo">
                    </div>
                </div>
                <div id="bl-07" class="col-sm-6 col-md-3   b-right">
                    <div class="brand-logo">
                        <img class="img-fluid" src="{{asset('public/images/brand-7.png')}}"
                            alt="brand-logo">
                    </div>
                </div>
                <div id="bl-08" class="col-sm-6 col-md-3  ">
                    <div class="brand-logo">
                        <img class="img-fluid" src="{{asset('public/images/brand-8.png')}}"
                            alt="brand-logo">
                    </div>
                </div><!-- BRAND LOGO IMAGE -->

            </div>


        </div> <!-- End container -->
    </section> <!-- END BRANDS-3 -->



    <section class="cta-section cta-4" id="cta-4">
        <div class="container white-color">
            <div class="row d-flex align-items-center">


                <!-- CALL TO ACTION TEXT -->
                <div class="col-md-8 col-lg-7 offset-md-4 offset-lg-5">

                    <!-- Title  -->
                    <div class="cta-txt">
                        <h3 class='h3-xl'>Consultations for prospective immigrants</h3><!-- Title -->
                        <p class='p-lg'>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero
                            tempus, and blandit ligula varius </p><!-- Text -->
                        <a class='btn btn-arrow btn-md btn-primary' href='#'><span>Get Consultation <i
                                    class='fas fa-arrow-right'></i></span></a><!-- Button  -->
                    </div>

                </div>

            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>



    <section class="wide-100 faqs-section faqs-1" id="faqs-1">
        <div class="container">

            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-md-12 section-title center">

                    <h2 class='h2-xs'>Have Questions? Look Here</h2><!-- Title -->
                    <p class='p-md'>Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat,
                        felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa </p>
                    <!-- Text -->

                </div>
            </div> <!-- END SECTION TITLE -->

            <!-- QUESTIONS HOLDER -->
            <div id="accordion" role="tablist">
                <div class="row d-flex align-items-center">

                    <div class="col-lg-10 offset-lg-1">
                        <div class="card">

                            <!-- Question -->
                            <div class="card-header" role="tab" id="heading-5ea6c05425c26">
                                <h5 class="h5-sm darkblue-color">
                                    <a data-toggle="collapse" href="#collapse-5ea6c05425c72" role="button"
                                        aria-expanded="true" aria-controls="collapse-5ea6c05425c72">
                                        <span>1.</span> Which payment methods do you accept? </a>
                                </h5>
                            </div>

                            <!-- Answer -->
                            <div id="collapse-5ea6c05425c72" class="collapse " role="tabpanel"
                                aria-labelledby="heading-5ea6c05425c26" data-parent="#accordion">
                                <div class="card-body">

                                    <p>An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum vitae
                                        purus primis pretium ligula rutrum luctus blandit porta justo integer. Feugiat a
                                        primis ultrice ligula risus auctor rhoncus purus ipsum primis </p>

                                </div>
                            </div>


                        </div> <!-- END QUESTION -->
                        <div class="card">

                            <!-- Question -->
                            <div class="card-header" role="tab" id="heading-5ea6c05425cc8">
                                <h5 class="h5-sm darkblue-color">
                                    <a data-toggle="collapse" href="#collapse-5ea6c05425d0c" role="button"
                                        aria-expanded="true" aria-controls="collapse-5ea6c05425d0c">
                                        <span>2.</span> What is the registration process? </a>
                                </h5>
                            </div>

                            <!-- Answer -->
                            <div id="collapse-5ea6c05425d0c" class="collapse " role="tabpanel"
                                aria-labelledby="heading-5ea6c05425cc8" data-parent="#accordion">
                                <div class="card-body">

                                    <p>Maecenas gravida porttitor nunc, quis vehicula magna luctus tempor. Quisque vel
                                        laoreet turpis. Urna augue, viverra a augue eget, dictum tempor diam. Sed
                                        pulvinar consectetur nibh, vel imperdiet dui varius viverra. Pellentesque ac
                                        massa lorem. Fusce eu cursus est. Fusce non nulla vitae massa placerat vulputate
                                        vel a purus
                                    </p>

                                </div>
                            </div>


                        </div> <!-- END QUESTION -->
                        <div class="card">

                            <!-- Question -->
                            <div class="card-header" role="tab" id="heading-5ea6c05425d55">
                                <h5 class="h5-sm darkblue-color">
                                    <a data-toggle="collapse" href="#collapse-5ea6c05425d90" role="button"
                                        aria-expanded="true" aria-controls="collapse-5ea6c05425d90">
                                        <span>3.</span> How can I update or cancel my personal information? </a>
                                </h5>
                            </div>

                            <!-- Answer -->
                            <div id="collapse-5ea6c05425d90" class="collapse " role="tabpanel"
                                aria-labelledby="heading-5ea6c05425d55" data-parent="#accordion">
                                <div class="card-body">

                                    <p>Nullam rutrum eget nunc varius etiam mollis risus congue aliquam etiam sapien
                                        egestas, congue gestas posuere cubilia congue ipsum mauris lectus laoreet gestas
                                        neque vitae auctor eros dolor luctus odio placerat magna cursus </p>

                                </div>
                            </div>


                        </div> <!-- END QUESTION -->
                        <div class="card">

                            <!-- Question -->
                            <div class="card-header" role="tab" id="heading-5ea6c05425dd6">
                                <h5 class="h5-sm darkblue-color">
                                    <a data-toggle="collapse" href="#collapse-5ea6c05425e14" role="button"
                                        aria-expanded="true" aria-controls="collapse-5ea6c05425e14">
                                        <span>4.</span> Does your immigration firm offer a money-back guarantee? </a>
                                </h5>
                            </div>

                            <!-- Answer -->
                            <div id="collapse-5ea6c05425e14" class="collapse " role="tabpanel"
                                aria-labelledby="heading-5ea6c05425dd6" data-parent="#accordion">
                                <div class="card-body">

                                    <p>Curabitur ac dapibus libero. Quisque eu tristique neque. Phasellus blandit
                                        tristique justo ut aliquam. Aliquam vitae molestie nunc. Quisque sapien justo,
                                        aliquet non molestie sed purus, venenatis nec. Aliquam eget lacinia elit.
                                        Vestibulum tincidunt tincidunt massa, et porttitor </p>

                                </div>
                            </div>


                        </div> <!-- END QUESTION -->
                        <div class="card">

                            <!-- Question -->
                            <div class="card-header" role="tab" id="heading-5ea6c05425e59">
                                <h5 class="h5-sm darkblue-color">
                                    <a data-toggle="collapse" href="#collapse-5ea6c05425e93" role="button"
                                        aria-expanded="true" aria-controls="collapse-5ea6c05425e93">
                                        <span>5.</span> How long does it take to get a travel visa to Singapore? </a>
                                </h5>
                            </div>

                            <!-- Answer -->
                            <div id="collapse-5ea6c05425e93" class="collapse " role="tabpanel"
                                aria-labelledby="heading-5ea6c05425e59" data-parent="#accordion">
                                <div class="card-body">

                                    <p>An magnis nulla dolor sapien augue erat iaculis purus tempor magna ipsum vitae
                                        purus primis pretium ligula rutrum luctus blandit porta justo integer. Feugiat a
                                        primis ultrice ligula risus auctor rhoncus purus ipsum primis </p>

                                </div>
                            </div>


                        </div> <!-- END QUESTION -->


                    </div> <!-- End col-x -->

                </div> <!-- END QUESTIONS HOLDER -->
            </div> <!-- END ACCORDION -->



            <div class="row">
                <div class="col-md-12 text-center more-questions">
                    <h5 class="h5-md">Still have a question? <a href="#" class="darkblue-color">Ask your question
                            here</a></h5>
                </div>
            </div><!-- MORE QUESTIONS BUTTON -->

        </div> <!-- End container -->
    </section>






    @include('footer')
