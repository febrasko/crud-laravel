<?php

use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-candidato', function (Request $informacoes) {
    Candidato::create([
        'nome' => $informacoes->nome,
        'tel' => $informacoes->tel
    ]);
    echo 'Candidato criado com sucesso';
});

Route::get('/mostrar-candidato/{id}', function ($id) {
    // dd(Candidato::find($id));
    // dd(Candidato::findOrFail($id));
    $candidato = Candidato::findOrFail($id);
    echo "{$candidato->nome} <br>{$candidato->tel}";
});

Route::get('/editar-candidato/{id}', function ($id) {
    $candidato = Candidato::findOrFail($id);
    return view('/editar-candidato', ['candidato' => $candidato]);
});

Route::put('/atualizar-candidato/{id}', function (Request $informacoes, $id) {
    $candidato = Candidato::findOrFail($id);
    $candidato->nome = $informacoes->nome;
    $candidato->tel = $informacoes->tel;
    $candidato->save();
    echo 'Candidato atualizado com sucesso';
});

Route::get('/excluir-candidato/{id}', function (Request $informacoes, $id) {
    $candidato = Candidato::findOrFail($id);
    $candidato->delete();
    echo "Candidato excluído com sucesso";
});
