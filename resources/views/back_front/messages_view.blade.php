@extends('admin')

@section('content')
<div class="mail title_page"><h1>Messagerie</h1></div>

@if(count($mails) > 0)
    <div class="table-responsive messagesTable container">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Ville</th>
                    <th>Message</th>
                    <th>Budget</th>
                    <th>Priorité</th>
                    <th>Envoyé à:</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="body-table">
                <tr>
                @foreach ($mails as $mail)
                    <td>{{$mail->prenom}}</td>
                    <td>{{$mail->nom}}</td>
                    <td>{{$mail->email}}</td>
                    <td>{{$mail->tel}}</td>
                    <td>{{$mail->ville}}</td>
                    <td>{{substr($mail->message, 0, 50)}}{{strlen($mail->message) > 50 ? "..." : "" }}</td>
                    <td>{{$mail->budget}}</td>
                    <td>{{$mail->priority}}</td>
                    <td>{{date( 'D d M Y H:i', strtotime($mail->created_at))}}</td>
                    <td>{!!Form::open([
                    'action' => [
                        'FormContactsController@destroy',
                        $mail->id
                    ],
                        'method'=>'POST',
                        'class'=>'float-right'
                    ])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Supprimer',
                    [
                        'class'=>'btn btn-outline-danger btn-sm',
                        'aria-pressed'=>'true', 
                        'data-toggle'=>'tooltip', 
                        'title'=>'Supprimer ce message'
                    ])}}
                    {!!Form::close()!!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="links">
            {{$mails->links()}}
        </div>
    </div>
@else 
    <p>Vous n'avez pas de message.</p>
@endif





@endsection