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
        // salvare dei dati nella tabella
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasta $pasta)
    {
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
