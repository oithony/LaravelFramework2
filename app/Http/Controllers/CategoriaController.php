<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaModel;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categorias.index');
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
    public function show(CategoriaModel $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoriaModel $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoriaModel $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoriaModel $categoria)
    {
        //
    }
}
