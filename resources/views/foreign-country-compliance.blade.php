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
<h1>Foreign Country Compliance</h1> 
<p>Setting up programs and activities in a foreign country often triggers local reporting and compliance requirements once a legal structure has been determined and established. In most cases your reporting obligations will be dictated by how the F2A is legally registered in the host country. For this reason it is crucial to obtain qualified host-country legal advice in this area. Improper registration or failure to register qualifying activities can have very serious reputational and financial ramifications for the University. </p>


                </div>
             
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>

    <section class="bg-lightgreys pt-50 pb-50 about-section about-4 bg-tra-citys" id="about-4">
        <div class="container">

            <div class="row  text-justilfy">
                <div class="col-lg-12 col-xl-12  ">


<p>

<h4>Once registration has occurred (see Establishing Legal Status), examples of ongoing reporting and compliance requirements that may be necessary on a monthly or quarterly basis include: (This is not an exhaustive list.)</h4>
<ul style="list-style:circle">
<li>Preparing and filing the monthly financial statements with the local authorities.</li>
<li>Maintaining books and records in accordance with local generally accepted accounting principles (GAAP) in local currency.</li>
<li>
Preparing, filing and coordinating payment of relevant statutory taxes, typically including business taxes and foreign-entity income taxes.</li>
<li>Preparing, filing and coordinating payment of Value Added Tax (VAT)/Goods and Services Tax (GST) returns where applicable.</li>
<li>Filing employee payroll income taxes associated with the payroll of local nationals and foreign employees (expatriates and third-country nationals).</li>
<li>Computing statutory employees' and employer's social insurance contributions, and additional required contributions in compliance with local regulations.</li>
<li>
Annual payroll filing and issuance of W-2 equivalent.</li>
<li>Bookkeeping obligation that all books and records are appropriately "available for inspection" by local authorities.</li>

</ul>








<br>





<h4>Annual reporting requirements may include:</h4>
<ul style="list-style:circle">

<li>Completing an audit of the statutory financial statements by a locally authorized professional, often required prior to the renewal of a business license every year.</li>
<li>
Completing and filing the annual corporate tax returns and coordinating required payments.</li>
<li>Annually inspecting and renewing business registration and licenses with government authorities.</li>
<li>Preparing and filing annual payroll forms.</li>
</ul>









 </p>


                </div>
             
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>

<section class="bg-lightgrey pt-100  pb-100 about-section about-4 bg-tra-city">
<div class="row">

<div class="col-lg-3">
</div>
<div class="col-lg-6">
<h1 style="text-align:center; " class="pt-20 pb-20">Foreign Country Compliance</h1>
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