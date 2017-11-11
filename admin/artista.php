<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Administración</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/principal.css">
  <link rel="stylesheet" href="../css/jquery-confirm.min.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div id="sidebar" class="col-sm-3 col-md-3 col-lg-2 sidebar">
        <a href="../"><img src="../img/freezer.png" class="img-responsive" alt=""></a>
        <ul class="nav nav-sidebar" id="dashboard">
          <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
          <li class="active"><a href="#"><span class="glyphicon glyphicon-star"></span> Artistas</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-cd"></span> Álbumes</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-music"></span> Canciones</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-list"></span> Playlists</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Gestión de Usuarios</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Ajustes</a></li>
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-3 col-lg-offset-2 main">
        <div class="container-fluid">
         <div class="row">
           
           <h1>Artistas</h1>
           <hr>
           
           <div class="col-md-12">
              <h3>Agregar Artista</h3>
              <table class="table table-striped">
                <tr>
                  <td>Fotografía: </td>
                  <td>
                    <label class="btn btn-default">
                        Examinar <input type="file" id="foto-artista" hidden>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>Nombre del artista: </td>
                  <td><input type="text" id="txt-nombre-artista" id="txt-artista" value="" placeholder="Nombre" class="form form-control"></td>
                </tr>
                <tr>
                  <td>Pais: </td>
                  <td>
                    <select id="slc-pais-artista" class="form form-control" placeholder="Seleccionar">
                      <option value="" hidden>Seleccionar Pais</option>}
                      option
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Biografía: </td>
                  <td>
                    <textarea id="txt-biografia-artista" class="form form-control" placeholder="3000 caracteres."></textarea>
                  </td>
                </tr>
              </table>

              <h3>Listado de Artistas</h3>
              <table class="table table-striped" id="tbl-artistas">
                <thead>
                  <th>Foto</th>
                  <th>Nombre del Artista</th>
                  <th>Pais</th>
                  <th>Biografía</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img class="img img-circle img-responsive" src="https://cps-static.rovicorp.com/3/JPG_400/MI0003/852/MI0003852493.jpg" Title="Frank Sinatra">
                    </td>
                    <td>Frank Sinatra</td>
                    <td>Estados Unidos (USA)</td>
                    <td><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-paperclip"></span></button></td>
                  </tr>
                </tbody>
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
  <script type="text/javascript" src="../js/keys.js"></script>
  <script type="text/javascript" src="../js/admin-artista.js"></script>
</body>
</html>