<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Anoesis</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
        {{-- <script src="{{asset('js/jquery-3.3.1.min.js')}}" type="text/javascript"></script> --}}
       
        
        <script src="{{asset('js/script.js')}}" type="text/javascript"></script>

       
    </head>
    <body>
            
    <header>
        <div class="main-nav d-flex justify-content-between">
            <div class="navmain align-self-center">
                <nav class="navbar">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <div class="animated-icon1"><span></span><span></span><span></span></div>
                        </button>
                        <!-- Collapsible content -->
                </nav>
            </div>
            <div class="img-title">
                <img class="main-title" src="{{asset('img/title.png')}}" alt="title">
            </div>
            <div class="news-letters align-self-center">
                    <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="email" placeholder="@NewsLetters" aria-label="Search">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Valider</button>
                    </form>
            </div>
            <div class="social align-self-center">
                    {{-- <div class="col-md-12"> --}}
                            <ul class="social-network social-circle">
                                {{-- <li><a href="#" class="icoRss" title="Rss"><i class="fas fa-rss"></i></a></li> --}}
                                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                {{-- <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>
                                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fab fa-linkedin"></i></a></li> --}}
                            </ul>				
                        {{-- </div> --}}
            </div>

        </div>

        
    </header>
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
            <!-- Links -->
        </div>
    </body>
</html>
