<section>
    <div class="container video_resp">
        <div class="row">
            <div class="col-md-12 text-center block">
                <div class="embed-responsive embed-responsive-16by9">
                    @foreach ($video as $vid )
                 
                    @if($vid->is_main_youtube == 1)
                    <iframe class="embed-responsive-item" src="https://{{$vid->url_youtube}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endif
              
                    @endforeach
                    
                </div>
            </div>
        </div>
        <br>
        <div class="scroll-downs">
                <a href="#about_me">
                <div class="mousey">
                        <div class="scroller"></div>     
                </div>
            </a>
        </div>
    </div>
</section>
