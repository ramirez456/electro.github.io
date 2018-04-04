@extends('app')
	@section('contenido')		
		
		<div id="crud" class="col-row">
			<div class="col-xs-12">
				<h1 class="page-header">Crud laravel con VUE de max</h1>
			</div>
			<div class="col-xs-7">
				<a href="#" id="" class="btn btn-primary pull-right" data-toggle='modal' data-target='#create'>Nueva tarea</a>
			
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Ruc</th>
							<th>Direccion</th>
							<th>Telefono</th>
							<th>Acciones</th>
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
								<a href="#" class="btn btn-warning btn-sm" v-on:click.prevent =   'editKeep(k)'>Editar</a>&nbsp;
								<a href="#" class="btn btn-danger  btn-sm" v-on:click.prevent = 'deleteKeep(k)'>Elminar</a>
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
			<div class="col-xs-5">
				<pre>
					@{{ $data }}
				</pre>
			</div> 
			
		</div>

	@endsection