<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function search(Request $request){

        $term = $request->input('term');

       // dd($request->all(),$request->header('HX-Request'));

        $resultats = Personne::where('nom', 'like', "%$term%")
            ->orWhere('prenom', 'like', "%$term%")
            ->paginate();

        if ($request->header('HX-Request')) {
            return view('partials.table_person', [
                'personnes' => $resultats
            ])->render();
        }

        return view('home', [
            'personnes' => $resultats
        ]);
    }
}
