
                                    <br>
                                    <br>
                                    <table class="table table-hover table-responsive-lg">
                                            <thead class='thead-dark'>
                                <tr>
             
                               <th scope="col">Année
                                       <a type="button" class="btn btn-outline-info btn-sm" href="{{route('years')}}">Retour
                                            </a>
                                </th>
     
                                    <th scope="col">Galerie Photos | | Vidéos</th>
                                    <th scope="col">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                            @foreach ( $years as $year )
                                <tr> 
                
                                <td>
                                 <form id="frm" action="{{route('year_create_up_store',['id'=>$year->id])}}"  class="form-inline" method="POST">
                                @csrf
                        
                           <div class="input-group">
                    
                            <input class="form-control" type="text" id="year_album_p" name="year_album" value="{{ old('year_album', $year->year_album)}}"  data-id="{{ $year->id }}">
                              
                           </div>
                    
                            <span> <button id="sendToDB" type="submit" class="btn btn-outline-success btn-sm" data-id="{{ $year->id }}">Sauvegarder</button></span>         
     
                                </form>
                                </td>
                                <td><a href="{{route('gallery_edit',['id'=>$year->id])}}"  class="btn btn-outline-info btn-sm" role="button">Edition</a></td>
                                <td><a href="{{route('delete_year',['id'=>$year->id])}}"  class="btn btn-outline-danger btn-sm" role="button">Supprimer l'album</a></td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
