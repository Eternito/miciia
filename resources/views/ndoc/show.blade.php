@extends('layout.app')
 
@section('body')

<style>
   body {
        background-color: #444f5a;
      }

      .d-item{
    height: 500px;
   }
   .d-img{
    
    object-fit: cover;
    filter: brightness(0.6);
   }

   .column-container {
  columns: 3;
  column-gap: 40px;
  padding: 20px;
  background-color: #f0f0f0;
  font-family: Arial, sans-serif;
}

.column {
  margin-bottom: 30px;
}

.column-title {
  font-weight: bold;
  margin-bottom: 10px;
}

.column-content {
  margin-bottom: 15px;
}
 </style>

    <div>

    <body>

<nav>
<section>
    
      
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active d-item">
          <img src="/IMG/principal.jpg" class="d-block w-100 d-img" alt="slider1">
          
          <div class="carousel-caption top-0 mt-4">
              <p class="mt-5 fs-3 text-uppercase">
                  El programa Nacional de Escuelas de Iniciacion Artisticas Asociadas , surge como linea estrategica 
                  del instituto Nacional de Bellas Artes para el fortalecimiento de la educacion artistica del pais ,
                  esta dirigido a instituciones y organismos publicos y civiles interesados en impulsar la educacion
                  artistica inicial en las entidades federativas , municipios y delagaciones politicas. 
                  </p>

          </div>

        </div>

        <div class="carousel-item active d-item">
          <img src="/IMG/rrr.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption top-0 mt-4">
         <h1 class="display-1 fw-bolder text-uppercase">Mision:</h1>
         <p class="mt-5 fs-3 text-uppercase">
          Ser una orquesta que promueve el desarrollo humano y artístico en niños , niñas , adolescentes y jóvenes del municipio 
          de Uruapan , afín de enfocar su atención tiempo y energías en conocimientos ser artistas atraves de la música,
          encauzando de esta manera , su tiempo libre en acciones que impacten de manera su información integral. 
          </p>

        </div>
      </div>
      <div class="carousel-item active d-item">
        <img src="/IMG/vvv.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption top-0 mt-4">
       <h1 class="display-1 fw-bolder text-uppercase">Vision:</h1>
       <p class="mt-5 fs-3 text-uppercase">
        Ser una orquesta infantil y juvenil sustentable representativa del municipio de uruapan Michoacán, 
        Que incluya a niños, niñas y jóvenes de todos los sectores de la sociedad sin distinción de condición
        Física, económica, sociocultural y distribuir en la recomposición del tejido social 
    
        </p>

      </div>
    </div>

    <div class="carousel-item active d-item">
      <img src="/IMG/sss.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption top-0 mt-4">
     <h1 class="display-1 fw-bolder text-uppercase">Objetivo:</h1>
     <p class="mt-5 fs-3 text-uppercase">
      Promover su desarrollo humano y artístico, mismo que les permita cultivar en sus primeros años de información,
      el acervi cultural musical tanto universal , como tradicional de nuestra región ; Siendo esto fundamental 
      Importancia ,toda vez que entendemos el conociendo nuestro pasado y respetando muestre entidad cultural ,
      podemos con una visión de autoestima por nuestra comunidad y respeto por otras culturas 
   
      </p>

    </div>
  </div>


      </div>


      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</section>
</nav>
<br>
<div class="column-container">
  <div class="column">
    <div class="column-title">Propósitos:</div>
    <div class="column-content">
      <ul>
        <li>Brindar educación artística que permita a niños y jóvenes expresarse a través de los lenguajes del arte, con el uso adecuado a los principios técnicos disciplinarios.</li>
        <li>Propiciar elementos teóricos y conceptuales para la apreciación de las manifestaciones artísticas con un criterio fundamentado.</li>
        <li>Desarrollar la capacidad creativa y de pensamiento de niños y jóvenes a través de las artes.</li>
        <li>Promover el sentido de comunidad de pertenencia social a través del arte.</li>
        <li>Reconocer y valorar el patrimonio artístico y cultural local, regional, nacional e internacional.</li>
        <li>Contribuir al cumplimiento de los derechos sociales y culturales de los niños y jóvenes, de acceder a la educación artística como medio para lograr su pleno desarrollo personal, y como ciudadano.</li>
      </ul>
    </div>
  </div>
  <div class="column">
    <div class="column-title">Destinatarios:</div>
    <div class="column-content">
      El programa Nacional de Escuelas de Iniciación Artística Asociadas está dirigido a niños y jóvenes.
    </div>
    <div class="column-title">Las disciplinas que se impartirán son:</div>
    <div class="column-content">
      <ul>
        <li>Danza</li>
        <li>Teatro</li>
        <li>Música</li>
        <li>Artes plásticas y visuales</li>
      </ul>
    </div>
  </div>
  <div class="column">
    <div class="column-title">Perfil de Ingreso:</div>
    <div class="column-content">
      El Programa Nacional de Escuelas de Iniciación Artística Asociadas es una propuesta educativa abierta, plural e incluyente, por lo que el único requisito para el aspirante es manifestar su interés por el estudio de alguno de los lenguajes artísticos que se ofrecen en danza, música, teatro o artes plásticas y visuales, así como mostrar disposición y compromiso para adaptarse al trabajo individual o grupal.
    </div>
    <div class="column-title">Perfil de Egreso:</div>
    <div class="column-content">
      Al finalizar los estudios propuestos en el Programa Nacional de Escuelas de Iniciación Artística Asociadas, el egresado podrá:
      <ul>
        <li>Mostrar el saber y las habilidades para hacer uso de los elementos básicos del lenguaje artístico estudiado, que le permitan comunicar de manera creativa sus pensamientos, emociones, sentimientos, vivencias e ideas respecto de los temas del entorno y de su propio ejercicio de expresión.</li>
        <li>Demostrar a partir de su vinculación con las artes un sentido de pertenencia y compromiso social con su entorno y patrimonio cultural.</li>
        <li>Contar con bases formativas adecuadas para acceder a otros niveles de educación formal en el campo de las artes.</li>
      </ul>

      <div>
      Al finalizar los estudios propuestos en el Programa Nacional de Escuelas de Iniciación Artística  
      Asociadas, el egresado podrá: 
  <ul>
<li>Mostrar el saber y las habilidades para hacer uso de los elementos básicos del lenguaje artístico estudiado, que le permitan comunicar de manera creativa sus pensamientos, emociones, sentimientos, vivencias e ideas respecto de los temas del entorno y de su propio ejercicio de expresión. </li>
<li>Demostrar a partir de su vinculación con las artes un sentido de pertenencia y compromiso social con su entorno y patrimonio cultural.</li>

<li>Contar con bases formativas adecuadas para acceder a otros niveles de educación formal en el campo de las artes. 
</li>
  </ul>

  <div>
  La Orquesta sinfónica Infantil y Juvenil De Uruapan, es un proyecto cultural, por lo que el único requisito 
  para el aspirante es manifestar su interés por algún instrumento, así como mostrar disposición y compromiso
  y compromiso para adaptarse al trabajo individual o grupal. 

  </div>

  <div>
        El programa de la orquesta se enfoca en niños y jóvenes de 10 a 19 años.
        El instrumento se puede elegir según la edad del niño, joven o adolescente,
        los días y los horarios para la clase de instrumento y solfeo se asignan 
        dependiendo del instrumento. 
       
        Este proyecto no tiene tiempo alguno en el cual el alumno tenga que permanecer en
        la orquesta, siempre y cuando cumpla con la disciplina correcta basada en el reglamento 
        del Centro Integral de Iniciación Artística. 

  </div>
      </div>
    </div>
    <div class="column-title">Ciclos de etapas de formación:</div>
    <div class="column-content">
      El progreso de formación del Programa está estructurado en tres etapas:
      <ol>
        <li>Acercamiento a las Artes<br>
        Se lleva a cabo una exploración de los lenguajes musical, dancístico, teatral y visual como formación inicial que brinde un panorama de las cuatro áreas artísticas, a la vez que permita a las y los alumnos descubrir sus intereses y capacidades por uno de ellos (un semestre)</li>
        <li>Introducción al campo artístico:<br>
        Se identifican los diferentes géneros y campos de expresión , creación e interpretación que ofrecen las disciplinas artísticas tales como el teatro y la práctica escénica, la danza clásica, contemporánea o mexicana; instrumentos de cuerdas. Percusiones o alientos además del piano; la pintura, escultura o grabado, entre otras con el fin de sustentar con mayores elementos la elección de la especialidad u orientación que deseen cursar los estudiantes (un semestre)</li>
        <li>Iniciación a la especialidad artística:<br>
        Se realizan estudios específicos de los aspectos teóricos, técnicos, y prácticos que implican la expresión, creación, interpretación y asociación de la orientación que haya seleccionado el alumno. (Cuatro semestres)<br>
        De manera paralela a partir de la segunda etapa, el alumno deberá participar en los talleres interdisciplinarios de proyectos, mediante los cuales se enriquecerá su formación al incorporar elementos de las disciplinas que no esté cursando y para realizar proyectos creativos acordes con sus intereses y las posibilidades que le ofrezca su entorno.</li>
      </ol>
    </div>
    <div class="column-title">Duración:</div>
    <div class="column-content">
      El programa Nacional de Escuelas de Iniciación Artística Asociadas contempla una duración de estudios de 3 años, divididos en seis semestres , al término de estos tres años se otorga una constancia de estudios emitida por el INBAL, La SECUM y la Escuela donde el alumno haya concluido sus estudios.
    </div>
  </div>
</div>

<br>

<div class="column-container">
  <div class="column">
    <div class="column-title">Descargar Archivos para su inscripcion</div>
    <div class="column-content">
      <a class="download-link" href=""  class="btn btn-dark" download>Descargar Estudio Socioeconómico</a>
    </div>
    <div class="column-content">
      <a class="download-link"  href="" class="btn btn-dark" download>Descargar Solicitud de Ingreso</a>
    </div>
  </div>
  <div class="column">
    <div class="column-title">REQUISITOS GENERALES DE ADMISIÓN:</div>
    <div class="column-content">
      <ul>
        Presentar copia de los siguientes documentos:
        <li> Acta de Nacimiento</li>
        <li> CURP</li>
        <li> Certificado total, boleta o constancia de ultimo grado de estudios</li>
        <li> Dos fotografías tamaño infantil de frente, blanco y negro o a color</li>
        <li> Solicitud de Ingreso (el formato será entregado en la escuela el día de la revisión de documentos)</li>
        <li> Certificado Médico (el formato será entregado en la escuela el día de la revisión de documentos)</li>
        <li> Estudio Socioeconómico (el formato será entregado en la escuela el día de la revisión de documentos)</li>
        <li> Cubrir los gastos de inscripción correspondientes</li>
      </ul>
      <p>Inscripción única: $96</p>
      <p>Mensualidad: $192</p>
    </div>
  </div>
</div>
<nav>
<section>
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span></span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>CIIA
          </h6>
          <p>
            El programa Nacional de Escuelas de Iniciacion Artisticas Asociadas , surge como linea estrategica 
             del instituto Nacional de Bellas Artes para el fortalecimiento de la educacion artistica del pais ,
              esta dirigido a instituciones y organismos publicos y civiles interesados en impulsar la educacion
                artistica inicial en las entidades federativas , municipios y delagaciones politicas
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Disciplinas 
          </h6>
          <p>
            <a href="#!" class="text-reset">EIIA</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orquesta sinfonica</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Informacion
          </h6>
          <p>
            <a href="#!" class="text-reset">Inscripcion</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Ubicacion</a>
          </p>
         
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
          <p><i class="fas fa-home me-3"></i> Avenida Villamar No. 999 Colonia Villas de Jaraco</p>
          <p>
            Uruapan , Michoacan
          </p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            eiia.uruapannba.edu.mx 
          </p>
          <p><i class="fas fa-phone me-3"></i> + 452 690 0709</p>
         
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 CIIA:
    <a class="text-reset fw-bold" href="">Escuela De Iniciacion Artistica Asociada </a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</section>
</nav>



</body>
    </div>
 
@endsection