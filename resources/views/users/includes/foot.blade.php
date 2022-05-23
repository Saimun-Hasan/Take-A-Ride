    <!-- Vendor JS Files -->
    <script type="text/javascript" src="/users/js/jquery-3.5.1.min.js"></script>
    <script defer src="/users/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="/users/vendor/glightbox/js/glightbox.min.js"></script>
    <script defer src="/users/vendor/php-email-form/validate.js"></script>
    <script defer src="/users/vendor/purecounter/purecounter.js"></script>
    <script defer src="/users/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script defer src="/users/js/main.min.js"></script>
    <script defer src="/users/js/widget.min.js"></script>
        <script type="text/javascript" src="/users/js/select2.min.js"></script>
        <script>
        $(function () {
            // For select 2
            $(".select2").select2();
        });
        </script>

        <script>
            @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.success("{{ session('message') }}");
            @endif

            @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.error("{{ session('error') }}");
            @endif

            @if(Session::has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.info("{{ session('info') }}");
            @endif

            @if(Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.warning("{{ session('warning') }}");
            @endif
        </script>

    </body>

</html>
