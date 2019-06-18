{include file="header.tpl"}
<br>
  <div class="container-fluid">
    <div class="row">
      <form class="col-xs-8 col-md-8 col-md-offset-2 col-xs-offset-2" method="post" action="{$index}/verificarRegistro">
        <div class="form-group">
          <input type="input" class="form-control" id="userId" name="userId" aria-describedby="userId" value="" placeholder="Nombre De Usuario" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="passwordId" name="passwordId" value="" placeholder="Contraseña" required>
        </div>
        <div class="form-group">
         <input type="password" class="form-control" placeholder="Confirmar Contraseña" id="confirm_password" required>
        </div>
        
        
        <br>
        <button type="submit" class="btn btn-primary">Registrarse</button>
        <div class="">
          {$mensaje}
        </div>
      </form>
    </div>
  </div>
</body>
{include file="footer.tpl"}
