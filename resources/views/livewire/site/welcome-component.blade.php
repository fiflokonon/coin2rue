@section('header-area')
    <header class="header-top-area home-5">
        <div id="hideshow-sticky-menu">
            <div class="main-header-area menu-style-6">
                <div class="header-inner menu-sticky sticky">
                    <div class="container">
                        <div class="menu-area">
                            <div class="logo-area">
                                <div class="custom-logo-area">
                                    <a href="index-5.html#">
                                        <img src="img/home-5/header-logo-3.png" alt="">
                                    </a>
                                </div>
                                <div class="custom-sticky-logo">
                                    <a href="index-5.html#">
                                        <img src="img/home-5/header-logo-1.png" alt="">
                                    </a>
                                </div>
                            </div>

                            <nav id="topheader" class="navbar navbar-expand justify-content-start py-0">
                                <ul class="navbar-nav list-style-none">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('welcome') }}">ACCUEIL</a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">MARKETPLACE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">EMPLOIS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">MON COMPTE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
                                    </li>
                                    <li class="right-nav mb-0 d-flex align-items-center justify-content-end">
                                        @if (Auth::guest())
                                            <a href="{{ route('login') }}"
                                                class="btn btn-warning px-5 rounded-pill text-white">
                                                INSCRIPTIONS
                                            </a>
                                        @else
                                            <div class="d-line">
                                                <img src="{{ asset('assets/site/img/profil.png') }}" alt="">

                                                <span class="ml-5" style="font-size: 20px"> ToysRus Lyon</span>
                                            </div>
                                        @endif
                                    </li>
                                </ul>
                            </nav>

                            <!--<ul class="right-nav mb-0 d-flex align-items-center justify-content-end">
                                    <li>
                                        @if (Auth::guest())
    <a href="{{ route('login') }}" class="btn btn-warning px-5 rounded-pill text-white">
                                                INSCRIPTIONS
                                            </a>
@else
    <div class="d-line">
                                                <img src="{{ asset('assets/site/img/profil.png') }}" alt="">

                                                <span class="ml-5" style="font-size: 20px"> ToysRus Lyon</span>
                                            </div>
    @endif
                                    </li>
                                </ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.theme-main-menu -->
    </header>
@endsection
<div>

    <!--slider-area start-->
    <div id="slider-one" class="main-slider-area home-5">
        <div class="slider-bg-three">
            <div class="container position-relative">
                <div class="row ">
                    <div class="col-lg-10 col-md-6 position-absolute top-100 start-50 translate-middle p-5 rounded-1"
                        style="background-color:aliceblue">
                        <form action="">
                            <div class="row ">
                                <div class="col-md-12 d-flex bd-highlight">
                                    <input name="ville_id" id="ville_id" class="form-control" required
                                        placeholder="Je recherche un .. médecin, une pizzéria, une salle des fêtes...">
                                    <input name="ville_id" id="ville_id" class="form-control" required
                                        placeholder="A quel endroit ?">
                                    <button type="" class="btn btn-warning p-2 px-5" style="margin-left: 40px">
                                        Rechecher
                                    </button>

                                </div>



                            </div>
                        </form>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12">
                        <div class="slider__content3 text-center">
                            <h5 class="sub-title mb-15">Trouvez le meilleur lieu <br> à proximité de chez vous</h5>
                            <p class="text-white mb-5">Trouvez le meilleur lieu à proximité de chez vous Trouvez le
                                meilleur lieu à proximité de chez vous Trouvez le meilleur lieu <br> à proximité de chez
                                vous Trouvez le meilleur lieu à proximité de chez vous </p>
                            <div class="section-btn">
                                <div class="">
                                    <a href="" class="btn btn-warning px-5 py-3 rounded-pill text-white">
                                        Voir les catégories
                                    </a>
                                    <a href="{{ route('login') }}"
                                        class="btn btn-warning px-5 py-3 rounded-pill text-white">
                                        Je suis une entreprise
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--slider-area end-->
    {{-- <div class="container  position-relative">

    </div> --}}
    <!--services-area start-->
    <div class="services-area pt-150 home-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="services-wraper">
                        <div class="services-top">
                            <div class="services-icon">
                                <img src="{{ asset('assets/site/img/icon/1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="services-bottom">
                            <div class="services-title">
                                <h2 class="title">Commerce</h2>
                            </div>
                            <p class="services-text">
                                Grâce à nos entreprises partenaires, vous avez la possibilité d'acheter leurs meilleurs
                                produits sans vous déplacer (possibilité de livraison)

                            </p>
                        </div>
                        <div class="services-btn-part">
                            <div class="services-btn">
                                <a href="index-5.html#"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="services-wraper">
                        <div class="services-top">
                            <div class="services-icon">
                                <img src="{{ asset('assets/site/img/icon/2.png') }}" alt="">

                            </div>
                        </div>
                        <div class="services-bottom">
                            <div class="services-title">
                                <h2 class="title">Emploi</h2>
                            </div>
                            <p class="services-text">
                                Au quotidien, ce sont des hommes et des femmes qui s'engagent à travailler pour un
                                meilleur avenir. Trouver votre prochain emploi sur Coin2Rue

                            </p>
                        </div>
                        <div class="services-btn-part">
                            <div class="services-btn">
                                <a href="index-5.html#"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="services-wraper">
                        <div class="services-top">
                            <div class="services-icon">
                                <img src="{{ asset('assets/site/img/icon/3.png') }}" alt="">

                            </div>
                        </div>
                        <div class="services-bottom">
                            <div class="services-title">
                                <h2 class="title">La vie d’entreprise</h2>
                            </div>
                            <p class="services-text">
                                Votre entreprise pourra communiquer avec vous toutes les données importantes du CSE, vos
                                fiches de paies, contrat de travail.
                            </p>
                        </div>
                        <div class="services-btn-part">
                            <div class="services-btn">
                                <a href="index-5.html#"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--services-area end-->
    <!--counter-area start-->
    <section class="grey-bg counter-area pb-90 pt-md-50 pb-md-30 pt-xs-50 pb-xs-30">
        <div class="container">
            <div class="row pt-100 pt-md-10 pt-xs-10">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-60">
                        <h5 class="sect-title">Explorez les entreprises par catégorie</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="white-bg text-center mb-30 divmenu">
                        <div class="chart">
                            <img src="{{ asset('assets/site/img/icon/3.png') }}" alt="">

                        </div>
                        <h5 class="">Restaurants</h5>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="white-bg  text-center mb-30 divmenu">
                        <div class="chart" data-percent="73">
                            <img src="{{ asset('assets/site/img/icon/3.png') }}" alt="">

                        </div>
                        <h5 class="">Shopping</h5>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="white-bg text-center mb-30 divmenu">
                        <div class="chart" data-percent="73">
                            <img src="{{ asset('assets/site/img/icon/3.png') }}" alt="">

                        </div>
                        <h5 class=""> nocturnes</h5>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="white-bg text-center mb-30 divmenu">
                        <div class="chart" data-percent="73">
                            <img src="{{ asset('assets/site/img/icon/3.png') }}" alt="">

                        </div>
                        <h5 class="">Salon de beauté et Spas</h5>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="white-bg text-center mb-30 divmenu">
                        <div class="chart" data-percent="73">
                            <img src="{{ asset('assets/site/img/icon/3.png') }}" alt="">

                        </div>
                        <h5 class="">Automobile</h5>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="white-bg text-center mb-30 divmenu">
                        <div class="chart" data-percent="73">
                            <img src="{{ asset('assets/site/img/icon/3.png') }}" alt="">

                        </div>
                        <h5 class="">Plus</h5>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--counter-area end-->
    <!--counter-area start-->
    <section class="grey-bg counter-area pb-90 pt-md-50 pb-md-30 pt-xs-50 pb-xs-30">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/site/img/blog.png') }}" alt="">

                        <div class="card-body p-3">
                            <h5 class="card-title mb-4">VTECH : voiture électronique</h5>
                            <div class="d-line mb-5">
                                <img src="{{ asset('assets/site/img/lieu.png') }}" alt="">

                                <span> ToysRus Lyon</span>
                                <span class="float-end">ToysRus Lyon</span>
                            </div>
                            <p class="card-text mt-5">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                        </div>
                        <div class="card-footer">
                            <span class="badge rounded-pill text-dark"
                                style="background-color: rgba(6, 116, 236, 0.1);color: #0674EC;">10$</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/site/img/blog.png') }}" alt="">

                        <div class="card-body p-3">
                            <h5 class="card-title mb-4">VTECH : voiture électronique</h5>
                            <div class="d-line mb-5">
                                <img src="{{ asset('assets/site/img/lieu.png') }}" alt="">

                                <span> ToysRus Lyon</span>
                                <span class="float-end">ToysRus Lyon</span>
                            </div>
                            <p class="card-text mt-5">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                        </div>
                        <div class="card-footer">
                            <span class="badge rounded-pill text-dark"
                                style="background-color: rgba(6, 116, 236, 0.1);color: #0674EC;">10$</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/site/img/blog.png') }}" alt="">

                        <div class="card-body p-3">
                            <h5 class="card-title mb-4">VTECH : voiture électronique</h5>
                            <div class="d-line mb-5">
                                <img src="{{ asset('assets/site/img/lieu.png') }}" alt="">

                                <span> ToysRus Lyon</span>
                                <span class="float-end">ToysRus Lyon</span>
                            </div>
                            <p class="card-text mt-5">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                        </div>
                        <div class="card-footer">
                            <span class="badge rounded-pill text-dark"
                                style="background-color: rgba(6, 116, 236, 0.1);color: #0674EC;">10$</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/site/img/blog.png') }}" alt="">

                        <div class="card-body p-3">
                            <h5 class="card-title mb-4">VTECH : voiture électronique</h5>
                            <div class="d-line mb-5">
                                <img src="{{ asset('assets/site/img/lieu.png') }}" alt="">

                                <span> ToysRus Lyon</span>
                                <span class="float-end">ToysRus Lyon</span>
                            </div>
                            <p class="card-text mt-5">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                        </div>
                        <div class="card-footer">
                            <span class="badge rounded-pill text-dark"
                                style="background-color: rgba(6, 116, 236, 0.1);color: #0674EC;">10$</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/site/img/blog.png') }}" alt="">

                        <div class="card-body p-3">
                            <h5 class="card-title mb-4">VTECH : voiture électronique</h5>
                            <div class="d-line mb-5">
                                <img src="{{ asset('assets/site/img/lieu.png') }}" alt="">

                                <span> ToysRus Lyon</span>
                                <span class="float-end">ToysRus Lyon</span>
                            </div>
                            <p class="card-text mt-5">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                        </div>
                        <div class="card-footer">
                            <span class="badge rounded-pill text-dark"
                                style="background-color: rgba(6, 116, 236, 0.1);color: #0674EC;">10$</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/site/img/blog.png') }}" alt="">

                        <div class="card-body p-3">
                            <h5 class="card-title mb-4">VTECH : voiture électronique</h5>
                            <div class="d-line mb-5">
                                <img src="{{ asset('assets/site/img/lieu.png') }}" alt="">

                                <span> ToysRus Lyon</span>
                                <span class="float-end">ToysRus Lyon</span>
                            </div>
                            <p class="card-text mt-5">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                        </div>
                        <div class="card-footer">
                            <span class="badge rounded-pill text-dark"
                                style="background-color: rgba(6, 116, 236, 0.1);color: #0674EC;">10$</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-50">
                <a href="" class="btn btn-warning px-5 rounded-pill mt-10">
                    Tout voir
                </a>
            </div>
        </div>
    </section>
    <!--counter-area start-->
    <section class="counter-area pt-110 pb-85 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30 home-5">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-3 col-md-3">
                    <div class="rts-counter-list">
                        <div class="counter-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="count-text2 text-left mb-30 mt-xs-20">
                            <h3><span class="counter">25</span>+</h3>
                            <h5>Years of Experience</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="rts-counter-list">
                        <div class="counter-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="count-text2 text-left mb-30 mt-xs-20">
                            <h3><span class="counter">
                                    3921 </span>+</h3>
                            <h5>IT Problems Solved</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="rts-counter-list">
                        <div class="counter-icon">
                            <i class="fas fa-thumbs-up"></i>
                        </div>
                        <div class="count-text2 text-left mb-30 mt-xs-20">
                            <h3><span class="counter">199</span>+</h3>
                            <h5>Satisfied Clients</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="rts-counter-list">
                        <div class="counter-icon">
                            <i class="fas fa-thumbs-up"></i>
                        </div>
                        <div class="count-text2 text-left mb-30 mt-xs-20">
                            <h3><span class="counter">199</span>+</h3>
                            <h5>Satisfied Clients</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--counter-area end-->

    <section class="grey-bg counter-area pb-90 pt-md-50 pb-md-30 pt-xs-50 pb-xs-30">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/site/img/blog.png') }}" alt="">
                        <div class="card-body p-3 row">
                            <div class="col-2">
                                <img src="{{ asset('assets/site/img/lieu.png') }}" alt="">
                            </div>
                            <div class="col-10">
                                <h4 class="card-title mb-4">voiture électronique</h4>
                                <span>text text text tex</span><br>
                                <span>text text text text </span><br>
                                <span>text text text text </span><br>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/site/img/blog.png') }}" alt="">
                        <div class="card-body p-3 row">
                            <div class="col-2">
                                <img src="{{ asset('assets/site/img/lieu.png') }}" alt="">
                            </div>
                            <div class="col-10">
                                <h4 class="card-title mb-4">voiture électronique</h4>
                                <span>text text text tex</span><br>
                                <span>text text text text </span><br>
                                <span>text text text text </span><br>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/site/img/blog.png') }}" alt="">
                        <div class="card-body p-3 row">
                            <div class="col-2">
                                <img src="{{ asset('assets/site/img/lieu.png') }}" alt="">
                            </div>
                            <div class="col-10">
                                <h4 class="card-title mb-4">voiture électronique</h4>
                                <span>text text text tex</span><br>
                                <span>text text text text </span><br>
                                <span>text text text text </span><br>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/site/img/blog.png') }}" alt="">
                        <div class="card-body p-3 row">
                            <div class="col-2">
                                <img src="{{ asset('assets/site/img/lieu.png') }}" alt="">
                            </div>
                            <div class="col-10">
                                <h4 class="card-title mb-4">voiture électronique</h4>
                                <span>text text text tex</span><br>
                                <span>text text text text </span><br>
                                <span>text text text text </span><br>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/site/img/blog.png') }}" alt="">
                        <div class="card-body p-3 row">
                            <div class="col-2">
                                <img src="{{ asset('assets/site/img/lieu.png') }}" alt="">
                            </div>
                            <div class="col-10">
                                <h4 class="card-title mb-4">voiture électronique</h4>
                                <span>text text text tex</span><br>
                                <span>text text text text </span><br>
                                <span>text text text text </span><br>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/site/img/blog.png') }}" alt="">
                        <div class="card-body p-3 row">
                            <div class="col-2">
                                <img src="{{ asset('assets/site/img/lieu.png') }}" alt="">
                            </div>
                            <div class="col-10">
                                <h4 class="card-title mb-4">voiture électronique</h4>
                                <span>text text text tex</span><br>
                                <span>text text text text </span><br>
                                <span>text text text text </span><br>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--counter-area end-->

    <section class="grey-bg pb-90 pt-md-50 pb-md-30 pt-xs-50 pb-xs-30">
        <div class="container">
            <div class="row">
                <div class="col-6 bg-primary text-center  pt-3"
                    style="background-image:url('assets/site/img/icon/icon.png')">
                    <img class="my-5" src="{{ asset('assets/site/img/icon/icon1.png') }}" alt="">
                    <h2 class="my-5 text-light">Travailler avec nos entreprises</h2>
                    <p class="my-3 px-5 text-light">Quoi de pire que de postulez à une entreprise et de ne jamais avoir
                        de suite à sa candidature ? Savoir si le poste est encore vacant ! Nous vous aidons à y voir
                        plus clair grâce à nos entreprises partenaires.</p>
                    <a class="btn btn-light px-5 py-3 rounded-pill my-5 text-primary">L’emploi</a>
                </div>
                <div class="col-6 bg-warning text-center pb-3 pt-3"
                    style="background-image:url('assets/site/img/icon/icon-w.png')">
                    <img class="my-5" src="{{ asset('assets/site/img/icon/icon2.png') }}" alt="">
                    <h2 class="my-5 text-light">Travailler avec nos entreprises</h2>
                    <p class="my-3 px-5 text-light">Quoi de pire que de postulez à une entreprise et de ne jamais avoir
                        de suite à sa candidature ? Savoir si le poste est encore vacant ! Nous vous aidons à y voir
                        plus clair grâce à nos entreprises partenaires.</p>
                    <a class="btn btn-light px-5 py-3 rounded-pill my-5 text-warning">L’emploi</a>
                </div>

            </div>

        </div>
    </section>

    <!--testimonial-area start-->
    <section class="testimonial-area testimonial-area2 nav-style-1 pt-120 pb-60 pt-md-60 pt-xs-60 home-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="mb-3">Que disent nos clients?</h2>
                        <p class="lh-1 mb-10">Nous travaillons au quotidien pour vous proposer les meilleurs services
                            et nous mobilisons nos équipes pour vous fournir un travail de qualité. </p>
                    </div>
                </div>
            </div>
            <div class="testimonial-slide4 owl-carousel">
                <div class="item">
                    <div class="author-img">
                        <img src="img/home-5/team-women-1-300x300.jpg" alt="Image">
                    </div>
                    <div class="testimonial-text-wrapper2 text-center">
                        <div class="author-box">
                            <div class="author-content">
                                <h6>Ariana Grande</h6>
                                <p>-Head Of Idea</p>
                            </div>
                        </div>
                        <h5 class="fs-20">“ Professional & modern, a theme designed
                            to help your business stand out from the rest.
                            For marketing firms. ”</h5>
                        <div class="rating mb-10">
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="author-img">
                        <img src="img/home-5/team-men-1-300x300.jpg" alt="Image">
                    </div>
                    <div class="testimonial-text-wrapper2 text-center">
                        <div class="author-box">
                            <div class="author-content">
                                <h6>Mr. Phoenix</h6>
                                <p>-Head Of Idea</p>
                            </div>
                        </div>
                        <h5 class="fs-20">“ Professional & modern, a theme designed
                            to help your business stand out from the rest.
                            For marketing firms. ”</h5>
                        <div class="rating mb-10">
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="author-img">
                        <img src="img/home-5/team-women-2-300x300.jpg" alt="Image">
                    </div>
                    <div class="testimonial-text-wrapper2 text-center">
                        <div class="author-box">
                            <div class="author-content">
                                <h6>Jennifer Lopez</h6>
                                <p>-Head Of Idea</p>
                            </div>
                        </div>
                        <h5 class="fs-20">“ Professional & modern, a theme designed
                            to help your business stand out from the rest.
                            For marketing firms. ”</h5>
                        <div class="rating mb-10">
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="author-img">
                        <img src="img/home-5/team-men-3-100x100.jpg" alt="Image">
                    </div>
                    <div class="testimonial-text-wrapper2 text-center">
                        <div class="author-box">
                            <div class="author-content">
                                <h6>Robert Sojib</h6>
                                <p>-Head Of Idea</p>
                            </div>
                        </div>
                        <h5 class="fs-20">“ Professional & modern, a theme designed
                            to help your business stand out from the rest.
                            For marketing firms. ”</h5>
                        <div class="rating mb-10">
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                            <a href="index-5.html#"><i class="fas fa-star"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial-area end-->

</div>
