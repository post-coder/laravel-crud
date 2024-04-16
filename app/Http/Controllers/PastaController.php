<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePastaRequest;
use App\Models\Pasta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

        return view('pastas.index', compact('pastas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pastas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePastaRequest $request)
    {
        
        // creiamo una nuova pasta

        // $this->validation($request->all());

        $request->validated();

        
        // codice per validare la nostra richiesta
        // fare i controlli opportuni per far sì che i dati siano validi prima di essere inseriti nel db
        
       
        
        // dd($request);

        $newPasta = new Pasta();

        // $newPasta->title = $request->title;
        // $newPasta->description = $request->description;
        // $newPasta->type = $request->type;
        // $newPasta->src = $request->src;
        // $newPasta->cooking_time = $request['cooking-time'];
        // $newPasta->weight = $request->weight;

        // dopo aver inserito i fillable nel model possiamo utilizzare questo
        $newPasta->fill($request->all());

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
        return view('pastas.show', compact('pasta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasta $pasta)
    {

        return view('pastas.edit', compact('pasta'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePastaRequest $request, Pasta $pasta)
    {
        // dd($request, $pasta);
        // $this->validation($request->all());

        $request->validated();

        
        // codice per modificare il record 
        // $pasta->title = $request->title;
        // $pasta->description = $request->description;
        // $pasta->type = $request->type;
        // $pasta->src = $request->src;
        // $pasta->cooking_time = $request['cooking-time'];
        // $pasta->weight = $request->weight;
        $pasta->update($request->all());

        $pasta->save();

        return redirect()->route('pastas.show', $pasta->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasta $pasta)
    {

        $pasta->delete();

        return redirect()->route('pastas.index');
        
    }



}
 