@extends('frontend.layouts.master')


@section('content')
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img3">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">
                            Become a sponsor
                        </h1>                       
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->
            <!-- Contact Section Start -->
            <div class="rs-contact home-style1 home-style3 bg16 pt-120 md-pt-80" style="margin-bottom: 100px;">
                <div class="container">
                    <!-- Contact Section Start -->
                    <div class="rs-contact pt-120 md-pt-80">
                        <div class="row y-middle">
                            <div class="col-lg-6">
                                <div class="sec-title mb-85 md-mb-50">
                                    <span class="sub-text">Apply</span>
                                    <h2 class="title pb-26">
                                        Apply to become a sponsor
                                    </h2>
                                    <div class="heading-border-line left-style"></div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-wrap">
                                    <div id="form-messages"></div>
                                    <form method="post" action="{{ route('sponsor.store') }}">
                                        @csrf
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                    <input class="from-control" type="text" name="name" placeholder="Name of company">
                                                </div> 
                                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                    <input class="from-control" type="text" name="email" placeholder="E-Mail">
                                                </div>   
                                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                    <input class="from-control" type="text" name="phone" placeholder="Number to contact">
                                                </div>   
                                                <select class="col-lg-6 col-md-6 col-sm-6 mb-30" name="level">
                                                    <option value="platinum">Platimun</option>
                                                    <option value="gold">Gold</option>
                                                    <option value="silver">Silver</option>
                                                </select>
                                          
                                                <div class="col-lg-12 mb-30">
                                                    <textarea class="from-control" name="message" placeholder="Your message Here" ></textarea>
                                                </div>
                                            </div>
                                            <div class="btn-part">                                            
                                                <div class="form-group mb-0 d-flex align-items-center justify-content-center">
                                                    <div class="submit-btn">
                                                        <input class="submit" type="submit" value="Submit Now">
                                                    </div>
                                                </div>
                                                <h3 class="margin-0 text-center mt-50">Contact Calvin Kirochi 0757578046</h3>
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