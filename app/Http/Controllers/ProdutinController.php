<?php

namespace App\Http\Controllers;

use App\Models\ProdutinModel;
use Illuminate\Http\Request;

class ProdutinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = array(
        'celular' => 2, 
        'computador' => 6, 
        'teclado' => 29,
        'monitor' => 22, 
        'mouse' => 14, 
        'led' => 7
        );
        return view('produtos.index')->with('produtos', $produtos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(ProdutinModel $produtin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProdutinModel $produtin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProdutinModel $produtin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProdutinModel $produtin)
    {
        //
    }
}
