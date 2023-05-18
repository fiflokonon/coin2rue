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
                <div class="col-md-12 text-center mb-20">
                    <h2>{{ $formation->titre }}</h2>
                    <p>{{ $formation->description }}</p>
                </div>
                <div class="banner">
                    <div class="trophy">
                        <i class="fa fa-trophy"></i>
                    </div>
                    <div class="modules-container">
                        <div class="progress bg-transparent" style="height: 70px; width: 150px">
                            @php
                                $i = 1;
                            @endphp
                            @foreach($formation->modules as $module)
                                <div class="module"><span>{{ $i++ }}</span></div>
                            @endforeach
                        </div>
                    </div>
                </div>
				<div class="row">
                    @php
                    $i = 1;
                    @endphp
                    @foreach($formation->modules as $module)
                        @php
                            $progression = Auth::user()->progressions()
                                ->where('progressionable_id', $module->id)
                                ->where('progressionable_type', 'App\Models\Module')
                                ->first();
                        @endphp
                    <div class="col-md-3 col-lg-3 mt-5" >
                        <div class="text-center">
                            <button class="btn btn-info rounded-circle p-3 mb-3 px-4">{{ $i++ }}</button>
                        </div>
                        <div class="card h-80">
                            <div class="p-2 m-3">
                                <h6 class="pl-5">{{ $module->titre }}</h6>
                            </div>
                            <div>
                                <img src="{{ asset('assets/site/img/home-5/2-520x350.jpg') }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body  d-flex">
                                <div class="mr-30">
                                    <h6 class="card-title">{{ count($module->lecons) }} Leçons</h6>
                                </div>
                                @if($progression)
                                    <a href="{{ route('lecons', ['id' => $module->id]) }}" class="btn btn-success">{{ $progression->pourcentage }} %</a>
                                @else
                                    <a wire:click.prevent='startModule({{$module->id}})' class="btn btn-secondary">0 %</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
				</div>
			</div>
		</section>
		<!--our-journey-area end-->
</div>
