<!-- copyright -->
<div class="copyright">
    <div class="container">
        <p>
            Copyright &copy;{{ date('Y') }}
            All rights reserved | Developed by <a href="#">Riyadh Ahmed</a>
    </div>
</div>


<!-- AdminLTE App -->
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>

<!-- Menu -->
<script src="{{ asset('assets/js/menu.js') }}"></script>
<script src="{{ asset('assets/js/jquery.plainoverlay.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
<script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/jquery.printElement.min.js') }}"></script>
<script src="{{asset('js/app.js')}}"></script>

<script>
    $.fn.modal.Constructor.prototype.enforceFocus = function () {
    };

    setTimeout(function () {
        $('.alert').fadeOut('slow');
    }, 5000); // <-- time in milliseconds
</script>
<script>
    function notify_view(type, message) {
        $.notify({
            message: message
        }, {
            type: type,
            allow_dismiss: true,
            offset: {x: '30', y: '65'},
            spacing: 10,
            z_index: 1031,
            delay: 200,
            animate: {enter: 'animated fadeInDown', exit: 'animated fadeOutUp'}
        });
    }
</script>