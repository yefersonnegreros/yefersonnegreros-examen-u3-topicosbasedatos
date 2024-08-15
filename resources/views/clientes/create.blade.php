@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/crud-styles.css') }}">
@endpush

@section('content')
<div class="crud-container ">
    <h1 class="crud-title">Agregar Cliente</h1>

    <form class="crud-form" action="{{ route('clientes.store') }}" method="POST">
    @include('partials.form',['btnText' => 'Guardar'])
    </form>
</div>
@endsection
