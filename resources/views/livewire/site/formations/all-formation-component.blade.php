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
					@foreach($formations as $formation)
                        @php
                            $progression = Auth::user()->progressions()
                                ->where('progressionable_id', $formation->id)
                                ->where('progressionable_type', 'App\Models\Formation')
                                ->first();
                        @endphp
                    <div class="col-md-3 col-lg-4 mt-5" >
                        <div class="card p-3" style="border-radius:5%" >
                          <div class="card-body">
                            <h3 class="card-title mb-3">{{ $formation->titre }}</h3>
                            <p class="card-text">{{ $formation->description }}</p>
                            <hr style="width: 10px;">
                            <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional  This content is a little bit longer.</p>-->
                            <div class="row">
                                <a href="" class=" col-6 text-primary">En savoir plus  <i class="fa fa-chevron-right"></i></a>
                                @if($progression)
                                    <a href="{{ route('oneformations', ['id' => $formation->id]) }}" class="col-3 btn py-2 rounded-pill float-end text-light" style="background-color: #77DE51; width: 120px; height: 50px; font-size: 20px ">{{ $progression->pourcentage }} %</a>
                                @else
                                    <a href="{{ route('oneformations', ['id' => $formation->id]) }}" class="col-5 btn py-2 rounded-pill float-end text-light" style="background-color: #FB9C2C">Commencer</a>
                                @endif
                            </div>
                          </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-12 text-center mb-100 mt-100">
                        <h2>Les formations de <br>votre entreprise</h2>
                        <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores <br> nemis omnis fugats. Lid est laborum dolo rumes fugats untras.</p>
                    </div>

                    <div class="col-md-3 col-lg-4 mt-5" >
                        <div class="card p-3" style="border-radius:5%" >
                          <div class="card-body">
                            <h3 class="card-title mb-3">Card title</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <hr>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional  This content is a little bit longer.</p>
                            <div class="mt-3">
                                <a href="">En savoir plus</a>
                                <a href="" class="btn btn-warning py-2 rounded-pill float-end">
                                    Activer
                                </a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4 mt-5" >
                        <div class="card p-3" style="border-radius:5%" >
                          <div class="card-body">
                            <h3 class="card-title mb-3">Card title</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <hr>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional  This content is a little bit longer.</p>
                            <div class="mt-3">
                                <a href="">En savoir plus</a>
                                <a href="" class="btn btn-warning py-2 rounded-pill float-end">
                                    Activer
                                </a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4 mt-5" >
                        <div class="card p-3" style="border-radius:5%" >
                          <div class="card-body">
                            <h3 class="card-title mb-3">Card title</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <hr>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional  This content is a little bit longer.</p>
                            <div class="mt-3">
                                <a href="">En savoir plus</a>
                                <a href="" class="btn btn-warning py-2 rounded-pill float-end">
                                    Activer
                                </a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4 mt-5" >
                        <div class="card p-3" style="border-radius:5%" >
                          <div class="card-body">
                            <h3 class="card-title mb-3">Card title</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <hr>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional  This content is a little bit longer.</p>
                            <div class="mt-3">
                                <a href="">En savoir plus</a>
                                <a href="" class="btn btn-warning py-2 rounded-pill float-end">
                                    Activer
                                </a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4 mt-5" >
                        <div class="card p-3" style="border-radius:5%" >
                          <div class="card-body">
                            <h3 class="card-title mb-3">Card title</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <hr>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional  This content is a little bit longer.</p>
                            <div class="mt-3">
                                <a href="">En savoir plus</a>
                                <a href="" class="btn btn-warning py-2 rounded-pill float-end">
                                    Activer
                                </a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-4 mt-5" >
                        <div class="card p-3" style="border-radius:5%" >
                          <div class="card-body">
                            <h3 class="card-title mb-3">Card title</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <hr>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional  This content is a little bit longer.</p>
                            <div class="mt-3">
                                <a href="">En savoir plus</a>
                                <a href="" class="btn btn-warning py-2 rounded-pill float-end">
                                    Activer
                                </a>
                            </div>
                          </div>
                        </div>
                    </div>

				</div>
			</div>
		</section>
		<!--our-journey-area end-->
</div>
