<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTitularRequest;
use App\Http\Requests\UpdateTitularRequest;
use App\Models\Titular;

class TitularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTitularRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTitularRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titular  $titular
     * @return \Illuminate\Http\Response
     */
    public function show(Titular $titular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titular  $titular
     * @return \Illuminate\Http\Response
     */
    public function edit(Titular $titular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTitularRequest  $request
     * @param  \App\Models\Titular  $titular
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTitularRequest $request, Titular $titular)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titular  $titular
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titular $titular)
    {
        //
    }
}
