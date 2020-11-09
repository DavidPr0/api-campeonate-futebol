<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partida;
use App\Http\Requests\createPartida;

class PartidaController extends Controller
{
    public function index()
    {
        return Partida::all();
    }

    public function create()
    {

    }

    public function store(createPartida $request)
    {
        Partida::create($request->all());
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(createPartida $request, $id)
    {
        $time = Time::findOrFail($id);
        $time->update($request->all());
        return $time;
    }

    public function destroy($id)
    {
        //
    }
}
