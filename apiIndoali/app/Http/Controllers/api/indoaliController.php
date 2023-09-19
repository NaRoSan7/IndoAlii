<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Indoali;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Http\Controllers;

class IndoaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dadosIndoali = Indoali::All();
        $contador = $dadosIndoali->count();

        return 'Músicas: '.$contador.  $dadosIndoali. Response()->json([], Response::HTTP_NO_CONTENT);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dadosIndoali = $request->All();

        $valida = Validator::make($dadosIndoali, [
            'nomeGato'=> 'required',
            'marcaGato'=> 'required',
        ]);

        if($valida->fails()){
            return 'Dados inválidos'.$valida->errors(true). 500;
        }
            $indoalibd = Indoali::create($dadosindoali);
        if($indoalibd){
            return 'Gato cadastrado '.Response()->json([], Response::HTTP_NO_CONTENT); 
        }else{
            return 'Gato não cadastrado '.Response()->json([], Response::HTTP_NO_CONTENT);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Indoalibd = Indoali::find($id);
        $contador = $Indoali->count();

        if($Indoalidb){
            return 'Gatos encontrados: '.$contador.' - '.$Indoalidb.response()->json([],Response::HTTP_NO_CONTENT); 
        }else{
            return 'Gato não localizado.'.response()->json([],Response::HTTP_NO_CONTENT); 
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Indoalibd = $request->All();

        $valida = Validator::make($Indoali,[
            'nomeGato'=> 'required',
            'marcaGato'=> 'required',
        ]);

        if($valida->fails()){
            return 'Dados incompletos'.$valida->errors(true). 500;
        }

        $Indoalibd = Indoali::find($id);
        $Indoalibd->nomeGato = $indoaliDados['nomeGato'];
        $Indoalibd->nomeGato = $IndoaliDados['nomeGato'];

        $RegistrosIndoali = $Indoalidb->save();
        if($RegistrosIndoali){
            return 'Dados alterados com sucesso.'.Response()->json([], Response::HTTP_NO_CONTENT);
        }else{  
            return 'Dados não alterados no banco de dados'.Response()->json([], Response::HTTP_NO_CONTENT);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Indoalibd = Indoali::find($id);
        if($Indoalibd){
            $Indoalibd->delete();
            return 'O Gato foi deletado com sucesso.'.response()->json([],Response::HTTP_NO_CONTENT); 
        }else{
            return 'O Gato Não foi deletado com sucesso.'.response()->json([],Response::HTTP_NO_CONTENT); 
        }
    }
}