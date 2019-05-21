{include file="header.tpl"}
<div class="reports">
    <h1>lista de reportes</h1>
    <div id="listContainer">
        {foreach from=$reports item=id_reporte} 
        <ul>
               
            <li>{$reports['id_reporte']}</li>
            <li>{$reports['imagen']}</li>
            <li>{$reports['detalle']}</li>
            <li>{$reports['id_usuario']}</li>
            
        </ul>
        {/foreach} 
    </div>
</div>
<script type="text/javascript" src="../js/reports.js"></script>
{include file= "footer.tpl"}