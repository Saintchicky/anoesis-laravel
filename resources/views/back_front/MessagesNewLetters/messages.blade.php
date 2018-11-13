@extends('back_front.admin')

@section('content')
@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif

{{-- @if($errors->any())<span class="msg_js_customer">{{$errors->first()}}</span>@endif --}}
<div class="title_page"><h1>BDD NewsLetters et Messages</h1></div>

<h1>NewsLetters</h1>

<div class="container">
    
    <table id="data_table" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead class="thead-dark">
            <tr>
                {{-- <th>#</th> --}}
                <th>Mail</th>
                <th>Crée le</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($bdd_NL as $new_l)
                {{-- <th scope="row">{{$new_l->id}}</th> --}}
                <td>{{$new_l->email_NL}}</td>
                <td>{{ \Carbon\Carbon::parse($new_l->created_at)->format('d/m/Y')}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

<br>

<h2>Messages du formulaire</h2>

<div class="container">
    
    <table id="data_table" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead class="thead-dark">
            <tr>
                {{-- <th>#</th> --}}
                <th>Nom || Prénom</th>
                <th>Email</th>
                <th>Message</th>
                <th>Crée le</th>
              
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($bdd_m as $message)
                {{-- <th scope="row">{{$customer->id}}</th> --}}
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->message}}</td>
  
                <td>{{ \Carbon\Carbon::parse($message->created_at)->format('d/m/Y')}}</td>

            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>


@endsection
