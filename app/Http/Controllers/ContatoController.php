<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index(Request $req){
        $contact = Contato::all();
        return  view('welcome')->with("contato",$contact);
    }
    public function adicionar(Request $req){
        $contact = new Contato;
        $contact->nome = $req->nome;
        $contact->telefone = $req->telefone;
        $contact->email = $req->email;
        $contact->save();
        return redirect()->back();
    }
}
