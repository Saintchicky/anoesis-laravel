<section>
<h1>CONTACT</h1>
<br>
<br>
    <div class="container">
        <div class="row block">
          <div class="col-md-12">
              @if(session()->get('success_m'))
                                        <div class="alert alert-success alert_nl">
                                                {{ session()->get('success_m') }}  
                                        </div><br/>
              @endif
            <form action="{{route('message')}}" method="POST">
              @csrf
              <div class="row">
                  <div class="col-sm-6 form-group">
                    <input class="form-control transparent-input {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" placeholder="Nom et Prénom*" type="text" required>
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <div class="col-sm-6 form-group">
                    <input class="form-control transparent-input {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" placeholder="E-mail*" type="email" required>
                    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <textarea class="form-control transparent-input {{ $errors->has('message') ? 'is-invalid' : '' }}" id="message" name="message" placeholder="Votre demande" rows="5" required maxlength="300"></textarea>
                      {!! $errors->first('message', '<div class="invalid-feedback message_form">:message</div>') !!}
                      <br>
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-md-12 text-center form-group">
                    <button class="btn btn-outline-light" type="submit">Envoyer</button>
                  </div>
              </div>	
            </form>
          </div>
        </div>
    </div>
</section>
