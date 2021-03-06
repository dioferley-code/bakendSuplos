<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="app.js"/>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/customColors.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/index.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Formulario</title>
</head>

<body>
  <div class="contenedor">
    <div class="card rowTitulo">
      <h1>Bienes Intelcost</h1>
    </div>
    <div class="colFiltros">
      <form action="buscador.php" method="post" id="formulario">
        <div class="filtrosContenido">
          <div class="tituloFiltros">
            <h5>Filtros</h5>
          </div>
          <div class="filtroCiudad input-field">
            <p><label for="selectCiudad">Ciudad:</label><br></p>
            <select name="ciudad" id="selectCiudad">
              <option value="" selected>Elige una ciudad</option>
              <option value="New York" >New York</option>
              <option value="Miami" >Miami</option>
              <option value="Orlando" >Orlando</option>
              <option value="Los Angeles" >Los Angeles</option>
              <option value="Houston" >Houston</option>
              <option value="Washington" >Washington</option>
            </select>
          </div>
          <div class="filtroTipo input-field">
            <p><label for="selecTipo">Tipo:</label></p>
            <br>
            <select name="tipo" id="selectTipo">
              <option value="" selected>Elige un tipo</option>
              <option value="Casa" >Casa</option>
              <option value="Casa de Campo" >Casa de Campo</option>
              <option value="Apartamento" >Apartamento</option>
            </select>
          </div>
          <div class="filtroPrecio">
            <label for="rangoPrecio">Precio:</label>
            <input type="text" id="rangoPrecio" name="precio" value="" />
          </div>
          <div class="botonField">
            <input type="submit" class="btn white" value="Buscar" id="submitButton">
          </div>
        </div>
      </form>
    </div>
    <div id="tabs" style="width: 75%;">
      <ul>
        <li><a href="#tabs-1">Bienes disponibles</a></li>
        <li><a href="#tabs-2">Mis bienes</a></li>
        <li><a href="#tabs-3">Reporte</a></li>
      </ul>
      <div id="tabs-1">
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Resultados de la búsqueda:</h5>
            <?php
              include('data.php');
            ?>            
            <div class="divider"></div>
          </div>
        </div>
      </div>
      
      <div id="tabs-2" >
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Bienes guardados:</h5>
            <?php
              include('consultarMisBienes.php');
            ?>    
            <div class="divider"></div>
          </div>
        </div>
      </div>
      
      <div id="tabs-3" >
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Exportar reporte:</h5>             
            <form action="excel.php" method="post" id="formularioExcel">
              <div class="filtrosContenido">
                <div class="tituloFiltros">
                  <h5>Filtros</h5>
                </div>
                <div class="filtroCiudad input-field">
                  <p><label for="selectCiudad">Ciudad:</label><br></p>
                  <select name="ciudad" id="selectCiudad">
                    <option value="" selected>Elige una ciudad</option>
                    <option value="New York" >New York</option>
                    <option value="Miami" >Miami</option>
                    <option value="Orlando" >Orlando</option>
                    <option value="Los Angeles" >Los Angeles</option>
                    <option value="Houston" >Houston</option>
                    <option value="Washington" >Washington</option>
                  </select>
                </div>
                <div class="filtroTipo input-field">
                  <p><label for="selecTipo">Tipo:</label></p>
                  <br>
                  <select name="tipo" id="selectTipo">
                    <option value="" selected>Elige un tipo</option>
                    <option value="Casa" >Casa</option>
                    <option value="Casa de Campo" >Casa de Campo</option>
                    <option value="Apartamento" >Apartamento</option>
                  </select>
                </div>
                <div class="botonField">
                  <input type="submit" class="btn white" value="Generar excel" id="submitButton">
                </div>
              </div> 
            </form>
            <div class="divider"></div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {
          $( "#tabs" ).tabs();
      });
    </script>
  </body>
  </html>
