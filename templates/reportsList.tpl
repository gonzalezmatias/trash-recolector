<div class="">
    <h2>Lista de reportes</h2>
    <table class="table" id="table">
  <thead>
    <tr>
      <th scope="col" class="col-md-1 col-xs-1">Reporte</th>
      <th scope="col" class="col-md-7 col-xs-7">Detalle</th>
      <th scope="col" class="col-md-1 col-xs-1">Usuario</th>
      <th scope="col" style="display:none;">latitud</th>
      <th scope="col" style="display:none;">longitud</th>
      <th scope="col" class="col-md-2 col-xs-2">Estado</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$reports item=$rep}
    <tr class="comp_data">
      {if $rep['status']==0}
          <td>{$rep.id_reporte}</td>
          <td>{$rep.detalle}</td>
          <td>{$rep.id_usuario}</td>
          <td class="inputValue" style="display:none;">{$rep.latitud}</td>
          <td class="inputValue" style="display:none;">{$rep.longitud}</td>
          <td class="estadoBasura"><a class="editarEstado" data-estado="{$rep['id_reporte']}"href="editarEstado&id={$rep['id_reporte']}">Recolectar</button></td>

      {/if}
    </tr>
    {/foreach}
  </tbody>
</table>
</div>
