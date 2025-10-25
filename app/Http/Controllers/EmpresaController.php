<?php

namespace App\Http\Controllers;
use App\Models\Empresas;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public readonly Empresas $empresa;
    public function __construct()
    {
        $this->empresa = new Empresas();

    }
    public function index()
    {
        $empresas= Empresas::all();
        return view('empresas.empresas', ['empresas' => $empresas]);
    }

   
    public function create()
    {
        return view('empresas/cadastroEmpresa');

    }

    
    public function store(Request $request)
    {
        try{
            $request->validate([
            'razao-social' => 'required|string|max:255',
            'cnpj'         => 'required|string|max:20',
            'email'        => 'required|email',
            'password'     => 'required|min:6',
        ]);
        $this->empresa->create([
            'razao-social' => $request->input('razao-social'),
            'cnpj'         => $request->input('cnpj'),
            'email'        => $request->input('email'),
            'password'     => bcrypt($request->input('password')),
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);
            return redirect()->back()->with('success', 'Empresa cadastrada com sucesso.');
        }catch(\Exception $e){
            return redirect()->back()->with('error', 'Erro ao cadastrar empresa: ');
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
