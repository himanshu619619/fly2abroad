@include('header')

<section class="bg-lightgrey pt-100  pb-100 about-section about-4 bg-tra-city">
<div class="row">

<div class="col-lg-3">
</div>
<div class="col-lg-6">
<h1 style="text-align:center; " class="pt-20 pb-20">Career Opportunities</h1>
                <div role="form" class="wpcf7" id="wpcf7-f535-p532-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="{{url('sendmail/career')}}" method="post" class="wpcf7-form" novalidate="novalidate" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-holder">
                            <div class="row contact-form">
                                <div id="input-name" class="col-lg-12"><span
                                        class="wpcf7-form-control-wrap your-name"><input type="text" name="name"
                                            value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control name"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Enter Your Name*"  required/></span></div>
                                <div id="input-email" class="col-lg-12">
                                    <span class="wpcf7-form-control-wrap your-email"><input type="email"
                                            name="email" value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control email"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Enter Your Email*" required />
                                            
                                            
                                            </span></div>
                                            <div id="input-email" class="col-lg-12">
                                    <span class="wpcf7-form-control-wrap your-email"><input type="text"
                                            name="phone" value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control email"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Enter Your Phone*" required/>
                                            
                                            
                                            </span></div>
                                <div id="input-subject" class="col-lg-12 input-subject"><span
                                        class="wpcf7-form-control-wrap your-menu"><select name="jobc"
                                            class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required custom-select subject"
                                            id="inlineFormCustomSelect2" required>
                                            <option value="Select">Select..</option>
                                            <option value="Sales ">Sales </option>
                                            <option value="Sales and service">Sales and service</option>
                                            <option value="Administration">Administration</option>
                                            <option value="Information technology">Information technology</option>
                                            <option value="Communication">Communication</option>
                                            <option value="Other...">Other...</option>
                                        </select></span></div>
                                <div id="input-message" class="col-lg-12 input-message"><span
                                        class="wpcf7-form-control-wrap your-message"><textarea name="address"
                                            cols="40" rows="2"
                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control message"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Your address" required></textarea></span></div>

                                            <div id="input-email" class="col-lg-12">
                                    <span class="wpcf7-form-control-wrap your-email"><input type="text"
                                            name="position" value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control email"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Position you are applying for*" />
                                            
                                            
                                            </span></div>

                                            <div id="input-subject" class="col-lg-12 input-subject"><span
                                        class="wpcf7-form-control-wrap your-menu"><select name="location"
                                            class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required custom-select subject"
                                            id="inlineFormCustomSelect2 ">
                                            <option value="Your location..">Your location..</option>
                                            <option value="Bengaluru ">Bengaluru </option>
                                            <option value="Ahmedabad">Ahmedabad</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chennai">Chennai</option>
                                            <option value="Coimbatore">Coimbatore</option>
                                            <option value="Hyderabad">Hyderabad</option>
                                            <option value="Mumbai">Mumbai</option>
                                            <option value="New Delhi">New Delhi</option>
                                            <option value="Kolkata">Kolkata</option>
                                            <option value="Pune">Pune</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                        </select></span></div>


                                            <div id="input-email" class="col-lg-12">
                                    <span class="wpcf7-form-control-wrap your-email"><input type="text"
                                            name="resume_title" value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control email"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Resume Title" required/>
                                            
                                            
                                            </span></div>

                                            
                                            <div id="input-email" class="col-lg-12">
                                    <span class="wpcf7-form-control-wrap your-email"><input type="file"
                                            name="resume" value="" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control email"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Resume Title" required/>
                                            
                                            
                                            </span></div>


                                <div class="col-lg-12 mt-15 form-btn">
                                    <input type="submit" value="Submit "
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

@include('footer')

