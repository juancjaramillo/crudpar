@extends('layout/plantilla')
@section('title', 'Eliminar persona')
@section('contenedor')
    <div class="card">
        <div class="card-header">
            <h1>Eliminar</h1>
        </div>
        <div class="card-body">
            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                ¡¡¡Esta seguro de eliminar este registro!!!

                <table class="table table-sm table-bordered" style="background: white">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Identificación</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$infoPersona->Name}}</td>
                            <td>{{$infoPersona->Lastname}}</td>
                            <td>{{$infoPersona->identification}}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action={{ route("InfoPersonas.destroy",$infoPersona->id)}} method="POST">
                    @csrf
                    @method("DELETE")
                    <a href={{ route('InfoPersonas.index') }} class="btn btn-secondary">
                        <span class="fas fa-undo-alt"></span> Regresar </a>
                    <button class="btn btn-danger"> <span class="fas fa-eraser"></span> Eliminar</button>

                </form>
            </div>
            </p>
        </div>
    </div>
@endsection
