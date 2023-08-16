@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
 
                <div class="card-body">
                    @if(auth()->user()->is_admin == 1)
                    <a href="{{url('admin/routes')}}"></a>
                   
                    @else
                    <div class=”panel-heading”></div>
                    Administrador Registro  
                    
                    @endif
                </div>                
            </div>
        </div>
    </div>
</div>
<br>
<div>
    <div>
    <H1>Pulsa para ver el listado  </H1>
    <a href="/home/nre/index">Ver el listado</a>
    </div>
<div>



@endsection
