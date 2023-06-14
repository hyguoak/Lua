<?php

namespace App\Http\Controllers;


use App\Models\Trilhas;
use Illuminate\Http\Request;

class TrilhasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show()
    {
        return view('trilhas.show');
    }

    public function sistemas(Trilhas $trilhas)
    {
        return view('trilhas.sistemas');
    }

    public function jogos(Trilhas $trilhas)
    {
        return view('trilhas.jogos');
    }

    public function animacao(Trilhas $trilhas)
    {
        return view('trilhas.animacao');
    }

    public function design(Trilhas $trilhas)
    {
        return view('trilhas.design');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trilhas $trilhas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trilhas $trilhas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trilhas $trilhas)
    {
        //
    }
}
