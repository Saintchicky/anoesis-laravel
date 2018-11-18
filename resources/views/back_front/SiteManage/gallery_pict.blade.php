
<section class="block">
    <div class="row text-center text-lg-left">
            <div class="col-lg-12 col-md-12 col-xs-12 border">
                  <h2 class="title_page">Changer l'ordre des photos</h2>
                  <ul class="cont_img  d-flex flex-xl-row flex-wrap justify-content-center" id="sortable">
                  @foreach ($gallery as $main)
                <li class="row1 ui-state-default" data-id="{{$main->id}}">
                    @if($main->is_main_photo == 1) 
                    <a  data-target="#modalForm_g" data-toggle="modal" data-href="{{ route('photo_modif',['id'=>$main->id]) }}" id="add" class="btn btn-outline-success">
                        <div class="cont_img">
                            <img class="img-thumbnail" src="{{asset('storage/photo/'.$main->photo_pict )}}" alt="">
                            <div class="overlay">
                            <div class="text">En couverture du site</div>
                            </div>
                        </div>
                    </a>
                    @else 
                    <a  data-target="#modalForm_g" data-toggle="modal" data-href="{{ route('photo_modif',['id'=>$main->id]) }}" id="add" class="btn btn-outline-light">
                        <img class="img-thumbnail" src="{{asset('storage/photo/'.$main->photo_pict )}}" alt="">
                    </a>
                    @endif
                   
                </li>
                   @endforeach
                   </ul>
                    <div class="col-lg-12 col-md-12 col-xs-12 text-center">
            
                   <button class="btn btn-outline-info" id="reload_btn_pict">Rafraîchir</button>
                   </div>
            </div>  
    </div>
</section>
