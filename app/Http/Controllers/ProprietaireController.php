<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propriete;
use App\Models\Proprietaire;
use App\Http\Requests\Proprietaire as ProprietaireRequest;

class ProprietaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $proprietaires = Proprietaire::paginate(5);
        $proprietes = Propriete::all();
        return view('proprietaires', compact('proprietaires', 'proprietes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createproprietaire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProprietaireRequest $proprietaireRequest)
    {
        Proprietaire::create($proprietaireRequest->all());
        return redirect()->route('proprietaires.index')->with('info', 'Le propriétaire a bien été enregistrée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proprietaire $proprietaire)
    {
        $proprietes = Propriete::all();
        return view('proprietaire', compact('proprietaire', 'proprietes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Proprietaire $proprietaire)
    {
        return view('editproprietaire', compact('proprietaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProprietaireRequest $proprietaireRequest, Proprietaire $proprietaire)
    {
        proprietaire->update($proprietaireRequest->all());
        return redirect()->route('proprietaires.index')->with('info', 'Le proprietaire a bien été modifiée');
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
