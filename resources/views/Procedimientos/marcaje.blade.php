@extends('plantilla')

@section('galeria')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bc">
 	<li class="breadcrumb-item"><a href="/">Inicio</a></li>
	<li class="breadcrumb-item"><a href="/galeria">Galeria</a></li>
    <li class="breadcrumb-item active" aria-current="page">Marcaje de cara</li>
  </ol>
</nav>
<section id="galeria" class="container">
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<img src="Galeria/marcaje/mrc_1.png">
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<img src="Galeria/marcaje/mrc_2.png">
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<img src="Galeria/marcaje/mrc_3.jpg">
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<img src="Galeria/marcaje/mrc_4.jpg">
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<img src="Galeria/marcaje/mrc_5.jpg">
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<img src="Galeria/marcaje/mrc_6.png">
		</div>
	</div>
</section>
@endsection
