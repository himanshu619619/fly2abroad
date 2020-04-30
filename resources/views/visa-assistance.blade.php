@include('header');

<section class="wide-60 about-section about-2" id="about-2">
        <div class="container">

            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="about-img about-2-img text-center mb-40">
                        <img class="img-fluid" src="{{asset('public/images/visa3.jpg')}}"
                            alt="about-image" />
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-2-txt pc-20 mb-40">
                        <span class='section-id id-color'></span>
                        <h3 class='h3-lg darkblue-color'>Visa Assistance</h3>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>Immigration to other countries from your native land is not an apple pie. You need to show that you are competent enough to be able to enter your dream country whether it is Canada, Australia, UK, USA, New Zealand or be it any other country in a legal manner, and able to settle there well. </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>We is always there for you to support you at each step, which you march towards fulfilling your long cherished dream. Ranging from the initial analysis of your profile to getting ready and submitting your file and eventually to help you in meeting all the obligatory necessities once you land in your dream country, you may get one stop resolution to any or all your immigration desires. </p>
                        </div>
                        <div class="box-list">
                            <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
                            <p>Whether you would like to choose us for a PR Visa with Job Assistance Program, permanent residency, visa for skillful employees or investment visa, Express Entry Consultation, Federal Skilled Worker Program, you may get all the help that’s required. </p>
                        </div>
                    </div>
                </div> <!-- END ABOUT TEXT	-->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>



    <section class="bg-lightgrey pt-100 about-section about-4 bg-tra-city" id="about-4">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6 text-center ">
                   
<img src="" alt="">
<h1>USA</h1> 
<p>The EB5 Visa Program is undoubtedly the easiest and fastest way to get your US Green Card. India is a fast-growing market for EB5 applicants, seeking to migrate to the United States for educational, business and career opportunities not only for themselves but their families and children too.</p>

                </div>
                <div class="col-lg-6 col-xl-6  text-center">
                    <div class="about-4-txt pc-20 mb-40">

                    <img src="" alt="">
<h1>Canada</h1> 
<p>We are one of the biggest names in Immigration Consultancy in India. Established in Canada, the company has registered exponential growth thanks to the surge of immigrants to international destinations from all over the country in the past few years.</p>
                        
                    </div>
                </div> <!-- END ABOUT TEXT	-->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>

<section class="bg-lightgrey pt-100  pb-100 about-section about-4 bg-tra-city">
<div class="row">

<div class="col-lg-3">
</div>
<div class="col-lg-6">
<h1 style="text-align:center; " class="pt-20 pb-20">IMMIGRATION</h1>
                <div role="form" class="wpcf7" id="wpcf7-f535-p532-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="{{url('sendmail/contact')}}" method="post" class="wpcf7-form" novalidate="novalidate">
                    {{ csrf_field() }}
                        <div class="form-holder">
                            <div class="row contact-form">
                                <div id="input-name" class="col-lg-12"><span
                                        class="wpcf7-form-control-wrap your-name"><input type="text" name="name"
                                            value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control name"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Enter Your Name*" /></span></div>
                                <div id="input-email" class="col-lg-12">
                                    <span class="wpcf7-form-control-wrap your-email"><input type="email"
                                            name="email" value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control email"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Enter Your Email*" />
                                            
                                            
                                            </span></div>
                                            <div id="input-email" class="col-lg-12">
                                    <span class="wpcf7-form-control-wrap your-email"><input type="text"
                                            name="phone" value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control email"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Enter Your Phone*" />
                                            
                                            
                                            </span></div>
                                <div id="input-subject" class="col-lg-12 input-subject"><span
                                        class="wpcf7-form-control-wrap your-menu"><select name="visa"
                                            class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required custom-select subject"
                                            id="inlineFormCustomSelect2">
                                            <option value="Your Question About..">Your Question About..</option>
                                            <option value="Student Visa">Student Visa</option>
                                            <option value="Travel visa">Travel visa</option>
                                            <option value="Working Visa">Working Visa</option>
                                            <option value="Business Visa">Business Visa</option>
                                            <option value="Visitor Visa">Visitor Visa</option>
                                            <option value="Other...">Other...</option>
                                        </select></span></div>
                                <div id="input-message" class="col-lg-12 input-message"><span
                                        class="wpcf7-form-control-wrap your-message"><textarea name="message"
                                            cols="40" rows="10"
                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control message"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Your Message ..."></textarea></span></div>
                                <div class="col-lg-12 mt-15 form-btn">
                                    <input type="submit" value="Send Your Message"
                                        class="wpcf7-form-control wpcf7-submit btn btn-primary tra-black-hover submit" />
                                </div>
                                <div class="col-lg-12 contact-form-msg text-center">
                                    <div class="sending-msg">
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
            </div> <!-- END CONTACT FORM -->

            <div class="col-lg-3">
</div>
</div>

</section>



@include('footer');