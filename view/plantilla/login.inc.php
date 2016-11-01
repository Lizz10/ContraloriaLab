<div class="center">
	    <div class="card bordered z-depth-2" style="margin:0% auto; max-width:400px;">
        <div class="card-header">
           <i class="material-icons medium white-text">perm_contact_calendar</i>

        </div>
        <div class="card-content">
          <form action="noseque.php" method="get">
            <div class="input-field col s12">
              <input id="username" type="text" class="validate" pattern="\S{3,}" required title="minimo 3 caracteres">
              <label for="username">Usuario</label>
            </div>
            <div class="input-field col s12">
              <input id="password" type="password" class="validate" pattern="\S{4,}" required title="minimo 4 caracteres">
              <label for="password">Password</label>
            </div>
              <input type="checkbox" class="filled-in" id="filled-in-box"/>
              <label for="filled-in-box">Recordar contraseña</label>
              <button type="submit" id="mulai_login" name="mulai_login" class="btn  right waves-effect waves-light white-text">Ingresar</button>
              
        
          </form>
        </div>

      </div>
    </div>
