@extends('admin')
@section('content')



<div class="title_page" id="Up"><h1>PLAN</h1></div>
<div class="container">
       
        <div class="container">
                <div class="row">
                        <div class="col-md-5">
                                        <div class="jumbotron jumbotron-fluid">
                                                        <div class="container">
                                                            
                                                            <h3 class="display-8">1. Créer en premier le titre du plan</h3>
                                                            <br>
                                                            <form action="{{route('title_create')}}" method="POST">
                                                             @csrf
                                                                <input type="hidden" name="id_page"  id="id_page" value="{{$pages->id}}">
                                                                <div class="form-group row">
                                                                    <label class="col-lg-3 col-form-label form-control-label">Titre Plan</label>
                                                                    <div class="col-lg-9">
                                                                        <input class="form-control" type="text" id="title_plan" name="title_plan">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-outline-success" data-dismiss="modal">Créer</button>
                                                                </div>
                                                            </form>
                                                          
        
                                                        </div>
                                        </div>       
                        </div>
                        <div class="col-md-7">
                                <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                                    <h3 class="display-8">2. Créer en deuxième les plans</h3>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Plan titre</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                        @foreach ( $main_title as $plan )
                                            <tr>
                                                    <td><a href="#{{$plan->title_plan}}" class="btn btn-outline-info btn-sm" role="button">{{$plan->title_plan}}</a></td>
                                                <td>
                                                        <div class="dropdown">
                                                                <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                                  Type de plan et Supprimer Titre
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                  <h5 class="dropdown-header">Un plan coté droit et le texte autour</h5>
                                                                  <a class="dropdown-item" href="{{ route('update_title_c',['id'=>$plan->id]) }}">Éditer un Plan</a>
                                                                  <h5 class="dropdown-header">Deux plans (Gauche et Droite)</h5>
                                                                  <a class="dropdown-item" href="{{ route('update_title_l_r',['id'=>$plan->id]) }}">Editer plan Gauche et Droite</a>
                                                                  <a class="btn btn-danger btn-sm text-center d-flex justify-content-center" href="{{ route('delete_title',['id'=>$plan->id]) }}">Supprimer Titre</a>
                                                                </div>
                                                        </div>
                                                      
                                                </td>
                                            </tr>
                                        @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                </div>
        </div>
        

       

        @foreach ( $plan_edit as $plan )
        <div class="row border_plan">
           
                
           
            <div class="col-md-12">
                    
                @if($plan->TitlePlanImage)<h3 id="{{$plan->TitlePlanImage->title_plan}}">{{$plan->TitlePlanImage->title_plan}}</h3>@endif
                    
               
                    <span><button  data-target="#modalForm" data-toggle="modal" data-href="{{ route('update_title_create',['id'=>$plan->TitlePlanImage->id]) }}" class="btn btn-sm btn-outline-primary">Editer Titre</button></span>
                    @if (!empty($plan->left_plan && $plan->right_plan))<span><a  href="{{ route('delete_plan',['id'=>$plan->id]) }}" class="btn btn-sm btn-outline-danger" role="button">Supprimer les plans et textes</a></span>
                    @else
                    <p></p>
                    @endif  
                    <span> @if (!empty($plan->c_plan))<a  href="{{ route('delete_plan_c',['id'=>$plan->id]) }}" class="btn btn-sm btn-outline-danger" role="button">Supprimer les plans et textes</a></span>
                    @else
                    <p></p>
                    @endif  
               
                    
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
        
         <br>
         @endforeach
</div> 

<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="modal_content"></div>
    </div>
</div>

    

@endsection
