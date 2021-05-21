<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('task/index');
    }

    public function create()
    {
        return view('task/create');
    }

    public function store(Request $request)
    {
        $store = $request->name;
        echo $store . ' da duoc them';
    }

    public function show(Request $request)
    {
        echo $request->taskId;
    }

    public function edit(Request $request)
    {
        $id = $request->taskId;
        return view('task/edit', compact('id'));
    }

    public function update(Request $request)
    {

        echo $request->taskId;
        echo 'ten '.$request->name;
    }

    public function destroy(Request $request)
    {
        echo $request->photo." da duoc xoa";
    }
}
