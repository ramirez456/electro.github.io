@extends('layout.admin')
@section('titulo')
	Productos
@endsection
@section('alertas')
	<div id="notificaciones_result"></div>
@endsection
@section('contenido')
		<div class="tab-button ">

		  <div class="tab active" >
		    <i class="fa fa-archive"></i>&nbsp;&nbsp;<p>Principal</p>
		  </div>
		  <!-- <div class="tab" >
		    <i class="fa fa-expeditedssl"></i>&nbsp;&nbsp;<p>Marcas</p>
		  </div> -->
		</div>
		<div class="profile-empresa-content" id="crud">
		  	<div class="profile-tab active" >
				<div class="top-producto">
					<h4>Principal</h4>
					<div class="button-wrapper">
						
					</div>
				</div>
				<div class="panel panel-default no-radius">
					
				</div>		
			</div>
		</div>
		
@endsection