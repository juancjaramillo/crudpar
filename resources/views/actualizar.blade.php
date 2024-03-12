@extends('layout/plantilla')
@section('title', 'Agregar información nueva')
@section('contenedor')
    <div class="card">
        <div class="card-header">
            <h1>Actualizar</h1>
        </div>
        <div class="card-body">
            <p class="card-text">
            <form action={{route('InfoPersonas.update',$infoPersona->id)}} method="POST">
                @csrf
                @method("PUT")
                <label for="">Nombre</label>
                <input type="text" name="Name" class="form-control" required value={{$infoPersona->Name}}>
                <label for="">Apellido</label>
                <input type="text" name="Lastname" class="form-control" required value={{$infoPersona->Lastname}}>
                <label for="">Identificación</label>
                <input type="number" name="identification" class="form-control" required value={{$infoPersona->identification}}>
                <label for="">Fecha nacimiento</label>
                <input type="date" name="birthdate" class="form-control" required value={{$infoPersona->birthdate}}>
                <label for="">Genero</label>
                <input type="text" name="gender" class="form-control" required value={{$infoPersona->gender}}>
                <label for="">Placa vehiculo</label>
                <input type="text" name="idVehiculo" class="form-control" required value={{$infoPersona->idVehiculo}}>
                <label for="">Dirección casa</label>
                <input type="text" name="address" class="form-control" required value={{$infoPersona->address}}>
                <br>
                <a href={{ route('InfoPersonas.index') }} class="btn btn-secondary">
                    <span class="fas fa-undo-alt"></span> Regresar </a>
                <button class="btn btn-warning"><span class="fas fa-edit"></span> Actualizar</button>

            </form>
            </p>

        </div>
    </div>
@endsection
