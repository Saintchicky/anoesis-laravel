@extends('admin')
@section('content')
<div class="title_page"><h1>{{$plan_title->title_plan or old('title')}}</h1></div>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 border">
            
            <form method="post" action="{{route('upload_plan_l_r',['id'=>$plan_title->id])}}" enctype="multipart/form-data">
                                                                                    
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
                            <div class="container"><h2>Plan gauche</h2></div>
                            
                        </div>
                    <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Légende</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" id="figcaption_l" name="figcaption_l">
                            </div>
                    </div>

                <div class="form-group row required">
                        
                    <label class="col-lg-3 col-form-label form-control-label">Description plan gauche</label>
                    <div class="col-lg-9">
                    <textarea  id="description_l" type="text" class="form-control summernote" name="description_l" rows="3"></textarea>
                    </div>
                </div> 
                <div class="form-group row required">
                        <label class="col-lg-3 col-form-label form-control-label">Plan gauche</label>
                        <div class="col-lg-9">
                                <input name="left_plan" type="file" id="left_plan"/>
                                <label class="custom-file-label" for="left_plan">Fichier</label>
                        </div>
                </div>
           
                <hr>
                <hr>    
             
                <div class="form-group row">
                        <div class="container"><h2>Plan Droite</h2></div>
                </div>
                <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Légende</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="figcaption_r" name="figcaption_r">
                        </div>
                </div>

            <div class="form-group row required">
                    
                <label class="col-lg-3 col-form-label form-control-label">Description plan droite</label>
                <div class="col-lg-9">
                <textarea  type="text" class="form-control summernote" name="description_r" id="description_r" rows="3" required="required"></textarea>
                </div>
            </div> 
            <div class="form-group row required">
                    <label class="col-lg-3 col-form-label form-control-label">Plan gauche</label>
                    <div class="col-lg-9">
                            <input name="right_plan" type="file" id="right_plan"/>
                            <label for="right_plan">Fichier</label>
                        </div>
            </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-success">Sauvegarder</button>
                </div>
            </form> 
                
        </div>
       
               
    </div>
</div>


@endsection
