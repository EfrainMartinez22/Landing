@extends('Plantilla')
@section('mapa')

<div class="container text-center">
    <x-maps-leaflet
        :centerPoint="['lat' => 21.480763545494007, 'long' => -104.84948221428901]"
        :zoomLevel="50"></x-maps-leaflet
        :marker="[['lat' => 21.480763545494007, 'long' => -104.84948221428901]]">
        </x-maps-leaflet> 
</div>