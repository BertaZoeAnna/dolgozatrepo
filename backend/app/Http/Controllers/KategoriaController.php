<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    //
    public function index()
    {
        $kategoriak = Kategoria::all();
        return response()->json(['kategoriak' => $kategoriak]);
    }
}
