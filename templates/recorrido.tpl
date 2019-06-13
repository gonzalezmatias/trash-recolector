{include file="header.tpl"}
<div class=''>
  <h2>Mapa de la ciudad</h2>
    <div class="reportsContainer" class="col-md-6 col-md-offset-2" >
      <div class="container-fluid">
        <div id="map2" class="map">
        </div>
      </div>
    </div>

    <br>
    <div class="options reportsContainer">
        <button class="reportBTN" id="reportBTN">Mapear Coordenadas</button>
    </div>
    {include file="reportsList.tpl"}
</div>


{include file="footer.tpl"}
<script type="text/javascript" src="js/geolocation_adm.js"></script>
