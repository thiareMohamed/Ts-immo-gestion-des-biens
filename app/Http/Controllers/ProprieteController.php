<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    public function index(){
        $Proprietaires = Proprietaire::all();
        return view('proprietaire/index', ['Proprietaires' => $Proprietaires]);
    }

    public function show($id, Request $request){
        $Proprietaire = Proprietaire::findOrFail($id);
        return view('proprietaire/editProprietaire', ['Proprietaire' => $Proprietaire]);
    }

    public function store(Request $request){

        // dd($request->All());

        $new_Proprietaire = Proprietaire::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'civilite'=>$request->civilite,
            'numero'=>$request->numero,
            'sexe'=>$request->sexe,
            'date_naissance'=>$request->date_naissance,
            'lieu_naissance'=>$request->lieu_naissance,
            'code_identite_national'=>$request->code_identite_national,
            'numero_identite_national'=>$request->numero_identite_national,
            'user_id'=>1

        ]);
        return view('proprietaire/addProprietaire');
    }

    public function update($id,Request $request){
        $get_Proprietaire_to_update = Proprietaire::find($id);
        $message = '';
        $status = 0;
        if (is_null($get_Proprietaire_to_update)){
            $message = "L'idée que vous voulez modifier n'existe pas ";
            $status = 404;
        }else{
            $get_Proprietaire_to_update->update([
                'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'civilite'=>$request->civilite,
            'numero'=>$request->numero,
            'sexe'=>$request->sexe,
            'date_naissance'=>$request->date_naissance,
            'lieu_naissance'=>$request->lieu_naissance,
            'code_identite_national'=>$request->code_identite_national,
            'numero_identite_national'=>$request->numero_identite_national,
            'user_id'=>1
            ]);
            $message = $get_Proprietaire_to_update;
            $status = 200;
            return $this->index($message);
        }
    }

    public function delete($id,Request $request){
        $get_Proprietaire_to_delete = Proprietaire:: find($id);
        $message = '';
        $status = 0;
        //testing if the Proprietaire is null
        if (is_null($get_Proprietaire_to_delete)){
            $message ="Cette idée n'existe pas";
            $status = 404;
        }else{
        $title_Proprietaire = $get_Proprietaire_to_delete->title;
        $message = "L'idée $title_Proprietaire a bien été suprimmé!!!";
        $get_Proprietaire_to_delete->delete();
        $status =200;
        }
        return $this->index();

    }
}