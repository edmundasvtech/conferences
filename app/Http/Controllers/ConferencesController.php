<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conferences;
class ConferencesController extends Controller
{
    public function index()
    {
        $conferences = Conferences::all();
        return view('index', compact('conferences'));
    }
}
