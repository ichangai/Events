<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <title>Forex | Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    {{-- <link href="../theme/demo6/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle1036.css?v=2.1.1" rel="stylesheet" type="text/css" /> --}}
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('backend/assets/css/pages/login/login-21036.css?v=2.1.1') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend/assets/plugins/global/plugins.bundle1036.css?v=2.1.1') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend/assets/plugins/custom/prismjs/prismjs.bundle1036.css?v=2.1.1') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend/assets/css/style.bundle1036.css?v=2.1.1') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading">
    <!--begin::Main-->
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-2 login-signin-on d-flex flex-column flex-column-fluid bg-white position-relative overflow-hidden"
            id="kt_login">
            <!--begin::Body-->
            <div class="login-body d-flex flex-column-fluid align-items-stretch justify-content-center">
                <div class="container row">
                    <div class="col-lg-6 d-flex align-items-center">
                        <!--begin::Signin-->
                        <div class="login-form login-signin">
                            @if ($errors->any())
                                <div class="alert alert-danger" id="danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }} </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <!--begin::Form-->
                            <form action="{{ route('reset.password') }}" method="POST">
                                @csrf

                                <!--begin::Title-->
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="pb-13 pt-lg-0 pt-5">
                                    {{-- <h3 class="font-size-h4 font-size-h1-lg">Welcome to the Admin Page</h3> --}}
                                    <h3 class="">Enter your new passwords</h3>
                                </div>
                                <!--begin::Title-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                    <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="email"
                                        name="email" value="{{ $email ?? old('email') }}" />
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Password</label>
                                    <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="password"
                                        name="password" value="{{ old('password') }}" />
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">Confirm Password</label>
                                    <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="password"
                                        name="password_confirm" value="{{ old('password_confirm') }}" />
                                    <span class="text-danger">
                                        @error('password_confirm')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <!--end::Form group-->
                                <!--begin::Action-->
                                <div class="pb-lg-0 pb-5" style="text-align: center;">
                                    <button type="submit" name="submit"
                                        class="btn btn-primary font-weight-bolder font-size-h6 px-12 py-4 my-3 mr-3">Reset
                                        Password</button>
                                </div>
                                <!--end::Action-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Signin-->
                        <!--begin::Signup-->
                    </div>
                    <div class="col-lg-6 bgi-size-contain bgi-no-repeat bgi-position-y-center bgi-position-x-center min-h-150px mt-10 m-md-0"
                        style="background-image: url({{ asset('backend/assets/media/img/loginimage.svg') }})"
                        style="width: 200px;"></div>
                </div>
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="login-footer py-10 flex-column-auto">
                <div
                    class="container d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between">
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
    <script src="{{ asset('backend/assets/js/pages/custom/login/login1036.js?v=2.1.1') }}"></script>
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
