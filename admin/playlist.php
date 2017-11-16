<?php 

/*session_start();
if($_SESSION['status']==false || $_SESSION["id_tipo_usuario"]!=1) { // O el usuario no es administrador
    header("Location: ../login.php");
}
*/
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Administración</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/principal.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div id="sidebar" class="col-sm-3 col-md-3 col-lg-2 sidebar">
        <a href="../"><img src="../img/freezer.png" class="img-responsive" alt=""></a>
        <ul class="nav nav-sidebar" id="dashboard">
          <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
          <li><a href="artista.php"><span class="glyphicon glyphicon-star"></span> Artistas</a></li>
          <li><a href="album.php"><span class="glyphicon glyphicon-cd"></span> Álbumes</a></li>
          <li><a href="cancion.php"><span class="glyphicon glyphicon-music"></span> Canciones</a></li>
          <li class="active"><a href="playlist.php"><span class="glyphicon glyphicon-list"></span> Playlists</a></li>
          <li ><a href="idioma.php"><span class="glyphicon glyphicon-text-width"></span> Idiomas</a></li>
          <li><a href="paises.php"><span class="glyphicon glyphicon-screenshot"></span>Paises</a></li>
          <li><a href="tipo-suscripcion.php"><span class="glyphicon glyphicon-eye-open"></span>Tipos de suscripcion</a></li>
          <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Gestión de Usuarios</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Ajustes</a></li> -->
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-3 col-lg-offset-2 main">
        <div class="container-fluid">
         <div class="row">
           <h1>Playlist</h1>
         </div>
          <hr>

          <div class="row">
            <div class="col-md-6">
            <form style="form-control">
              <table class="table table-striped" id="tbl-playlists">
                <thead>
                </thead>
                <tbody>
                  <tr style="display: none;">
                    <td>Codigo:</td>
                    <td><input type="text" name="txt-id-playlist" id="txt-id-playlist" class="form-control"></td>
                  </tr>
                  <tr>
                    <tr>
                    <td>Visibilidad:</td>
                    <td><select id="slc-tipo-visibilidad" class="form-control"></select></td>
                  </tr>
                  <tr>
                    <td>Playlist:</td>
                    <td><input type="text" name="txt-nombre-playlist" id="txt-nombre-playlist" class="form-control"></td>
                  </tr>           
                  <tr>
                    <td>Usuario:</td>
                    <td><select name="slc-nombre-usuario" id="slc-nombre-usuario" class="form-control"></select></td>
                  </tr>
                  <tr>
                    <td>URL foto playlist:</td>
                    <td>
                      <input type="text" name="txt-foto-playlist" id="txt-url-foto-playlist" class="form-control">
                      <!--<input type="hidden" id="txt-url-foto-playlist">
                    <form method="post" id="form-foto-playlist" name="form-foto-playlist" enctype="multipart/form-data">
                      <label class="btn btn-default">
                          Examinar <input type="file" name="file" id="file-foto-playlist" hidden>
                      </label>
                      <img src="../img/load.gif" id="carga-foto-playlist" class="img loading" height="20px">
                      <img src="../img/good.png" id="lista-carga-foto-playlist" class="img loading" height="20px">
                    </form>
                  -->
                    </td>
                  </tr>
                </tbody>
              </table>
              <input type="button" name="btn-guardar-playlist" value="Guardar" class="btn btn-primary" id="btn-guardar-playlist">
              <input type="button" name="btn-actualizar-playlist" id="btn-actualizar-playlist" value="Actualizar" class="btn btn-info" style="display: none;">
              </form>
            </div>

            <div class="well col-md-12" id="div-playlists">
                <span class="glyphicon glyphicon-search" onclick="buscarPlaylist()"></span>&nbsp&nbsp&nbsp
                <input type="text" id="txt-busqueda" placeholder="Busqueda" style="border-radius:8px">
                <div id="div-busqueda">
                  <table id="tbl-busquedas" class="table table-striped">
                    <thead></thead>
                    <tbody>
                    </tbody>
                  </table>
                  
                </div>
                <table id="tbl-playlists" class="table table-striped">
                  <thead>
                    <th>Visibilidad</th>
                    <th>Playlist</th>
                    <th>Usuario</th>
                    <th>Url foto playlist</th>
                    <th></th>
                </thead>
                <tbody></tbody>
                </table>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../js/soundmanager2.min.js"></script>
  <script type="text/javascript" src="../js/player.js"></script>
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../js/jquery-confirm.min.js"></script>
  <script type="text/javascript" src="../js/navigation.js"></script>
  <script src="../js/admin-playlist.js"></script>
</body>
</html>