@section('title', 'Fly 2 Abroad')
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
                           
                            <p>Our visa consultant has extensive visa experience on visa application and will ensure that you are advised correctly; in order to increase your chances for visa approval. Dinspira’s biggest strength is its ability to get 99% of all its clients their visas on their first visa application.</p>
                        </div>
                        <div class="box-list">
                            
                            <p><h4>Some of the categories of visas that we specialize in are:</h4>
<ul style="list-style:circle;">
<li>Visitor Visa (including services for business trips, conventions and conferences, sporting events, etc.)</li>
<li>Student Visa/Study Permit</li>
<li>Work permits (including post-graduation work permits, work permit for the spouse of student, etc.) </li>
</ul>


</p>
                        </div>
                       
                    </div>
                </div> <!-- END ABOUT TEXT	-->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>



    <section class="bg-lightgrey pt-100 about-section about-4 bg-tra-city" id="about-4">
        <div class="container">

            <div class="row align-items-center text-center">
            <h2>Our Visa assistance services are currently available for the following travel destinations:</h2>
            <div class="col-lg-2 col-xl-3  text-center">
                <div class="about-4-txt pc-20 mb-40 ">
                   

<img src="https://img.icons8.com/color/96/000000/canada.png"/>
<h1>Canada</h1> 

</div>
                </div>
                <div class="col-lg-2 col-xl-2  text-center">
                    <div class="about-4-txt pc-20 mb-40">

                    <img src="https://img.icons8.com/color/96/000000/great-britain.png"/>
<h1> UK</h1> 

                        
                    </div>
                </div> <!-- END ABOUT TEXT	-->

                <div class="col-lg-2 col-xl-2 text-center">
                    <div class="about-4-txt pc-20 mb-40">
                    <img src="https://img.icons8.com/color/96/000000/usa.png"/>
<h1>USA</h1> 

                        
                    </div>
                </div> <!-- END ABOUT TEXT	-->


                <div class="col-lg-2 col-xl-2  text-center">
                    <div class="about-4-txt pc-20 mb-40">

                    <img src="https://img.icons8.com/color/96/000000/united-arab-emirates.png"/>
<h1>U.A.E.</h1> 

                        
                    </div>
                </div> <!-- END ABOUT TEXT	-->


                <div class="col-lg-3 col-xl-3  text-center">
                    <div class="about-4-txt pc-20 mb-40">

                    <img src="https://img.icons8.com/color/96/000000/south-africa.png"/>
<h1>SA
</h1> 

                        
                    </div>
                </div> <!-- END ABOUT TEXT	-->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>


    <section class="wide-60 about-section about-2" id="about-2">
        <div class="container">

            <div class="row d-flex align-items-center">
              
                <div class="col-md-12">
                    <div class="about-2-txt pc-20 mb-40">
                        <span class='section-id id-color'></span>
                        <h3 class='h3-lg darkblue-color'>A few of what our visa assistance services entail are:</h3>
                        
                        <div class="box-list">
                            
                           
<ul style="list-style:circle;">
<li>Advice clients on the necessary documents required to apply for your visa</li>
<li> Check your visa application documents.</li>
<li>Guide you on all aspects of the visa process</li>
<li> Assist with filling the visa application form.</li>
<li>Schedule visa appointment for you (optional)</li>
<li>Update you on any changes in visa rules and regulations.</li>
<li>If applicable, assist with booking your medical examination/test</li>
<li>Provide full support in preparing you for the interview. If your visa application involves a visa interview. We will advise you on the likely format and examples of questions that you may be asked</li>
<li>With our excellent visa success rate of 99%, in the unfortunate event that your visa application is refused; we will examine the reasons provided and advise you on the next course of action (e.g. reapply after addressing the visa officer’s concern, appeal the decision, proceed with a judicial review, etc)</li>
</ul>



                        </div>
                       
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