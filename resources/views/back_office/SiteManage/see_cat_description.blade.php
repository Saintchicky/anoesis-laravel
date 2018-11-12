@extends('admin')
@section('content')
<div class="title_page"><h1>Description de la catégorie {{$categorie->titre_page}}</h1></div>

    <div class="col-lg-12">
            
            <form method="post" action="{{route('create_desp_cat',['id'=>$categorie->id])}}" enctype="multipart/form-data">
                                                                                    
                        @csrf

                <div class="form-group">

                    <textarea  id="cat_description" type="text" class="form-control summer" name="cat_description" rows="10">{{$categorie->cat_description or old('cat_description')}}</textarea>
        
                </div> 
            <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-success">Sauvegarder</button>
                </div>
            </form>         
    </div>
    <br>
    <br>

<div class="container">
    <h2> {{$categorie->titre_cat}}</h2>
    <hr align="left" width="50%">
    <br>
    <br>
<div class="row">            
    <div class="col-md-10">
        <br>
    <p>{!! html_entity_decode($categorie->cat_description) !!}</p>
    </div>
</div>
</div>
</div>
                    

        


@endsection
