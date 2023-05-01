<!-- CSS here -->
<link rel="stylesheet" href="{{ asset('assets/site/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/site/css/owl.carousel.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/site/css/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/site/css/magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/site/css/all.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/site/css/metisMenu.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/site/css/nice-select.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/site/css/spacing.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/site/css/main.css') }}" />

<style>
    .banner {
        position: relative;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        background-color: #005ce6;
        color: #fff;
    }

    .banner .trophy {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 10px;
    }

    .banner .trophy i {
        font-size: 30px;
    }

    .banner .modules-container {
        display: flex;
        align-items: center;
        margin-left: 100px;
        width: 100%;
        height: 100%;
        padding-right: 30px;
    }

    .banner .module {
        position: relative;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #fff;
        margin-right: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .banner .module:last-child {
        margin-right: 0;
    }

    .banner .module span {
        font-size: 12px;
        color: #000;
    }

    .banner .module:not(:first-child)::before {
        content: '';
        height: 2px;
        width: 20px;
        background-color: #fff;
        position: absolute;
        left: -10px;
        top: 9px;
    }
</style>
