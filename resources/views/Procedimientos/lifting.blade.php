@extends('plantilla')

@section('galeria')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bc">
  	<li class="breadcrumb-item"><a href="/">Inicio</a></li>
	<li class="breadcrumb-item"><a href="/galeria">Galeria</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lifting de labios</li>
  </ol>
</nav>
	<section id="galeria" class="container">
		<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<img src="Galeria/lifting/lif_1.jpg">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<img src="Galeria/lifting/lif_2.jpg">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<img src="Galeria/lifting/lif_3.jpg">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<img src="Galeria/lifting/lif_4.jpg">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<img src="Galeria/lifting/lif_5.jpg">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<img src="Galeria/lifting/lif_6.jpg">
				</div>
			</div>
	</section>
@endsection
