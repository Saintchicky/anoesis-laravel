@extends('back_front.admin')
@section('content')


<p> ceci est l'accueil</p>

{{-- <div class="title_page"><h1>HOME</h1></div>
<br>
<div class="container-fluid d-flex justify-content-center">
  <div class="col-md-6">
  <div class="card">
          <div class="card-header">
            <h3 class="card-title">Vue d'ensemble du site</h3>
          </div>
              <div class="card-body d-flex flex-row justify-content-center flex-wrap">
                  <div class="col-md-6">
                    <div class="card bg-light dash-box">
                    <h2 class="text-center">{{$customers}} <span class="fas fa-users" aria-hidden="true"></span></h2>
                   
                      <h4 class="text-center">Client(s)</h4>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card bg-light dash-box">
                    <h2 class="text-center">{{number_format($average_budget,2,',',' ')}} <span class="fas fa-coins" aria-hidden="true"></span></h2>
                      <h4 class="text-center">Moyenne Budget</h4>
                    </div>
                  </div>
                 
              </div>
  </div>
      
                <!--Latest User-->
      
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Dernier(s) Inscrit(s)</h3>
                    </div>
                    <div class="card-body text-center">
      
                      <table class="table table-hover table-responsive">
                        <tr>
                          <th scope="col">Nom</th>
                          <th scope="col">Nature Projet</th>
                          <th scope="col">Ville</th>
                          <th scope="col">Crée le</th>
                          <th>Action</th>
                        </tr>
      
                        <tr>
                          @foreach($customers_last as $customer)
                          
                          <td>{{$customer->nom}}</td>
                          <td>{{$customer->projet}}</td>
                          <td>{{$customer->ville}}</td>
                          <td>{{ \Carbon\Carbon::parse($customer->created_at)->format('d/m/Y')}}</td>
                          <td><a class="btn btn-outline-info btn-sm" href="{{route ('bdd.show', $customer->id) }}" role="button">Voir Client</a></td>
                        </tr>
                        @endforeach
                      </table>
      
                    </div>
              </div>
  </div>
</div> --}}
@endsection
