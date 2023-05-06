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
		{{-- <section class="our-journey-area time-line pt-50 pb-85 pt-md-60 pb-md-25 pt-xs-60 pb-xs-25">
			<div class="container">
                <div class="col-md-12 text-center mb-50">
                    <h2>{{ $formation->titre }}</h2>
                    <p>{{ $formation->description }}</p>
                </div>
                @php
                $i = 1;
                @endphp
                <div class="row">
					<div class="col-lg-6">
						<div class="blogs-2">
							<div class="blogs__thumb">
								<a href="news-details.html">
									<img class="w-100" src="img/blog/blog-16.jpg" alt="Blog Img">
								</a>
							</div>
							<div class="blogs__content">
								<div class="blogs-2-meta">
									<span><i class="far fa-user"></i> Admin</span>
									<span><i class="fal fa-calendar-alt"></i> 24th June 2022</span>
								</div>
								<h3><a class="blog-title" href="news-details.html">5 Ways Technology Has Improved
										Business Today</a></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-6 blog-pl-border">
						<div class="blogs-3">
							<div class="blogs__thumb">
								<a href="news-details.html">
									<img src="img/blog/blog-6.jpg" alt="Blog Img">
								</a>
							</div>
							<div class="blogs__content">
								<div class="blogs-2-meta">
									<span><i class="far fa-user"></i> Admin</span>
									<span><i class="fal fa-calendar-alt"></i> 24th June 2022</span>
								</div>
								<h4><a class="sub-title" href="news-details.html">Grow Customer Relationships
										Via Technology Solutions.</a></h4>
							</div>
						</div>
						<div class="blogs-3">
							<div class="blogs__thumb">
								<a href="news-details.html">
									<img src="img/blog/blog-7.jpg" alt="Blog Img">
								</a>
							</div>
							<div class="blogs__content">
								<div class="blogs-2-meta">
									<span><i class="far fa-user"></i> Admin</span>
									<span><i class="fal fa-calendar-alt"></i> 24th June 2022</span>
								</div>
								<h4><a class="sub-title" href="news-details.html">Grow Customer Relationships
										Via Technology Solutions.</a></h4>
							</div>
						</div>
						<div class="blogs-3">
							<div class="blogs__thumb">
								<a href="news-details.html">
									<img src="img/blog/blog-8.jpg" alt="Blog Img">
								</a>
							</div>
							<div class="blogs__content">
								<div class="blogs-2-meta">
									<span><i class="far fa-user"></i> Admin</span>
									<span><i class="fal fa-calendar-alt"></i> 24th June 2022</span>
								</div>
								<h4><a class="sub-title" href="news-details.html">Grow Customer Relationships
										Via Technology Solutions.</a></h4>
							</div>
						</div>
					</div>
				</div>
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
                                    <a href="{{ route('quiz', ['id' => $quiz->id]) }}"><button class="btn btn-info text-light float-end"><i class="fa fa-eye"></i> Voir plus</button></a>
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
		</section> --}}
		<!--our-journey-area end-->
        <section class="grey-bg2 chose-us-area service-page pt-120 pb-90 pt-md-60 pt-xs-60 pb-xs-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title text-center mb-60">
							<p class="lh-1 mb-10">{{ $formation->description }}</p>
							<h2 class="sect-title">{{ $formation->titre }}</h2>

						</div>
					</div>
				</div>
				<div class="row">
                    @foreach($module->lecons as  $lecon)
					<div class="col-lg-12 col-md-12 pt-3 pb-3 white-bg mb-4" style="">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="fs-20"> <a href="{{ route('onelecon', ['id' => $lecon->id ]) }}">{{ $lecon->titre }}</a></h5>

                            </div>
                            <div class="col-md-6 text-end">
                                <button type="button" class="btn btn-light">Light</button>
                                <button type="button" class="btn btn-light">Light</button>
                                <button type="button" class="btn btn-light">Light</button>

                            </div>

                        </div>
                        <div class="" style="border-bottom: solid 3px rgb(125, 125, 125)">
                            <h4 class="text-primary mb-2 "><i class="fa fa-book-medical text-primary"></i> Leçons</h4>
                        </div>
                        <div class="row mb mt-5">
                            <div class="col-md-6 chose-box ml-30 shadow rounded" style="background-color:rgb(219, 219, 219)">
                                <div class="row">
                                    <div class=" col-md-12 d-sm-flex">
                                        <h5 class="mr-90"> <a href="{{ route('onelecon', ['id' => $lecon->id ]) }}">{{ $lecon->titre }} </a></h5>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star ml-30"></i>
                                    </div>
                                    <div class="col-md-12" style="border-bottom: solid 2px rgb(125, 125, 125)">
                                        <button type="button" class="btn btn-light rounded-pill float-end mt-3 mb-3">A faire</button>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3" style="border-right: solid 1px rgb(125, 125, 125)">

                                            </div>
                                            <div class="col-md-3" style="border-right: solid 1px rgb(125, 125, 125)">

                                            </div>
                                            <div class="col-md-3" style="border-right: solid 1px rgb(125, 125, 125)">

                                            </div>
                                            <div class="col-md-3" style="border-right: solid 1px rgb(125, 125, 125)">

                                            </div>
                                        </div>
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
                                        <a href="{{ route('quiz', ['id' => $quiz->id]) }}"><button class="btn btn-info text-light float-end"><i class="fa fa-eye"></i> Voir plus</button></a>
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
</div>
