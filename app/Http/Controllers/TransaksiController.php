<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
use App\Models\Transaksi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function in()
    {
        return view('transaksi.in');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function out()
    {
        return view('transaksi.out');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransaksiRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi): RedirectResponse
    {
        //
    }
}