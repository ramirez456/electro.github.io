new Vue({
	el: '#crud',

	created: function(){
		this.getKeeps();
	},		

	data: {
		keeps: [],
		newrazon: '',
		newruc: '',
		newdireccion: '',
		newtelefono: '',
		fillKeep: {'id': '', 'razon': '', 'ruc': '', 'direccion': '', 'telefono': ''},
		pagination: {
			'total' :  0,
            'current_page' :  0,
            'per_page' :  0,
            'last_page' :  0,
            'from' :  0,
            'to' :  0,
		},
		errors: []

	},
	computed: {
		isActived: function() {
			return this.pagination.current_page;
		},
		pagesNumber: function(){
			if(!this.pagination.to){
				return [];
			}
			var from = this.pagination.current_page - 2; //TODO offset
			if(from<1){
				from = 1;
			}
			var to = from +(2*2); 
			if(to >= this.pagination.last_page){
				to = this.pagination.last_page;
			}
			var pagesArray= [];

			while(from <= to){
				pagesArray.push(from);
				from++;
			}
			return pagesArray;
		}
	},	
	methods: {
		getKeeps: function(page){
			var urlKeeps = 'empresas?page='+page;
			axios.get(urlKeeps).then(response =>{
				this.keeps = response.data.empresas.data,
				this.pagination = response.data.pagination
			});
		},
		deleteKeep: function(keep){			
			var url = 'empresas/'+keep.id;
			axios.delete(url).then(response => {
				this.getKeeps();
				toastr.success('Eliminado correctamente');
			});	
		},
		editKeep: function(keep){
			this.fillKeep.id = keep.id;
			this.fillKeep.razon = keep.razon;
			this.fillKeep.ruc = keep.ruc;
			this.fillKeep.direccion = keep.direccion;
			this.fillKeep.telefono = keep.telefono;
			$('#edit').modal('show');
		},
		updateKeep: function(id){			
			var url = 'empresas/'+id;
			axios.put(url, this.fillKeep).then(response=>{
				this.getKeeps();
				this.fillKeep = {'id': '', 'razon': '', 'ruc': '', 'direccion': '', 'telefono': ''};
				this.errors = [];
				$('#edit').modal('hide');
				toastr.success('Tarea actualizada correctamente');
			}).catch( error=>{
				this.errors = error.response.data
			});
		},
		createKeep:function(){
			var url = 'empresas';
			axios.post(url,{
				razon: this.newrazon,
				ruc: this.newruc,
				direccion: this.newdireccion,
				telefono: this.newtelefono
			}).then(response =>{
				this.getKeeps();
				this.newrazon='';
				this.newruc='';
				this.newdireccion='';
				this.newtelefono='';
				this.errors=[];
				$('#create').modal('hide');
				toastr.success('Nueva empresa creada con exitos');

			}).catch( error => {
				this.errors = error.response.data
			});
		},
		changePage: function(page){
			this.pagination.current_page = page;
			this.getKeeps(page);
		}

	}
});

new Vue({
	el: '#proceso',

	created: function(){
		alert('estamos al inicio');
	},		

	data: {
		keeps: [],
		newrazon: '',
		newruc: '',
		newdireccion: '',
		newtelefono: '',
		fillKeep: {'id': '', 'razon': '', 'ruc': '', 'direccion': '', 'telefono': ''},
		pagination: {
			'total' :  0,
            'current_page' :  0,
            'per_page' :  0,
            'last_page' :  0,
            'from' :  0,
            'to' :  0,
		},
		errors: []

	}
	

});
