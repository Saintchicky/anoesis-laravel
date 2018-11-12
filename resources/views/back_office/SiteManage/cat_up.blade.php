<div class="table-responsive-sm">    
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Catégorie</th>
            <th scope="col">Description de la catégorie</th>
            <th scope="col">Action</th>
    
    
        </tr>
        </thead>
        <div id="content">
        <tbody>
    @foreach ( $categories as $category )
        <tr> 
               
        <td><form id="frm" action="{{route('update_cat_store',['id'=>$category->id])}}"  class="form-inline" method="POST">
            @csrf
        
               <div class="input-group">
        
               <input class="form-control" type="text" id="titre_cat_t" name="titre_cat" value="{{$category->titre_cat or old ('titre_cat')}}">
               
                  
               </div>
               <div class="input-group">
                <button id="sendToDB" type="submit" class="btn btn-outline-success btn-sm">Sauvegarder</button>
               </div>
        </form></td>
        <td><a href="{{route('description_cat',['id'=>$category->id])}}"  class="btn btn-outline-info btn-sm" role="button">Edition</a></td>
        <td><a href="{{route('delete_cat',['id'=>$category->id])}}"  class="btn btn-outline-danger btn-sm" role="button">Supprimer</a></td>
        </tr>
    @endforeach
        </tbody>
    </div>
    </table>
    </div>



        