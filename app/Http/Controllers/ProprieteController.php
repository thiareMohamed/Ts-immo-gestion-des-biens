<?php

namespace App\Http\Controllers;

use App\Models\Quartier;
use App\Models\Propriete;
use App\Models\Proprietaire;
use Illuminate\Http\Request;
use App\Models\Type_propriete;

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
        $Quartiers = Quartier::all();
        $Type_proprietes = Type_propriete::all();
        $Proprietaires = Proprietaire::all();
        return view('propriete/editPropriete', compact('Propriete','Type_proprietes', 'Quartiers', 'Proprietaires'));
    }

    public function store(Request $request){    

        // dd($request->All());

        $new_Propriete = Propriete::create([
            'statut'=>$request->statut,
            'montant'=>$request->montant,
            'surface'=>$request->surface,
            'nombre_piece'=>$request->nombre_piece,
            'nombre_etage'=>$request->nombre_etage,
            'location_etage'=>$request->location_etage,
            'quartier_id'=>$request->quartier_id,
            'type_propriete_id'=>$request->type_propriete_id,
            'proprietaire_id'=>$request->proprietaire_id
        ]);
        return $this->addPropriete();
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
                'statut'=>$request->statut,
                'montant'=>$request->montant,
                'surface'=>$request->surface,
                'nombre_piece'=>$request->nombre_piece,
                'nombre_etage'=>$request->nombre_etage,
                'location_etage'=>$request->location_etage,
                'quartier_id'=>$request->quartier_id,
                'type_propriete_id'=>$request->type_propriete_id,
                'proprietaire_id'=>$request->proprietaire_id
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

    public function addPropriete() {
        $Quartiers = Quartier::all();
        $Type_proprietes = Type_propriete::all();
        $Proprietaires = Proprietaire::all();

        return view('/propriete/addPropriete', compact('Type_proprietes', 'Quartiers', 'Proprietaires'));
    }
}