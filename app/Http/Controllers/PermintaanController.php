<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePermintaanRequest;
use App\Http\Requests\UpdatePermintaanRequest;
use App\Models\Permintaan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PermintaanController extends Controller
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
    public function store(StorePermintaanRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Permintaan $permintaan): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permintaan $permintaan): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePermintaanRequest $request, Permintaan $permintaan): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permintaan $permintaan): RedirectResponse
    {
        //
    }
}
