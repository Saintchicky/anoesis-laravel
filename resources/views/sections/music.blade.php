<section>
<h1>MUSIQUES</h1>
<br>
<br>
    <div class="container">
            @foreach($musics as $music)
            {!! html_entity_decode($music->url_sound) !!}
            <br>
            @endforeach  
       <span id="photos"></span>
    </div>  
</section>
