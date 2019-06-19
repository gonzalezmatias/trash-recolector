{include file="header.tpl"}
<div class="reportForm">
  <div class="container">
    <h2>Reclamo de basura</h2>
    <br>
    <form method="post" action="agregarDenuncia"  enctype="multipart/form-data">
         <div class="form-group">
           <div class="col-xs-offset-1">
             <label class="imgLabel"for="imagen">Inserte foto de su reclamo</label>
             <input class="btn btn-primary" type="file" id="imagenes" name="imagenes[]"  required/>
           </div>

            <br>
            <div class="container-fluid">
              <div id="map" class="map">
              </div>
          </div>
          <br>

      <button type="button" class="btn btn-danger" id="location"> Dar mi ubicación </button>
    </br>
    <br>
       <div class="position">
          <input hidden type="text" name="latitude" id="latitude" value="" required/>
          <input hidden type="text" name="longitude" id="longitude" value="" required/>
          <div id="message">
          </div>
        </div>
        <br>
      <div class="form-group">
        <label for="#">Detalles del reclamo (opcional)</label>
        <textarea class="description" name="details" rows="4" cols="50"></textarea>
      </div>

      </div>

      <button type="submit" class="btn btn-primary">Enviar Denuncia</button>
    </form>

</div>
{include file="reportsList.tpl"}
{include file="footer.tpl"}
