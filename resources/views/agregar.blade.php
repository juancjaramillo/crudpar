@extends('layout/plantilla')
@section('title', 'Agregar información nueva')
@section('contenedor')
    <div class="card">
        <div class="card-header">
            <h1>Agregar nueva persona</h1>
        </div>
        <div class="card-body">

            <p class="card-text">
            <form action="{{route('InfoPersonas.store')}}" method="POST">
                @csrf
                <label for="">Nombre</label>
                <input type="text" name="Name" class="form-control" required>
                <label for="">Apellido</label>
                <input type="text" name="Lastname" class="form-control" required>
                <label for="">Identificación</label>
                <input type="number" name="identification" class="form-control" required>
                <label for="">Fecha nacimiento</label>
                <input type="date" name="birthdate" class="form-control" required>
                <label for="">Genero</label>
                <input type="text" name="gender" class="form-control" required>
                <label for="">Placa vehiculo</label>
                <input type="text" name="idVehiculo" class="form-control" required>
                <label for="">Dirección casa</label>
                <input type="text" name="address" class="form-control" required>
                <br>
                <a href={{ route("InfoPersonas.index") }} class="btn btn-secondary">
                    <span class="fas fa-undo-alt"></span> Regresar </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus" aria-hidden="true"></span> Agregar
                </button>

            </form>
            </p>

        </div>
    </div>
@endsection
