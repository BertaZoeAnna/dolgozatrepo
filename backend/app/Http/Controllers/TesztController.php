<?php

namespace App\Http\Controllers;

use App\Models\Teszt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesztController extends Controller
{
    //
    public function index()
    {
        $tesztek = Teszt::all();
        return response()->json(['tesztek' => $tesztek]);
    }
    public function tesztek($kategoria)
    {
        $tesztek = DB::table('teszts')
        ->select('teszts.kerdes')
        ->where('kategoriaId', '=', $kategoria);
        return response()->json(['tesztek' => $tesztek]);
    }
}
