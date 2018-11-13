@extends('admin')
@section('content')
<div class="title_page"><h1>Description de la page {{$pages->titre_page}}</h1></div>
{{-- <div class="container"> --}}
    <div class="col-lg-12">
            
            <form method="post" action="{{route('create_desp',['id'=>$pages->id])}}" enctype="multipart/form-data">
                                                                                    
                        @csrf

                <div class="form-group">
                        
                    
                   
                    <textarea  id="page_description" type="text" class="form-control summer" name="page_description" rows="10">{{$pages->page_description or old('page_description')}}</textarea>
        
                </div> 
            <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-success">Sauvegarder</button>
                </div>
            </form>         
    </div>
    <br>
    <br>
    <div class="container">
            <h2> {{$pages->titre_page}}</h2>
            <hr align="left" width="50%">
            <br>
            <br>
        <div class="row">            
            <div class="col-md-10">
                <br>
            <p>{!! html_entity_decode($pages->page_description) !!}</p>
            </div>
        </div>
    </div>
{{-- </div> --}}

@endsection
