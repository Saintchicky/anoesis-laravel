@extends('back_front.admin')
@section('content')



<div class="title_page" id="Up"><h1>Vidéos</h1></div>

<section class="block">
       
        <div class="container">
                <div class="row">
                        <div class="col-md-12">


                                <div>
                                    <div class="container">
                                                    <h3 class="display-8">1. Intégrér les Vidéos</h3>
                                     
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">URL</th> 
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                      
                                            <tr>
                                                 <form action="{{route('video_create')}}"  class="form-inline" method="POST">
                                                        @csrf
                                                         
                                                            <td>                                                       
                                                                       <div class="input-group">                                             
                                                                               <input class="form-control" type="text" id="url_youtube" name="url_youtube">
                                                                               <input type="hidden" name="id_year"  id="id_year" value="{{$years->id}}">    
                                                                       </div>
                                                            </td>
                                                            <td>                                                       
                                                                       <div class="input-group">
                                                                                <button type="submit" class="btn btn-outline-success">Créer</button>
                                                                       </div>
                                                            </td>
                                                </form>   
                                            </tr>
              
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                        </div>
                </div>
        </div>
</section>    
        <br>
        <section class="block">

                        <div class="container">
                                        <div class="row no-gutters block">
                                               
                                                @foreach ($videos as $video )
                                                {{-- @if (!empty ($video->url_youtube)) --}}
                                             
                                                <div class="col-md-8">
                                                        @if($video->is_main_youtube == 1) 
                                                      <div class="col-md-4 btn-success">
                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                    <iframe class="embed-responsive-item" src="https://{{$video->url_youtube}}"></iframe>
                                                                   
                                                                </div>
                                                      </div>
                                                        <div class="col-md-4">
                                                        <a  data-target="#modalForm" data-toggle="modal" data-href="{{ route('video_modif',['id'=>$video->id]) }}" id="add" class="btn btn-outline-light" type="button">
                                                                Modifier
                                                            </a>
                                                        </div>
                                                        @else
                                                        <div class="col-md-4 btn-light">
                                                                        <div class="embed-responsive embed-responsive-16by9">
                                                                                <iframe class="embed-responsive-item" src="https://{{$video->url_youtube}}"></iframe>
                                                                               
                                                                            </div>
                                                                  </div>
                                                                    <div class="col-md-4">
                                                                    <a  data-target="#modalForm" data-toggle="modal" data-href="{{ route('video_modif',['id'=>$video->id]) }}" id="add" class="btn btn-outline-light" type="button">
                                                                            Modifier
                                                                        </a>
                                                                    </div>
                                                @endif

                                                                
                                                              
                                                </div>
                                         
                                        
                                                @endforeach 
                                                                                        
                                        </div>
                        </div>
                        <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" data-backdrop="static">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" id="modal_content"></div>
                                        </div>
                        </div>
        </section>


<br>
<br>

@endsection
