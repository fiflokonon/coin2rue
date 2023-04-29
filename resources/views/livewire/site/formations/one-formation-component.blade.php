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
								<li class="active text-white fw-bold" aria-current="page">Formations</li>
							</ul>
							<h2 class="page-title text-white">Formations</h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--page-title-area end-->
		<!--our-journey-area start-->
		<section class="our-journey-area time-line pt-50 pb-85 pt-md-60 pb-md-25 pt-xs-60 pb-xs-25">
			<div class="container">
				<div class="row">
                    <div class="col-md-12 text-center mb-100">
                        <h2>Les formations de <br>votre entreprise</h2>
                        <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores <br> nemis omnis fugats. Lid est laborum dolo rumes fugats untras.</p>
                    </div>
					<div class="col-md-3 col-lg-3 mt-5" >
                        <div class="text-center">
                            <button class="btn btn-info rounded-circle p-3 mb-3 px-4">1</button>
                        </div>

                        <div class="card h-100">
                            <div class="p-2 m-3">
                                <h6 class="pl-5">Laborum dolo rumes </h6>
                            </div>
                            <div>
                                <img src="{{ asset('assets/site/img/home-5/2-520x350.jpg') }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body  d-flex bd-highlight">
                                <div class="mr-40">
                                    <h6 class="card-title">2 thémes</h6>
                                    <span class="card-text" style="font-size: 12px">Du 12/02/2022 au 12/02/2022</span>
                                </div>
                                <button class="btn btn-success">55%</button>

                            </div>
                          </div>
                    </div>
				</div>
			</div>
		</section>
		<!--our-journey-area end-->
</div>
