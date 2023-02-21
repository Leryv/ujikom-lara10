<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMasterDataRequest;
use App\Http\Requests\UpdateMasterDataRequest;
use App\Models\MasterData;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class MasterDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function brand()
    {
        return view('data.brand');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function kategori()
    {
        return view('data.kategori');
    }

    public function uom()
    {
        return view('data.uom');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMasterDataRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MasterData $masterData): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MasterData $masterData): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMasterDataRequest $request, MasterData $masterData): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MasterData $masterData): RedirectResponse
    {
        //
    }
}