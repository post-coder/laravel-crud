<?php

namespace App\Http\Controllers;

use App\Models\Pasta;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class PastaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // visualizzare tutte le righe dalla tabella pastas
        $pastas = Pasta::all();

        // dd($pastas);

        return view('pasta.index', compact('pastas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // creiamo una nuova pasta

        // dd($request);

        $newPasta = new Pasta();

        $newPasta->title = $request->title;
        $newPasta->description = $request->description;
        $newPasta->type = $request->type;
        $newPasta->src = $request->src;
        $newPasta->cooking_time = $request['cooking-time'];
        $newPasta->weight = $request->weight;

        $newPasta->save();

        // spostiamo l'utente nella index
        return redirect()->route('pastas.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Pasta $pasta)
    {
        // se scriviamo tra le parentesi del metodo show() direttamente che vogliamo ricevere un oggetto di tipo Pasta, 
        // Laravel va a prenderla dal database in automatico per noi
        return view('pasta.show', compact('pasta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
