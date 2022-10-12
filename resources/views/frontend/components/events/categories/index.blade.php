         @if(count($categories)>0)  
           <!-- Our Event Schedule Start -->
            <div id="rs-events" class="rs-events-schedule our-event bg21 pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="sec-title text-center mb-55" data-aos="fade-down">
                        <span class="sub-text">Our Categories</span>
                        <h2 class="title">
                            <span class="event-style">View All Categories </span>
                        </h2>
                    </div>
                    <div class="row">
                        @forelse($categories as $cat)
                        <div class="col-lg-4 col-md-6 mb-30"  data-aos="fade-up" data-aos-delay="400">
                            <div class="event-item">
                                <div class="event-wrap">
                                    <div class="mega-bg-color"></div>
                                    <div class="event-img">
                                       <img src="{{$cat->image}}" style="height: 300px; width: 400px; object-fit:cover;" alt="Event"> 
                                    </div>
                                    <div class="content-info">
                                        <h2 class="title"><a href="#"> {{ $cat->title }} Events</a></h2>
                                        <ul class="specs-btn">
                                            <li>
                                                <a class="readon regt learn" href="{{ route('single.category', $cat->slug) }}">
                                                    <span>View More</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div>
                            No categories posted yet
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
            <!-- Our Event Schedule End -->
        @endif
