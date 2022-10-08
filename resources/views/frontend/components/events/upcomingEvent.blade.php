<!-- Our Event Schedule Start -->
<div id="rs-events" class="rs-events-schedule our-event bg21 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title text-center mb-55" data-aos="fade-down">
            <span class="sub-text">// Our Event</span>
            <h2 class="title">
                Our Upcoming<span class="event-style"> Events </span>
            </h2>
        </div>
        <div class="row" id="post_data">
            {{ csrf_field()}}
            <div ></div>
        </div>
    </div>
</div>
</div>
<!-- Our Event Schedule End -->

@if(count($upcoming_events)>0)
<!-- Our Event Schedule Start -->
<!-- <div id="rs-events" class="rs-events-schedule our-event bg21 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title text-center mb-55" data-aos="fade-down">
            <span class="sub-text">// Our Event</span>
            <h2 class="title">
                Our Upcoming<span class="event-style"> Events </span>
            </h2>
        </div>
        <div class="row">
            @foreach ($upcoming_events as $event)
            <div class="col-lg-6 col-md-6 mb-30" data-aos="fade-up" data-aos-delay="900">
                <div class="event-item">
                    <div class="event-wrap">
                        <div class="mega-bg-color purple-bg"></div>
                        <div class="event-img">
                            <img src="{{ $event->image }}" style="height: 300px; width: 500px; object-fit:cover;" alt="Event">
                        </div>
                        <div class="content-info">
                            <h2 class="title"><a href="#">{{ $event->name }}</a></h2>
                            <ul class="event-specs">
                                <li>
                                    <i class="fa fa-calendar-check-o"></i>
                                    {{ $event->start_date }}
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    {{ $event->location }}
                                </li>
                            </ul>
                            <div class="date">
                                <div class="post-time">
                                    <i class="fa fa-clock-o"></i>
                                    {{ $event->start_time }} - {{ $event->end_time }}
                                </div>
                            </div>
                            <ul class="specs-btn">
                                <li>
                                    <a class="readon regt purple-btn" href="{{ route('single.event', $event->id) }}">
                                        <span>View More</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>


    </div>
</div> -->
<!-- Our Event Schedule End -->

@endif