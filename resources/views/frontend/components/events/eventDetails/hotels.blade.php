               
        @if($event->type == 'paid')    
               <!-- Services Section Start -->
                <div class="rs-services style2 pt-100 md-pt-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 md-mb-30">
                                <div class="services-item">
                                   <div class="services-img">
                                       <img src="{{ asset('frontend/assets/images/services/style1/1.jpg') }}" alt="images">
                                   </div>
                                   <div class="services-text">
                                       <h2 class="title">The Empire Hotel</h2>
                                       <div class="services-part mb-15">
                                           <div class="services-icon">
                                               <img src="{{ asset('frontend/assets/images/services/style1/icons/pin.png') }}" alt="">
                                           </div>
                                           <p class="services-txt"> 55 Parklands</p>
                                       </div>
                                       <div class="addon-services">
                                           <div class="services-icon">
                                               <img src="{{ asset('frontend/assets/images/services/style1/icons/price.png') }}" alt="">
                                           </div>
                                           <p class="services-txt">kshs 3500</p>
                                       </div>
                                       <div class="blog-button service mt-24">
                                           <a href="#">
                                               <span class="btn-txt">Get Directions</span>
                                               <i class="fa fa fa-chevron-right"></i>
                                           </a>
                                        </div>
                                   </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 sm-mb-30">
                                <div class="services-item">
                                   <div class="services-img">
                                       <img src="{{ asset('frontend/assets/images/services/style1/2.jpg') }}" alt="images">
                                   </div>
                                   <div class="services-text">
                                       <h2 class="title">The Royal Hotel</h2>
                                       <div class="services-part mb-15">
                                           <div class="services-icon">
                                               <img src="{{ asset('frontend/assets/images/services/style1/icons/pin.png') }}" alt="">
                                           </div>
                                           <p class="services-txt">29 Avenue Parklands</p>
                                       </div>
                                       <div class="addon-services">
                                           <div class="services-icon">
                                               <img src="{{ asset('frontend/assets/images/services/style1/icons/price.png') }}" alt="">
                                           </div>
                                           <p class="services-txt">Kshs 9000</p>
                                       </div>
                                       <div class="blog-button service mt-24">
                                           <a href="#">
                                               <span class="btn-txt">Get Directions</span>
                                               <i class="fa fa fa-chevron-right"></i>
                                           </a>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-inner">
                        <h2 class="title"><span class="watermark"></span>HOTELS</h2>
                    </div>
                </div>
                <!-- Services Section End -->
                <div class="contact-animation">
                    <div class="animate one">
                        <img src="{{ asset('frontend/assets/images/contact/animation/1.png') }}" alt="Icons">
                    </div>
                    <div class="animate two">
                        <img src="{{ asset('frontend/assets/images/contact/animation/2.png') }}" alt="Icons">
                    </div>
                    <div class="animate three">
                        <img src="{{ asset('frontend/assets/images/contact/animation/3.png') }}" alt="Icons">
                    </div>
                    <div class="animate four">
                        <img src="{{ asset('frontend/assets/images/contact/animation/4.png') }}" alt="Icons">
                    </div>
                </div>
            </div>
        @endif      
        