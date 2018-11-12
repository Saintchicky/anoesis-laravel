<div class="modal-header">
        <h5 class="modal-title">Texte Pour Slide</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
</div>
        <div class="modal-body"> 
          
            <form id="frm" action="{{route('update_post',['id'=>$posts->id])}}" method="GET">
            
                
        
                <div class="form-group row required">
                    <textarea  id="focus" type="text" class="form-control" name="posts_users" rows="3">{{$posts->posts_users or old('posts_users')}}</textarea>
                </div> 
                <div class="modal-footer">
                    <button type="submit" id="modal_btn" class="btn btn-success" data-dismiss="modal">Sauvegarder</button>
                </div>
            </form>
      




