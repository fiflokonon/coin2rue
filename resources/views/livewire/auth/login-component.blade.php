@section('header-area')
@include('livewire.site.partials.header')
@endsection
<div>
    <!--page-title-area start-->
		<section class="page-title-area title-area2" style="background-color: #FB9C2C;">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="page-title-wrapper text-start">
							<ul class="breadcrumb list-none justify-content-start lh-1">
                                <li><a href="{{ route('welcome') }}">ACCUEIL</a></li>
								<li class="active text-white fw-bold" aria-current="page">Connexion</li>
							</ul>
							<h2 class="page-title text-white">Se connecter</h2>
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
								<button type="submit" class="btn px-4 py-2 rounded-pill" style="background-color: #FB9C2C">Connexion</button>
							</div>
                            <div class="col-lg-12 col-md-12 mt-15">
								<div class="input-box mb-20">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Mot de passe oublié?</a>
                                    @endif
								</div>
							</div>
                            <div class="col-12">
                                <div class="form-note">Pas de compte ? <a href="{{route('register')}}">Inscrivez-vous</a></div>

							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!--our-journey-area end-->
</div>
