<section>
 @forelse ($gallery as $photo )
    @if ($loop->first)
    <h1>PHOTOS | | VIDEOS </h1>
    <br>
    <br>
    @endif
    @empty
    <p></p>
@endforelse
@forelse ($gallery as $photo )
                    @if ($loop->first)
    <div class="container">
       <div id="band-members">
            <div class='row block'>
                    @endif
                    @empty
                    <p></p>
@endforelse
              @forelse($gallery as $photo )
                 @if($photo->is_main_photo == 1)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      
                            <div class="hovereffect">
                                <img class="img-responsive fix" src="{{asset('storage/photo/'.$photo->photo_pict )}}" alt="" width='255px' height='255px'>
                                <div class="overlay">         
                            @if($photo->Year) 
                            <h2>{{$photo->Year->year_album}}</h2>
                            @if(is_file(storage_path('framework/down')))
                            <a class="info" href="{{route('gallery_mode',['id'=>$photo->Year->id])}}">Voir l'album</a>
                            @else
                            <a class="info" href="{{route('gallery',['id'=>$photo->Year->id])}}">Voir l'album</a>
                            @endif
                            @endif
                                </div>
                            </div>  
                    </div>
                     @endif 
                     @empty
                    <p></p>  
                @endforelse
            </div>            
        </div>
    </div>

    <span id="contact"></span>
</section>
