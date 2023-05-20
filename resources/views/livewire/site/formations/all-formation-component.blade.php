@section('header-area')
@include('livewire.site.partials.header')
@endsection
<div>
    <!--page-title-area start-->
		<section class="" style="background-color: #FB9C2C!important; height: 200px!important;">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="page-title-wrapper text-start" style="margin-top: 120px;">
							<ul class="breadcrumb list-none justify-content-start lh-1">
								<li><a href="index.html">ACCUEIL</a></li>
								<li class="active text-white fw-bold" aria-current="page">Formations</li>
							</ul>
							<h2 class="page-title text-white" style="font-size: 24px; margin-top: 15px;">Les Formations</h2>
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
                        <a class="btn btn-info float-end" href="{{ route('addformation') }}" style="width: 150px;"><i class="fa fa-plus-circle"></i>Ajouter une formation</a>
                    </div>
					@foreach($formation_actives as $formation)
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
                            <p class="card-text">{!! $formation->description !!}</p>
                            <hr style="width: 10px;">
                            <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional  This content is a little bit longer.</p>-->
                            <div class="row">
                                <a href="{{ route('oneformations', ['id' => $formation->id]) }}" class="col-6 text-primary">En savoir plus  <i class="fa fa-chevron-right"></i></a>
                                @if($progression)
                                    <a href="{{ route('oneformations', ['id' => $formation->id]) }}" class="col-3 btn py-2 rounded-pill float-end text-light" style="background-color: #77DE51; width: 120px; height: 50px; font-size: 20px ">{{ $progression->pourcentage }} %</a>
                                @else
                                    <a wire:click.prevent='startFormation({{$formation->id}})' class="col-5 btn py-2 rounded-pill float-end text-light" style="background-color: #FB9C2C">Commencer</a>
                                @endif
                            </div>
                          </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-12 text-center mb-80 mt-100">
                        <h2>Les formations du studio <br>Coin2Rue</h2>
                        <div class="w-75" style="margin: auto">
                            Nos équipes ont à cœur de créer de façon régulière du nouveau contenu pour vous permettre de progresser dans les domaines de votre choix.
                        </div>
                    </div>
                    @foreach($formation_inactives as $formation)
                    <div class="col-md-3 col-lg-4 mt-5" >
                        <div class="card p-3" style="border-radius:5%" >
                          <div class="card-body">
                            <h3 class="card-title mb-3">{{ $formation->titre }}</h3>
                            <p class="card-text">{!! $formation->description !!}</p>
                            <hr>
                            <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional  This content is a little bit longer.</p>-->
                              <div class="row">
                                  <a href="{{ route('oneformations', ['id' => $formation->id]) }}" class=" col-6 text-primary">En savoir plus  <i class="fa fa-chevron-right"></i></a>
                                  <a href="{{ route('oneformations', ['id' => $formation->id]) }}" class="col-4 btn py-2 rounded-pill float-end text-light" style="background-color: #FB9C2C; ">Activer</a>
                              </div>
                          </div>
                        </div>
                    </div>
                    @endforeach
				</div>
			</div>
		</section>
		<!--our-journey-area end-->
</div>
