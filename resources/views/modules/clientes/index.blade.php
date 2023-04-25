@extends('layouts/main')
@section('contenido')
    <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="fw-light text-center"><b>Altas - Bajas</b></h1>
                <hr>
                <div class="row text-center">
                    <p></p>
                    <div class="col">
                        <div class="alert alert-success border-dark" role="alert">Total de Ganancias: ${{ number_format($totalGanancias, 2) }}</div>
                    </div>
                    <div class="col">
                        <div class="alert alert-danger border-dark" role="alert">Total de Gastos: ${{ number_format($totalGastos, 2) }}</div>
                    </div>
                </div>
                <hr>
                <table class="table table-striped table-bordered border-dark text-center datatable" id="miTabla">
                    <thead class="table-dark">
                        <tr>
                            <th>Tipo</th>
                            <th>Categoría</th>
                            <th>Cantidad</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <th><i class="fa-solid fa-gear"></i></th>
                            <th><i class="fa-solid fa-gear"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td style="font-size: 16px;">{{ $item->tipo }}</td>
                                <td style="font-size: 16px;">{{ $item->categoria }}</td>
                                <td style="font-size: 16px;">${{ number_format($item->cantidad, 2) }}</td>
                                <td style="font-size: 16px;" align="justify">{{ $item->descripcion }}</td>
                                <td style="font-size: 16px;">{{ $item->fecha }}</td>
                                <td style="font-size: 16px;"><a href="{{ route('edit', $item->id) }}" class="btn btn-warning border-dark" title="Editar"><i class="fa-solid fa-pen"></i></a></td>
                                <td style="font-size: 16px;"><a href="{{ route('show', $item->id) }}" class="btn btn-danger border-dark" title="Eliminar"><i class="fa-solid fa-trash-can"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection