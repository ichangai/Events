            <!-- About Section Start -->
            <div class="rs-about style1 pt-120 pb-120 md-pt-80 md-pb-75">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 pr-15 md-pr-15 md-mb-50">
                            <div class="images-part">
                                <img src="{{ $event->image }}" style="border-radius: 20px;" alt="Images">
                            </div>
                        </div>
                        <div class="col-lg-6 pl-45 md-pl-15">
                            <div class="sec-title">
                                <span class="sub-text">About Event</span>
                                <h2 class="title pb-22">
                                    Welcome to  {{ $event->name }}
                                </h2>
                                <div class="heading-border-line left-style"></div>
                                <p class="desc margin-0 pt-40 pb-28">
                                   {!! $event->summary !!}
                                </p>
                                <div class="rs-addon-services">
                                    <div class="row">
                                       <div class="col-lg-6 md-mb-30">
                                           <div class="addon-item">
                                               <div class="addon-wrap">
                                                   <div class="addon-icon">
                                                       <img src="{{ asset('frontend/assets/images/about/style1/icons/1.png') }}" alt="Icons">
                                                   </div>
                                                   <div class="addon-content">
                                                       <h5 class="title"> Where</h5>
                                                   </div>
                                               </div>
                                               <p>Parklands Hotel<br>
                                                Nairobi, Kenya.</p>
                                           </div>
                                       </div>
                                       <div class="col-lg-6">
                                           <div class="addon-item">
                                               <div class="addon-wrap">
                                                   <div class="addon-icon">
                                                       <img src="{{ asset('frontend/assets/images/about/style1/icons/2.png') }}" alt="Icons">
                                                   </div>
                                                   <div class="addon-content">
                                                       <h5 class="title">When</h5>
                                                   </div>
                                               </div>
                                               <p>{{ \Carbon\Carbon::parse($event['start_date'])->format('M d Y') }} - {{ \Carbon\Carbon::parse($event['end_date'])->format('M d Y') }}<br> {{ $event->start_time }}</p>
                                           </div>
                                       </div> 
                                    </div>
                                </div>
                                @if($event->slug == "awards")
                                    <div class="btn-part mt-35">
                                        <a class="readon btn-text ticket" href="#">
                                            <span>Join This Event</span>
                                        </a>
                                    </div>
                                @else
                                <div class="btn-part mt-35">
                                    <a class="readon btn-text ticket" href="{{ route('awardForm') }}">
                                        <span>Vote Now</span>
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rs-animation">
                    <div class="animate dot stuff2">
                        <img data-depth="0.2" src="{{ asset('frontend/assets/images/about/style1/1.png') }}" alt="Icons">
                    </div>
                    <div class="animate circle stuff3">
                        <img data-depth="0.3" src="{{ asset('frontend/assets/images/about/style1/2.png') }}" alt="Icons">
                    </div>
                    <div class="animate microphone stuff4">
                        <img data-depth="0.4" src="{{ asset('frontend/assets/images/about/style1/3.png') }}" alt="Icons">
                    </div>
                </div>
            </div>
            <!-- About Section End -->