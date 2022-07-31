 <div class="sign_up_modal modal fade payment_bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                         aria-hidden="true" style="border: none; background: none;">&times;</span></button>
             </div>
             <div class="modal-body container pb20">
                 {{-- <div class="row d-flex justify-content-center align-items-center">
                     <div class="col-lg-12 ">
                         <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                             <li class="nav-item">
                                 <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab"
                                     aria-controls="home" aria-selected="true" style="font-family: 'Poppins', sans-serif">Payment Details</a>
                             </li>
                         </ul>
                     </div>
                 </div> --}}
                 @if(auth()->user())
                 <div class="tab-content container" id="myTabContent">
                     <div class="row mt25 tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab">
                         <div class="col-lg-6 col-xl-6">
                             <div class="regstr_thumb">
                                 <img class="img-fluid w100"
                                     src="{{ asset('frontend/assets/images/forex/forex_event_3.jpg') }}"
                                     style="height: 350px; margin-top:50px; object-fit:cover; border-radius: 10px;" alt="regstr.jpg">
                             </div>
                         </div>
                         <div class="col-lg-6 col-xl-6">
                             <div class="sign_up_form">
                                 <div class="heading mt-2">
                                     <h4 style="text-align: center;">User Details</h4>
                                 </div>
                                 <form action="https://payments.ipayafrica.com/v3/ke" method="post">
                                    @csrf
                                    @forelse ($fields as $key => $value )
                                    <input name="{{$key}}" type="text" value="{{$value}}" hidden>
                                    @empty

                                    @endforelse
                                     <div class="form-group input-group d-flex justify-content-around align-items-center">
                                        <label for="" class="mx-2" style="font-weight: 700">Name</label>
                                         <input type="text" class="form-control col-l3" 
                                             style="font-family: 'Poppins', sans-serif" id="exampleInputName" name="name"
                                             placeholder="Full Name" value="{{ auth()->user()->name }}">
                                         <div class="input-group-prepend">
                                         </div>
                                     </div>
                                     <input name="hsh" type="text" value="{{$generated_hash}}" hidden>
                                     
                                     <div class="form-group input-group mt-5 justify-content-around align-items-center">
                                        <label for="" class="mx-2" style="font-weight: 700">Email</label>
                                         <input type="email" style="font-family: 'Poppins', sans-serif"
                                             class="form-control" id="exampleInputEmail2" placeholder="Email" name="email" value="{{ auth()->user()->email }}">
                                         <div class="input-group-prepend">
                                         </div>
                                     </div>

                                     <div class="form-group input-group my-5 justify-content-around align-items-center">
                                        <label for="" class="mx-2" style="font-weight: 700">Phone</label>
                                        <input type="text" style="font-family: 'Poppins', sans-serif"
                                            class="form-control" id="exampleInputEmail2" placeholder="phone" name="phone" value="{{ auth()->user()->phone }}">
                                        <div class="input-group-prepend">
                                        </div>
                                    </div>
                            

                                     <input type="submit" name="submit" value="submit" style="font-family: 'Poppins', sans-serif"
                                         class="btn btn-log btn-block btn-thm mt-3">
                                     <p class="text-center text-mute"
                                         style="font-family: 'Poppins', sans-serif; font-size: 14px; color: gray;">
                                         {{-- Already have an account? <a class="text-thm" id="login-tab" data-toggle="tab" href="#login">Log In</a></p> --}}
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
                 @endif
             </div>
         </div>
     </div>
 </div>
