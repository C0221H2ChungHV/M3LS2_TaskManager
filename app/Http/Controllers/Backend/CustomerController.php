<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('backend/index');
    }

    public function create()
    {
        return view('backend/create');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $age = $request->age;
        $email = $request->email;
        $address = $request->address;
        return view('backend/store', compact(['name', 'age', 'email', 'address']));
    }

    public function show(Request $request)
    {
        $result = "khach hang co ma so ".$request->id." co thong tin la: Nguyen Van A, 0123456789, test@email.com";
        return view('backend/show', compact(['result']));
    }

    public function edit(Request $request)
    {
        $result = $request->id;
        return view('backend/edit', compact(['result']));
    }

    public function update(Request $request)
    {
        $name = $request->name;
        $age = $request->age;
        $email = $request->email;
        $address = $request->address;
        return view('backend/update', compact(['name', 'age', 'email', 'address']));
    }

    public function delete(Request $request)
    {
        $result = "customer id ".$request->id." da duoc xoa";
        echo $result;
    }
}
