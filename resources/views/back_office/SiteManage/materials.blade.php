@extends('admin')
@section('content')

<div class="title_page"><h1>Materials</h1></div>
<div class="container">



    <div class="container">
            <h1>Materiaux</h1>
            <hr>
            <br>
       




                <table id='data_table' class="table table-bordered table-responsive-sm">
                    
                        <thead class='thead-dark'>
                        <tr>
                            <th scope="col">Page</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Action</th>
                        
                            

            
                        </tr>
                        </thead>
                @foreach( $thumb_materials as $thumb_m )
                <tbody>
                        <tr data-toggle="collapse" data-target="#see_mat{{$thumb_m->id}}"> 
                                <td>@if($thumb_m->Pages){{$thumb_m->Pages->titre_page}}@endif</td>
                                <td>{{$thumb_m->thumb_title}}</td>
                                <td>
                                    <a href="{{ route('delete_thumb',['id'=>$thumb_m->id]) }}" class="btn btn-danger">Supprimer</a>
                                    <button class="btn btn-outline-primary btn-sm" type="button"  aria-expanded="false" aria-controls="collapseExample">Voir</button>
                                </td>
                        </tr>





                {{-- <div class="col-md-3"> --}}
                <tr>
                
                        <td colspan="3" class="collapse multi-collapse"  id="see_mat{{$thumb_m->id}}">
                            <div class="card" style="width: 18rem;">

                            <img class="card-img-top" src="{{ asset('materials/'.$thumb_m->thumb_material ) }}" alt="Card image cap">
                            <div class="card-body">
                                    <h5 class="card-title">{{$thumb_m->thumb_title}}</h5>
                                    <hr>
                                    @if($thumb_m->Pages)<p>{{$thumb_m->Pages->titre_page}}</p>@endif
                                    <hr>
                                    <p class="card-text">{{$thumb_m->thumb_description}}</p>
                                    <hr>
                                    <a href="{{ route('delete_thumb',['id'=>$thumb_m->id]) }}" class="btn btn-danger">Supprimer</a> 

                                    <button  data-target="#modalForm" data-toggle="modal" data-href="{{ route('update_note_thumb',['id'=>$thumb_m->id]) }}" id="add" class="btn btn-outline-primary float-right">Editer</button>
                                
                                </div>

                            </div>
                            </td>

                    </tr>
        {{-- </div> --}}

            </tbody>
        @endforeach
        {{-- </div> --}}
    </div>
</div>

<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="modal_content"></div>
        </div>
    </div>

@endsection
