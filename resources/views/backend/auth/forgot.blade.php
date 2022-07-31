<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>Forex Arena | Forgot Password</title>
    <meta name="description" content="Forgot password page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('backend/assets/css/pages/login/login-21036.css?v=2.1.1') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('backend/assets/plugins/global/plugins.bundle1036.css?v=2.1.1') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend/assets/plugins/custom/prismjs/prismjs.bundle1036.css?v=2.1.1') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend/assets/css/style.bundle1036.css?v=2.1.1') }}" rel="stylesheet" type="text/css" />
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon"/>
    <!-- Hotjar Tracking Code for keenthemes.com -->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" style="background: white;"
    class="header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-2 login-signin-on d-flex flex-column flex-column-fluid bg-white position-relative overflow-hidden" id="kt_login">
            <!--begin::Body-->
            <div class="login-body d-flex flex-column-fluid align-items-center" style="justify-content: space-evenly" >
                <div class="container row">
                    <div class="col-lg-6 d-flex align-items-center">
                        <!--begin::Signin-->
                        <div class="login-form login-signin">
                            <!--begin::Form-->
                            <form action="{{ route('user.forgot.link') }}"  method="POST">
                                @csrf 
                                <!--begin::Title-->
                                <div class="pb-5 pb-lg-15">
									<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Forgotten Password ?</h3>
									<p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
								</div>
                                <!--begin::Title-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                    <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="email" name="email" value="{{ old('email') }}" />
                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                </div>
                                <!--end::Form group-->
                                <!--begin::Action-->
                                <div class="pb-lg-0 pb-5" style="text-align: center;">
                                    <button  type="submit" name="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-12 py-4 my-3 mr-3">Send Reset Password Link</button>
                                </div>
                                <!--end::Action-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Signin-->
                        <!--begin::Signup-->
                    </div>
                    <div class="col-lg-6 bgi-size-contain bgi-no-repeat bgi-position-y-center bgi-position-x-center min-h-150px mx-5 m-md-0" style="background-image: url({{ asset('backend/assets/media/img/sisitales_author.png') }}); margin-right: 30px;"></div>
                </div>
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="login-footer py-10 flex-column-auto">
                <div class="container d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between">
                    <div class="font-size-h6 font-weight-bolder order-2 order-md-1 py-2 py-md-0">
                        <span class="text-muted font-weight-bold mr-2">2022©</span>
                        
                    </div>
                </div>
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->

    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('backend/assets/plugins/global/plugins.bundle1036.js?v=2.1.1') }}"></script>
    <script src="{{ asset('backend/assets/plugins/custom/prismjs/prismjs.bundle1036.js?v=2.1.1') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.bundle1036.js?v=2.1.1') }}"></script>
    <!--end::Global Theme Bundle-->

    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('backend/assets/js/pages/custom/login/login-31036.js?v=2.1.1') }}"></script>
    <!--end::Page Scripts-->
    <script src="">
        @if (session('success'))
            Swal.fire({
                position: "top-right",
                icon: "success",
                title: "Success",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2500
            });
        @else
            (session('error'))
            Swal.fire("Error!", "{{ session('error') }}", "error");
        @endif
    </script>
</body>
<!--end::Body-->

</html>
