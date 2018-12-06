@extends('back_front.admin')
@section('content')


<div class="title_page"><h1>Bienvenue dans le back-office !!!</h1></div>
<section class="block">
    <div class="title_page"><h2>Les dernières News Letters</h2></div>
    <br>
    
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">date</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($newsl as $last )
          <tr>
            <th scope="row">{{$last->id}}</th>
            <td>{{$last->email}}</td>
            <td>{{ strtoupper(\Carbon\Carbon::parse($last->created_at)->format('d M Y'))}}</td>  
          </tr> 
          @endforeach
        </tbody>
      </table>
    </div>
    
  
</section>

@endsection
