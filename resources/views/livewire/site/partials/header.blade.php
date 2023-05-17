
<header class="header-style-4">
    <div class="main-header-area" style="background-color: #FFFFFF;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10 d-none d-lg-block text-start">
                    <div class="menu-style-2">
                        <nav id="topheader" class="navbar navbar-expand-lg justify-content-start py-0">
                            <ul class="navbar-nav list-style-none">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('welcome') }}">ACCUEIL</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">MARKETPLACE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">EMPLOIS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">MON COMPTE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">CONTACT</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2 col-6 text-end">
                    <div class="search-area search-area2">
                        @if (Auth::guest())
                        <a href="{{route('login')}}" class="btn btn-warning px-5 rounded-pill text-white">
                            INSCRIPTIONS
                        </a>
                        @else
                        <a class="d-line" style="padding: 10px">
                            <img src="{{ asset('assets/site/img/profil.png') }}" alt="" style="width: 30px"><span class="ml-0" style="font-size: 12px"> {{ Auth::user()->prenoms }} {{ Auth::user()->nom }}</span>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.theme-main-menu -->
</header>
