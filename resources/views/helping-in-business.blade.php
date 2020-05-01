@include('header');

<section class="about-section about-2" id="about-2">
        <div class="containers">

            <div class="row center text-center align-items-center">
                <div class="col-md-12">
                    <div class="about-img about-2-img text-center mb-40">
                        <img class="img-fluid" src="{{asset('public/images/helping.jpg')}}"
                            alt="about-image"  style="width: 100%;"/>
                        
                    </div>
                </div>
            
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>



    <section class="bg-lightgrey pt-50 pb-50 about-section about-4 bg-tra-city" id="about-4">
        <div class="container">

            <div class="row  text-justilfy">
                <div class="col-lg-12 col-xl-12 text-center ">
                   
<img src="" alt="">
<h1>Helping in Business Expansion</h1> 
<p>We provide you a customized and flexible tour packages all over the World. Customer Relationship Management has been a key focus area since the inception of the company and has helped us to grow considerably in a tightrope market. We understand that each tourist is different from the other not only in attributes but also in expectation and motive. This helps us to serve our clients better by upgrading the simple tasks to special just by applying a little imagination and offering on time solutions for any tour-related problem.</p>


                </div>
             
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>

<section class="bg-lightgrey pt-100  pb-100 about-section about-4 bg-tra-city">
<div class="row">

<div class="col-lg-3">
</div>
<div class="col-lg-6">
<h1 style="text-align:center; " class="pt-20 pb-20">Helping in Business Expansion</h1>
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