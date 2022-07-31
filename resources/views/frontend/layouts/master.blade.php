@include('frontend.layouts.head')

@include('frontend.layouts.navbar')

@include('frontend.layouts.modal')

@include('frontend.layouts.paymentModal')

@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

@yield('content')

@include('frontend.layouts.footer')

@include('frontend.layouts.scripts')

