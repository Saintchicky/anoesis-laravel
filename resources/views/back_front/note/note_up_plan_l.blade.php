<div class="modal-header">
        <h5 class="modal-title">Texte Plan Gauche</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
        <div class="modal-body"> 


                <form id="frm" action="{{route('text_l',['id'=>$plan_note->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Titre</label>
                                    <div class="col-lg-9">
                                    <select name="id_title"  id="id_title_p" class="form-control">
                                    <option></option>
                                    @foreach($plan_title as $title_choice)
                                    <option @if(isset($plan_note->TitlePlanImage) && $plan_note->TitlePlanImage->id == $title_choice->id) selected @endif value="{{$title_choice->id}}">{{$title_choice->title_plan or old('title_plan')}}</option>
                                    @endforeach
                                    </select>
                                    </div>
                            </div>
                    <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Légende</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" id="figcaption_left" name="figcaption_l" value="{{$plan_note->figcaption_l or old('figcaption_l')}}">
                            </div>
                        </div>
        
                <div class="form-group row required">
                        
                    <label class="col-lg-3 col-form-label form-control-label">Description plan gauche</label>
                    <div class="col-lg-9">
                    <textarea  id="description_left" type="text" class="form-control summer" name="description_l" rows="3">{{$plan_note->description_l or old('description_l')}}</textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" id="modal_btn" class="btn btn-outline-success" data-dismiss="modal">Sauvegarder</button>
                </div>
            </form> 
</div>