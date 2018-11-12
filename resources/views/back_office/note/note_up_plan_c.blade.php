<div class="modal-header">
        <h5 class="modal-title">Texte Centre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
        <div class="modal-body"> 


                <form id="frm" action="{{route('text_c',['id'=>$plan_note->id])}}" method="GET">
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
                                <input class="form-control" type="text" id="figcaption_c" name="figcaption_c" value="{{$plan_note->figcaption_c or old('figcaption_c')}}">
                            </div>
                        </div>
        
                <div class="form-group row required">
                        
                    <label class="col-lg-3 col-form-label form-control-label">Description plan centre</label>
                    <div class="col-lg-9">
                    <textarea  id="description_c" type="text" class="form-control summer" name="description_c" rows="10">{{$plan_note->description_c or old('description_c')}}</textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" id="modal_btn" class="btn btn-outline-success" data-dismiss="modal">Sauvegarder</button>
                </div>
            </form> 
</div>