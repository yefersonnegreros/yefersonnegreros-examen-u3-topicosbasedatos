@extends('layouts.master')

@section('content')

<div class="container py-5 mt-5">
    <div class="card my-2">
        <div class="card-header text-center">
            <h2>Editar Cliente</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('clientes.update', $cliente) }}">
                @csrf
                @method('PATCH')
                {{-- @include('partials.form',['btnText'=>'Actualizar']) --}}
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nombres" class="form-label">Nombres:</label>
                        <input type="text" class="form-control @error('nombres') is-invalid @enderror" id="nombres"
                            name="nombres" value="{{ old('nombres', $cliente->nombres) }}">
                        @error('nombres')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ old('email', $cliente->email) }}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="direccion" class="form-label">Dirección:</label>
                        <input type="text" class="form-control @error('direccion') is-invalid @enderror"
                            id="direccion" name="direccion" value="{{ old('direccion', $cliente->direccion) }}">
                        @error('direccion')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="fono" class="form-label">Teléfono:</label>
                        <input type="text" class="form-control @error('fono') is-invalid @enderror" id="fono"
                            name="fono" value="{{ old('fono', $cliente->fono) }}">
                        @error('fono')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver a la Lista</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@include('partials.validation-errors')
@endsection
