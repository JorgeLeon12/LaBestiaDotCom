<?php
include "superior.php";
?>
      <div class="large-12 columns" align="center">
        <div class="large-5">
          <fieldset><legend>Buscador</legend>
            <form action="buscador.php" method="post">
              <?php
              include 'sql.php';

              if(isset($_REQUEST['paso']) && $_REQUEST['paso'] == '1'){
                if(isset($_REQUEST['tipo']) && $_REQUEST['tipo'] == 'nombre'){
                  echo '       
                  <input type="text" name="dato1" placeholder="Nombre o Sobrenombre" />
                  <input type="text" name="dato2" placeholder="Referencia (Tel/Correo/Nombre/Etc.)" />
                  <input type="hidden" name="paso2" value="1" />

                  ';
                }else{
                  echo '
                  <input type="text" name="dato1" placeholder="Código de identificacion" />
                  <input type="hidden" name="paso2" value="2" />';
                }
                echo '<input type="hidden" name="paso" value="2" />';
              }else if(isset($_POST['paso']) && $_POST['paso'] == '2'){
                if($_POST['paso2'] == '1'){
                  $Query = 'SELECT identificador FROM checkin WHERE nombre = "'.$_POST['dato1'].'" AND referencia = "'.$_POST['dato2'].'"';
                }else if($_POST['paso2'] == '2'){
                  $Query = 'SELECT identificador FROM checkin WHERE identificador = "'.$_POST['dato1'].'"';
                }
                $Dato = mysql_query($Query)or die(mysql_error());
                $rowDato = mysql_fetch_row($Dato);
                var_dump($rowDato[0]);
                echo $rowDato[0]."-".$Query;
                header('Location: encontrado.php?id='.$rowDato[0]);
              }else{
                echo '
                <input type="radio" name="tipo" value="nombre" />Nombre o Sobrenombre<br />
                <input type="radio" name="tipo" value="codigo" />Código Unico<br />
                <input type="hidden" name="paso" value="1" />
                ';
              }
              ?>
              <input type="submit" value="Buscar" />
              <input type="hidden" name="tipoMapa" value="1" />
            </form>
          </fieldset>
        </div>
      </div>
<?php
include "inferior.php";
?>