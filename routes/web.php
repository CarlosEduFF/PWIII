<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ContatoController::class, "index"]);
/*Route::get('/editar', function () {
    return view('editar.blade.php');
});*/
Route::post("/adicionarContato", [ContatoController::class, "adicionar"]);
Route::get("/editarContato/{id}", [ContatoController::class, "editar"]);
Route::get("/atualizarContato/{id}", [ContatoController::class, "atualizar"]);
Route::get("/excluirContato", [ContatoController::class, "excluir"]);
