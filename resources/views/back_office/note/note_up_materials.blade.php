<div class="modal-header">
        <h5 class="modal-title">Texte Matériaux</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
        <div class="modal-body"> 
          
            <form id="frm" action="{{route('update_post_thumb',['id'=>$thumb_note_m->id])}}" method="GET">
                @csrf
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Page</label>
                    <div class="col-lg-9">
                    <select name="id_page"  id="id_page_form" class="form-control">
                    <option></option>
                    @foreach($pages as $page)
                    <option @if(isset($thumb_note_m->Pages) && $thumb_note_m->Pages->id == $page->id) selected @endif value="{{$page->id}}">{{$page->titre_page or old('titre_page')}}</option>
                    @endforeach
                    </select>
                    </div>
            </div>

            
                    <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Titre</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" id="thumb_title" name="thumb_title" value="{{$thumb_note_m->thumb_title or old('thumb_title')}}">
                            </div>
                        </div>
        
                <div class="form-group row required">
                        
                    <label class="col-lg-3 col-form-label form-control-label">Description</label>
                    <div class="col-lg-9">
                    <textarea  id="thumb_description" type="text" class="form-control" name="thumb_description" rows="3">{{$thumb_note_m->thumb_description or old('thumb__description')}}</textarea>
                    </div>
                </div> 

                <div class="modal-footer">
                    <button type="submit" id="modal_btn" class="btn btn-outline-success" data-dismiss="modal">Sauvegarder</button>
                </div>
            </form>
</div>