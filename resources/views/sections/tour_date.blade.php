<section>
    <h1>DATES</h1>
    <br>
    <br>
    {{-- put a function who don't show last months --}}
    <div class="container">
        <div  class="block">
            @foreach($datesTour as $dates)
            <div class="tour-row">
               <span class="tour-item tour-date">{{ strtoupper(\Carbon\Carbon::parse($dates->date)->format('d M Y'))}}</span>            
               <span class="tour-item tour-city">{{mb_strtoupper($dates->city)}}</span> 
               {{-- mb_stroupper put all characters even é --}}
               <span class="tour-item tour-arena">{{mb_strtoupper($dates->place)}}</span>
               <a class="btn btn-outline-light my-2 my-sm-0" href="http://{{$dates->url}}" type="button" target="_blank">Voir l'évent</a> 
             </div>
           @endforeach 
        </div>
        <span id="musics"></span>
    </div>
</section>
