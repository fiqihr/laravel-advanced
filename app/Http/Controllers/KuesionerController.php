<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner;
use Illuminate\Http\Request;

class KuesionerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kuesioner = Kuesioner::all();
        return view('kuesioner.index', compact('kuesioner'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kuesioner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $masukkan = $request->validate([
            'username' => 'required',
            'q1' => 'required|numeric',  
            'q2' => 'required|numeric',  
            'q3' => 'required|numeric',  
        ]);
        
        $score = $masukkan['q1'] + $masukkan['q2'] + $masukkan['q3'];
        $masukkan['score'] = $score;
        
        $gass = Kuesioner::create([
            'username' => $request->username,
            'q1' => $request->q1,
            'q2' => $request->q2,
            'q3' => $request->q3,
            'score' => $score,
        ]);
        if ($gass) {
            return redirect()->route('kuesioner.index');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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