@section('header-area')
@include('livewire.site.partials.header')
@endsection
<div>
    <!--page-title-area start-->
		<section class="page-title-area title-area2" style="background-image: url(assets/site/img/page-title/page-title-bg2.jpg);">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="page-title-wrapper text-start">
							<ul class="breadcrumb list-none justify-content-start lh-1">
								<li><a href="index.html">ACCUEIL</a></li>
								<li class="active text-white fw-bold" aria-current="page">register</li>
							</ul>
							<h2 class="page-title text-white">register</h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--page-title-area end-->
		<!--our-journey-area start-->
		<section class="our-journey-area time-line pt-50 pb-85 pt-md-60 pb-md-25 pt-xs-60 pb-xs-25">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="section-title mb-60">
							<p class="fs-14 lh-1 mb-15">Get In Touch</p>
							<h2 class="sect-title lh-1">register</h2>
						</div>
						<form class="row contact-form mb-30" method="POST" action="{{ route('register') }}">
                            @csrf
							<div class="col-lg-12 col-md-12">
								<div class="input-box mail-input mb-20">
                                    <input type="text" required="" class="" name="name" placeholder="Entrer votre nom" value="{{old('name')}}" required autofocus autocomplete="name">
								</div>
							</div>
                            <div class="col-lg-12 col-md-12">
								<div class="input-box mail-input mb-20">
                                    <input type="text" required="" class="" name="email" placeholder="Votre Email" :value="old('email')" required autofocus >
								</div>
							</div>
                            <div class="col-lg-12 col-md-12">
								<div class="input-box mb-20">
                                    <input class="" required="" type="password" name="password" placeholder="mot de passe" required autocomplete="new-password">

								</div>
							</div>
                            <div class="col-lg-12 col-md-12">
								<div class="input-box mb-20">
                                <input class="" required="" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
								</div>
							</div>
                           :

							<div class="col-12">
								<button type="submit" class="form-btn form-btn3">Register</button>
							</div>
                            <div class="col-12">
                                <div class="form-note text-center">Vous avez déjà un compte? <a href="{{route('login')}}">Connéxion</a>div>

							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!--our-journey-area end-->
</div>
