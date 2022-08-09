            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header header-transparent">
                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="row-table">
                                <div class="col-cell">
                                    <div class="">
                                        @php
                                            $awards = \App\Models\Event::where('category_id', 1)->limit(3)->get();
                                        @endphp
                                        <div class="main-menu">
                                            <nav class="rs-menu hidden-md">
                                                <ul class="nav-menu">
                                                    <li class="">
                                                        <a href="{{ route('home') }}">Home</a>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Awards</a>
                                                        <ul class="sub-menu">
                                                            @foreach ($awards as $award)
                                                                <li><a href="{{ route('single.event', $award->id) }}">{{ $award->name }}</a></li>
                                                            @endforeach
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    @php
                                                        $compes = \App\Models\Event::where('category_id', 2)->limit(3)->get();
                                                    @endphp
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Competition</a>
                                                        <ul class="sub-menu">
                                                            @foreach ($compes as $compe)
                                                            <li><a href="{{ route('single.event', $compe->id) }}">{{ $compe->name  }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    @php
                                                        $confs = \App\Models\Event::where('category_id', 3)->limit(3)->get();
                                                    @endphp
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Confrence</a>
                                                        <ul class="sub-menu">
                                                            @foreach ($confs as $conf)
                                                             <li><a href="{{ route('single.event', $conf->id) }}">{{ $conf->name  }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    @php
                                                        $seminars = \App\Models\Event::where('category_id', 4)->limit(3)->get();
                                                    @endphp
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Seminar</a>
                                                        <ul class="sub-menu">
                                                            @foreach ($seminars as $seminar)
                                                             <li><a href="{{ route('single.event', $seminar->id) }}">{{ $seminar->name  }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                     @php
                                                        $expos = \App\Models\Event::where('category_id', 5)->limit(3)->get();
                                                    @endphp

                                                    <li class="menu-item-has-children">
                                                        <a href="#">Expo</a>
                                                        <ul class="sub-menu">
                                                             @foreach ($expos as $expo)
                                                             <li><a href="{{ route('single.event', $expo->id) }}">{{ $expo->name  }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </li>

                                                    
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Learn To Trade</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="https://forextradingacademy.co.ke/">Forex
                                                                    Trading Academy</a></li>
                                                        </ul>
                                                    </li>

                                                </ul> <!-- //.nav-menu -->
                                            </nav>
                                        </div> <!-- //.main-menu -->
                                    </div>
                                </div>
                                <div class="">
                                    <div class="expand-btn-inner">
                                        <ul>
                                            @if (!auth()->user())
                                                <li class="btn-quote mr-20" data-toggle="modal"
                                                    data-target=".bd-example-modal-lg">
                                                    <a href="#" class="quote-button">Sign In</a>
                                                </li>

                                                <li class="btn-quote" data-toggle="modal"
                                                    data-target=".bd-example-modal-lg">
                                                    <a href="#" class="quote-button">Register</a>
                                                </li>
                                            @else
                                                <li class="btn-quote mr-20" data-toggle="modal"
                                                    data-target="#contactModal">
                                                    <a href="#" class="quote-button">Contact Us</a>
                                                </li>
                                                <li class="btn-quote mr-20">
                                                    <a href="{{ route('user.logout') }}" class="quote-button">Sign
                                                        Out</a>
                                                </li>
                                            @endif

                                            <li class="humburger">
                                                <a id="nav-expander" class="nav-expander bar" href="#">
                                                    <div class="bar">
                                                        <span class="dot1"></span>
                                                        <span class="dot2"></span>
                                                        <span class="dot3"></span>
                                                        <span class="dot4"></span>
                                                        <span class="dot5"></span>
                                                        <span class="dot6"></span>
                                                        <span class="dot7"></span>
                                                        <span class="dot8"></span>
                                                        <span class="dot9"></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End -->
                </header>
                <!--Header End-->
            </div>
            <!--Full width header End-->
