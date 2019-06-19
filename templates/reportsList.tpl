<div class="repp">
  <br>
  {if $user==admin}
    <h2>Lista de reportes</h2>
    {else}
      {if $reports}
        <h2>Sus denuncias pendientes</h2>
      {/if}
    {/if}
    {if $reports}
    <table class="table" id="table">

  <thead>
    <tr>
      <th scope="col" class="col-md-1 col-xs-1">Reporte</th>
      <th scope="col" class="col-md-7 col-xs-7">Detalle</th>
      {if $user==admin}
      <th scope="col" class="col-md-1 col-xs-1">Usuario</th>
      <th scope="col" style="display:none;">latitud</th>
      <th scope="col" style="display:none;">longitud</th>

      <th scope="col" class="col-md-2 col-xs-2">Estado</th>
      {else}
        <th scope="col" class="col-md-4 col-xs-4">Fecha</th>
      {/if}
    </tr>
  </thead>
  <tbody>
    {foreach from=$reports item=$rep}
    <tr class="comp_data">
      {if $rep['status']==0}
          <td>{$rep.id_reporte}</td>
          <td align="left">{$rep.detalle}</td>
          {if $user==admin}
          <td>{$rep.id_usuario}</td>
          <td class="inputValue" style="display:none;">{$rep.latitud}</td>
          <td class="inputValue" style="display:none;">{$rep.longitud}</td>

          <td class="estadoBasura"><a class="editarEstado" data-estado="{$rep['id_reporte']}"href="editarEstado&id={$rep['id_reporte']}">Recolectar</button></td>
            {else}
            <td align="left">{$rep.fecha}</td>
          {/if}
      {/if}
    </tr>
    {/foreach}
  </tbody>
</table>
{/if}
</div>
