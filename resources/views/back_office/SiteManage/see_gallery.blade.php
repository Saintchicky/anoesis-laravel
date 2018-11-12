@extends('admin')
@section('content')

    <div class="title_page"><h1>Carousel et Galerie</h1></div>
<div class="container">

   
    <div class="jumbotron jumbotron-fluid">
       
            <div class="container">
            
           <br>
                <form method="post" action="{{url('/admin/image/upload/store')}}" enctype="multipart/form-data" 
                            class="dropzone" id="dropzone">
                                    <input type="hidden" name="id_page"  id="id_page" value="{{$pages->id}}">
                                    <input type="hidden" name="id_cat"  id="id_cat" value=" @if($pages->Category){{$pages->Category->id}}@endif">
                                    <div class="dz-message" data-dz-message><span>Glisser vos fichiers ici</span></div>
                    
                @csrf
            
                </form>
                    <button class="btn btn-outline-success float-right" id="reload_btn">Valider</button>
            </div>
    </div>
     <br>
      @include('back_front.SiteManage.carousel')
     <br>
     @include('back_front.SiteManage.gallery_pict')
</div>

<div class="container">
            <h1>Galerie</h1>
            <hr>
            <br>
 </div>     

<div class="container py-3">

     @foreach( $gallery as $thumb )
    <div class="card border">
        <div class="row">
                    <div class="col-md-4">
                              <img class="card-img-top w-100 border" src="{{ asset('images/'.$thumb->filename) }}" alt="Card image cap">
                    </div>
            <div class="col-md-8">
                            <div class="card-block">
                                      <h4 class="card-title">@if($thumb->Pages)<p>
                                      {{$thumb->Pages->titre_page}}
                                      <a href="{{ route('delete_pict',['id'=>$thumb->id]) }}" class="btn btn-outline-danger remove">Supprimer</a> 

                                      <button  data-target="#modalForm" data-toggle="modal" data-href="{{ route('update_note_gallery',['id'=>$thumb->id]) }}" id="add" class="btn btn-outline-primary">Slide</button>
                                      </p>@endif</h4>
                                       <hr>
                                       <hr>
                                      <h3 class="card-title">{{$thumb->title}}</h4>
                                       <hr>
                                       <hr>
                                      <p class="card-text see_gal">Mis en avant Carousel : @if($thumb->is_featured == 1) Oui @else Non @endif</p>
                                       <hr>
                                       <hr>
                                      <p class="card-text see_gal">Mis en avant dans la page principale et catégorie : @if($thumb->is_main == 1) Oui @else Non @endif</p>
                                       <hr>
                                       <hr>
                                      <p class="card-text">{{$thumb->description}}</p>
                                       <hr>
                                       <hr>
                                       <p class="card-text">{!! html_entity_decode($thumb->description_page) !!}</p>
                                       <hr>
                                       <hr>
                      
                            </div>
            </div>
        </div>
    </div>
      @endforeach   
</div>
    <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="modal_content"></div>
        </div>
    </div>

@endsection
