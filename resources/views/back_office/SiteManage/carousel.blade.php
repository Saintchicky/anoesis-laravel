
<div class="container">	
    <div class="row d-flex justify-content-center">
    <div class="col-md-8 border">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        
                <ol class="carousel-indicators">
                @foreach( $carousel as $slides )
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
                </ol>
            
                <div class="carousel-inner" role="listbox">
                @foreach( $carousel as $slides )
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img class="d-block img-fluid" src="{{asset('images/'.$slides->filename)}}" alt="">
                            <div class="carousel-caption d-none d-md-block">
                            <h3>{{ $slides->title }}</h3>
                            <p class="text-center">{{ $slides->description }}</p>
                            </div>
                    </div>
                @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
        </div>
    </div>
</div>
    </div>