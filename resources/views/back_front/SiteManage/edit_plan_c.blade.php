@extends('admin')
@section('content')
<div class="title_page"><h1>{{$plan_title->title_plan or old('title')}}</h1></div>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 border">
            
            <form method="post" action="{{route('upload_plan_c',['id'=>$plan_title->id])}}" enctype="multipart/form-data">
                                                                                    
                        @csrf

                        <div class="col-md-12">
                            <div class="jumbotron jumbotron-fluid">
                                            <div class="container">
                                                
                                                <h3 class="display-8">1. Associer en premier la page</h3>
                                                <br>
                                
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Selectionner d'abord la Page</label>
                                                    <div class="col-lg-9">
                                                    <select name="id_page"  id="id_page" class="form-control" required="required">
                                                    <option></option>
                                                    @foreach($pages as $page)
                                                    <option value="{{$page->id}}">{{$page->titre_page or old('titre_page')}}</option>
                                                    @endforeach
                                                    </select>
                                                    </div>
                                            </div>
                                                  
                                              

                                            </div>
                            </div>       
                        </div>

                    
                        <div class="form-group row">
                            <div class="container"><h2>Plan Centre</h2></div>
                            
                        </div>
                    {{-- <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Légende</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" id="figcaption_c" name="figcaption_c">
                            </div>
                    </div> --}}

                <div class="form-group row required">
                        
                    <label class="col-lg-3 col-form-label form-control-label">Description centre</label>
                    <div class="col-lg-9">
                    <textarea  id="description_c" type="text" class="form-control summernote" name="description_c" rows="10"></textarea>
                    </div>
                </div> 
                <div class="form-group row required">
                        <label class="col-lg-3 col-form-label form-control-label">Plan centre</label>
                        <div class="col-lg-9">
                                <input name="c_plan" type="file" id="c_plan"/>
                                {{-- <input name="c_plan" type="file" class="custom-file-input" id="c_plan"/> --}}
                                <label for="c_plan">Fichier</label>
                                {{-- <label class="custom-file-label" for="c_plan">Fichier</label> --}}
                        </div>
                </div>
           
                <hr>
                <hr>    
            <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-success">Sauvegarder</button>
                </div>
            </form> 
                
        </div>
       
               
    </div>
</div>
<br>
<br>
<br>
<br>

@endsection
