<div class="modal-header">
    <h5 class="modal-title">Vidéo à modifier</h5>
    <span> <a href="{{route('delete_video',['id'=>$videos->id])}}"  class="btn btn-outline-danger" 
            data-toggle="confirmation"
                data-title="Souhaitez-vous supprimer ?"
                data-btn-ok-label="Oui"
                data-btn-ok-class="btn-danger"
                data-btn-cancel-label="Non"
                data-btn-ok-class="btn-primary"
                data-placement="right"
            role="button">Supprimer la vidéo</a></span>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
    <div class="modal-body"> 
        <form id="frm" action="{{route('video_create_up_store',['id'=>$videos->id])}}" method="POST">
                @csrf
                <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Vidéo</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="url_youtube_p" name="url_youtube" value="{{old('url_youtube',$videos->url_youtube) }}">
                        </div>
                </div>
                <div class="form-check form-check-inline">
                        <div class="form-check-input">
                                <label>
                                <input type="checkbox" name="is_main_youtube" id="is_main_youtube"  @if(isset($videos) && $videos->is_main_youtube == 1) checked @endif>
                                Mettre en avant dans la page principale
                                </label>
                            </div>
                </div>
            <div class="modal-footer">
                <button type="submit" id="modal_btn" class="btn btn-outline-success" data-dismiss="modal">Sauvegarder</button>
            </div>
        </form> 
</div>