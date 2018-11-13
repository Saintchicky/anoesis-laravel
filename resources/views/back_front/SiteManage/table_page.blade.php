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
    </div>
<hr>
<hr>
<table class="table table-hover table-responsive-md">
        <thead class='thead-dark'>
        <tr>
            <th scope="col">Catégorie</th>
            <th scope="col">Page</th>
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
        <td>
                <form id="frm" action="{{route('up_page_store',['id'=>$page->id])}}"  class="form-inline" method="POST">
                        @csrf
                        
                           <div class="input-group">
                    
                           <input class="form-control" type="text" id="titre_page_t" name="titre_page" value="{{$page->titre_page or old ('titre_page')}}">
                           
                              
                           </div>
                           <div class="input-group">
                            <button id="sendToDB" type="submit" class="btn btn-outline-success btn-sm">Sauvegarder</button>
                            
                           </div>
                    </form>
        </td>
        <td><a href="{{route('description_page',['id'=>$page->id])}}"  class="btn btn-outline-info btn-sm" role="button">Edition</a></td>
        <td><a href="{{route('gallery_edit',['id'=>$page->id])}}"  class="btn btn-outline-info btn-sm" role="button">Edition</a></td>
        <td><a href="{{route('plan_edit',['id'=>$page->id])}}"  class="btn btn-outline-info btn-sm" role="button">Edition</a></td>
        <td><a href="{{route('materials_edit',['id'=>$page->id])}}"  class="btn btn-outline-info btn-sm" role="button">Edition</a></td>
        <td><a href="{{route('page_delete',['id'=>$page->id])}}"  class="btn btn-outline-danger btn-sm" role="button">Supprimer la page</a></td>
         </tr>
    @endforeach
        </tbody>
    </table>
