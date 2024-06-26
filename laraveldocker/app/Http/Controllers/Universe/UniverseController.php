<?php

namespace App\Http\Controllers\Universe;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\Color;
use App\Models\Universe;
use App\Models\User;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universes = Universe::all()->sortBy('name');
        $universes_max = Universe::all()->max('load');

        return view('universe.index', compact('universes', 'universes_max'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('universe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\App\Http\Requests\Universe\StoreRequest $request)
    {
        $data = $request->validated();
        Universe::firstOrCreate($data);

        return redirect()->route('universe.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Universe $universe)
    {
        return view('universe.show', compact('universe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Universe $universe)
    {
        return view('universe.edit', compact('universe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\App\Http\Requests\Universe\UpdateRequest $request, Universe $universe)
    {
        $data = $request->validated();
        $universe->update($data);

        return view('universe.show', compact('universe'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Universe $universe)
    {
        $universe->delete();
        return redirect()->route('universe.index');
    }
}
