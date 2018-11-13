@extends('admin')
@section('content')



<div class="title_page" id="Up"><h1>Création de la Page</h1></div>
<div class="container">
       
        <div class="container">
                <div class="row">
                
                        <div class="col-md-12">
                                <div class="jumbotron jumbotron-fluid">
                                        <div class="container">
                                                            
                                                <h2>1. Créer La page et associer sa catégorie</h2>
                                                <br>
                                                <form action="{{route('page_create')}}" method="GET">

                                                        <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label form-control-label">Associer la Catégorie à la Page</label>
                                                                <div class="col-lg-9">
                                                                <select name="id_cat"  id="id_cat" class="form-control" required="required">
                                                                <option></option>
                                                                @foreach($categories as $cat)
                                                                <option value="{{$cat->id}}">{{$cat->titre_cat or old('titre_cat')}}</option>
                                                                @endforeach
                                                                </select>
                                                                </div>
                                                        </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label form-control-label">Titre page</label>
                                                        <div class="col-lg-9">
                                                            <input class="form-control" type="text" id="titre_page" name="titre_page">
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

<div id="content">
                <table class="table table-hover table-bordered table-responsive-sm">
                        <thead  class='thead-dark'>
                        <tr>
                            <th scope="col">Catégorie</th>
                            <th scope="col">Action</th>
                    
                    
                        </tr>
                        </thead>
                    
                        <tbody>
                    @foreach ( $categories as $category )
                        <tr> 
                            
                        <td>{{$category->titre_cat}} </td>
                        <td><a href="{{route('filter_page',['id'=>$category->id])}}"  class="btn btn-outline-info btn-sm" role="button">Filtrer</a></td>
                        </tr>
                    @endforeach
                        </tbody>
                    
                    </table>
                   
                <hr>
                <hr>
                <table class="table table-hover table-responsive-lg">
                        <thead class='thead-dark'>
            <tr>
                <th scope="col">Catégorie</th>
            <th scope="col">Page 
                   <a id="ajaxPage" type="button" class="btn btn-outline-info btn-sm" href="{{route('up_page_all')}}">Modifier titre
                        </a>
            </th>
                <th scope="col">Description de la page</th>
                <th scope="col">Section Carousel et Galerie</th>
                <th scope="col">Section Plan</th>
                <th scope="col">Section Matériaux</th>
                <th scope="col">Action</th>

            </tr>
            </thead>
            <tbody>
        @foreach ( $pages as $page )
            <tr> 
                
            <td>@if($page->Category){{$page->Category->titre_cat}}@endif</td>
            <td>{{$page->titre_page}}</td>
            <td><a href="{{route('description_page',['id'=>$page->id])}}"  class="btn btn-outline-info btn-sm" role="button">Edition</a></td>
            <td><a href="{{route('gallery_edit',['id'=>$page->id])}}"  class="btn btn-outline-info btn-sm" role="button">Edition</a></td>
            <td><a href="{{route('plan_edit',['id'=>$page->id])}}"  class="btn btn-outline-info btn-sm" role="button">Edition</a></td>
            <td><a href="{{route('materials_edit',['id'=>$page->id])}}"  class="btn btn-outline-info btn-sm" role="button">Edition</a></td>
            <td><a href="{{route('page_delete',['id'=>$page->id])}}"  class="btn btn-outline-danger btn-sm" role="button">Supprimer la page</a></td>
            </tr>
        @endforeach
            </tbody>
        </table>

</div>
</div>
   </div>
</div>    
       

@endsection
