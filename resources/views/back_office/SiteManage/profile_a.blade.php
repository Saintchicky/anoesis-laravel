@extends('admin')
@section('content')
<div class="title_page"><h1>Profil</h1></div>
<div class="container">

   <div class="col-lg-12">

    @if(isset($profile))
        <form action="{{route('profile_a_up',['id'=>$profile->id])}}" method="POST">
            {{--enctype obligatoire pour pouvoir télécharger mon image--}}
    @else
        <form method="post" action="{{route('profile_create')}}" enctype="multipart/form-data" 
        class="dropzone" id="dropzone">
    @endif 
        @csrf


        <div class="form-group">
                        
                    
                   
                    <textarea  id="description_p" type="text" class="form-control summernote" name="description_p" rows="10">{{$profile->description_p or old('description_p')}}</textarea>
        
                </div> 
                <div class="dz-message" data-dz-message><span>Glisser vos fichiers ici</span></div>

            
        </form>
     <button class="btn btn-outline-primary float-right" id="reload_btn">Valider</button>
    </div>
</div>       


<br>
<br>
<section>
    <div id="content">     
        @foreach ($profile_p as $profile )
        <div class="container">
        <h3>A propos
        <span>
                <div class="dropdown">
                        <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                          Modifier
                        </button>
                        <div class="dropdown-menu">
                          <h5 class="dropdown-header">Changer le Texte</h5>
                          <a  id="modalForm" href="{{route('profile_up_a',['id'=>$profile->id])}}" class="btn btn-info btn-sm text-center d-flex justify-content-center">Modifier</a>
                          <h5 class="dropdown-header">Changer la Photo</h5>
                          <form action="{{route('profile_pict_up',['id'=>$profile->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-inline">
                                                <input name="pict_profile" type="file" id="pict_profile"/>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit"  class="btn btn-outline-success">Sauvegarder</button>
                                </div>
                          </form>
                        </div>
                </div>
            
        </span>
        <span>
            <a href="{{route('profile_up_a_del',['id'=>$profile->id])}}" class="btn btn-outline-danger btn-sm" role="button">Supprimer</a>
        </span>
    </h3>
        <br>
        <div class="row">
       
                
          
        <div class="col-md-7 p_justify">
            {{-- pour traduire les tags html de la bdd --}}
            <p>{!! html_entity_decode($profile->description_p) !!}</p> 
    
                 
  
      </div>
      <div class="col-md-5">
            <div class="card profile-card">
          <figure>
      <img class="img-fluid img-profile" src="{{asset('storage/profile/'.$profile->pict_profile)}}" alt="">

    </figure>
            </div>
    </div>

      @endforeach
        </div>
        </div>
    </div>
        </section>
<br>
<br>
<br>
<br>
@endsection
