<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use Illuminate\Http\Request;

class DossierController extends Controller
{
    public function index()
    {
        $dossiers = Dossier::with('user')->get();
        return view('dossiers.index', compact('dossiers'));
    }
}
