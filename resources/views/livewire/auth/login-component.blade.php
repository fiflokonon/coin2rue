@section('header-area')
@include('livewire.site.partials.header')
@endsection
<div>
    <!--page-title-area start-->
		<section class="" style="background-color: #FB9C2C!important; height: 200px!important;">
			<div class="container" >
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="page-title-wrapper text-start" style="margin-top: 120px;">
							<ul class="breadcrumb list-none justify-content-start lh-1">
                                <li><a href="{{ route('welcome') }}">ACCUEIL</a></li>
								<li class="active text-white fw-bold" aria-current="page">Connexion</li>
							</ul>
							<h2 class="page-title text-white" style="font-size: 24px; margin-top: 15px;">Se connecter</h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--page-title-area end-->
		<!--our-journey-area start-->
        <section class="our-journey-area time-line pt-50 pb-85 pt-md-60 pb-md-25 pt-xs-60 pb-xs-25" style="background-color:#E6E5DD;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-5 pb-20" style="background-color:#FFFFFF;">
						<div class="section-title mb-60 pb-40 text-center" style="border-bottom: solid 2px rgb(125, 125, 125)">
                            <h2 class="sect-title lh-1 mt-50 mb-50">Se connecter</h2>
							<p class="fs-14 lh-1 mb-15">Lorem ipsum dolor sit amet nunca dolor sit amet lorem ipsum dolor sit amet nunca deso et</p>
						</div>
						<form class="row contact-form mb-30" method="POST" action="{{ route('login') }}">
                            @csrf
							<div class="col-lg-12 col-md-12">
								<div class="input-box mail-input mb-20">
                                    <label for="" class="mb-15" style="font-size: 15px"> Adresse Mail</label>
                                    <input type="text" required="" class="" name="email" placeholder="Votre Email" :value="old('email')" required autofocus >
								</div>
							</div>
                            <div class="col-lg-12 col-md-12">
								<div class="input-box mb-20">
                                    <label for="" class="mb-15" style="font-size: 15px"> Mot De Passe</label>
                                    <input class="" type="password" name="password" placeholder="mot de passe" required autocomplete="current-password">
								</div>
							</div>
							<div class="col-12">
								<button type="submit" class="btn px-4 py-2 rounded-pill text-light" style="background-color: #FB9C2C">Connexion</button>
							</div>
                            <div class="col-lg-12 col-md-12 mt-15">
								<div class="input-box mb-20">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Mot de passe <span style="text-decoration: underline; text-decoration-color: #0a58ca; color: #0a58ca">oublié?</span></a>
                                    @endif
								</div>
							</div>
                            <div class="col-12">
                                <div class="">Pas de compte ? <a href="{{route('register')}}" style="text-decoration: underline; text-decoration-color: #0a58ca; color: #0a58ca">Inscrivez-vous</a></div>
							</div>
						</form>
					</div>
                    <div class="container" style="background-color: white; margin-top: 10px; width: 700px;">
                        <div class="row g-0" style="padding-top: 10px; padding-bottom: 10px; padding-left: 10px;">
                            <div class="col">
                                <a class="row" style="border: 1px solid lightgrey; height: 40px; width: fit-content;">
                                    <div class="col-3" style="border-right: 1px solid lightgrey; width: fit-content; max-width: 50px;">
                                        <img src="{{ asset('assets/site/img/Facebook.png') }}" style="width: 30px; height: 30px;">
                                    </div>
                                    <div class="col" style="margin-right: 10px;">S'identifier avec Facebook</div>
                                </a>
                            </div>
                            <div class="col" style="padding-right:50px;">
                                <a class="row" style="border: 1px solid lightgrey; height: 40px; width: fit-content;">
                                    <div class="col-3" style="border-right: 1px solid lightgrey; width: fit-content; max-width: 50px;">
                                        <img src="{{ asset('assets/site/img/google.png') }}" style="width: 30px; height: 30px;">
                                    </div>
                                    <div class="col" style="margin-right: 10px;">S'identifier avec Google</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</section>
		<!--our-journey-area end-->
</div>
