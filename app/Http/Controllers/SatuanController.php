<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSatuanRequest;
use App\Http\Requests\UpdateSatuanRequest;
use App\Models\Satuan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSatuanRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Satuan $satuan): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Satuan $satuan): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSatuanRequest $request, Satuan $satuan): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Satuan $satuan): RedirectResponse
    {
        //
    }
}
