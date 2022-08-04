<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!-- modernizr js -->
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('frontend/assets/js/modernizr-2.8.3.min.js') }}"></script>
<!-- jquery latest version -->
<!-- Bootstrap v4.4.1 js -->
<!-- op nav js -->
<script src="{{ asset('frontend/assets/js/jquery.nav.js') }}"></script>
<!-- isotope.pkgd.min js -->
<script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
<!-- owl.carousel js -->
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<!-- Time Circle js -->
<script src="{{ asset('frontend/assets/js/time-circle.js') }}"></script>
<!-- Skill bar js -->
<script src="{{ asset('frontend/assets/js/skill.bars.jquery.js') }}"></script>
<!-- imagesloaded js -->
<script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- waypoints.min js -->
<script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
<!-- counterup.min js -->
<script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
<!-- magnific popup js -->
<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- contact form js -->
<script src="{{ asset('frontend/assets/js/contact.form.js') }}"></script>
<!-- main js -->
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>

@yield('scripts')

<!-- modal js -->
<script src="{{ asset('frontend/assets/js/jquery.mmenu.all.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.minn.js') }}"></script>
<!-- sweet alert js -->
<script src="{{ asset('frontend/assets/js/sweetalert21036.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>
<script>
    AOS.init({
        duration: 2000
    });
</script>


<script>
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

</html>
