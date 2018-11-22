@extends('back_front.admin')

@section('content')



<div class="title_page"><h1>BDD NewsLetters et Messages</h1></div>





<section class="block">


<h1>NewsLetters</h1>
<br>

  @if(session()->get('success_NL'))
    <div class="alert alert-success">
      {{ session()->get('success_NL') }}  
    </div><br/>
  @endif

<div class="container">
    
    <table id="data_table_NL" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Crée le</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($bdd_NL as $new_l)
                <th scope="row">{{$new_l->id}}</th>
                <td>{{$new_l->email}}</td>
                <td>{{ \Carbon\Carbon::parse($new_l->created_at)->format('d/m/Y')}}</td>
                <td><a class="btn btn-outline-light btn-sm"
                data-toggle="confirmation"
                data-title="Souhaitez-vous supprimer ?"
                data-btn-ok-label="Oui"
                data-btn-ok-class="btn-danger"
                data-btn-cancel-label="Non"
                data-btn-ok-class="btn-primary"
                data-placement="right"
                href="{{route ('delete_NL', $new_l->id) }}">Supprimer</a></td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

<br>

<h2>Messages du formulaire</h2>
<br>
  @if(session()->get('success_m'))
    <div class="alert alert-success">
      {{ session()->get('success_m') }}  
    </div><br/>
  @endif
<div class="container">
    
    <table id="data_table_m" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nom || Prénom</th>
                <th>Email</th>
                <th>Message</th>
                <th>Crée le</th>
                <th>Action</th>
              
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($bdd_m as $message)
                <th scope="row">{{$message->id}}</th>
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->message}}</td>
                <td>{{ \Carbon\Carbon::parse($message->created_at)->format('d/m/Y')}}</td>
                <td><a class="btn btn-outline-light btn-sm"
                data-toggle="confirmation"
                data-title="Souhaitez-vous supprimer ?"
                data-btn-ok-label="Oui"
                data-btn-ok-class="btn-danger"
                data-btn-cancel-label="Non"
                data-btn-ok-class="btn-primary"
                data-placement="right"
                href="{{route ('delete_m', $message->id) }}">Supprimer</a></td>

            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

</section>

@endsection
