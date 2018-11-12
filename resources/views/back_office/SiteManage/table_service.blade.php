

<table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Titre Service</th>
                                   
                                                <th scope="col">Type de service</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                        @foreach ( $services_title as $service )
                                            <tr>
                                            <td>
                                            <form id="frm" action="{{route('titleUpStore',['id'=>$service->id])}}"  class="form-inline" method="POST">
    @csrf
    
       <div class="input-group">

       <input class="form-control" type="text" id="titre_services" name="titre_services" value="{{$service->titre_services or old ('titre_services')}}">
       
          
       </div>
       <div class="input-group">
        <button id="sendToDB" type="submit" class="btn btn-outline-success btn-sm">Sauvegarder</button>
       </div>
</form>
                                            </td>
                                            <td><a id="ajaxServices" type="button" class="btn btn-outline-info btn-sm" href="{{ route('update_title_service',['id'=>$service->id]) }}">Modifier titre</a></td>
                                                <td>
                                                    <form action="{{route('type_of_s')}}"  class="form-inline" method="POST">
                                                        @csrf
                                                        
                                                           <div class="input-group">
                                               
                                                                   <input class="form-control" type="text" id="service" name="service">
                                                           
                                                               <input type="hidden" id="id_title_s" name="id_title_s" value="{{$service->id}}">
                                                           </div>
                                                           <div class="input-group">
                                                            <span> </span>   <button type="submit" class="btn btn-outline-success btn-sm">Créer</button>
                                                           </div>
                                                       </form>    
                                                      
                                                </td>
                                            </tr>
                                        @endforeach
                                            </tbody>
</table>


