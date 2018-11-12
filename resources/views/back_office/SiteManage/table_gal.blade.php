<div class="row">
    <div class="col-sm-5 form-group">
        <div class="input-group">

            <input class="form-control" id="search"
                   value="{{ request()->session()->get('search') }}"
                   onkeydown="if (event.keyCode == 13) ajaxLoadTable('{{url('/admin/all_g/gallery')}}?search='+this.value)"
                   placeholder="Recherche Titre" name="search"
                   type="text" id="search"/>
            <div class="input-group-btn">
                <button type="submit" class="btn btn-warning"
                        onclick="ajaxLoadTable('{{url('/admin/all_g/gallery')}}?search='+$('#search').val())">
                    <span class="fas fa-search"></span>
                </button>
            </div>
        </div>
    </div>
</div>




<table id="table_gal" class="table table-hover table-bordered table-responsive-sm nowrap" cellspacing="0" width="100%">
                    
        <thead class='thead-dark'>
        <tr>
            
            <th scope="col">#</th>
   
            <th scope="col">
                <a class="test" href="javascript:ajaxLoadTable('{{url('/admin/all_g/gallery')}}?search={{request('search')}}&id_page={{request('id_page')}}&field=id_page&sort={{request('sort','asc')=='asc'?'desc':'asc'}}')">
                    Page
                </a>
                {{-- {{request()->session()->get('field')=='id_page'?(request()->session()->get('sort')=='desc'?'&#9652;':'&#9662;'):''}} --}}
  
            </th>
           <th scope="col">
                <a href="javascript:ajaxLoadTable('{{url('/admin/all_g/gallery')}}?search=&field=title&sort={{request('sort','asc')=='asc'?'desc':'asc'}}')">
                    Titre
                </a>
                {{-- {{request()->session()->get('field')=='title'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}} --}}
            </th> 
             <th scope="col">
              <a href="javascript:ajaxLoadTable('{{url('/admin/all_g/gallery')}}?search=&field=is_featured&sort={{request('sort','asc')=='asc'?'desc':'asc'}}')">
                    Carousel
                </a>

            </th>
             <th scope="col">
              <a href="javascript:ajaxLoadTable('{{url('/admin/all_g/gallery')}}?search=&field=is_main&sort={{request('sort','asc')=='asc'?'desc':'asc'}}')">
                    Page et Catégorie
                </a>
             </th>
            <th scope="col">Action</th>

        
            


        </tr>
        </thead>
       
        <tbody>

                @foreach( $gallery as $thumb )

<tr data-toggle="collapse" data-target="#see_gal{{$thumb->id}}"> 
        <th scope="row">{{$thumb->id}}</th>
        @if($thumb->Pages)<td>{{$thumb->Pages->titre_page}}</td>@endif
        <td>{{$thumb->title}}</td>
        <td><p class="see_gal">@if($thumb->is_featured == 1) Oui @else Non @endif</p></td>
        <td><p class="see_gal">@if($thumb->is_main == 1) Oui @else Non @endif</p></td>
        <td><a href="{{ route('delete_pict',['id'=>$thumb->id]) }}" class="btn btn-outline-danger btn-sm">Supprimer</a> 
            
            <button class="btn btn-outline-primary btn-sm" type="button"  aria-expanded="false" aria-controls="collapseExample">Voir</button>
     </td>

{{-- </tr> --}}

<tr>
{{-- remettre card pour voir en vignette --}}

    <td  class="card collapse multi-collapse" style="width: 18rem;" id="see_gal{{$thumb->id}}">

            <img class="card-img-top" src="{{ asset('images/'.$thumb->filename) }}" alt="Card image cap">
            <div class="card-body">
                    <h5 class="card-title">{{$thumb->title}}</h5>
                    <hr>
                    @if($thumb->Pages)<p>{{$thumb->Pages->titre_page}}</p>@endif
                     <hr>
                                    <hr>
                                    <p class="see_gal">Mis en avant Carousel : @if($thumb->is_featured == 1) Oui @else Non @endif</p>
                                    <hr>
                                    <hr>
                                    <p class="see_gal"> Mis en avant dans la page principale et catégorie : @if($thumb->is_main == 1) Oui @else Non @endif</p>
                                    <hr>
                                    <hr>
                    <p class="card-text">{{$thumb->description}}</p>
                    <hr>
                    <a href="{{ route('delete_pict',['id'=>$thumb->id]) }}" class="btn btn-outline-danger">Supprimer</a> 

                    <button  data-target="#modalForm" data-toggle="modal" data-href="{{ route('update_note_gallery',['id'=>$thumb->id]) }}" id="add" class="btn btn-outline-primary float-right">Slide</button>
                
            </div>

        
    </td>

</tr>


@endforeach 

</tbody>


</table>
{{ $gallery->links() }}
