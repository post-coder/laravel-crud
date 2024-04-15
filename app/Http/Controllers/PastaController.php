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
    public function store(Request $request)
    {
        
        // creiamo una nuova pasta

        
        
        // codice per validare la nostra richiesta
        // fare i controlli opportuni per far sì che i dati siano validi prima di essere inseriti nel db
        
        // tramite il metodo validate() controlliamo delle regole scelte da noi per i vari campi che riceviamo dal form
        // in caso le validazioni non vadano a buon fine (ne basta una sbagliata), laravel in automatico farà tornare l'utente indietro
        // e fornirà alla pagina precedente le indicazioni sull'errore
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:1000',
            'type' => 'required|max:80',
            'src' => 'nullable|max:255',
            'cooking_time' => 'required|max:10',
            'weight' => 'required|max:10'
        ]);
        
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
    public function update(Request $request, Pasta $pasta)
    {
        // dd($request, $pasta);
        
        // codice per modificare il record 
        $pasta->title = $request->title;
        $pasta->description = $request->description;
        $pasta->type = $request->type;
        $pasta->src = $request->src;
        $pasta->cooking_time = $request['cooking-time'];
        $pasta->weight = $request->weight;

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
