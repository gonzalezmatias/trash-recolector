{include file="headerVisitor.tpl"}
<div class="noticias">
  <div class="container-fluid">
    <div class="row">
      <form method="post" action="{$index}/verificarRegistro">
        <div class="form-group">
          <label>Usuario</label>
          <input type="input" class="form-control" id="userId" name="userId" aria-describedby="userId" value="">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" id="passwordId" name="passwordId" value="">
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
        <div class="">
          {$mensaje}
        </div>
      </form>
    </div>
  </div>
</body>
{include file="footer.tpl"}
