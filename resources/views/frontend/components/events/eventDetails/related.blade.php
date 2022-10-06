            <!-- Blog Section Start -->
            <div id="rs-blog" class="rs-blog blog-main-home gray-bg pt-110 pb-120 md-pt-70 md-pb-80">
                <div class="container">  
                    <div class="sec-title text-center mb-85">
                        <span class="sub-text small">You can view events such as these</span>
                        <h2 class="title pb-26">
                         Related Events
                        </h2>
                        <div class="heading-border-line"></div>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                    @forelse($related_events as $event)
                        <div class="blog-item">
                            <div class="image-wrap">
                                <a href=""><img src="{{ $event->image }}" alt="event image" style="height: 300px; width: 400px; object-fit:contain;"></a>
                                <div class="blog-date">
                                    <span class="day">{{ \Carbon\Carbon::parse($event['start_date'])->format('d') }}</span>
                                    <span class="month">{{ \Carbon\Carbon::parse($event['start_date'])->format('M') }}</span>
                                    <span class="month">{{ \Carbon\Carbon::parse($event['start_date'])->format('Y') }}</span>
                                </div>
                            </div>
                            <div class="blog-content">
                               <ul class="blog-meta">
                                   <li class="cat-list"><a href=""> <i class="fa fa-folder"></i>{{ $event->location }}</a></li>
                               </ul>
                               <h3 class="blog-title"><a href="">{{ $event->name }}</a></h3>
                               <div class="blog-button">
                                   <a href="{{ route('single.event', $event->id) }}">
                                       <span class="btn-txt">View More</span>
                                       <i class="fa fa fa-chevron-right"></i>
                                   </a>
                                </div>
                            </div>
                        </div> 
                    @empty
                        No Event available
                    @endforelse 
                    </div>
                </div>
                <div class="blog-animation">
                    <div class="blog-animate teangle">
                        <img src="{{ asset('frontend/assets/images/blog/animate.png') }}" alt="Icons">
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->