<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display the main profile page.
     */
    public function index()
    {
        return view('profile.index');
    }

    /**
     * Display the "Tentang STTC" page.
     */
    public function tentang()
    {
        return view('profile.tentang');
    }

    /**
     * Display the "Statuta" page.
     */
    public function statuta()
    {
        return view('profile.statuta');
    }

    /**
     * Display the "Organisasi" page.
     */
    public function organisasi()
    {
        return view('profile.organisasi');
    }

    /**
     * Display the "SK Kode Etik" page.
     */
    public function skKodeEtik()
    {
        return view('profile.sk_kode_etik');
    }

    /**
     * Display the "Akreditasi" page.
     */
    public function akreditasi()
    {
        return view('profile.akreditasi');
    }

    ///Other
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