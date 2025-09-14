<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckRequest;
use App\Models\Check;
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('create');
    }

    public function store(CheckRequest $request)
    {
        return $check = $request->all();
        $check['langs'] = $request->input('langs');
        Check::create($request->post());
        return redirect()->route('index')->withSuccess('Its done');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
