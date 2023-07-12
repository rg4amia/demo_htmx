<?php

use App\Http\Controllers\PersonneController;
use App\Models\Personne;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {

    $view = 'home';

    if($request->attributes->get('htmx')){
        $view = 'partials.table_person';
    }

    return view($view, [
        'personnes' => Personne::paginate(50)
    ]);
});

Route::get('/search',[PersonneController::class, 'search'])->name('search');
