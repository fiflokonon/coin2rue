<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets/dash/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/dash/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/dash/assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/dash/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/dash/assets/vendor/libs/node-waves/node-waves.js') }}"></script>

<script src="{{ asset('assets/dash/assets/vendor/libs/hammer/hammer.js') }}"></script>
<script src="{{ asset('assets/dash/assets/vendor/libs/i18n/i18n.js') }}"></script>
<script src="{{ asset('assets/dash/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

<script src="{{ asset('assets/dash/assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets/dash/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('assets/dash/assets/vendor/libs/swiper/swiper.js') }}"></script>
<script src="{{ asset('assets/dash/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/dash/assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/dash/assets/js/dashboards-analytics.js') }}"></script>

<!-- Helpers -->
<script src="{{ asset('assets/dash/assets/vendor/js/helpers.js') }}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
<script src="{{ asset('assets/dash/assets/vendor/js/template-customizer.js') }}"></script>
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('assets/dash/assets/js/config.js') }}"></script>

<!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC');
</script>
<!-- End Google Tag Manager -->


@yield('scripts')
