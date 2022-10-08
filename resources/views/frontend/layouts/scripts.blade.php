<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
    $(document).ready(function () {
        const _token = $('input[name="_token"]').val();

        load_data('', _token);

        function load_data(id="", token)
        {
            $.ajax({
                url: "{{ route('loadmore.load_data') }}",
                method: "POST",
                data: {id:id, _token:_token},
                success: function (data) {
                    $('#load_more_button').remove();
                    $('#post_data').append(data);
                }
            })
        }

        $(document).on('click', '#load_more_button', function () {
            let id = $(this).data('id');
            $('#load_more_button').html('<b>Loading...</b>');
            load_data(id, _token);
        });
    });
</script>


<script>
    @if (session('success'))
        swal({
            position: "top-right",
            icon: "success",
            title: "Success",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2500
        });
    @else(session('error'))
        swal({
            "Error!", 
        "{{ session('error') }}", 
        "error"
    });
    @endif
</script>


</body>

</html>
