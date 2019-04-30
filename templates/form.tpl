{include file="header.tpl"}
<div class="reportForm">
  <div class="container">
    <h2>Denuncia</h2>
    <form method="post" action="submit">
      <div class="form-group">
        <label>Foto del incidente</label>
        <div class="input-group">
          <span class="input-group-btn">
            <span class="btn btn-default btn-file">
              Explorar… <input type="file" id="imgInp">
            </span>
          </span>
          <input type="text" class="form-control" readonly>
        </div>
        <img id='img-upload'/>
      </div>
      <div class="form-group">
        <label for="#">Localizacion: </label></br>
        <input type="radio" name="localization" value="normal" checked> Escribir ubicacion </input>
        <div class="normalLocalizationInput">
          <input type="text" class="form-control" name="localization">
        </div>
        <input type="radio" name="localization" value="gps"> GPS </input></br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d12692.022389899808!2d-59.10287546212159!3d-37.318695092814465!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1555732893115!5m2!1ses!2sar" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="form-group">
        <label for="#">Detalles de la denuncia (opcional)</label>
      </div>
      <textarea name="details" rows="4" cols="50"></textarea></br>
      <button type="submit" class="btn btn-primary">Enviar Denuncia</button>
    </form>
  </div>
</div>
{include file= "footer.tpl"}
