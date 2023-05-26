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
<link rel="stylesheet" href="{{ asset('assets/app.css') }}" />

<style>
    .banner {
        position: relative;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        background: whitesmoke;
        color: black;
    }

    .banner .trophy {
        position: absolute;
        left: 0;
        top: -20px;
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
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: black;
        margin-right: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 50px;
        padding-top: -50px;
    }

    .banner .module:last-child {
        margin-right: 0;
    }

    .banner .module span {
        font-size: 12px;
        color: whitesmoke;
    }

    .banner .module:not(:first-child)::before {
        content: '';
        height: 3px;
        width: 20px;
        background-color: black;
        position: absolute;
        left: -10px;
        top: 10px;
    }

    .circle {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #007bff;
        color: #fff;
    }

    .number {
        font-size: 25px;
        font-weight: bold;
    }

    .commentaire-ligne {
        position: relative;
    }

    .commentaire-ligne::after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        left: -3px; /* Ajustez la position de la ligne selon vos besoins */
        width: 2px;
        background-color: gainsboro; /* Couleur de la ligne */
    }


</style>
