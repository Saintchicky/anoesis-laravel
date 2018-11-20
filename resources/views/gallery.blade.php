@extends('main')
    @section('content')
    <section>
                <h1>PHOTOS || VIDEOS - {{$year->year_album}}</h1>
            <br>
            <br>
            <h2>PHOTOS</h2>
            <br>
            <br>
                    <div class="row block">
                            @foreach ($galleries as $photo )
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">     
                                    <div class="hovereffect">
                                            <img class="img-responsive fix" src="{{asset('storage/photo/'.$photo->photo_pict )}}"  width='255px' height='255px' alt="">
                                            <div class="overlay">
                                            <h3>{{$photo->title}}</h3>
                                            <a class="info" href="{{asset('storage/photo/'.$photo->photo_pict )}}" title="{{$photo->title}}" data-lc-caption="{{$photo->description_pict}}" class="d-block mb-4 h-100"  data-lc-options='{"maxWidth":1200, "maxHeight":800}'  data-rel="lightcase:myCollection:slideshow">Voir l'image</a>
                                            </div>
                                    </div>                                                                    
                            </div>    
                            @endforeach    
                    </div>
            <br>
            <br>
            <h2>VIDEOS</h2>
            <br>
            <br>
            <div class="container">
                    <div class="row no-gutters block">
                        @foreach ($videos as $video )
                        <div class="col-md-4">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://{{$video->url_youtube}}"></iframe>
                                </div>
                        </div>
                        @endforeach
                            
                        
                    </div>
            </div>
          
    </section>

@endsection
