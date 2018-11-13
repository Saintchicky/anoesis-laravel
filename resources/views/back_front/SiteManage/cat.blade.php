@extends('admin')
@section('content')



<div class="title_page" id="Up"><h1>Création de la catégorie</h1></div>
<div class="container">
       
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                        <div class="jumbotron jumbotron-fluid">
                                                        <div class="container">
                                                            
                                                            <h2>1. Créer en premier La catégorie</h2>
                                                            <br>
                                                            <form action="{{route('cat_create')}}" method="GET">
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label form-control-label">Catégorie</label>
                                                                    <div class="col-lg-9">
                                                                        <input class="form-control" type="text" id="titre_cat" name="titre_cat">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-outline-success" data-dismiss="modal">Créer</button>
                                                                </div>
                                                            </form>
                                                          
        
                                                        </div>
                                        </div>       
                        </div>
                </div>
        </div>
        

   <div class="col-md-12">
        <div class="container">
            <h3 class="display-8">Le site</h3>
            <br>
            <div id="content">
<div class="table-responsive-sm">    
<table class="table">
    <thead>
    <tr>
        <th scope="col">Catégorie <span><a href="{{route('update_cat')}}"   class="btn btn-outline-info btn-sm btn_cat" role="button">Modifier</a></span></th>
        <th scope="col">Description de la catégorie</th>
        <th scope="col">Action</th>


    </tr>
    </thead>
   
    <tbody>
@foreach ( $categories as $category )
    <tr> 
           
    <td>{{$category->titre_cat}} </td>
    <td><a href="{{route('description_cat',['id'=>$category->id])}}"  class="btn btn-outline-info btn-sm" role="button">Edition</a></td>
    <td><a href="{{route('delete_cat',['id'=>$category->id])}}"  class="btn btn-outline-danger btn-sm" role="button">Supprimer</a></td>
    </tr>
@endforeach
    </tbody>

</table>
</div>
</div>
</div>

</div>    
       

@endsection
