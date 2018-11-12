@extends('admin')

@section('content')
@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif

{{-- @if($errors->any())<span class="msg_js_customer">{{$errors->first()}}</span>@endif --}}
<div class="title_page"><h1>BDD Client</h1></div>

<div class="container">
    
    <table id="data_table" class="table table-hover table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Projet</th>
                <th>Budget</th>
                <th>Priorité</th>
                {{-- <th>RDV</th> --}}
                <th>Crée le</th>
                <th>Mis-à-jour le</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($customers as $customer)
                <th scope="row">{{$customer->id}}</th>
                <td>{{$customer->prenom}}</td>
                <td>{{$customer->nom}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->projet}}</td>
                <td>{{number_format($customer->budget,2,',',' ')}}</td>
                <td>{{$customer->priority}}</td>
                {{-- <td>RDV</td> --}}
                <td>{{ \Carbon\Carbon::parse($customer->created_at)->format('d/m/Y')}}</td>
                <td>{{ \Carbon\Carbon::parse($customer->updated_at)->format('d/m/Y')}}</td>
                <td><a class="btn btn-primary btn-sm" href="{{route ('bdd.show', $customer->id) }}" role="button">Voir Client</a></td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>


@endsection