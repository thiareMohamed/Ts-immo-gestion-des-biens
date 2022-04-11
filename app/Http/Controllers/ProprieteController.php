<?php

namespace App\Http\Controllers;

use App\Models\Propriete;
use App\Models\Proprietaire;
use Illuminate\Http\Request;

class ProprieteController extends Controller
{
    public function index(){
        $Proprietes = Propriete::with('proprietaire','quartier','type_propriete')->get(); 
        // dd($Proprietes);
        // $Proprietes = Propriete::all();
        return view('propriete/index', ['Proprietes' => $Proprietes]);
    }

    public function show($id, Request $request){
        $Propriete = Propriete::findOrFail($id);
        return view('propriete/editPropriete', ['Propriete' => $Propriete]);
    }

    public function store(Request $request){    

        // dd($request->All());

        $new_Propriete = Propriete::create([
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
        return view('propriete/addPropriete');
    }

    public function update($id,Request $request){
        $get_Propriete_to_update = Propriete::find($id);
        $message = '';
        $status = 0;
        if (is_null($get_Propriete_to_update)){
            $message = "L'idée que vous voulez modifier n'existe pas ";
            $status = 404;
        }else{
            $get_Propriete_to_update->update([
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
            $message = $get_Propriete_to_update;
            $status = 200;
            return $this->index($message);
        }
    }

    public function delete($id,Request $request){
        $get_Propriete_to_delete = Propriete:: find($id);
        $message = '';
        $status = 0;
        //testing if the Propriete is null
        if (is_null($get_Propriete_to_delete)){
            $message ="Cette idée n'existe pas";
            $status = 404;
        }else{
        $title_Propriete = $get_Propriete_to_delete->title;
        $message = "L'idée $title_Propriete a bien été suprimmé!!!";
        $get_Propriete_to_delete->delete();
        $status =200;
        }
        return $this->index();

    }
}