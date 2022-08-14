@extends('plantilla')

@section('galeria')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bc">
    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
	<li class="breadcrumb-item"><a href="/galeria">Galeria</a></li>
    <li class="breadcrumb-item active" aria-current="page">Bichectomia</li>
  </ol>
</nav>
<section id="galeria" class="container">
		<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<img src="Galeria/biche/bch_1.jpg">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<img src="Galeria/biche/bch_2.jpg">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<img src="Galeria/biche/bch_3.jpg">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<img src="Galeria/biche/bch_4.jpg">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<img src="Galeria/biche/bch_5.jpg">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<img src="Galeria/biche/bch_6.jpg">
				</div>
			</div>
	</section>
@endsection
