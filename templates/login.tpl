<div class="noticias">
  <div class="container-fluid">
    <div class="row">
      <form method="post" action="{$index}/verificarLogin">
        <div class="form-group">
          <label>Usuario</label>
          <input type="input" class="form-control" id="userId" name="userId" aria-describedby="userId">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" id="passwordId" name="passwordId">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
    </div>
  </div>
</body>
