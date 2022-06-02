<?php

namespace App\Http\Controllers;
use App\Models\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        
        $packages= Package::get();
        return view('package.crea-paquete', compact('packages') );
    }
    public function index2()
    {
        $packages= Package::get();
        return view('anonimo.package', compact('packages') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $package= new Package;
        $data= $request->all();
        $package->name= $data['name'];
        $package->descripcion= $data['descripcion'];
        $package->imagen= $data['imagen'];
        $package->price= $data['price'];
        $package->status= $data['status'];
        $package->save();

        /*
        $packages= Package::get();
        return view('cliente.package', compact('packages') );
        */
        return view('package.crea-paquete');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //public function update(Request $request, $id)
    public function update(Request $request, $id)
    {
        $package= Package::find($id);
        $data= $request->all();
        $package->name= $data['name'];
        $package->descripcion= $data['descripcion'];
        $package->imagen= $data['imagen'];
        $package->price= $data['price'];
        $package->status= $data['status'];
        $package->save();
        return view('package.edita-paquete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $package= Package::where('id',$id)->first();

        $package->delete();

        return back();
    }
}
