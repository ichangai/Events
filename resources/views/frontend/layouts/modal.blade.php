 <div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                         aria-hidden="true" style="border: none; background: none;">&times;</span></button>
             </div>
             <div class="modal-body container pb20">
                 <div class="row">
                     <div class="col-lg-12">
                         <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                             <li class="nav-item">
                                 <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab"
                                     aria-controls="home" aria-selected="true" style="font-family: 'Poppins', sans-serif">Login</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                     aria-controls="profile" aria-selected="false" style="font-family: 'Poppins', sans-serif">Register</a>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="tab-content container" id="myTabContent">
                     <div class="row mt25 tab-pane fade show active" id="login" role="tabpanel"
                         aria-labelledby="login-tab">
                         <div class="col-lg-6 col-xl-6">
                             <div class="login_thumb">
                                 <img class="img-fluid w100"
                                     src="{{ asset('frontend/assets/images/forex/foreximg3.jpg') }}"
                                     style="height: 400px; object-fit: cover;" alt="login.jpg">
                             </div>
                         </div>
                         <div class="col-lg-6 col-xl-6">
                             <div class="login_form">
                                 <form action="{{ route('user.login') }}" method="post">
                                    @csrf
                                     <div class="title mt-4">
                                         <h4 style="text-align: center; ">Login</h4>
                                     </div>
                                     <div class="input-group mb-2 mr-sm-2">
                                         <input type="text" style="font-family: 'Poppins', sans-serif"
                                             class="form-control" id="inlineFormInputGroupUsername2"
                                             placeholder="Email" name="email" required>
                                         <div class="input-group-prepend">
                                         </div>
                                     </div>
                                     <div class="input-group form-group">
                                         <input type="password" style="font-family: 'Poppins', sans-serif;"
                                             class="form-control" id="exampleInputPassword1"  placeholder="Password" name="password" required>
                                         <div class="input-group-prepend">
                                         </div>
                                     </div>
    
                                     <button type="submit"  style="font-family: 'Poppins', sans-serif; font-weight: 400;" class="btn btn-log btn-block">Log In</button>
                                     <p class="text-center"
                                         style="font-family: 'Poppins', sans-serif; font-size: 14px; color: gray;">
                                         Don't have an account? <a class="text-thm" id="register-tab" data-toggle="tab" href="#register" role="tab">Register</a></p>
                                 </form>
                             </div>
                         </div>
                     </div>
                     <div class="row mt25 tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                         <div class="col-lg-6 col-xl-6">
                             <div class="regstr_thumb">
                                 <img class="img-fluid w100"
                                     src="{{ asset('frontend/assets/images/forex/forex_event_3.jpg') }}"
                                     style="height: 450px; margin-top:50px; object-fit:cover; border-radius: 10px;" alt="regstr.jpg">
                             </div>
                         </div>
                         <div class="col-lg-6 col-xl-6">
                             <div class="sign_up_form">
                                 <div class="heading mt-2">
                                     <h4 style="text-align: center;">Register</h4>
                                 </div>
                                 <form action="{{ route('user.store') }}" method="post">
                                    @csrf
                                     <div class="form-group input-group">
                                         <input type="text" class="form-control"
                                             style="font-family: 'Poppins', sans-serif" id="exampleInputName" name="name"
                                             placeholder="Full Name" required>
                                         <div class="input-group-prepend">
                                         </div>
                                     </div>

                                     <div class="form-group input-group mt-5">
                                         <input type="email" style="font-family: 'Poppins', sans-serif"
                                             class="form-control" id="exampleInputEmail2" placeholder="Email" name="email">
                                         <div class="input-group-prepend" required>
                                         </div>
                                     </div>
                                     <div class="form-group input-group mt-5">
                                         <input type="password" style="font-family: 'Poppins', sans-serif"
                                             class="form-control" id="exampleInputPassword2" placeholder="Password" name="password">
                                         <div class="input-group-prepend" required>
                                         </div>
                                     </div>

                                     <div class="form-group input-group mt-5">
                                        <input type="text" style="font-family: 'Poppins', sans-serif"
                                            class="form-control" id="exampleInputEmail2" placeholder="phone" name="phone">
                                        <div class="input-group-prepend" required>
                                        </div>
                                    </div>

                                     <button type="submit" style="font-family: 'Poppins', sans-serif"
                                         class="btn btn-log btn-block btn-thm mt-3">Sign Up</button>
                                     <p class="text-center text-mute"
                                         style="font-family: 'Poppins', sans-serif; font-size: 14px; color: gray;">
                                         Already have an account? <a class="text-thm" id="login-tab" data-toggle="tab" href="#login">Log In</a></p>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
