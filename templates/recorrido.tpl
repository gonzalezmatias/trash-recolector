{include file="header.tpl"}
<div class='reports'>
    <div class="reportsContainer" class="col-md-6 col-md-offset-2" >
      <div class="container-fluid">
        <div id="map2" class="map">
        </div>
      </div>
    </div>


    <div class="options reportsContainer">
        <!-- <button class="reportBTN"><a class="nounderline" href="reportsList">ver reportes</a></button> -->
        <button class="reportBTN" id="reportBTN" data-coord="{$coord.latitud}"> send route status </button>
    </div>
</div>
{include file="reportsList.tpl"}

{include file="footer.tpl"}
<script type="text/javascript" src="js/geolocation_adm.js"></script>
