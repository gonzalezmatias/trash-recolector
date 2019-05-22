<div class="reports">
    <h1>lista de reportes</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id Denuncia</th>
      <th scope="col">Detalle</th>
      <th scope="col">Id Usuario</th>
      <th scope="col">Mapear</th>
      <th scope="col">latitud</th>
      <th scope="col">longitud</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$reports item=$rep}
    <tr>
      <td>{$rep.id_reporte}</td>
      <td>{$rep.detalle}</td>
      <td>{$rep.id_usuario}</td>
      <td class="latitud">{$rep.latitud}</td>
      <td class="longitud">{$rep.longitud}</td>
      <td><button type="button" id="mapeoButton" class="btn btn-danger"/>map</td>
    </tr>
    {/foreach}
  </tbody>
</table>
</div>
