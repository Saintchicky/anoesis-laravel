@extends('back_front.admin')
@section('content')
<div class="title_page"><h1>Profil</h1></div>
@if (!empty($profile->description_p ))     
<section class="block">  
<div class="container">

   <div class="col-lg-12">


        <form method="post" action="{{route('profile_create')}}" enctype="multipart/form-data" 
        class="dropzone" id="dropzone">

        @csrf


        <div class="form-group">
                        
                    
                   
                    <textarea  id="description_p" type="text" class="form-control summernote" name="description_p" rows="10"></textarea>
        
                </div> 
                <div class="dz-message" data-dz-message><span>Glisser vos fichiers ici</span></div>

               
        </form>
        <br>
        <button class="btn btn-outline-primary float-right" id="reload_btn">Valider</button>  
    </div>
</div>    
<br>   
</section>
@else
<p></p>
@endif 

<br>
<br>
@if (empty($profile->description_p ))     
<section class="block">
    <div id="content">     
        @foreach ($profile_p as $profile )
        <div class="container">
        <h2>ANOESIS</h2>
       
         <div class="d-flex justify-content-between">
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
                                    <button class="btn btn-outline-success">Sauvegarder</button>
                                </div>
                          </form>
                        </div>
                </div>
            
        </span>
        <span>
            <a href="{{route('profile_up_a_del',['id'=>$profile->id])}}" class="btn btn-outline-danger btn-sm" role="button">Supprimer</a>
        </span>
    </div>  
    
    <hr style="background:white;">
    
        <br>
        <div class="row">
       
                
          
        <div class="col-md-7 p_justify">
            {{-- pour traduire les tags html de la bdd --}}
            <p>{!! html_entity_decode($profile->description_p) !!}</p> 
    
                 
  
      </div>
      <div class="col-md-5">
            <div>
          <figure>
      <img class="img-fluid" src="{{asset('storage/profile/'.$profile->pict_profile)}}" alt="">

    </figure>
            </div>
    </div>

      @endforeach
        </div>
        </div>
    </div>
        </section>
        @else
<p></p>
@endif 
<br>
<br>
<br>
<br>
@endsection
