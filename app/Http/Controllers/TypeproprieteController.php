<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typepropriete;
use App\Http\Requests\Typepropriete as TypeproprieteRequest;

class TypeproprieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeproprietes = Typepropriete::paginate(5);
        return view('types/index', compact('typeproprietes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('types/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeproprieteRequest $typeproprieteRequest)
    {
        Typepropriete::create($typeproprieteRequest->all());
        return redirect()->route('typeproprietes.index')->with('info', 'Le type de propriété a bien été enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Typepropriete $typepropriete)
    {
        $typeproprietes = Typepropriete::all();
        return view('types/show', compact('typepropriete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Typepropriete $typepropriete)
    {
        return view('types/edit', compact('typepropriete'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
