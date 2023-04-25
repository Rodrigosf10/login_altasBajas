@extends('layouts/main')
@section('contenido')
    <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="fw-light text-center">Agregar Registro</h1>
                <hr>
                <form action="/store" method="POST">
                    @csrf
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="exampleInputEmail1" class="form-label">Tipo:</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input border-dark" type="checkbox" value="Ganancia" id="tipo" name="tipo">
                                            <label class="form-check-label" for="tipo-ganancia">Ganancia</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input border-dark" type="checkbox" value="Gasto" id="tipo" name="tipo">
                                            <label class="form-check-label" for="tipo-gasto">Gasto</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="exampleInputPassword1" class="form-label">Categoría:</label>
                                <select class="form-select border-dark" aria-label="Default select example" id="categoria" name="categoria" required>
                                    <option selected>Seleccionar tipo...</option>
                                    <option value="Quincena">Quincena</option>
                                    <option value="Comision">Comisión</option>
                                    <option value="Bonos">Bonos</option>
                                    <option value="Aguinaldo">Aguinaldo</option>
                                    <option value="Horas Extra">Horas Extra</option>
                                    <option value="Trabajos Extras">Trabajos Extras</option>
                                    <option value="Transferencias Bancarias">Transferencias Bancarias</option>
                                    <option value="Depositos Bancarios">Depositos Bancarios</option>
                                    <option value="Videojuegos">Videojuegos</option>
                                    <option value="Impuestos">Impuestos</option>
                                    <option value="Mantenimiento Automotriz">Mantenimiento Automotriz</option>
                                    <option value="Relacionado a PC">Relacionado a PC</option>
                                    <option value="Compras en Linea">Compras en Línea</option>
                                    <option value="Ventas en Linea">Ventas en Línea</option>
                                    <option value="Suscripciones">Suscripciones</option>
                                    <option value="Entretenimiento Recreativo">Entretenimiento Recreativo</option>
                                    <option value="Comida">Comida</option>
                                    <option value="Ropa">Ropa</option>
                                    <option value="Gastos Medicos">Gastos Medicos</option>
                                    <option value="Cosmeticos y Productos de Higiene">Cosmeticos y Productos de Higiene</option>
                                    <option value="Trasporte Publico">Trasporte Publico</option>
                                    <option value="Gastos Innecesarios">Gastos Innecesarios</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-0">
                        <div class="row">
                            <div class="col-6">
                                <label for="exampleInputPassword1" class="form-label">Cantidad:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text border-dark">$</span>
                                    <input type="text" class="form-control border-dark" aria-label="Amount (to the nearest dollar)" id="cantidad" name="cantidad" onkeypress="return validarNumero(event)" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="exampleInputEmail1" class="form-label">Fecha:</label>
                                <input type="date" class="form-control border-dark" id="fecha" name="fecha" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Descripción:</label>
                        <input type="text" class="form-control border-dark" id="descripcion" name="descripcion" aria-describedby="emailHelp" required>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-6"><button type="submit" class="btn btn-primary mt-3 border-dark"><i class="fa fa-square-plus"></i></i> Agregar</button></div>
                        <div class="col-sm-6"><a href="/" class="btn btn-danger mt-3 border-dark"><i class="fa-solid fa-rotate-left"></i> Inicio</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function validarNumero(event) {
            var codigoTecla = event.which ? event.which : event.keyCode;
            var caracterTecla = String.fromCharCode(codigoTecla);
            if (!isNaN(caracterTecla) || caracterTecla == '.') {
                return true;
            }
            return false;
        }

        const checkboxes = document.querySelectorAll('input[name="tipo"]');
        const form = document.querySelector('form');
        const button = document.querySelector('button[type="submit"]');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            let checked = false;
            checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                checked = true;
            }
            });
            if (!checked) {
                alert('Por favor seleccione al menos una opción: Ganancia o Gasto');
            } else {
                form.submit();
            }
        });
    </script>
@endsection