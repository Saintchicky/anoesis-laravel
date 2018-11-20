<section>
    <h1>PHOTOS | | VIDEOS </h1>
    <br>
    <br>
    <div class="container">
       <div id='band-members'>
            <div class='row block'>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        @foreach ($gallery as $photo )
                        @if($photo->is_main_photo == 1)
                            <div class="hovereffect">
                                <img class="img-responsive" src="{{asset('storage/photo/'.$photo->photo_pict )}}" alt="" width='255px' height='255px'>
                                <div class="overlay">         
                            @if($photo->Year) 
                            <h2>{{$photo->Year->year_album}}</h2>
                            <a class="info" href="{{route('gallery',['id'=>$photo->Year->id])}}">Voir l'album</a>
                            @endif
                                </div>
                            </div>
                        @endif   
                        @endforeach
                           
                    </div>
                    
            </div>            
        </div>
        <span id="contact"></span>
    </div>
</section>
