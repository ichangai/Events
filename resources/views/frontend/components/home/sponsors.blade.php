           <!-- Our Sponsor Section Start -->
           <div id="rs-our-sponsor" class="rs-our-sponsor sponsor-home-style5 gray-bg5 pt-110 pb-120 md-pt-70 md-pb-80">
               <div class="container">
                   @if (count($plat_sponsors) > 0)
                       <div class="all-grid-sponsors silver-sponsors text-center">
                           <div class="sec-title text-center mb-20">
                               <h2 class="title title3">
                                   Platinum Sponsors
                               </h2>
                           </div>
                           @foreach ($plat_sponsors as $sponsor)
                               <div class="grid-item ">
                                   <div class="logo-img">
                                       <a href="">
                                           <img src="{{ $sponsor->image }}" alt="Icons">
                                       </a>
                                   </div>
                               </div>
                           @endforeach
                       </div>
                   @endif
                   @if (count($gold_sponsors) > 0)
                       <div class="all-grid-sponsors silver-sponsors text-center">
                           <div class="sec-title text-center mb-20">
                               <h2 class="title title3">
                                   Gold Sponsors
                               </h2>
                           </div>
                           @foreach ($gold_sponsors as $sponsor)
                               <div class="grid-item ">
                                   <div class="logo-img">
                                       <a href="">
                                           <img src="{{ $sponsor->image }}" alt="Icons">
                                       </a>
                                   </div>
                               </div>
                           @endforeach
                       </div>
                   @endif
                   @if (count($silver_sponsors) > 0)
                       <div class="all-grid-sponsors silver-sponsors text-center">
                           <div class="sec-title text-center mb-20">
                               <h2 class="title title3">
                                   Silver Sponsors
                               </h2>
                           </div>
                           @foreach ($silver_sponsors as $sponsor)
                               <div class="grid-item ">
                                   <div class="logo-img">
                                       <a href="">
                                           <img src="{{ $sponsor->image }}" alt="Icons">
                                       </a>
                                   </div>
                               </div>
                           @endforeach
                       </div>
                   @endif
                   <div class="btn-part text-center mt-40">
                       <a class="readon btn-text ticket event" href="{{ route('apply') }}">
                           <span>Become a Sponsor</span>
                       </a>
                   </div>
               </div>
           </div>
           <!-- Our Sponsor Section Start -->
