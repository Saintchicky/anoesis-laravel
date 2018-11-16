@extends('back_front.admin')
@section('content')



<div class="title_page" id="Up"><h1>DATES</h1></div>

<section class="block">
       
        <div class="container">
                <div class="row">
                        <div class="col-md-12">


                                <div>
                                    <div class="container">
                                                    <h3 class="display-8">1. Créer les dates</h3>
                                     
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Jour | | Année</th> 
                                                <th scope="col">Ville</th>
                                                <th scope="col">Lieu</th>
                                                <th scope="col">Voir Event URL</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                      
                                            <tr>
                                                 <form action="{{route('date_create')}}"  class="form-inline" method="POST">
                                                        @csrf
                                                            <td>                                                       
                                                                       <div class="input-group">                                             
                                                                               <input class="form-control" type="date" id="date" name="date">    
                                                                       </div>
                                                            </td>
                                                              <td>                                                       
                                                                       <div class="input-group">                                             
                                                                               <input class="form-control" type="text" id="city" name="city">    
                                                                       </div>
                                                            </td>
                                                              <td>                                                       
                                                                       <div class="input-group">                                             
                                                                               <input class="form-control" type="text" id="place" name="place">    
                                                                       </div>
                                                            </td>
                                                            <td>                                                       
                                                                       <div class="input-group">                                             
                                                                               <input class="form-control" type="text" id="url" name="url">    
                                                                       </div>
                                                            </td>
                                                            <td>                                                       
                                                                       <div class="input-group">
                                                                                <button type="submit" class="btn btn-outline-success btn-sm">Créer</button>
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
        <h2 class="text-center">LES DATES <a href="{{route('date_modif')}}" id="ajaxDatetour" type="button" class="btn btn-outline-info">Modifier</a></h2>
        <br>
        
        @foreach($datesTour as $dates)
         <div class="tour-row">
            <span class="tour-item tour-date">{{ strtoupper(\Carbon\Carbon::parse($dates->date)->format('d M Y'))}}</span>            
            {{-- The strtoupper() function converts all the characters in a string to uppercase. --}}
            <span class="tour-item tour-city">{{$dates->city}}</span>
            <span class="tour-item tour-arena">{{$dates->place}}</span>
            <a class="btn btn-outline-light my-2 my-sm-0" href="http://{{$dates->url}}" type="button" target="_blank">Voir l'évent</a> 
          </div>
        @endforeach  
        </div>
        </section>


<br>
<br>

@endsection
