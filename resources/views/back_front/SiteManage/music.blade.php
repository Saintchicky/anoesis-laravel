@extends('back_front.admin')
@section('content')



<div class="title_page" id="Up"><h1>MUSIQUES</h1></div>

<section class="block">
       
        <div class="container">
                <div class="row">
                        <div class="col-md-12">


                                <div>
                                    <div class="container">
                                                    <h3 class="display-8">1. Intégrér les SoundClouds</h3>
                                     
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">URL</th> 
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                      
                                            <tr>
                                                 <form action="{{route('music_create')}}"  class="form-inline" method="POST">
                                                        @csrf
                                                         
                                                            <td>                                                       
                                                                       <div class="input-group">                                             
                                                                               <input class="form-control" type="text" id="url_sound" name="url_sound">    
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
        <div id="content">
        <h2 class="text-center">LES MUSIQUES <a href="{{route('music_modif')}}" id="ajaxMusic" type="button" class="btn btn-outline-info">Modifier</a></h2>
        <br>
        
        @foreach($musics as $music)
        
        {!! html_entity_decode($music->url_sound) !!}
        <br>

        @endforeach  
        </div>
        </section>


<br>
<br>

@endsection
