@extends('admin')
@section('content')

<div class="title_page"><h1>Materiaux</h1></div>
<div class="container">



<div class="jumbotron jumbotron-fluid">
       
        <div class="container">
            
          
            <form method="post" action="{{url('/admin/materials/upload/store')}}" enctype="multipart/form-data" 
                        class="dropzone" id="dropzone">
                        <input type="hidden" name="id_page"  id="id_page" value="{{$pages->id}}">
                
            @csrf
            <div class="dz-message" data-dz-message><span>Glisser vos fichiers ici</span></div>
            
        </form>
    <button class="btn btn-outline-primary float-right" id="reload_btn">Valider</button>
        </div>
    </div>

    <div class="container">
            <h1>Choix des materiaux</h1>
            <hr>
            <br>
       
        <div class="row d-flex justify-content-center">
                @foreach( $thumb_materials as $thumb_m )
                <div class="col-md-3">
                <div class="card-deck">
                
                        <div class="card" style="width: 18rem;">

                            <img class="card-img-top" src="{{ asset('materials/'.$thumb_m->thumb_material ) }}" alt="Card image cap">
                            <div class="card-body">
                                    <h5 class="card-title">{{$thumb_m->thumb_title}}</h5>
                                    <hr>
                                    @if($thumb_m->Pages)<p>{{$thumb_m->Pages->titre_page}}</p>@endif
                                    <hr>
                                    <p class="card-text">{{$thumb_m->thumb_description}}</p>
                                    <hr>
                                    <a href="{{ route('delete_thumb',['id'=>$thumb_m->id]) }}" value="{{$thumb_m->id}}" id="btn_material" class="btn btn-outline-danger">Supprimer</a> 

                                    <button  data-target="#modalForm" data-toggle="modal" data-href="{{ route('update_note_thumb',['id'=>$thumb_m->id]) }}" id="add" class="btn btn-outline-primary float-right">Editer</button>
                                
                                </div>

                        
                        </div>

                </div>
        </div>
        <br>
        @endforeach
        </div>
    </div>
</div>

<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="modal_content"></div>
        </div>
    </div>
<br>
<br>
<br>
<br>
@endsection
