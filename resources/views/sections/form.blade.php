<section>
<h1>CONTACT</h1>
<br>
<br>
    <div class="container">
        <div class="row">
                <div id="form-messages" class="alert success alert_nl" style="display:none;" role="alert"></div>
        </div>
            
        <div class="row block">
          <div class="col-md-12">
            <form  id="report" action="{{route('message')}}" method="POST">
              @csrf
              <div class="row">
                  <div class="col-sm-6 form-group">
                    <input class="form-control transparent-input" id="name" name="name" placeholder="Nom et Prénom*" type="text" required>
               
                    <div class="invalid-feedback"></div>
                   
                  </div>
                  <div class="col-sm-6 form-group">
                    <input class="form-control transparent-input" id="email" name="email" placeholder="E-mail*" type="email" required>
                 
                    <div class="invalid-feedback"></div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <textarea class="form-control transparent-input" id="message" name="message" placeholder="Votre demande" rows="5" required maxlength="300"></textarea>
                      <label id="characterLeft">Lettre restantes</label>
                      <div class="invalid-feedback"></div>
                      
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
