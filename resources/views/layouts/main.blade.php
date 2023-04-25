<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-P0v1KQIYwLk/92KIOg/M/lnJz2fN+exK9N5p5d5M5G5pUw+zZU6VCxrMV6zvU6gdpCFKjC9ggm4nlHPx/dKY3Q==" crossorigin="anonymous" />
    <title>{{ $titulo }}</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="shortcut icon" href="ico/xanna.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../ico/xanna.ico" type="image/x-icon">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.scss') }}">
</head>
<body>
    @include('sweetalert::alert')
    @include('shared/navbar')
    @yield('contenido')

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="js/jquery-3.6.4.js"></script>
    <script src="../js/jquery-3.6.4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>
    <script src="fontawesome/js/all.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#miTabla').DataTable({
                "language": {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });
        });
    </script>
</body>
</html>