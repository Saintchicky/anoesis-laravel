<div class="img-back"></div> @include('back_front.include.head')

        @include('back_front.include.menu')
     

        <div class="loading">
                <i class="fas fa-spinner fa-pulse"></i><br/>
                <span>Chargement</span>
            </div>
            <div class="container">
                    @yield('content') 
                    @include('back_front.inc.messages')
            </div>

     
@include('back_front.include.footer')
