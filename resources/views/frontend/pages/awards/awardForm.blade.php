@extends('frontend.layouts.master')


@section('content')
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img3">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">
                            Sign Up to Vote
                        </h1>                       
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->
            <!-- Contact Section Start -->
            <div class="rs-contact home-style1 home-style3 bg16 md-pt-80" style="margin-bottom: 100px;">
                <div class="container">
                    <!-- Contact Section Start -->
                    <div class="rs-contact pt-120 md-pt-80">
                        <div class="row y-middle">
                            <div class="col-lg-6">
                                <div class="sec-title mb-85 md-mb-50">
                                    <span class="sub-text">Vote</span>
                                    <h2 class="title pb-26">
                                        Sign Up to Vote
                                    </h2>
                                    <div class="heading-border-line left-style"></div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-wrap">
                                    <div id="form-messages"></div>
                                    <form method="post" action="{{ route('voter.signup') }}">
                                        @csrf
                                        <fieldset>
                                            <div class="row">
                                                <input type="text" value="{{ Session::get('event_id') }}" name="event_id" hidden>
                                                <div class="col-lg-12 col-md-6 col-sm-6 mb-80">
                                                    <input class="from-control" type="text" name="name" placeholder="Name" required>
                                                </div> 
                                                <div class="col-lg-12 col-md-6 col-sm-6 mb-80">
                                                    <input class="from-control" type="email" name="email" placeholder="E-Mail" required>
                                                </div>   
                                                <div class="col-lg-12 col-md-6 col-sm-6 mb-80">
                                                    <input class="from-control" type="text" name="phone" placeholder="Phone Number" required>
                                                </div>   
                                          
                                            </div>
                                            <div class="btn-part">                                            
                                                <div class="form-group mb-0 d-flex align-items-center justify-content-center">
                                                    <div class="submit-btn">
                                                        <input class="submit" type="submit" value="Continue to Vote">
                                                    </div>
                                                    <div class="submit-btn mx-5">
                                                        <a class="readon btn-text ticket" href="{{ route('voter.showLogin') }}" style="padding: 0px 20px;">
                                                            <span >Sign In as Voter</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div> 
                                        </fieldset>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Section End -->
                </div>
            </div>
            <!-- Contact Section End -->     


@endsection