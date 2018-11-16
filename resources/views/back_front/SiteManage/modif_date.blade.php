
  <h2 class="text-center">LES DATES <a href="{{route('dates')}}" type="button" class="btn btn-outline-info">Retour</a></h2>
  <br>


@foreach($datesTour as $dates)

<table class="table">
        <thead>
        <tr>
            <th scope="col">Jour | | Année</th> 
            <th scope="col">Ville</th>
            <th scope="col">Lieu</th>
            <th scope="col">Voir Event URL</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <tr>
             <form id="frm" action="{{route('date_create_up_store',['id'=>$dates->id])}}"  class="form-inline" method="POST">
                 
                        <td>                                                       
                                   <div class="input-group">                                             
                                           <input class="form-control" type="date" id="date_d" name="date" value="{{ old('date', $dates->date)}}" data-id="{{ $dates->id }}">    
                                   </div>
                        </td>
                          <td>                                                       
                                   <div class="input-group">                                             
                                           <input class="form-control" type="text" id="city_d" name="city" value="{{ old('city', $dates->city)}}" data-id="{{ $dates->id }}">    
                                   </div>
                        </td>
                          <td>                                                       
                                   <div class="input-group">                                             
                                           <input class="form-control" type="text" id="place_d" name="place" value="{{ old('place', $dates->place)}}" data-id="{{ $dates->id }}">    
                                   </div>
                        </td>
                        <td>                                                       
                                   <div class="input-group">                                             
                                           <input class="form-control" type="text" id="url_d" name="url" value="{{ old('url', $dates->url)}}" data-id="{{ $dates->id }}">    
                                   </div>
                        </td>
                        <td>                                                       
                                
                                            <button type="submit" class="btn btn-outline-success btn-sm"  data-id="{{ $dates->id }}" class="ajaxVote">Sauvegarder</button>
                                
                                            <span> <a  class="btn btn-outline-danger btn-sm" href="{{route('delete_date',['id'=>$dates->id])}}" type="button">Supprimer</a></span>
                             
                        </td>
            </form>   
        </tr>

        </tbody>
    </table>

@endforeach  


    
