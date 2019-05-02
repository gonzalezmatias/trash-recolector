{include file="header.tpl"}
<div class="reportForm">
  <div class="container">
    <h2>Denuncia</h2>
    <form method="post" action="agregarDenuncia"  enctype="multipart/form-data">
         <div class="form-group">
            <label for="imagen">Foto del incidente</label></br>
            <input type="file" id="imagenes" name="imagenes[]">

      

      <button type="button" id="location"> Dar mi ubicación </button> </br>
       <div class="position">
          <input hidden type="text" name="latitude" id="latitude" value="">
          <input hidden type="text" name="longitude" id="longitude" value="">
          <div id="message">
          </div>
        </div>
        <div class="form-group">
        <label for="#">Detalles de la denuncia (opcional)</label>
      </div>
      <!-- <label hidden id="location"></label> -->
       <textarea class="description" name="details" rows="4" cols="50"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Enviar Denuncia</button>
    </form>
  </div>
</div>
{include file= "footer.tpl"}
