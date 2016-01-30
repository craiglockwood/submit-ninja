<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ExampleResults;

class ExampleSetController extends Controller
{
    public function index()
    {
        return view('sets.example.write-for-us');
    }

    public function store(Request $request)
    {
        $ex = ExampleResults::create($request->all());

        dd($ex);
    }
}
