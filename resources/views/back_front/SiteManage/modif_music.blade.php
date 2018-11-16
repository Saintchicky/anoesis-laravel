
  <h2 class="text-center">Les Musiques <a href="{{route('musics')}}" type="button" class="btn btn-outline-info">Retour</a></h2>
  <br>


@foreach($musics as $music)

<table class="table">
        <thead>
        <tr>
                        <th scope="col">URL</th> 
                        <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <tr>
             <form id="frm" action="{{route('music_create_up_store',['id'=>$music->id])}}"  class="form-inline" method="POST">
                    @csrf
                     
                        <td>                                                       
                                   <div class="input-group">                                             
                                           <input class="form-control" type="text" id="url_sound" name="url_sound" value="{{ old('url_sound', $music->url_sound)}}" data-id="{{ $music->id }}">    
                                   </div>
                        </td>
                        <td>                                                       
                                 
                                            <button type="submit" class="btn btn-outline-success btn-sm" data-id="{{ $music->id }}">Sauvegarder</button>
                                            <span> <a  class="btn btn-outline-danger btn-sm" href="{{route('delete_date',['id'=>$music->id])}}" type="button">Supprimer</a></span>
                             
                        </td>
            </form>   
        </tr>

        </tbody>
    </table>

@endforeach  


    
