        @if($event->type == 'paid')
            <!-- Pricing Section Start -->
            <div class="rs-pricing style2 gray-bg pt-110 pb-120 md-pt-70 md-pb-80">
                <div class="container">
                    <div class="sec-title text-center mb-80 md-mb-50">
                        <span class="sub-text">Tickets</span>
                        <h2 class="title pb-35">
                            Purchase Your Ticket
                        </h2>
                        <div class="heading-border-line"></div>
                    </div>
                    <div class="row d-flex justify-content-center align-content-center" style="">
                        <div class="col-lg-6 col-md-6 sm-mb-30">
                            <div class="rs-price-table">  
                                <div class="pricing-table-header">
                                    <h3 class="table-title">{{ $event->name }}</h3>
                                </div>
                                <div class="rs-pricing-table-price">
                                    <div class="pricing-table-price-tag">
                                        <span class="table-price-text">Kshs {{ $event->amount }}</span>
                                        <span class="table-period"></span>
                                    </div>
                                </div>
                                <div class="rs-pricing-table-body d-flex justify-content-center align-content-center">
                                    <ul class="pricing-table-features-list">
                                        <li>
                                            {{-- <i class="fa fa-check"></i> --}}
                                            <span class="feature-text"><span style="font-weight: 700">Location:</span> {{ $event->location }}</span>
                                        </li>
                                        <li>
                                            {{-- <i class="fa fa-check"></i> --}}
                                            <span class="feature-text"><span style="font-weight: 700">Venue:</span> Safari Park</span>
                                        </li>
                                        <li>
                                            {{-- <i class="fa fa-check"></i> --}}
                                            <span class="feature-text"><span style="font-weight: 700">Date:</span> {{ \Carbon\Carbon::parse($event['start_date'])->format('M d Y') }} </span> - <span> {{ \Carbon\Carbon::parse($event['end_date'])->format('M d Y') }}</span>
                                        </li>
                                    </ul>
                                </div>
                                @if(auth()->user())
                                <div class="btn-part">
                                    <a class="readon btn-text buy-big" data-toggle="modal" data-target=".payment_bd-example-modal-lg">
                                        <span>Purchase Now</span>
                                    </a>
                                </div>
                                @else
                                <div class="btn-part">
                                    <a class="readon btn-text buy-big" href="contact.html" data-toggle="modal" data-target=".bd-example-modal-lg">
                                        <span>Purchase now</span>
                                    </a>
                                    <p class="mt-5">Please <a data-toggle="modal" data-target=".bd-example-modal-lg" style="color: #ff0157; cursor: pointer;" class="mx-1"><u>Sign In</u></a> first to purchase the ticket. Thank you</p>
                                </div>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-animation">
                    <div class="price-animate one">
                        <img src="{{ asset('frontend/assets/images/pricing/animate/1.png') }}" alt="Images">
                    </div>
                    <div class="price-animate two">
                        <img src="{{ asset('frontend/assets/images/pricing/animate/2.png') }}" alt="Images">
                    </div>
                    <div class="price-animate three">
                        <img src="{{ asset('frontend/assets/images/pricing/animate/3.png') }}" alt="Images">
                    </div>
                </div>
            </div>
            <!-- Pricing Section End -->
        @endif