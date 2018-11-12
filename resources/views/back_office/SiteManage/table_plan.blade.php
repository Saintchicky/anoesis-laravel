<div class="row">

  
      
    <div class="col-sm-5 form-group">
        <div class="input-group">

            <input class="form-control" id="search"
                   value="{{ request()->session()->get('search') }}"
                   onkeydown="if (event.keyCode == 13) ajaxLoadTable('{{url('/all_g/gallery')}}?search='+this.value)"
                   placeholder="Recherche Titre" name="search"
                   type="text" id="search"/>
            <div class="input-group-btn">
                <button type="submit" class="btn btn-warning"
                        onclick="ajaxLoadTable('{{url('/all_g/gallery')}}?search='+$('#search').val())">
                    <span class="fas fa-search"></span>
                </button>
            </div>
        </div>
    </div>
</div>

<table id='data_table' class="table table-bordered table-hover table-responsive-sm">
                
    <thead class='thead-dark'>
    <tr>
         
        <th scope="col">  
            <a class="test" href="javascript:ajaxLoadTable('{{url('/all_p/plan')}}?search={{request('search')}}&id_page={{request('id_page')}}&field=id_page&sort={{request('sort','asc')=='asc'?'desc':'asc'}}')">
            Page
            </a>
        </th>
        <th scope="col">
                <a class="test" href="javascript:ajaxLoadTable('{{url('/all_p/plan')}}?search={{request('search')}}&title_plan={{request('title_plan')}}&field=title_plan&sort={{request('sort','asc')=='asc'?'desc':'asc'}}')">
                    Titre Plan
                </a>
        </th>
        <th scope="col">Action</th>
    
        


    </tr>
    </thead>
    @foreach ( $plan_edit as $plan )
    <tbody>

<tr data-toggle="collapse" data-target="#see_plan{{$plan->id}}"> 

        <td>@if($plan->Pages){{$plan->Pages->titre_page}}@endif</td>
  <td>@if($plan->TitlePlanImage){{$plan->TitlePlanImage->title_plan}}@endif</td> 
    <td><button class="btn btn-outline-primary btn-sm" type="button"  aria-expanded="false" aria-controls="collapseExample">
            Voir
        </button></td>

</tr>


<tr>
<td class="collapse multi-collapse" id="see_plan{{$plan->id}}" colspan="3">
    <div class="row">
    
            
    
        <div class="col-md-12">
                
            @if($plan->TitlePlanImage)<h3 id="{{$plan->TitlePlanImage->title_plan}}">{{$plan->TitlePlanImage->title_plan}}</h3>@endif
                
        
                <span><button  data-target="#modalForm" data-toggle="modal" data-href="{{ route('update_title_create',['id'=>$plan->TitlePlanImage->id]) }}" class="btn btn-sm btn-outline-primary">Editer Titre</button></span>
                <span><a  href="{{ route('delete_plan',['id'=>$plan->id]) }}" class="btn btn-sm btn-outline-danger" role="button">Supprimer les plans et textes</a></span>
        
                
        </div>
    
        <br>
        <div class="col-12 mb-3">
            @if (!empty($plan->c_plan))                            
            <img src="{{asset('storage/plan_center/'.$plan->c_plan)}}" class="img-fluid rounded float-right mr-3 about-img" style="width:50%;"alt="">
            <p class="text-justify">{!! html_entity_decode($plan->description_c) !!}</p>
            <div class="dropdown">
                    <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                      Edition Plan Centre
                    </button>
                    <div class="dropdown-menu">
                      <h5 class="dropdown-header">Editer Texte Centre</h5>
                      <a  href="#modalForm" data-toggle="modal" data-href="{{ route('update_plan_c',['id'=>$plan->id]) }}" class="btn btn-primary btn-sm text-center d-flex justify-content-center">Editer Texte Centre</a> 
                      <h5 class="dropdown-header">Changer le plan</h5>

                      <form action="{{route('pict_c',['id'=>$plan->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-inline">
                    
                                   
                                            <input name="c_plan" type="file" id="c_plan"/>
                                    
                                  
                            </div>
            
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-success" data-dismiss="modal">Sauvegarder</button>
                            </div>
                      </form>
                    </div>
            </div>
            @else
            <p></p>
            @endif 
</div>
                       
                                
<div class="col-md-6">
    <figure class="figure">
            @if (!empty($plan->left_plan)) <img src="{{asset('storage/plan_left/'.$plan->left_plan)}}" class="figure-img img-fluid rounded" alt="">
            <div class="dropdown">
                    <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                      Edition Plan Gauche
                    </button>
                    <div class="dropdown-menu">
                      <h5 class="dropdown-header">Editer Texte Gauche</h5>
                      <a  href="#modalForm" data-toggle="modal" data-href="{{ route('update_plan_l',['id'=>$plan->id]) }}" class="btn btn-primary btn-sm text-center d-flex justify-content-center">Editer Texte Gauche</a> 
                      <h5 class="dropdown-header">Changer le plan</h5>

                      <form action="{{route('pict_l',['id'=>$plan->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-inline">
                                  
                                            <input name="left_plan" type="file" id="left_plan"/>
                                    
                                  
                            </div>
            
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-success" data-dismiss="modal">Sauvegarder</button>
                            </div>
                      </form>
                    </div>
            </div>
       
       
        @else
        <p></p>
        @endif   
            <figcaption class="figure-caption">{{$plan->figcaption_l}}</figcaption>
            <p class="text-justify">{!! html_entity_decode($plan->description_l) !!}</p>
    </figure>

</div>
<div class="col-md-6">
    <figure class="figure">
            @if (!empty($plan->right_plan))  <img src="{{asset('storage/plan_right/'.$plan->right_plan)}}" class="figure-img img-fluid rounded" alt="">
            <div class="dropdown">
                    <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                      Edition Plan Droit
                    </button>
                    <div class="dropdown-menu">
                      <h5 class="dropdown-header">Editer Texte Droit</h5>
                      <a  href="#modalForm" data-toggle="modal" data-href="{{ route('update_note_plan_r',['id'=>$plan->id]) }}" class="btn btn-primary btn-sm text-center d-flex justify-content-center">Editer Texte Droit</a> 
                      <h5 class="dropdown-header">Changer le plan</h5>

                      <form action="{{route('pict_r',['id'=>$plan->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-inline">
                    
                                   
                                            <input name="right_plan" type="file" id="right_plan"/>
                                    
                                  
                            </div>
            
                            <div class="modal-footer">
                                <button type="submit"  class="btn btn-outline-success" data-dismiss="modal">Sauvegarder</button>
                            </div>
                      </form>
                    </div>
            </div>
            @else
            <p></p>
            @endif 
                <figcaption class="figure-caption">{{$plan->figcaption_r}}</figcaption>
                <p class="text-justify">{!! html_entity_decode($plan->description_r) !!}</p>
              </figure>
</div>
        <div class="col-md-12">
            <a href="#Up" class="btn btn-dark btn-sm float-right" role="button">En haut</a>
        </div>
        
    </div>

</td>
</tr>

</tbody>       
@endforeach
</table>



{{ $plan_edit->links() }}
