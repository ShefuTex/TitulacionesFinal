<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso de tiulacion</title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!--CSS personalizado-->
    <link rel="stylesheet" href="assets/css/diseño.tabla.css">

    <!--datatables CSS basico-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css">
    <!--datatables estilos bootstrap-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/DataTables-1.13.4/css/dataTables.bootstrap4.min.css">

</head>

<body>

    <header>
        <h1 class="text-center text-light">Division de estudios profesionales</h1>
        <h2 class="text-center text-light">Buscador <span class="backge badge-danger">de estudiantes</span></h2>
    </header>

    <div style="height:50px"></div>

    <!--Tabla donde apareceran los alumnos registrados-->

    <?php
    $link = new PDO("mysql:host=localhost;dbname=titulaciones", "root", "",);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No. de control</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Carrera</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($link->query("SELECT * FROM datos_alumno") as $row) { ?>
                                <tr>
                                    <td><?php echo $row['No_control'] ?></td>
                                    <td><?php echo $row['Nombre'] ?></td>
                                    <td><?php echo $row['Apellidos'] ?></td>
                                    <td><?php echo $row['Carrera'] ?></td>
                                    <td>
                                        <button onclick="detailByStudent($row['No_control'])">Ver datos generales</button>
                                        <button>ver expediente</button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--Jquery, Popper.js Booststrap JS-->
    <script src="assets/jquery/jquery-3.6.4.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!--Datatable js-->
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/js/tabla.js"></script>
    <script type="text/javascript" src="assets/js/detalleProcesos.js"></script>

</body>

</html>