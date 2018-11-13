@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="section">
    {!! Form::open([
        'action' => [
            'CustomersViewController@update',
            $customers->id
        ], 
        'method' => 'POST',
        'id'=>'form',
        'enctype' =>'multipart/form-data'
    ])!!}
    {{-- <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Société</label>
        <div class="col-lg-9">
            <input class="form-control" type="text" id="company" name="company" value="">
        </div>
    </div> --}}
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Nom</label>
        <div class="col-lg-9">
        <input class="form-control" type="text" id="last_name" name="nom" value="{{$customers->nom}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Prénom</label>
        <div class="col-lg-9">
            <input class="form-control" type="text" id="first_name" name="prenom" value="{{$customers->prenom}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Email</label>
        <div class="col-lg-9">
            <input class="form-control" type="email"  id="email" name="email" value="{{$customers->email}}">
        </div>
    </div>
    <hr>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Projet</label>
        <div class="col-lg-9">
            <input class="form-control" type="text" id="project" name="projet" value="{{$customers->projet}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Budget</label>
        <div class="col-lg-9">
            <input class="form-control" type="text" id="budget" name="budget" value="{{$customers->budget}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Priorité</label>
        <div class="col-lg-9">
            <input class="form-control" type="text" id="priority" name="priority" value="{{$customers->priority}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Téléphone</label>
        <div class="col-lg-9">
            <input class="form-control" type="text" id="phone" name="tel" value="{{$customers->tel}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Ville</label>
        <div class="col-lg-9">
            <input class="form-control" type="text" id="phone" name="ville" value="{{$customers->ville}}">
        </div>
    </div>
    {{-- <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">RDV</label>
        <div class="col-lg-9">
            <input class="form-control" type="date" id="meeting" name="meeting" value="">
        </div>
    </div> --}}
    {{-- <div class="form-group row">
        <label for="statuts_id" class="col-lg-3 col-form-label form-control-label">Statut</label>
        <div class="col-lg-9">
                <select name="statuts_id"  id="statuts_id" class="form-control">
                <option></option>
                @foreach($statuts as $statut)
                <option @if(isset($customers->Statuts) && $customers->Statuts->id == $statut->id) selected @endif value="{{$statut->id}}">{{$statut->name}}</option>
                @endforeach
                </select>
        </div>
    </div> --}}
    <hr>

    <div style="display:flex; justify-content:space-between;">
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Modifier',['class' => 'btn btn-outline-success btn-sm','id'=>'modif'])}}
        {!! Form::close() !!}

        {!!Form::open(['action' => [
            'CustomersViewController@destroy',$customers->id
            ],
            'method'=>'POST',
        ])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Supprimer',['class'=>'btn btn-outline-danger btn-sm','aria-pressed'=>'true', 'data-toggle'=>'tooltip', 'title'=>'Supprimer ce contact'])}}
        {!! Form::close() !!}
    </div>
</div>