@extends('admin')
@section('content')



<div class="title_page" id="Up"><h1>Catégorie et Page</h1></div>
<br>
<div class="container">
       
        <table id='data_table' class="table table-hover table-bordered dt-responsive nowrap">
                
            <thead class='thead-dark'>
            <tr>
                 
                <th scope="col">Categorie</th>
                <th scope="col">Action</th>
            
                


            </tr>
            </thead>
            @foreach ( $categories as $category )
            <tbody>
       
        <tr> 
        
        <td>{{$category->titre_cat}}</td>
            <td>
                    <a href="{{route('cat_modify',['id'=>$category->id])}}"  class="btn btn-outline-info btn-sm" role="button">Modifier</a>
                    <a href="{{route('delete_cat',['id'=>$category->id])}}"  class="btn btn-outline-danger btn-sm" role="button">Supprimer</a>
            
            </td>

        </tr>

</tbody>       
@endforeach
    </table>
<br>
    <hr>
<br>
    <table id='data_table' class="table table-hover table-borderedtable-responsive-sm nowrap">
                
            <thead class='thead-dark'>
            <tr>
                 
                <th scope="col">Page</th>
                <th scope="col">Action</th>
            
                


            </tr>
            </thead>
            @foreach ( $pages as $page )
            <tbody>
       
        <tr> 
        
        <td>{{$page->titre_page}}</td>
            <td>
                    <a href="{{route('page_modify',['id'=>$page->id])}}"  class="btn btn-outline-info btn-sm" role="button">Modifier</a>
                    <a href="{{route('page_delete',['id'=>$page->id])}}"  class="btn btn-outline-danger btn-sm" role="button">Supprimer</a>
            
            </td>

        </tr>

</tbody>       
@endforeach
    </table>
  
</div> 



    

@endsection
