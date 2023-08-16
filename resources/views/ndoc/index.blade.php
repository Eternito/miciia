@extends('layout.app')
 
@section('body')

<div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de documentos </h1>
        <a href="{{ route('ndoc.create') }}" class="btn btn-primary">Agregar documentos</a>
    </div>
   
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
               
                <th>curp</th>
                <th>Certificado</th>
                <th>Solicitud</th>
                <th>Certificado Medico</th>
                <th>Estudio Socio Economico</th>
               

             
            </tr>
        </thead>
        <tbody>
            @if($reg->count() > 0)
                @foreach($reg as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                      
                        <td class="align-middle"><a class="btn btn-dark" href="Documentos/{{ $rs->curp }}" target="blank_"> Ver documento</td>
                        <td class="align-middle"><a class="btn btn-dark" href="Documentos/{{ $rs->ct}}" target="blank_"> Ver documento</td>
                        <td class="align-middle"><a class="btn btn-dark" href="Documentos/{{ $rs->cm }}" target="blank_"> Ver documento</td>
                        <td class="align-middle"><a class="btn btn-dark" href="Documentos/{{ $rs->si}}" target="blank_"> Ver documento</td>
                        <td class="align-middle"><a class="btn btn-dark" href="Documentos/{{ $rs->es }}" target="blank_"> Ver documento</td>
                      
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href=" " type="button" class="btn btn-secondary">Detail</a>
                                <a href="" type="button" class="btn btn-warning">Edit</a>
                                <form action="}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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