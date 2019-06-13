<div class="noticias">
  <div class="container-fluid">
    <div class="row">
      <form  class="col-xs-8 col-md-8 col-md-offset-2 col-xs-offset-2" method="post" action="{$index}/verificarLogin">
        <div class="form-group">

          <input type="input" class="form-control" id="userId" name="userId" aria-describedby="userId" placeholder="Nombre De Usuario">
        </div>
        <div class="form-group">
          
          <input type="password" class="form-control" id="passwordId" name="passwordId" placeholder="Contraseña">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
    </div>
  </div>
</body>
