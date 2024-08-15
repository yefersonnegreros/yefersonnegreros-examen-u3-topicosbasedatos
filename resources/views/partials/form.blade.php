@csrf
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" id="nombre" name="nombres" class="form-control @error('nombres') is-invalid @enderror" value="{{ old('nombres', $cliente->nombres ?? '') }}">
        @error('nombres')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>  
    <div class="col-md-6 mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $cliente->email ?? '') }}">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="direccion" class="form-label">Dirección:</label>
        <input type="text" id="direccion" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion', $cliente->direccion ?? '') }}">
        @error('direccion')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="col-md-6 mb-3">
        <label for="fono" class="form-label">Teléfono:</label>
        <input type="text" id="fono" name="fono" class="form-control @error('fono') is-invalid @enderror" value="{{ old('fono', $cliente->fono ?? '') }}">
        @error('fono')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>


<div class="pie-tarjeta text-center">
    <div>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver a la Lista</a>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">{{$btnText}}</button>
    </div>
</div>
