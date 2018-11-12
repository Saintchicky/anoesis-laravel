<div class="container">
    <h3>A propos</h3>
    <br>
    <div class="row">   
        <div class="col-md-7 p_justify">
            <form id="frm" action="{{route('profile_a_up_store',['id'=>$profile->id])}}" method="POST">
                @csrf 
                <div class="form-group">
                    <textarea  id="summernote" type="text" class="form-control" name="description_p" rows="10">{{$profile->description_p or old('description_p')}}</textarea>
                </div> 
                <button type="submit" id="sendToDB" class="btn btn-outline-success">Sauvegarder</button>
            </form>
        </div>
        <div class="col-md-5">
            <div class="card profile-card">
                <figure>
                    <img class="img-fluid img-profile" src="{{asset('storage/profile/'.$profile->pict_profile)}}" alt="">
                </figure>
            </div>
        </div>
    </div>
</div>

