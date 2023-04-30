
<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('assets/dash/assets/img/favicon/favicon.ico') }}" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<!-- Icons -->
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/fonts/fontawesome.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/fonts/tabler-icons.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/fonts/flag-icons.css') }}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
{{-- <link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/css/rtl/theme-semi-dark.css') }}" class="template-customizer-theme-css" /> --}}

{{-- <link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/css/rtl/theme-bordered.css') }}" class="template-customizer-theme-css" /> --}}
<link rel="stylesheet" href="{{ asset('assets/dash/assets/css/demo.css') }}" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/node-waves/node-waves.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/swiper/swiper.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">

<!-- Page CSS -->
<link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/css/pages/cards-advance.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/dash/assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
    <!-- Helpers -->
    <script src="{{ asset('assets/dash/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('assets/dash/assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/dash/assets/js/config.js') }}"></script>

@yield('styles')

