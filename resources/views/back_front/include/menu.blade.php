@if(!Auth::guest())
<div id="wrapper">
        <div class="overlay"></div>
         
             <!-- Sidebar -->
        <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
          <ul class="nav sidebar-nav">
            <div class="sidebar-header">
            <div class="sidebar-brand">
              <a href="{{route('home_view')}}">Atelier-Opa</a></div></div>
              <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="fas fa-sign-in-alt"></span> {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Se déconnecter') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

                
        <li><a href="{{route('home_view')}}"><span class="fas fa-home"></span> Home Office</a></li>
  
        <li>
            @if(is_file(storage_path('framework/down')))
            <a href="{{route('home_mode')}}" target="_blank"><span class="fas fa-home"></span> Voir le Site</a>
            @else
            <a href="{{route('home')}}" target="_blank"><span class="fas fa-home"></span> Voir le Site</a>
            @endif
        </li>
        <div class="dropdown-header">Maintenance
                <span>
                        <label class="switch">
                            <input type="checkbox" name="my_checkbox" @if(is_file(storage_path('framework/down')))  checked @endif>
                            {{-- @if(Input::has('check'))
                            <a href="{{route('mode_down')}}"></a>
                            @else
                            <a href="{{route('mode_up')}}"></a>
                            @endif --}}
                            <span class="slider"></span>
                        </label>
                    </span>
                  
         
        </div>
    
        <li><a href="{{route('mode_down')}}"><span class="fas fa-user-tie"></span> Maintenance On</a></li>
          <li><a href="{{route('mode_up')}}"><span class="fas fa-user-tie"></span> Maintenance Off</a></li>
            <div class="dropdown-header text-center">Gestion Formulaire</div>
            <li><a href="{{url('admin/back-office/bdd')}}"><span class="fas fa-user-tie"></span> BDD Client</a></li>
   
            {{--<div class="dropdown-header text-center">Mes articles</div>
            <li><a href="{{route('posts_index')}}"><span class="fas fas fa-edit"></span> Rédaction Posts</a></li>
            <div class="dropdown-header text-center">Gestion Site</div>
          
            <li><a href="{{route('profile_a')}}"><span class="fas fas fa-clone"></span> Création Profil</a></li>
             <li><a href="{{route('services')}}"><span class="fas fas fa-clone"></span> Création Services</a></li>
            <li><a href="{{route('cat')}}"><span class="fas fas fa-clone"></span> Création Catégorie</a></li>
            <li><a href="{{route('page')}}"><span class="fas fas fa-clone"></span> Création Page</a></li>--}}

  
           </ul>
       </nav>
             <!-- /#sidebar-wrapper -->
     
             <!-- Page Content -->
            <div id="page-content-wrapper">
                 <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                     <span class="hamb-top"></span>
                     <span class="hamb-middle"></span>
                     <span class="hamb-bottom"></span>
                 </button>
@endif
