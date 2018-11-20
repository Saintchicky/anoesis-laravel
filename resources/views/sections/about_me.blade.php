
<section>
<h1>ANOESIS TRIO</h1>
<br>
<br>
    <div class="container">
        <div class="row block">
            @foreach ( $profile_p as $profile  )
            @if ($loop->first)  
           
            <div class="col-md-6 p_justify">
            {{-- pour traduire les tags html de la bdd --}}
            <p>{!! html_entity_decode($profile->description_p) !!}</p> 
            </div>
            <div class="col-md-6">
                <figure>
                    <img class="img-fluid" src="{{asset('storage/profile/'.$profile->pict_profile)}}" alt="">
                </figure>
            </div>
            @endif
            @endforeach
        </div>
        <span id="dates"></span>
    </div>
</section>
