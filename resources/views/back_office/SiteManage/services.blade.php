@extends('admin')
@section('content')



<div class="title_page" id="Up"><h1>Services</h1></div>

       
        <div class="container">
                <div class="row">
                        <div class="col-md-12">


                                <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                                    <h3 class="display-8">1. Créer les services</h3>
                                                    <div id="content">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Titre Service <a id="ajaxTitle" type="button" class="btn btn-outline-info btn-sm" href="{{ route('update_title_service') }}">Modifier titre</a></th>
                                               
                                                <th scope="col">Type de service</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                        @foreach ( $services_title as $service )
                                            <tr>
                                            <td>{{$service->titre_services}}</td>
                                            
                                                <td>
                                                    <form action="{{route('type_of_s')}}"  class="form-inline" method="POST">
                                                        @csrf
                                                        
                                                           <div class="input-group">
                                               
                                                                   <input class="form-control" type="text" id="service" name="service">
                                                           
                                                               <input type="hidden" id="id_title_s" name="id_title_s" value="{{$service->id}}">
                                                           </div>
                                                           <div class="input-group">
                                                            <span> </span>   <button type="submit" class="btn btn-outline-success btn-sm">Créer</button>
                                                           </div>
                                                       </form>    
                                                      
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
        </div>
        

       
        <h4 class="text-center"><a href="{{ route('update_service') }}" id="ajaxService" type="button" class="btn btn-outline-info">Modifier</a> les services</h4>
        <br>
        <section>
        <div class="row d-flex justify-content-center flex-wrap">
            <div class="col-md-2"> 
                @foreach ( $services_details as $service )

                @if($service->TitleService->id === 1)
                <h5 class="underline">
            
            {{$service->TitleService->titre_services}}

            
                </h5>
                
        
                @endif
                @break
                @endforeach

                <br> 
                <ul class="arrow"> 
                @foreach ( $services_details as $service )
                @if($service->TitleService->id == 1)
                <li>{{$service->service}}</li>
                
                @endif
                @continue
                @endforeach
                </ul>
                </div>
                <span class="hr_v"></span>

                <div class="col-md-2"> 
                @foreach ( $services_details as $service )

                @if($service->TitleService->id === 2)
                <h5 class="underline">
            {{$service->TitleService->titre_services}} 

            
                </h5>
                
        
                
                @break
                @endif
                @endforeach

                <br> 
                <ul class="arrow"> 
                @foreach ( $services_details as $service )
                @if($service->TitleService->id == 2)
                <li>{{$service->service}}</li>
                
                @endif
                @continue
                @endforeach
                </ul>
                </div>
                <span class="hr_v"></span>

                <div class="col-md-2"> 
                @foreach ( $services_details as $service )

                @if($service->TitleService->id === 3)
                <h5 class="underline">
            {{$service->TitleService->titre_services}} 

            
                </h5>
                
                @break
                @endif
                @endforeach

                <br> 
                <ul class="arrow"> 
                @foreach ( $services_details as $service )
                @if($service->TitleService->id == 3)
                <li>{{$service->service}}</li>
                
                @endif
                @continue
                @endforeach
                </ul>
                </div>
                 <span class="hr_v"></span>
                
                <div class="col-md-2"> 
                @foreach ( $services_details as $service )

                @if($service->TitleService->id === 4)
                <h5 class="underline">
            {{$service->TitleService->titre_services}} 

            
                </h5>
                
                @break
                @endif
                @endforeach

                <br> 
                <ul class="arrow"> 
                @foreach ( $services_details as $service )
                @if($service->TitleService->id == 4)
                <li>{{$service->service}}</li>
                
                @endif
                @continue
                @endforeach
                </ul>
                </div>
        </div>
        </section>
   


    
<br>
<br>

@endsection
