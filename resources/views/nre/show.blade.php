@extends('layout.app')
 
@section('body')
    <h1 class="mb-0">Detalles de registro del alumno </h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="nombre" value="{{ $registro->nombre }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Apellido Paterno</label>
            <input type="text" name="Apaterno" class="form-control" placeholder="Apellido Paterno" value="{{ $registro->Apaterno }}" readonly>
        </div>
       
        <div class="col mb-3">
            <label class="form-label">Apellido Materno</label>
            <input type="text" name="Amaterno" class="form-control" placeholder="Apellido Materno" value="{{ $registro->Amaterno }}" readonly>
        </div>
      
        <div class="col mb-3">
            <label class="form-label">Fecha de Nacimiento</label>
            <input type="text" name="fdn" placeholder="Fecha de nacimiento" value="{{ $registro->fdn }}" readonly>

        </div>
    </div>
    
    <div class="row">
       
    <div class="col mb-3">
            <label class="form-label">Correo</label>
            <input type="text" name="correo" placeholder="Correo" value="{{ $registro->Correo }}" readonly>
            
        </div>
        <div class="col mb-3">
            <label class="form-label">Telefono</label>
            <input type="text" name="tel" placeholder="Telefono" value="{{ $registro->tel }}" readonly>
            
        </div>
        <div class="col mb-3">
            <label class="form-label">Especialidad</label>
            <input type="text" name="espe" placeholder="Especialidad" value="{{ $registro->espe}}" readonly>
            
        </div>
        <div class="col mb-3">
            <label class="form-label">Curso</label>
            <input type="text" name="curso" class="form-control" placeholder="Curso" value="{{ $registro->curso }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $registro->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $registro->updated_at }}" readonly>
        </div>
    </div>
@endsection