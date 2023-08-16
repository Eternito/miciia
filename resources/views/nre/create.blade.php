@extends('layout.app')
 
@section('body')

<h1 class="mb-0">Registro Alumno </h1>
    <hr />



    <body>
    <div class="container">
        <h1>Pasos para tu inscripción</h1>
        
        <div class="instruction-container">
            <p>Especificar a qué especialidad vas a estar. Las opciones son: Artes, Música, Teatro y Danza.</p>
            <p>En el campo "Curso", por favor, sigue las siguientes indicaciones:</p>
            <ul>
                <li>Para Artes, Danza y Teatro, llena el campo con la letra de la especialidad (por ejemplo, Teatro = T, Artes = A, Danza = D).</li>
                <li>Para la especialidad en Música, selecciona uno de los siguientes cursos: violín, viola, fagot, metales, clarinete, contrabajo, percusiones, cello, piano o coro.</li>
            </ul>
            <p>Después de rellenar los datos correspondientes, el botón te dirigirá para subir tus documentos. Por favor, sigue estos pasos para que tu inscripción sea exitosa.</p>
        </div>
        
        <form action="{{ route('nre.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="col">
                <input type="text" name="Apaterno" class="form-control" placeholder="Apellido Paterno">
            </div>
            <div class="col">
                <input type="text" name="Amaterno" class="form-control" placeholder="Apellido Paterno">
            </div>
            <div class="col">
                <input type="date" name="fdn" class="form-control" placeholder="Fecha de nacimiento">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="correo" class="form-control" placeholder="Correo">
            </div>
            <div class="col">
                <input type="text" name="tel" class="form-control" placeholder="Telefono">
            </div>
            <div class="col">
                <input type="text" name="espe" class="form-control" placeholder="Especialidad">
            </div>
            <div class="col">
                <input type="text" name="curso" class="form-control" placeholder="Curso">
            </div>
           
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
</body>








@endsection