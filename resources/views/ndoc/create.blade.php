@extends('layout.app')
 
@section('body')
    <h1 class="mb-0">Documentos del alumno </h1>
    <hr />
   
    

    <body>
    <div class="container">
        <h1>Pasos para subir tu documentación</h1>
        
        <div class="instruction-container">
            <p>Asegura que todos los archivos sean de extensión PDF y legibles.</p>
            <p>Por favor, sigue estas indicaciones para nombrar los documentos:</p>
            <ul>
                <li>Pon el nombre completo del documento primero.</li>
                <li>Luego, agrega tu nombre. Por ejemplo, Certificado total o de estudios (Certificado total - Mariana Lopez Arteaga).</li>
            </ul>
            <p>Los documentos que debes subir son los siguientes:</p>
            <ul>
                <li>CURP</li>
                <li>Certificado total o de estudios (boleta)</li>
                <li>Solicitud de ingreso</li>
                <li>Certificado médico</li>
                <li>Estudio socioeconómico</li>
            </ul>
        </div>
        <form action="{{ route('ndoc.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
           
            <div class="col">
            <label for="text">Curp</label>
                <input type="file" name="curp"  placeholder="curp">
            </div>
            <div class="col">
            <label for="text">Certificado Total</label>
                <input type="file" name="ct"  placeholder="Certificado">
            </div>
            <div class="col">
        </div>
        
        <div class="row mb-3">
        <div class="col">
            <label for="text">Solicitud de ingreso</label>
                <input type="file" name="si"  placeholder="Solicitud de ingreso">
            </div>
            <div class="col">
            <label for="text">Certificado Medico</label>
                <input type="file" name="cm"  placeholder="Certificado Medico">
            </div>
            <div class="col">
            <label for="text">Estudio Socio Economico</label>
                <input type="file" name="es"  placeholder="Estudio SocioEconomico">
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