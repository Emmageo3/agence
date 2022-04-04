<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propriete;
use App\Models\Proprietaire;
use App\Models\Typepropriete;
use App\Models\Quartier;
use App\Http\Requests\Propriete as ProprieteRequest;

class ProprieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        $query = $id ? Proprietaire::whereId($id)->firstOrFail()->proprietes() : Propriete::query();
        $proprietes = Propriete::paginate(5);
        $proprietaires = Proprietaire::all();
        return view('proprietes', compact('proprietes', 'proprietaires', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proprietaires = Proprietaire::all();
        $typeproprietes = Typepropriete::all();
        $quartiers = Quartier::all();
        return view('create', compact('proprietaires', 'typeproprietes', 'quartiers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProprieteRequest $proprieteRequest)
    {
        Propriete::create($proprieteRequest->all());
        return redirect()->route('proprietes.index')->with('info', 'La propriété a bien été enregistrée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Propriete $propriete)
    {
        return view('propriete', compact('propriete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Propriete $propriete)
    {
        $typeproprietes = Typepropriete::all();
        $quartiers = Quartier::all();
        return view('edit', compact('propriete', 'typeproprietes', 'quartiers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProprieteRequest $proprieteRequest, Propriete $propriete)
    {
        $propriete->update($proprieteRequest->all());
        return redirect()->route('proprietes.index')->with('info', 'La propriete a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propriete $propriete)
    {
        $propriete->delete();
        return back()->with('info', 'Cette propriété a bien été supprimée.');
    }
}
