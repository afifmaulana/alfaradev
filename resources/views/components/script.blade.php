<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- ALL PLUGINS -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.pogo-slider.min.js') }}"></script>
<script src="{{ asset('assets/js/slider-index.js') }}"></script>
{{-- <script src="{{ asset('assets/js/smoothscroll.js') }}"></script> --}}
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/images-loded.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/dark-mode.js') }}"></script>

<script>
    $(function() {
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 100) {
                $('#logo').css('height', '40');
                $('#logo').css('width', 'auto');
            } else {
                $('#logo').css('height', '55');
                $('#logo').css('width', 'auto');
            }
        });
    });
</script>
