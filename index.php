<?php
include_once('./modelo/operaciones.php');
$obj =new Servicio();
?>
<script>
    var servicios = <?php $obj->consultar(); ?>;
    var arrayservicios=[]
    function listarServicios(servicios){
        for (var servicio of servicios){
            let pago= parseFloat(servicio.monto_pago)
            arrayservicios.push([servicio.nombre+' '+servicio.fecha_pago,pago])
        }
        arrayservicios.unshift(['Servicios','Monto Pago'])
    }
    listarServicios(servicios)
    console.log(arrayservicios)
</script>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable(arrayservicios);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
      <div class="container">
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    </div>
  </body>
  <style>
    body {
        background-color: gray;
    }

    .container {
        display: flex;
        gap: 15px;
        margin: 50px auto;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>
</html>