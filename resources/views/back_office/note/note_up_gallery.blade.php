<div class="modal-header">
        <h5 class="modal-title">Texte pour slide</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
        <div class="modal-body"> 
          
            <form id="frm" action="{{route('update_post_gallery',['id'=>$thumb_note->id])}}" method="GET">
            
                    <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Titre</label>
                            <div class="col-lg-9">
                                <input class="form-control"  maxlength="191" type="text" id="title" name="title" value="{{$thumb_note->title or old('title')}}">
                                <label id="characterTitle">Lettre restantes</label>
                            </div>
                        </div>
        
                <div class="form-group row required">
                        
                    <label class="col-lg-3 col-form-label form-control-label">Description pour Carousel</label>
                    <div class="col-lg-9">
                    <textarea  id="focus" type="text" class="form-control" maxlength="255" name="description" rows="3">{{$thumb_note->description or old('description')}}</textarea>
                    <label id="characterLeft">Lettre restantes</label>
                    </div>
                </div>
                   <div class="form-group row required">
                        
                    <label class="col-lg-3 col-form-label form-control-label">Description pour Page</label>
                    <div class="col-lg-9">
                    <textarea  id="focus_p" class="summernote_galery" type="text" class="form-control" name="description_page" rows="5">{{$thumb_note->description_page or old('description_page')}}</textarea>
                    {{-- <textarea  id="focus_p" type="text" class="form-control" name="description_page" rows="5">{{$thumb_note->description_page or old('description_page')}}</textarea> --}}
                   
                    </div>
                </div> 
                <div class="form-check form-check-inline">
                     
                        <div class="form-check-input">
                                <label>
                                <input type="checkbox" name="is_featured" id="is_featured"  @if(isset($thumb_note) && $thumb_note->is_featured == 1) checked @endif>
                                Mettre en avant dans le carousel
                                </label>
                            </div>
                </div>
                <div class="form-check form-check-inline">
                     
                        <div class="form-check-input">
                                <label>
                                <input type="checkbox" name="is_main" id="is_main"  @if(isset($thumb_note) && $thumb_note->is_main == 1) checked @endif>
                                Mettre en avant dans la page principale et catégorie
                                </label>
                            </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Page</label>
                        <div class="col-lg-9">
                            <select name="id_page"  id="id_page_g"class="form-control">
                            <option></option>
                            @foreach($pages as $page)
                            <option @if(isset($thumb_note->Pages) && $thumb_note->Pages->id == $page->id) selected @endif value="{{$page->id}}">{{$page->titre_page or old('titre_page')}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" id="modal_btn" class="btn btn-outline-success" data-dismiss="modal">Sauvegarder</button>
                </div>
            </form>
</div>
