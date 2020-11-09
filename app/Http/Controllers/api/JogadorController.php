<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jogador;
use App\Http\Requests\createJogador;

class JogadorController extends Controller
{
    public function index()
    {
        return Jogador::all();
    }

    public function create()
    {

    }

    public function store(createJogador $request)
    {

        return Jogador::create($request->all());
    }

    public function show($id)
    {
        return Jogador::findOrFail($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(createJogador $request, $id)
    {
        $jogador = Jogador::findOrFail($id);
        $jogador->update($request->all());
        return $jogador;
    }

    public function destroy($id)
    {
        //
    }
}
