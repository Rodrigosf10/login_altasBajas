@extends('layouts/main')
@section('contenido')
    <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="fw-light text-center">Eliminación de Registro</h1>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text alert-danger border-dark" id="basic-addon1">Tipo</span>
                            <input type="text" class="form-control border-dark" disabled value="{{ $items->tipo }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text alert-danger border-dark" id="basic-addon1">Categoría</span>
                            <input type="text" class="form-control border-dark" disabled value="{{ $items->categoria }}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text alert-danger border-dark" id="basic-addon1">Cantidad</span>
                            <input type="text" class="form-control border-dark" disabled value="${{ number_format($items->cantidad, 2) }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="input-group mb-3">
                            <span class="input-group-text alert-danger border-dark" id="basic-addon1">Descripción</span>
                            <input type="text" class="form-control border-dark" disabled value="{{ $items->descripcion }}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text alert-danger border-dark" id="basic-addon1">Fecha</span>
                            <input type="text" class="form-control border-dark" disabled value="{{ $items->fecha }}">
                        </div>
                    </div>
                </div>
                <form action="{{ route('destroy', $items->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row text-center">
                        <div class="col-sm-6"><button class="btn btn-danger mt-3 border-dark"><i class="fa-solid fa-skull"></i> Eliminar Definitivamente <i class="fa-solid fa-skull"></i></button></div>
                        <div class="col-sm-6"><a href="/" class="btn btn-info mt-3 border-dark"><i class="fa-solid fa-rotate-left"></i> Volver al inicio</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection