@extends('layout.admin')
@section('titulo')
	Procesos
@endsection
@section('alertas')
	<div id="notificaciones_result"></div>
@endsection
@section('contenido')
		<div class="tab-button ">

		  <div class="tab active" >
		    <i class="fa fa-archive"></i>&nbsp;&nbsp;<p>Concesionaria</p>
		  </div>
		  <!-- <div class="tab" >
		    <i class="fa fa-expeditedssl"></i>&nbsp;&nbsp;<p>Marcas</p>
		  </div> -->
		</div>
		<div class="profile-empresa-content" id="crud">
		  	<div class="profile-tab active" >
				<div class="top-producto">
					<h4>Procesos</h4>
					<div class="button-wrapper">
						<button type="button" id="nuevo-producto" class="btn btn-primary btn-primary2" data-toggle='modal' data-target='#create'><i class="fa fa-plus"></i>&nbsp; nuevo</button>
					</div>
				</div>
				<div class="panel panel-default no-radius">
					<div class="box-body table-data table-responsive ">
						<table class="table table table-hover table-result  width-all" >
							<thead>
								<tr>
									<th>ID</th>
									<th>Razon Social</th>
									<th>Ruc</th>
									<th>Direccion</th>
									<th>Telefono</th>
									<th width="350px">Acciones</th>
								</tr>						
							</thead>
							<tbody>
								<tr v-for="k in keeps">
									<td>@{{k.id}}</td>
									<td>@{{k.razon}}</td>
									<td>@{{k.ruc}}</td>
									<td>@{{k.direccion}}</td>
									<td>@{{k.telefono}}</td>
									<td>
										<a href="#" class="btn btn-warning btn-xs" v-on:click.prevent =   'editKeep(k)'>Editar</a>&nbsp;
										<a href="#" class="btn btn-danger  btn-xs" v-on:click.prevent = 'deleteKeep(k)'>Elminar</a>
									</td>
								</tr>
							</tbody>
						</table>
						<nav>
							<ul class="pagination">
								<li v-if="pagination.current_page > 1">
									<a href="#" @click.prevent="changePage(pagination.current_page - 1)">
										<span>Atras</span>
									</a>
								</li>

								<li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '']">
									<a href="#" @click.prevent="changePage(page)">
										@{{ page }}
									</a>
								</li>

								<li v-if="pagination.current_page < pagination.last_page">
									<a href="#" @click.prevent="changePage(pagination.current_page + 1)">
										<span>Siguiente</span>
									</a>
								</li>					
							</ul>
						</nav>
						@include('create')
						@include('edit')
					</div>
				</div>		
			</div>
		</div>
		
@endsection

