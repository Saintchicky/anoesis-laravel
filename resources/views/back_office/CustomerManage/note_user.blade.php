
            <div class="col-lg-7 order-lg-2 text-center">

              

                <form action="{{route('posts_note',['id'=>$customers->id])}}" method="GET">
                  <div class="form-group">
                    <label for="posts_id">Note</label>
                    <textarea class="form-control" name="posts_users"rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Valider</button>
                </form>
  <div class="container">
    <div class="row">
   <ul class="main_note col-md-12">
    @foreach($customers->CustoNote as $post)
      <li class="main_note_li">
      <span class="float-right size_buttons"><span id="add"><a  href="#modalForm" data-toggle="modal" data-href="{{ route('update_note',['id'=>$post->id]) }}" id="add"><i class="fas fa-plus note_add"></i></a></span> <span><a  href="{{ route('delete_note',['id'=>$post->id]) }}" role="button"><i class="fas fa-times note_del"></i></a></span></span>
            <br>
            <span class="float-left">{{ \Carbon\Carbon::parse($post->updated_at)->format('d/m/Y')}}</span>
            <br>
            <br>
          <p class="p_note">{{$post->posts_users}}</p>
        
      </li>
      @endforeach
     
      
    
    </ul>
     
  </div>
  </div>
  </div>
  
              <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" data-backdrop="static">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content" id="modal_content"></div>
             
              </div>
  
         
  
  
  
  
  
  
  