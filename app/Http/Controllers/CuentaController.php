<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCuentaRequest;
use App\Http\Requests\UpdateCuentaRequest;
use App\Models\Cliente;
use App\Models\Cuenta;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = Cuenta::all();

        return view('cuentas.index', [
            'cuentas' => $cuentas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuenta = new Cuenta();

        return view('cuentas.create', [
            'cuenta' => $cuenta,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCuentaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCuentaRequest $request)
    {
        $validados = $request->validated();
        $cuenta = new Cuenta($validados);
        $cuenta->save();
        return redirect()->route('cuentas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function show(Cuenta $cuenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuenta $cuenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCuentaRequest  $request
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCuentaRequest $request, Cuenta $cuenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuenta $cuenta)
    {
        //
    }

    public function titular(Cuenta $cuenta)
    {
        $clientes = $cuenta->clientes()->get();

        return view('cuentas.titulares', [
            'cuenta' => $cuenta,
            'clientes' => $clientes,
        ]);
    }

    public function addtitular(Cuenta $cuenta)
    {
        $clientes = Cliente::all()->diff($cuenta->clientes);

        return view('cuentas.addtitular', [
            'cuenta' => $cuenta,
            'clientes' => $clientes,
        ]);
    }

    public function addtitularmeter(Request $request, Cuenta $cuenta)
    {
        $cuenta->clientes()->attach($request->cliente);

        return redirect()->route('cuentas.index', $cuenta);
    }

    public function quitartitular(Cuenta $cuenta, Cliente $cliente)
    {
        $cuenta->clientes()->detach($cliente);

        return redirect()->route('cuentas.titulares', $cuenta)->with('success', 'Titular quitado con exito.');
    }

    public function movimientos(Cuenta $cuenta)
    {
        $movimientos = $cuenta->movimientos;

        return view('cuentas.movimientos', [
            'movimientos' => $movimientos,
            'cuenta' => $cuenta,
        ]);
    }
}
