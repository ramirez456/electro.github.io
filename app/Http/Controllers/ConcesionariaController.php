<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Concesionaria;



class ConcesionariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $concesionaria = Concesionaria::get();
        // return $concesionaria;
        $concesionaria = Concesionaria::paginate(3);
        return [ 
            'pagination' => [
                'total'         =>  $concesionaria->total(),
                'current_page'  =>  $concesionaria->currentPage(),
                'per_page'      =>  $concesionaria->perPage(),
                'last_page'     =>  $concesionaria->lastPage(),
                'from'          =>  $concesionaria->firstItem(),
                'to'            =>  $concesionaria->lastPage(),
            ],
            'empresas' => $concesionaria
        ];
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //mopstrart  un formulario
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'razon' => 'required',
            'ruc' => 'required',
            'direccion' => 'required'
        ]);        
        Concesionaria::create($request->all());
        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $concesionaria = Concesionaria::findOrFail($id);
    //     //formulario
    //     return $concesionaria;
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $concesionaria = Concesionaria::findOrFail($id);
        //formulario
        $request->validate([
            'razon' => 'required',
            'ruc' => 'required',
            'direccion' => 'required'
        ]);        
        Concesionaria::find($id)->update($request->all());
        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $concesionaria = Concesionaria::findOrFail($id);
        //formulario
        $concesionaria->delete();
        
        return $concesionaria;
    }
}
