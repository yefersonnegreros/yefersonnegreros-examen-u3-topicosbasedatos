@extends('layouts.master')

@section('content')
<div class="container py-5 mt-5">
    <div class="card my-2">
        <div class="card-header text-center">
            <h2>Detalle del Cliente</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5 class="card-title mb-1">Nombre:</h5>
                    <p class="card-text">{{ $cliente->nombres }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="card-title mb-1">Email:</h5>
                    <p class="card-text">{{ $cliente->email }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5 class="card-title mb-1">Dirección:</h5>
                    <p class="card-text">{{ $cliente->direccion }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="card-title mb-1">Teléfono:</h5>
                    <p class="card-text">{{ $cliente->fono }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5 class="card-title mb-1">Fecha de Creación:</h5>
                    <p class="card-text">{{ $cliente->created_at->diffForHumans() }}</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5 class="card-title mb-1">Fecha de Actualización:</h5>
                    <p class="card-text">{{ $cliente->updated_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('clientes.index') }}" class="btn btn-primary">Volver a la Lista</a>
        </div>
    </div>
</div>
@endsection
