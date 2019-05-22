<div class="">
    <h2>Lista de reportes</h2>
    <table class="table" id="table">
  <thead>
    <tr>
      <th scope="col">Id Denuncia</th>
      <th scope="col">Detalle</th>
      <th scope="col">Id Usuario</th>
      <th scope="col">latitud</th>
      <th scope="col">longitud</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$reports item=$rep}
    <tr class="comp_data">
      <td>{$rep.id_reporte}</td>
      <td>{$rep.detalle}</td>
      <td>{$rep.id_usuario}</td>
      <td class="inputValue">{$rep.latitud}</td>
      <td class="inputValue">{$rep.longitud}</td>
    </tr>
    {/foreach}
  </tbody>
</table>
</div>
