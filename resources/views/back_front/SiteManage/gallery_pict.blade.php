<div class="row text-center text-lg-left">
    
        <div class="col-lg-12 col-md-12 col-xs-12 border">
                <h2 class="title_page">Changer l'ordre des photos</h2>
          <ul class="cont_img  d-flex flex-xl-row flex-wrap justify-content-center" id="sortable">
          @foreach ($gallery as $main)
          <li class="row1 ui-state-default" data-id="{{$main->id}}"><img class="img-thumbnail" src="{{asset('images/'.$main->filename)}}" alt=""></li>
           @endforeach
            <div class="col-lg-12 col-md-12 col-xs-12 text-center border">
            
           <button class="btn btn-outline-info" id="reload_btn_pict">Rafraîchir</button>
           </div>
        </div>  
      
</div>
