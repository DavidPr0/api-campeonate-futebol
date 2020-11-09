<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use App\Http\Requests\createTime;

class TimeController extends Controller
{
    public function index()
    {
        return Time::all();
    }

    public function create()
    {
        //
    }

    public function store(createTime $request)
    {
        Time::create($request->all());
    }

    public function show($id)
    {
        return Time::findOrFail($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(createTime $request, $id)
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
