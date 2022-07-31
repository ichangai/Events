            <!-- Blog Section Start -->
            @if(count($category->events) > 0)
                <div class="rs-inner-blog pt-120 md-pt-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 md-mb-50">
                                <div class="row">
                                    @foreach($category->events as $event)
                                    <div class="col-lg-6 mb-50">
                                        <div class="blog-item">
                                            <div class="blog-img">
                                                <a href="blog-details.html"><img src="{{$event->image}}" style="height: 600px; width:600px; object-fit: cover;"></a>
                                                <ul class="post-categories">
                                                    <li><a href="blog-details.html">{{ $event->location }}</a></li>
                                                </ul>
                                            </div>
                                            <div class="blog-content">
                                                <h3 class="blog-title"><a href="blog-details.html">{{ $event->name }}</a></h3>
                                                <div class="blog-meta">
                                                    <ul class="btm-cate">
                                                        <li>
                                                            <div class="blog-date">
                                                                <i class="fa fa-calendar-check-o"></i> <span> {{ \Carbon\Carbon::parse($event['start_date'])->format('M d Y') }} </span> - <span> {{ \Carbon\Carbon::parse($event['end_date'])->format('M d Y') }}  </span>                                                   
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="blog-desc">   
                                                    {{ Str::words($event->summary, '30') }}         
                                                </div>
                                                @if(!$event->slug == 'awards')
                                                <div class="blog-button">
                                                    <a href="{{ route('single.event', $event->id) }}">
                                                        <span class="btn-txt">Read More</span>
                                                        <i class="fa fa fa-chevron-right"></i>
                                                    </a>
                                                </div>
                                                @else
                                                <div class="blog-button">
                                                    <a href="{{ route('single.event', $event->id) }}">
                                                        <span class="btn-txt">Read More</span>
                                                        <i class="fa fa fa-chevron-right"></i>
                                                    </a>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            @else
            <div class="rs-inner-blog pt-120 md-pt-80" style="margin-bottom: 350px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 md-mb-50">
                            <div class="row text-center">
                              <h3  style="color: #ff0157"> Content Comming Soon </h3> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            @endif
            <!-- Blog Section End --> 