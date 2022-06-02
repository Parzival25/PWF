<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $party= Party::all();

        $TablaJson="";
        for($i=0;$i<count($party);$i++){
        $gestionar="<a class='btn btn-warning btn-sm'><i class='fas fa-edit'></i></a>";
        $TablaJson.='{
        "ID":"'.$party[$i]->{"id"}.'",
        "NAME":"'.$party[$i]->{"name"}.'",
        "DESCRIPTION":"'.$party[$i]->{"descripcion"}.'",
        "CONFIRMED":"'.$party[$i]->{"confirmed"}.'",
        "GESTIONAR":"'.$gestionar.'"
        },';
        }
        $DatoJson = substr($TablaJson,0,strlen($TablaJson)-1);
        $FormatoJSON='{"party":['.$DatoJson.']}';
        echo $FormatoJSON;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           
        return view('party.crear-fiesta');
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

    public function list()
    {
       
        return view('party.party.lista-fiestas');
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
    public function update()
    {
            
            return view('party.editar-fiesta');
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
    }
}
