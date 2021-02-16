<?php

namespace App\Http\Controllers;

use App\SuperBrave;
use Illuminate\Http\Request;

class SuperBraveController extends Controller
{
  public function index()
    {
        return response()->json(collect(range(1, 100))->map(function ($id) { return new SuperBrave($id); }));
    }

    public function show($n)
    {
        return response()->json(collect(range(1, $n))->map(function ($id) { return new SuperBrave($id); }));
    }
}