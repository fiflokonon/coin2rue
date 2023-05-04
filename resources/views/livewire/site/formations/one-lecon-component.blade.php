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
    <!--services-area start-->
    <section class="news-feed-area pt-120 pb-75 pt-md-60 pb-md-15 pt-xs-60 pb-xs-15">
        <div class="container">
            <div class="row mb-15">
                <div class="col-lg-8 pe-xl-0">
                    <div style="width: 100%; height: 50px; background-color: #0c2168">
                        <h2 class="text-center text-light">{{ $lecon->titre }}</h2>
                    </div>
                    <div class="news-details-left mb-30">
                        <img class="img-fluid mb-5" src="{{asset('assets/site/img/home-5/2-520x350.jpg')}}" alt="Blog Img">
                        @foreach($lecon->paragraphes as $paragraphe)
                            <p class="mb-55">
                                {{ $paragraphe->contenu }}
                            </p>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-info float-start text-light"><i class="fa fa-chevron-left"></i> Précédent</a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-info float-end text-light">Suivant <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pl-30 pl-lg-15 pl-md-15 pl-xs-15">
                    <div class="news-right-widget">
                        <div class="widget widget-post mb-40">
                            <div class="widget-title-box pb-25 mb-30">
                                <h4 class="widget-sub-title2 fs-20">Popular Feeds</h4>
                            </div>
                            <ul class="post-list">
                                <li>
                                    <div class="blog-post mb-30">
                                        <a href="news-details.html"><img src="img/blog/post-1.jpg"
                                                                         alt="Post Img"></a>
                                        <div class="post-content">
                                            <h6 class="mb-10"><a href="news-details.html">Having education in
                                                    an area helps</a></h6>
                                            <span class="fs-14"><i class="fal fa-calendar-alt"></i> 24th March
													2022</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-post mb-30">
                                        <a href="news-details.html"><img src="img/blog/post-2.jpg"
                                                                         alt="Post Img"></a>
                                        <div class="post-content">
                                            <h6 class="mb-10"><a href="news-details.html">people think, feel, &
                                                    behave in a way</a></h6>
                                            <span class="fs-14"><i class="fal fa-calendar-alt"></i> 24th March
													2022</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-post mb-30">
                                        <a href="news-details.html"><img src="img/blog/post-3.jpg"
                                                                         alt="Post Img"></a>
                                        <div class="post-content">
                                            <h6 class="mb-10"><a href="news-details.html">that contributes to
                                                    their success</a></h6>
                                            <span class="fs-14"><i class="fal fa-calendar-alt"></i> 24th March
													2022</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-post">
                                        <a href="news-details.html"><img src="img/blog/post-4.jpg"
                                                                         alt="Post Img"></a>
                                        <div class="post-content">
                                            <h6 class="mb-10"><a href="news-details.html">improves not only
                                                    their personal</a></h6>
                                            <span class="fs-14"><i class="fal fa-calendar-alt"></i> 24th March
													2022</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
