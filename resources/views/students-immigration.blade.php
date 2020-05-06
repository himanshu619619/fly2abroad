@include('header');

<section class="wide-60 about-section about-2" id="about-2">
        <div class="container">

            <div class="row center text-center align-items-center">
                <div class="col-md-12">
                    <div class="about-img about-2-img text-center mb-40">
                        <img class="img-fluid" src="{{asset('public/images/visa.jpg')}}"
                            alt="about-image" />
                        
                    </div>
                </div>
            
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>



    <section class="bg-lightgrey pt-100 about-section about-4 bg-tra-city" id="about-4">
        <div class="container">

            <div class="row  text-justilfy">
                <div class="col-lg-4 col-xl-4 text-center ">
                   
<img src="" alt="">
<h1>AUSTRALIA</h1> 
<p>Australia offers a various scope of study choices for worldwide understudies, with in excess of 1,200 organizations and more than 22,000 courses to browse</p>


                </div>
                <div class="col-lg-4 col-xl-4  text-center">
                    <div class="about-4-txt pc-20 mb-40">

                    <img src="" alt="">
<h1>CANADA</h1> 
<p>Apply and Study in top and prestigious colleges in Canada as a worldwide understudy, broaden your examination license and get some answers concerning work courses while you study or after you graduate.</p>
                        
                    </div>
                </div> <!-- END ABOUT TEXT	-->

                <div class="col-lg-4 col-xl-4  text-center">
                    <div class="about-4-txt pc-20 mb-40">

                    <img src="" alt="">
<h1>EUROPE</h1> 
<p>Helping understudies in choosing and making powerful confirmation applications to European colleges.</p>
                        
                    </div>
                </div> <!-- END ABOUT TEXT	-->

                <div class="col-lg-4 col-xl-4  text-center">
                    <div class="about-4-txt pc-20 mb-40">

                    <img src="" alt="">
                    <h1>USA</h1> 
<p>Find the ideal course and school for you, in view of your profile quality, and your inclinations.</p>
                        
                    </div>
                </div> <!-- END ABOUT TEXT	-->
                <div class="col-lg-4 col-xl-4  text-center">
                    <div class="about-4-txt pc-20 mb-40">

                    <img src="" alt="">
<h1>ASIA</h1> 
<p>Asia's steady monetary development, urban turn of events and instructive change implies developing chances.
</p>
                        
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