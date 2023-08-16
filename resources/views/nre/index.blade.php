@extends('layout.app')

@section('body')

<h1 class="mb-0">Lista de Alumnos</h1>
        <a href="{{ route('nre.create') }}" class="btn btn-primary">Registro</a>
    </div>

    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido materno</th>
                <th>Fecha de Nacimiento</th>
                <th>Correo</th>
                <th>telefono</th>
                <th>Especialidad</th>
                <th>Curso</th>
                
        

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($registro->count() > 0)
                @foreach($registro as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nombre }}</td>
                        <td class="align-middle">{{ $rs->Apaterno }}</td>
                        <td class="align-middle">{{ $rs->Amaterno }}</td>
                        <td class="align-middle">{{ $rs->fdn }}<nd/td>
                        <td class="align-middle">{{ $rs->correo }}</td>
                        <td class="align-middle">{{ $rs->tel }}</td>
                        <td class="align-middle">{{ $rs->espe }}</td>
                        <td class="align-middle">{{ $rs->curso }}</td>
                        

                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('nre.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('nre.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('nre.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>

    @endsection