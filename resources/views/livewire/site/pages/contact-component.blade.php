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
								<li class="active text-white fw-bold" aria-current="page">Contact</li>
							</ul>
							<h2 class="page-title text-white" style="font-size: 24px; margin-top: 15px;">Nous contacter</h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--page-title-area end-->
		<!--our-journey-area start-->
        <section class="our-journey-area time-line pt-50 pb-85 pt-md-60 pb-md-25 pt-xs-60 pb-xs-25" style="background-color:#E6E5DD;">
			<div class="container">
                <div class="text-dark fs-1 text-center">Besoin <span class="text-primary">d'un renseignement ?</span></div>
                <div class="text-center my-5" style="width: 550px; margin-left: 280px;">Afin que votre lieu ne s'arrête jamais et que vos questions ne restent pas sans réponse. Nos équipes sont pleinement mobilisées pour vous répondre tous les jours !</div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div style="background-color: #f2f2f2;height: 300px;border: 2px solid #ddd; border-radius: 10px;">
                            <div class="text-center mt-3"><i class="fas fa-map-marker-alt text-info" style="font-size: 100px;"></i></div>
                            <div class="text-dark text-center fs-5 mt-2">Adresse</div>
                            <div class="text-center mt-5">202 New Hampshire Avenue , <br>Northwest #100, New York-2573</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div style="background-color: #f2f2f2;height: 300px;border: 2px solid #ddd; border-radius: 10px;">
                            <div class="text-center mt-3"><i class="fas fa-phone-alt text-info" style="font-size: 100px;"></i></div>
                            <div class="text-dark text-center fs-5 mt-2">Téléphone</div>
                            <div class="text-center mt-5">1-800-643-4500<br>1-800-643-4500</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div style="background-color: #f2f2f2;height: 300px;border: 2px solid #ddd;border-radius: 10px; ">
                            <div class="text-center mt-3"><i class="fas fa-envelope text-info" style="font-size: 100px;"></i></div>
                            <div class="text-dark text-center fs-5 mt-2">Adresses mail</div>
                            <div class="text-center mt-5">support@market.com<br>support@market.com</div>
                        </div>
                    </div>
                </div>
                <div class="text-dark fs-2 text-center mt-5">Laisser un message</div>
                <div class="text-center mt-3 fs-5">Et on revient vers vous sous 12 heures</div>
                <div class="container-fluid w-75 justify-content-center mt-5">
                    <form class="row contact-form mb-30" action="contact.html#">
                            <div class="col-lg-6 col-md-6">
                                <div class="input-box mb-20">
                                    <input type="text" placeholder="Nom">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="input-box mail-input mb-20">
                                    <input type="text" placeholder="Adresse mail">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-box text-input mb-15">
									<textarea name="message" cols="10" rows="5" placeholder="Entrer le message"></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-outline-white text-light" style="background-color: #FB9C2C!important;border-radius: 40px; width: 100px;">Envoyer</a>
                            </div>
                        </form>
                </div>
			</div>
		</section>
		<!--our-journey-area end-->
</div>
