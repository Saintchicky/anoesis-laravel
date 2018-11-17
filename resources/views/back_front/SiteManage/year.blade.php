@extends('back_front.admin')
@section('content')



<div class="title_page" id="Up"><h1>Création Année et Album</h1></div>

       <section class="block">
            <div class="container">
                    <div class="row">
                            <div class="col-md-12">
                                            <div class="container">
                                                            
                                                    <h2>1. Créer Année</h2>
                                                    <br>
                                                    <form action="{{route('year_create')}}" method="POST">
                                                        @csrf
                                                            <div class="form-group row">
                                                                <label class="col-lg-3 col-form-label form-control-label">Année</label>
                                                                <div class="col-lg-6">
                                                                    <input class="form-control" type="text" id="year_album" name="year_album">
                                                                </div>
                                                                 <button type="submit" class="btn btn-outline-success" data-dismiss="modal">Créer</button>
                                                            </div>
                                                           
                                                    </form>
                                            </div>
                            </div>
                    </div>
            </div>
       </section>
        
<br>

    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="content">
          
                   
                                    <br>
                                    <br>
                                    <table class="table table-hover table-responsive-lg">
                                            <thead class='thead-dark'>
                                <tr>
             
                               <th scope="col">Année
                                       <a id="ajaxYear" type="button" class="btn btn-outline-info btn-sm" href="{{route('year_modif')}}">Modifier
                                            </a>
                                </th>
     
                                    <th scope="col">Album Photos | | Vidéos</th>
                                    <th scope="col">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                            @foreach ( $years as $year )
                                <tr> 
                
                                <td>{{$year->year_album}}</td>
                                <td><a href="{{route('gallery_edit',['id'=>$year->id])}}"  class="btn btn-outline-info btn-sm" role="button">Edition</a></td>
                                <td><a href="{{route('delete_year',['id'=>$year->id])}}"  class="btn btn-outline-danger btn-sm" role="button">Supprimer l'album</a></td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
 
       

@endsection
