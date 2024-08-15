@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/crud-styles.css') }}">
@endpush

@section('content')

<div class="container py-5 mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        {{-- <h1 class="text-center flex-grow-1 mb-0">Clientes</h1> --}}
        <a href="{{ route('clientes.create') }}" class="btn btn-success">
            <i class="bi bi-plus"></i> Agregar
        </a>
    </div>
    
    <div class="row">
        @foreach($clientes as $cliente)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $cliente->nombres }}</h5>
                        <p class="card-text">Email: {{ $cliente->email }}</p>
                        <p class="card-text">Dirección: {{ $cliente->direccion }}</p>
                        <p class="card-text">Teléfono: {{ $cliente->fono }}</p>
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-secondary">Ver Detalles</a>

                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class="d-flex justify-content-center mt-4">
        {{ $clientes->links('pagination::bootstrap-5') }} 
    </div>
</div>
@endsection
