<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("layanan.index");
    }

    /**
     * Handle request for the "Perpustakaan Digital" page.
     */
    public function perpustakaan()
    {
        return view("layanan.perpustakaan");
    }

    /**
     * Handle request for the "Jurnal" page.
     */
    public function jurnal()
    {
        return view("layanan.jurnal");
    }

    /**
     * Handle request for the "LPPM" page.
     */
    public function lppm()
    {
        return view("layanan.lppm");
    }

    /**
     * Handle request for the "UPM" page.
     */
    public function upm()
    {
        return view("layanan.upm");
    }

    // Other methods from the resource controller
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
