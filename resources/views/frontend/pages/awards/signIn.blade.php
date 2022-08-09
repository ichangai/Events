@extends('frontend.layouts.master')

@section('content')
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img3">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">
                            Sign In to Vote
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
                                        Sign In as a Voter
                                    </h2>
                                    <div class="heading-border-line left-style"></div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-wrap">
                                    <div id="form-messages"></div>
                                    <form method="post" action="{{ route('voter.sign_in') }}">
                                        @csrf
                                        <fieldset>
                                            <div class="row">
                                                <input type="text" value="{{ Session::get('event_id') }}" name="event_id" hidden>
                                                <div class="col-lg-10 col-md-6 col-sm-6 mb-80">
                                                    <input class="from-control" type="text" name="email" placeholder="Email" required>
                                                </div>                                           
                                            </div>
                                            <div class="btn-part">                                            
                                                <div class="form-group mb-0 d-flex align-items-center justify-content-center">
                                                    <div class="submit-btn">
                                                        <input class="submit" type="submit" value="Back">
                                                    </div>
                                                    <div class="submit-btn mx-5">
                                                        <input class="submit" type="submit" value="Sign in as a Voter">
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