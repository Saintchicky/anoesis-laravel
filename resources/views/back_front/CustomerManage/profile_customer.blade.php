@extends('admin')
@section('content')
    <div class="container">
        <div class="row my-2">
                <div class="col-lg-5 order-lg-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Messages</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('edit_profile', $customers->id) }}" data-target="#edit"  data-toggle="tab" class="nav-link">Editer</a> 
                        </li>
                    </ul>
                    <div class="tab-content py-4">
                        <div class="tab-pane active" id="profile">
                            <h2 class="mb-3">Profil</h2> 
                            <hr class="hr_hundred">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Contact : {{$customers->prenom}} <strong>{{$customers->nom}}</strong></p>
                                    <p>Tel : {{trim(chunk_split($customers->tel,2,'-'),'-')}}</p> 
                                    <p>Courriel : <a href="mailto:{{$customers->email}}">{{$customers->email}}</a></p>
                                    <hr class="hr_hundred">
                                    <h4 class="mb-12">Projet: {{$customers->priority}}</h4>
                                    <hr>
                                    <p>Nature Projet : {{$customers->projet}}</p>
                                    <p>Budget : {{number_format($customers->budget,2,',',' ')}}</p>
                                    {{-- <div class="col-md-12">
                                    <h4 class="mb-12">Rendez-vous</h4>
                                    <p>RDV : 17/09/18</p>
                                    <hr class="hr_hundred"></div> --}}
                                </div>
                            </div>

                            <!--/row-->
                        </div>
                        <div class="tab-pane" id="messages">
                                <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            {{$customers->message}}
                                            <span class="float-right font-weight-bold">{{ strftime("%A %d %B %G à %H:%M", strtotime($customers->created_at))}}</span>
                                        </td>
                                    </tr>
                                </tbody> 
                            </table>
                        </div>
                        <div class="tab-pane" id="edit">
                            @include('back_front.CustomerManage.create_customer')
                        </div>        
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            @include('back_front.CustomerManage.note_user')
            <div class="pop_up"></div>
        </div>
    </div>
@endsection
