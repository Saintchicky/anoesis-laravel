<div class="modal-header">
        <h5 class="modal-title">Édition Photo  <span> <a href="{{route('delete_photo',['id'=>$thumb_note->id])}}"  class="btn btn-outline-danger btn-sm" 
            data-toggle="confirmation"
                data-title="Souhaitez-vous supprimer ?"
                data-btn-ok-label="Oui"
                data-btn-ok-class="btn-danger"
                data-btn-cancel-label="Non"
                data-btn-ok-class="btn-primary"
                data-placement="right"
            role="button">Supprimer la photo</a></span></h5>
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
        <div class="modal-body"> 
          
            <form id="frm" action="{{route('photo_create_up_store',['id'=>$thumb_note->id])}}" method="POST">
                @csrf 
                <div class="d-flex justify-content-center">
                    <img class="card-img-top w-75 border" src="{{asset('storage/photo/'.$thumb_note->photo_pict )}}" alt="Card image cap">
                </div>
                <br>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Titre</label>
                    <div class="col-lg-9">
                        <input class="form-control"  maxlength="191" type="text" id="title" name="title" value="{{old('title',$thumb_note->title)}}">
                        <label id="characterTitle">Lettre restantes</label>
                    </div>
                </div>
                <div class="form-group row required">
                        
                    <label class="col-lg-3 col-form-label form-control-label">Description de la Photo</label>
                    <div class="col-lg-9">
                    <textarea  id="description_pict" type="text" class="form-control" maxlength="255" name="description_pict" rows="3">{{old('description_pict',$thumb_note->description_pict)}}</textarea>
                    <label id="characterLeft">Lettre restantes</label>
                    </div>
                </div>
               
                <div class="form-check form-check-inline">
                     
                        <div class="form-check-input">
                                <label>
                                <input type="checkbox" name="is_main_photo" id="is_main_photo_p"  @if(isset($thumb_note) && $thumb_note->is_main_photo == 1) checked @endif>
                                Mettre en avant dans la page principale
                                </label>
                            </div>
                </div>
                {{-- <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Page</label>
                        <div class="col-lg-9">
                            <select name="id_page"  id="id_page_g"class="form-control">
                            <option></option>
                            @foreach($pages as $page)
                            <option @if(isset($thumb_note->Pages) && $thumb_note->Pages->id == $page->id) selected @endif value="{{$page->id}}">{{$page->titre_page or old('titre_page')}}</option>
                            @endforeach
                        </select>
                    </div>
                </div> --}}

                <div class="modal-footer">
                    <button type="submit" id="modal_btn" class="btn btn-outline-success" data-dismiss="modal">Sauvegarder</button>
                </div>
            </form>
</div>
