<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExampleSetController extends Controller
{
    public function index()
    {
        return view('sets.example.write-for-us');
    }
}
