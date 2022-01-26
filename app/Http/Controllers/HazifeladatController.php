<?php

namespace App\Http\Controllers;

use App\Models\Hazifeladat;
use Illuminate\Http\Request;

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
        return view('feladatok.index', ['feladatok' => $feladatok]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return('feladatok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adatok = $request->only(['link', 'szoveges', 'jegy']);
        $feladat = new Hazifeladat();
        $feladat->fill($adatok);
        $feladat->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hazifeladat  $feladat
     * @return \Illuminate\Http\Response
     */
    public function show(Hazifeladat $feladat)
    {
        return view('feladatok.show', ['feladat' => $feladat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hazifeladat  $hazifeladat
     * @return \Illuminate\Http\Response
     */
    public function edit(Hazifeladat $hazifeladat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hazifeladat  $ertekeles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hazifeladat $ertekeles)
    {
        $adatok = $request->only(['link', 'szoveges', 'jegy']);;
        $ertekeles->fill($adatok);
        $ertekeles->save();
        return redirect()->route('feladatok.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $ids
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hazifeladat::destroy($id);
        return redirect('/feladatok');
    }
}
