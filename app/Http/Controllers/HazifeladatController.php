<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeladatRequest;
use App\Models\Hazifeladat;

class HazifeladatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feladatok = Hazifeladat::all();
        return view('feladatok.index', [ 'feladatok' => $feladatok ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feladatok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hazifeladat  $feladat
     * @return \Illuminate\Http\Response
     */
    public function store(FeladatRequest $request)
    {
        $adatok = $request->only(['link', 'szoveges', 'jegy']);
        $feladat = new Hazifeladat();
        $feladat->fill($adatok);
        $feladat->save();
        return redirect()->route('feladatok.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hazifeladat  $feladat
     * @return \Illuminate\Http\Response
     */
    public function show(HaziFeladat $feladat)
    {
        return view('feladatok.show', [ 'feladat' => $feladat ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hazifeladat  $feladat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feladat = Hazifeladat::find($id);
        return view('feladatok.edit', [ 'feladat' => $feladat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hazifeladat  $feladat
     * @return \Illuminate\Http\Response
     */
    public function update(FeladatRequest $request, $id)
    {
        $adatok = $request->only(['link', 'szoveges', 'jegy']);
        $hazi = Hazifeladat::find($id);
        $hazi->fill($adatok);
        $hazi->save();
        return redirect()->route('feladatok.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hazifeladat  $feladat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hazifeladat::destroy($id);
        return redirect()->route('feladatok.index');
    }
}