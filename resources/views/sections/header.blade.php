<header>
        <div class="main-nav d-flex justify-content-center">
            <div class="row" style="width:100%;">
                <div class="col-md-4">
                        <div class="img-title">
                        <a href="{{route('home')}}"><img class="main-title" src="{{asset('img/title.png')}}" alt="title"></a>
                            </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-self-center">
                        <div class="news-letters">
                                <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control transparent-input mr-sm-2" type="email" placeholder="@NewsLetters" aria-label="Search">
                                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Valider</button>
                                </form>
                        </div>
                </div>
                <div class="col-md-4 align-self-center">
                       
                        <div class="social text-right social_resp">
                                        <a class="home" href="{{route('home')}}">ACCUEIL</a>
                                <ul class="social-network social-circle">
                                    <li><a href="https://www.facebook.com/AnoesisTrio/" class="icoFacebook" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    {{-- <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li> --}}
                                    {{-- <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>
                                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fab fa-linkedin"></i></a></li> --}}
                                </ul>				
                        </div>
                </div>
            </div>
        </div>
</header>

