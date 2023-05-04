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
                <div class="col-md-12 text-center mb-50">
                    <h2>{{ $formation->titre }}</h2>
                    <p>{{ $formation->description }}</p>
                </div>
                @php
                $i = 1;
                @endphp
                <div class="row">
                    <h2 class="mb-5 bg-info text-center">{{ $module->titre }}</h2>
                    <h3 class="text-primary mb-3"><i class="fa fa-book-medical text-primary"></i> Leçons</h3>
                    @foreach($module->lecons as  $lecon)
                    <div class="col-md-8 mb-3">
                        <div class="card">
                            <div class="card-header" style="font-weight: bold">
                                {{ $lecon->titre }}
                                <a href="{{ route('onelecon', ['id' => $lecon->id ]) }}"><button class="btn btn-info text-light float-end"><i class="fa fa-eye"></i> Voir plus</button></a>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2 circle" style="margin-left: -15px;">
                                        <span class="number">{{ $i++ }}</span>
                                    </div>
                                    <div class="col-md-10 justify-content-center">
                                        {{ $lecon->description }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @php
                        $i = 1;
                    @endphp
                    <h3 class="text-primary mb-3"><i class="fa fa-pencil"></i> Application</h3>
                    @foreach($module->quiz as  $quiz)
                        <div class="col-md-8 mb-3">
                            <div class="card">
                                <div class="card-header" style="font-weight: bold">
                                    {{ $quiz->titre }}
                                    <a href="#"><button class="btn btn-info text-light float-end"><i class="fa fa-eye"></i> Voir plus</button></a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2 circle" style="margin-left: -15px;">
                                            <span class="number">{{ $i++ }}</span>
                                        </div>
                                        <div class="col-md-10 justify-content-center">
                                            {{ $quiz->description }}
                                        </div>
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
