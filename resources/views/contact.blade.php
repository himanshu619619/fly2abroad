@include('header')

<section class="bg-lightgrey wide-100 contacts-section contacts-4 bg-tra-city" id="contacts-4"
    data-scroll_id="contacts-4">
    <div class="container">

        <div class="row d-flex align-items-center">



            <div class="col-md-12 section-title center">
                <!-- SECTION TITLE -->


                <h2 class='h2-xs'>Have Questions? Get in Touch</h2><!-- Title -->


                <p class='p-md'></p><!-- Text -->

            </div>
        </div> <!-- END SECTION TITLE -->

        <div class="row">

            <div class="col-lg-5">
                <div class="contact-boxes">




                    <div class="contact-box icon-xs clearfix mb-25">


                        <div class="contact-box-icon"><span class="flaticon-235-mail"></span></div><!-- Icon -->


                        <div class="contact-box-txt">
                            <h5 class="h5-xs deepblue-color">Suite 208 7928 128 street Surrey,</h5>
                            <h5 class="h5-xs deepblue-color"> BC V3W 4E8 canada</h5>
                            <p class="grey-color">Our Location</p><!-- Text -->
                        </div><!-- EMAIL -->

                    </div>
                    <div class="contact-box icon-xs clearfix mb-25">


                        <div class="contact-box-icon"><span class="flaticon-172-telephone-1"></span></div><!-- Icon -->


                        <div class="contact-box-txt">
                            <h5 class="h5-xs deepblue-color">P: +1(778) 929 9866</h5>

                            <p class="grey-color">Let&#039;s Talk</p><!-- Text -->
                        </div><!-- EMAIL -->

                    </div>
                    <div class="contact-box icon-xs clearfix ">


                        <div class="contact-box-icon"><span class="flaticon-235-mail"></span></div><!-- Icon -->


                        <div class="contact-box-txt">
                            <h5 class="h5-xs deepblue-color"><a
                                    href="mailto:http://hello@domain.com">support@fly2abroad.com</a></h5>

                            <p class="grey-color">Drop a Line</p><!-- Text -->
                        </div><!-- EMAIL -->

                    </div>

                </div>
            </div>


            <!-- CONTACT FORM -->

            <div class="col-lg-7">
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



        </div> <!-- End row -->
    </div> <!-- End container -->
</section>



<section class="cta-section cta-4 bg-fixed" id="cta-4">
    <div class="container white-color">
        <div class="row d-flex align-items-center">


            <!-- CALL TO ACTION TEXT -->
            <div class="col-md-8 col-lg-7 offset-md-4 offset-lg-5">

                <!-- Title  -->
                <div class="cta-txt">
                    <h3 class='h3-xl'>Consultations for prospective immigration</h3><!-- Title -->

                    <a class='btn btn-arrow btn btn-md btn-primary tra-white-hover btn-arrow btn-md btn-primary'
                        href="{{url('/contact')}}"><span>Get Consultation <i class='fas fa-arrow-right'></i></span></a>
                    <!-- Button  -->
                </div>

            </div>

        </div> <!-- End row -->
    </div> <!-- End container -->
</section>



@include('footer')
