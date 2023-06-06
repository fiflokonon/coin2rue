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
                                            <a href="{{route('login')}}" class="btn btn-warning px-5 rounded-pill text-white">
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

                                        <a href="{{route('login')}}" class="btn btn-warning px-5 rounded-pill text-white">
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
                    <div class="col-lg-10 col-md-6 position-absolute top-100 start-50 translate-middle p-5 rounded-1" style="background-color:aliceblue">
                        <form action="">
                            <div class="row ">
                                <div class="col-md-12 d-flex bd-highlight">
                                    <input name="ville_id" id="ville_id" class="form-control" required placeholder="Je recherche un .. médecin, une pizzéria, une salle des fêtes...">
                                    <input name="ville_id" id="ville_id" class="form-control" required placeholder="A quel endroit ?">
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
                            <p class="text-white mb-5">Trouvez le meilleur lieu  à proximité de chez vous Trouvez le meilleur lieu  à proximité  de chez vous Trouvez le meilleur lieu <br> à proximité de chez vous Trouvez le meilleur lieu  à proximité de chez vous </p>
                            <div class="section-btn">
                                <div class="">
                                    <a href="" class="btn btn-warning px-5 py-3 rounded-pill text-white">
                                        Voir les catégories
                                    </a>
                                    <a href="{{route('login')}}" class="btn btn-warning px-5 py-3 rounded-pill text-white">
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
                                Grâce à nos entreprises partenaires, vous avez la possibilité d'acheter leurs meilleurs produits sans vous déplacer (possibilité de livraison)

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
                                Au quotidien, ce sont des hommes et des femmes qui s'engagent à travailler pour un meilleur avenir. Trouver votre prochain emploi sur Coin2Rue

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
                                Votre entreprise pourra communiquer avec vous toutes les données importantes du CSE, vos fiches de paies, contrat de travail.
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
                              <p class="card-text mt-5">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <span class="badge rounded-pill text-dark" style="background-color: rgba(6, 116, 236, 0.1);color: #0674EC;">10$</span>
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
                          <p class="card-text mt-5">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <span class="badge rounded-pill text-dark" style="background-color: rgba(6, 116, 236, 0.1);color: #0674EC;">10$</span>
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
                              <p class="card-text mt-5">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <span class="badge rounded-pill text-dark" style="background-color: rgba(6, 116, 236, 0.1);color: #0674EC;">10$</span>
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
                              <p class="card-text mt-5">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <span class="badge rounded-pill text-dark" style="background-color: rgba(6, 116, 236, 0.1);color: #0674EC;">10$</span>
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
                              <p class="card-text mt-5">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <span class="badge rounded-pill text-dark" style="background-color: rgba(6, 116, 236, 0.1);color: #0674EC;">10$</span>
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
                              <p class="card-text mt-5">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <span class="badge rounded-pill text-dark" style="background-color: rgba(6, 116, 236, 0.1);color: #0674EC;">10$</span>
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
            <div class="text-center mt-50">
                <a href="" class="btn btn-warning px-5 rounded-pill mt-10">
                    Tout voir
                </a>
            </div>
    </div>
</section>
<!--counter-area end-->
    <!--core-feature-area start-->
    <section class="core-feature-area pt-100 pt-md-60 pt-xs-120 pb-100 pb-md-30 pb-xs-30 home-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-55">
                        <h4 class="sect-title">Explorez les entreprises par catégorie
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="rts-pricing-table1 text-center mb-30">
                        <div class="rts-pricing-icon">
                            <img src="img/home-5/basic.webp" alt="">
                        </div>
                        <div class="rts-pricing-table-header">
                            <h2 class="title">
                                Basic Plan
                            </h2>
                        </div>
                        <div class="rts-pricing-table-body">
                            <div class="rts-pricing-table-price">
                                <div class="rts-pricing-tag">
                                    <span class="currency">$</span>
                                    <span class="price-text">19</span>
                                    <span class="period">mo</span>
                                </div>
                            </div>
                            <ul class="features-list">
                                <li><span class="table-feature-text">Unlimited project</span></li>
                                <li><span class="table-feature-text1">Power And Predictive Dialing</span></li>
                                <li><span class="table-feature-text1">Quality & Customer Experience</span></li>
                                <li><span class="table-feature-text1">24/7 phone and email support</span></li>
                            </ul>
                            <div class="btn-part">
                                <a href="index-5.html#" class="rts-pricing-table-btn">Get Trail 1 Month</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="rts-pricing-table2 text-center mb-30">
                        <div class="rts-pricing-icon">
                            <img src="img/home-5/h4-price-top-icon-advance.webp" alt="">
                        </div>
                        <div class="rts-pricing-table-header">
                            <h2 class="title">
                                Advance Plan
                            </h2>
                        </div>
                        <div class="rts-pricing-table-body">
                            <div class="rts-pricing-table-price">
                                <div class="rts-pricing-tag">
                                    <span class="currency">$</span>
                                    <span class="price-text">49</span>
                                    <span class="period">mo</span>
                                </div>
                            </div>
                            <ul class="features-list">
                                <li><span class="table-feature-text">Unlimited project</span></li>
                                <li><span class="table-feature-text1">Power And Predictive Dialing</span></li>
                                <li><span class="table-feature-text1">Quality & Customer Experience</span></li>
                                <li><span class="table-feature-text1">24/7 phone and email support</span></li>
                            </ul>
                            <div class="btn-part">
                                <a href="index-5.html#" class="rts-pricing-table-btn">Get Trail 1 Month</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="rts-pricing-table1 text-center mb-30">
                        <div class="rts-pricing-icon">
                            <img src="img/home-5/h4-price-top-icon.webp" alt="">
                        </div>
                        <div class="rts-pricing-table-header">
                            <h2 class="title">
                                Premium Plan
                            </h2>
                        </div>
                        <div class="rts-pricing-table-body">
                            <div class="rts-pricing-table-price">
                                <div class="rts-pricing-tag">
                                    <span class="currency">$</span>
                                    <span class="price-text">99</span>
                                    <span class="period">mo</span>
                                </div>
                            </div>
                            <ul class="features-list">
                                <li><span class="table-feature-text">Unlimited project</span></li>
                                <li><span class="table-feature-text1">Power And Predictive Dialing</span></li>
                                <li><span class="table-feature-text1">Quality & Customer Experience</span></li>
                                <li><span class="table-feature-text1">24/7 phone and email support</span></li>
                            </ul>
                            <div class="btn-part">
                                <a href="index-5.html#" class="rts-pricing-table-btn">Get Trail 1 Month</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--core-feature-area end-->
    <!--counter-area start-->
    <section class="counter-area pt-110 pb-85 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30 home-5">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-4 col-md-4">
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
                <div class="col-lg-4 col-md-4">
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
                <div class="col-lg-4 col-md-4">
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
    <!--portfolio-area start-->
    <section class="portfolio-area pt-120 pb-150 pt-md-80 pb-md-80 pb-xs-60 pt-xs-0 home-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="portfolio-section-title2">
                        <h6 class="semi-title">Our Completed Work</h6>
                        <h2 class="sect-title">Latest Projects</h2>
                    </div>
                </div>
            </div>
            <div class="portfolio-slide2 owl-carousel">
                <div class="item">
                    <div class="portfolio-wrapper5">
                        <img class="img-fluid" src="img/home-5/2-520x350.jpg" alt="Portfolio Img">
                        <div class="single-portfolio d-flex">
                            <div class="text">
                                <h4 class="portfolio-title">RT Pro Technology</h4>
                                <span>UI & UX</span>
                            </div>
                            <a class="pf-btn2" href="case-details.html"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio-wrapper5">
                        <img class="img-fluid" src="img/home-5/3-520x350.jpg" alt="Portfolio Img">
                        <div class="single-portfolio d-flex">
                            <div class="text">
                                <h4 class="portfolio-title">Ninja Smart Vision</h4>
                                <span>IT Solution / UI & UX</span>
                            </div>
                            <a class="pf-btn2" href="case-details.html"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio-wrapper5">
                        <img class="img-fluid" src="img/home-5/4-520x350.jpg" alt="Portfolio Img">
                        <div class="single-portfolio d-flex">
                            <div class="text">
                                <h4 class="portfolio-title">Smartix Web Solution</h4>
                                <span>IT Solution</span>
                            </div>
                            <a class="pf-btn2" href="case-details.html"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="portfolio-wrapper5">
                        <img class="img-fluid" src="img/home-5/5-520x350.jpg" alt="Portfolio Img">
                        <div class="single-portfolio d-flex">
                            <div class="text">
                                <h4 class="portfolio-title">Smartic Pro Solution</h4>
                                <span>IT Solution</span>
                            </div>
                            <a class="pf-btn2" href="case-details.html"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--portfolio-area end-->
    <!--team-area start-->
    <section class="team-area pt-120 pt-md-60 pb-md-30 pt-xs-0 pb-xs-0 home-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-lg-8">
                    <div class="services-title2 text-center mb-55">
                        <h6 class="semi-title semi-title2 pl-0">Team Members</h6>
                        <h2 class="sect-title">Company Experts</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-thumb2">
                            <img src="img/home-5/team-women-2-300x300.jpg" alt="Image">
                            <div class="team-icon-wrapper2">
                                <div class="inner-team-icon pos-rel">
                                    <div class="team-icon">
                                        <a class="icon" href="index-5.html#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="icon" href="index-5.html#"><i class="fab fa-twitter"></i></a>
                                        <a class="icon" href="index-5.html#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h6>Founder</h6>
                            <h4 class="sub-title">Rosalina D. William</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-thumb2">
                            <img src="img/home-5/team-men-2-300x300.jpg" alt="Image">
                            <div class="team-icon-wrapper2">
                                <div class="inner-team-icon pos-rel">
                                    <div class="team-icon">
                                        <a class="icon" href="index-5.html#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="icon" href="index-5.html#"><i class="fab fa-twitter"></i></a>
                                        <a class="icon" href="index-5.html#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h6>CEO</h6>
                            <h4 class="sub-title">Miranda H. Halim</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-thumb2">
                            <img src="img/home-5/team-women-1-300x300.jpg" alt="Image">
                            <div class="team-icon-wrapper2">
                                <div class="inner-team-icon pos-rel">
                                    <div class="team-icon">
                                        <a class="icon" href="index-5.html#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="icon" href="index-5.html#"><i class="fab fa-twitter"></i></a>
                                        <a class="icon" href="index-5.html#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h6>Designer</h6>
                            <h4 class="sub-title">Alexis J. Jhalmuri</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-thumb2">
                            <img src="img/home-5/team-men-1-300x300.jpg" alt="Image">
                            <div class="team-icon-wrapper2">
                                <div class="inner-team-icon pos-rel">
                                    <div class="team-icon">
                                        <a class="icon" href="index-5.html#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="icon" href="index-5.html#"><i class="fab fa-twitter"></i></a>
                                        <a class="icon" href="index-5.html#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h6>Marketer</h6>
                            <h4 class="sub-title">Piona L. Limonda</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--team-area end-->
    <!--brand-area start-->
    <div class="brand-area home-5">
        <div class="container">
            <div class="brand-border brand-slide2 owl-carousel">
                <div class="brand-item">
                    <a class="brand-img" href="index-5.html#">
                        <img class="front" src="img/home-5/h4-partnar-logo-6.webp" alt="Brand">
                        <img class="back" src="img/home-5/h4-partnar-logo-6.webp" alt="Brand">
                    </a>
                </div>
                <div class="brand-item">
                    <a class="brand-img" href="index-5.html#">
                        <img class="front" src="img/home-5/h4-partnar-logo-5.webp" alt="Brand">
                        <img class="back" src="img/home-5/h4-partnar-logo-5.webp" alt="Brand">
                    </a>
                </div>
                <div class="brand-item">
                    <a class="brand-img" href="index-5.html#">
                        <img class="front" src="img/home-5/h4-partnar-logo-4.webp" alt="Brand">
                        <img class="back" src="img/home-5/h4-partnar-logo-4.webp" alt="Brand">
                    </a>
                </div>
                <div class="brand-item">
                    <a class="brand-img" href="index-5.html#">
                        <img class="front" src="img/home-5/h4-partnar-logo-3.webp" alt="Brand">
                        <img class="back" src="img/home-5/h4-partnar-logo-3.webp" alt="Brand">
                    </a>
                </div>
                <div class="brand-item">
                    <a class="brand-img" href="index-5.html#">
                        <img class="front" src="img/home-5/h4-partnar-logo-2.webp" alt="Brand">
                        <img class="back" src="img/home-5/h4-partnar-logo-2.webp" alt="Brand">
                    </a>
                </div>
                <div class="brand-item">
                    <a class="brand-img" href="index-5.html#">
                        <img class="front" src="img/home-5/h4-partnar-logo-1.webp" alt="Brand">
                        <img class="back" src="img/home-5/h4-partnar-logo-1.webp" alt="Brand">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--brand-area end-->
    <!--contact-area start-->
    <section class="contact-area pb-90 pt-md-55 pb-md-30 pt-xs-55 pb-xs-30 home-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-content mb-20 pl-40 pl-lg-0 pl-md-0 pl-xs-0">
                        <div class="section-title mb-40">
                            <h3 class="semi-title">Get in touch</h3>
                            <h2 class="sect-title">Now Let's Discuss your Project</h2>
                        </div>
                        <p class="description">
                            Mollitia incididunt class vehicula diam feugiat aptent nisl, hic mauris. Praesent nullam
                            nisl excepturi habitasse viverra facilisi accusantium earum elit proident aliquet
                            ultrices eos elementum
                        </p>
                        <div class="section-icon">
                            <ul class="icon d-flex align-items-center text-start">
                                <li>
                                    <a href="index-5.html#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="index-5.html#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="index-5.html#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="index-5.html#"><i class="fab fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href="index-5.html#"><i class="fab fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="row contact-form mb-30" action="index-5.html#">
                        <div class="col-lg-6 col-md-6">
                            <div class="input-box mb-20">
                                <input type="text" placeholder="Full name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="input-box mail-input mb-20">
                                <input type="text" placeholder="Email address">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-20">
                            <div class="input-box sub-input">
                                <input type="text" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-box text-input mb-15">
                                <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="form-btn form-btn2">Get A quote</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--contact-area end-->
    <!--testimonial-area start-->
    <section class="testimonial-area testimonial-area2 nav-style-1 pt-120 pb-60 pt-md-60 pt-xs-60 home-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="core-feature-title text-md-start">
                        <p class="lh-1 mb-10">Our Clients Say</p>
                        <h2 class="sect-title">1000+ Active Reviews</h2>
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
    <!--blog-area start-->
    <section class="blog-area blog-area-3 pt-115 pb-90 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30 home-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-60">
                        <p class="mb-10">Our Blog</p>
                        <h2 class="sect-title">Latest News and Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blogs mb-30">
                        <div class="blogs__thumb">
                            <a href="news-details.html">
                                <img class="w-100" src="img/home-5/1-768x409.jpg" alt="Blog Img">
                            </a>
                        </div>
                        <div class="blogs__content">
                            <p><i class="fal fa-calendar-alt"></i> June 21, 2022</p>
                            <h5><a class="blog-title" href="news-details.html">Technology support
                                    allows erie non-profit to serve</a></h5>
                            <p class="text">A great commerce experience cannot be distilled to a single number. It’s
                                not a
                                Lighthouse score, or a set of...</p>
                            <div class="btn-part">
                                <a href="index-5.html#" class="readon-arrow">Read More <i
                                        class="fa fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blogs mb-30">
                        <div class="blogs__thumb">
                            <a href="news-details.html">
                                <img class="w-100" src="img/home-5/2-768x409.jpg" alt="Blog Img">
                            </a>
                        </div>
                        <div class="blogs__content">
                            <p><i class="fal fa-calendar-alt"></i> June 21, 2022</p>
                            <h5><a class="blog-title" href="news-details.html">
                                    Software Makes Your Profit Double if You Scale Properly</a></h5>
                            <p class="text">A great commerce experience cannot be distilled to a single number. It’s
                                not a
                                Lighthouse score, or a set of...</p>
                            <div class="btn-part">
                                <a href="index-5.html#" class="readon-arrow">Read More <i
                                        class="fa fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blogs mb-30">
                        <div class="blogs__thumb">
                            <a href="news-details.html">
                                <img class="w-100" src="img/home-5/3-768x409.jpg" alt="Blog Img">
                            </a>
                        </div>
                        <div class="blogs__content">
                            <p><i class="fal fa-calendar-alt"></i> June 21, 2022</p>
                            <h5><a class="blog-title" href="news-details.html">
                                    Designing Machine Intering For Vehicles Of The Future</a></h5>
                            <p class="text">A great commerce experience cannot be distilled to a single number. It’s
                                not a
                                Lighthouse score, or a set of...</p>
                            <div class="btn-part">
                                <a href="index-5.html#" class="readon-arrow">Read More <i
                                        class="fa fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-btn">
                <a href="index-5.html#" class="btn">Veiw All Posts</a>
            </div>
        </div>
    </section>
    <!--blog-area end-->
</div>
