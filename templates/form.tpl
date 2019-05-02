{include file="header.tpl"}
<div class="reportForm">
  <div class="container">
    <h2>Denuncia</h2>
    <form method="post" action="submit">
         <div class="form-group">
            <label for="imagen">Foto del incidente</label>
            <input type="file" id="imagenes" name="imagenes[]" multiple>
        </div>
      <div class="form-group">
        <label for="#">Detalles de la denuncia (opcional)</label>
      </div>
      <!-- <label hidden id="location"></label> -->
      <button type="button" id="location"> Dar mi ubicación </button> 
      <div class="container descr">
       <textarea class="description" name="details" rows="4" cols="50"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar Denuncia</button>
    </form>
  </div>
</div>
{include file= "footer.tpl"}
