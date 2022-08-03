@extends('Plantilla')
@section('content')
<br><br><br><br>
<form action="{{ url('/citas')}}" method="POST">
    {{ csrf_field() }}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Citas') }}</div>

                <div class="card-body">
                    <label for="nombre" class="col-md-4 col-form-label text-md-end">{{'Nombre'}}</label>
                    <input id="Txtnom" type="text" class="form-control"> 
                    <label for="Apellido_Paterno" class="col-md-4 col-form-label text-md-end">{{'Apellido paterno'}}</label>
                    <input id="txtApe_Pat" type="text" class="form-control">
                    <label for="Apellido_Materno" class="col-md-4 col-form-label text-md-end">{{'Apellido materno'}}</label>
                    <input id="txtApe_Mat" type="text" class="form-control">
                    <label for="Edad" class="col-md-4 col-form-label text-md-end">{{'Edad'}}</label>
                    <input id="txtEdad" type="text" class="form-control">
                    <label for="Tel" class="col-md-4 col-form-label text-md-end">{{'Telefono'}}</label>
                    <input id="TxtTel" type="text" class="form-control">
                   
                    <br>
                    <button type="submit" class="btn btn-primary">{{'Agendar cita'}}</button> 
                </div>
            </div>
        </div>
    </div>
</div>
</form>