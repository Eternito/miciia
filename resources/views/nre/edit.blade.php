@extends('layout.app')
 
@section('body')
    <h1 class="mb-0">Modificacion de registro del alumno </h1>
    <hr />
    <form action="{{ route('nre.update', $registro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="nombre" value="{{ $registro->nombre }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Apellido Paterno</label>
            <input type="text" name="Apaterno" class="form-control" placeholder="Apellido Paterno" value="{{ $registro->Apaterno }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Apellido Materno</label>
            <input type="text" name="Amaterno" class="form-control" placeholder="Apellido Materno" value="{{ $registro->Amaterno }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Fecha de nacimiento</label>
            <input type="date" name="fdn" class="form-control" placeholder="Fecha de nacimiento" value="{{ $registro->fnd }}" >
        </div>
    </div>
    <div class="row">
      
    <div class="col mb-3">
            <label class="form-label">Correo</label>
            <input type="text" name="correo" placeholder="correo" value="{{ $registro->correo}}" >
            
        </div>
        <div class="col mb-3">
            <label class="form-label">Telefono</label>
            <input type="text" name="tel" placeholder="Telefono" value="{{ $registro->tel }}" >
            
        </div>
        <div class="col mb-3">
            <label class="form-label">Especialidad</label>
            <input type="text" name="espe" placeholder="Especialidad" value="{{ $registro->espe }}" >
            
        </div>
        <div class="col mb-3">
            <label class="form-label">Curso</label>
            <input type="text" name="curso" placeholder="Curso" value="{{ $registro->curso}}" >
            
        </div>
       
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $registro->created_at }}" >
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $registro->updated_at }}" >
        </div>
    </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
   
@endsection



  