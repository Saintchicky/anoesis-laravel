<div class="modal-header">
    <h5 class="modal-title">Titre à modifier</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
    <div class="modal-body"> 
        <form id="frm" action="{{route('final_modif_title',['id'=>$plan_title_create->id])}}" method="GET">
        
                <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Titre Plan</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="title_p" name="title_plan" value="{{$plan_title_create->title_plan or old('title_plan') }}">
                        </div>
                    </div>

            <div class="modal-footer">
                <button type="submit" id="modal_btn" class="btn btn-outline-success" data-dismiss="modal">Sauvegarder</button>
            </div>
        </form> 
</div>