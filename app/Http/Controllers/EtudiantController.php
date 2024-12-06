<?php

namespace App\Http\Controllers;

use Route;

class EtudiantController extends Controller
{
    public function Index()
    {
        // return "<h1>EtudiantController : Index action</h1>";
        // Traitement ....
        return view('home');
    }

    public function Liste()
    {
        $etudiants = $this->allEtudiant();
        $fruits = ['banane','pomme','fraise'];
        $nom = "Breukh";
        // return view('etudiant',[
        //     'etudiants' => $etudiants,
        //     'nom'   => $nom
        // ]);

        return view('etudiant',compact('etudiants','nom','fruits'));
    }

    public function Details($id)
    {
        $etuActu = $this->getEtudiantById($id);

        if($etuActu != null){
            return view('details',compact('etuActu'));
        }else{
            return $this->Liste();
        }
    }
    public function About()
    {
        return view('about');
    }

    private function allEtudiant()
    {
        $etudiants = [
            ['id' => 1, 'nom' => 'Itiere','prenom'  => 'Sydney', 'etat'=>1],
            ['id' => 2, 'nom' => 'Diallo','prenom'  => 'Ma Tacko', 'etat'=>1],
            ['id' => 3, 'nom' => 'Sourang','prenom' => 'Mansourang', 'etat'=>1],
            ['id' => 4, 'nom' => 'Faye','prenom'    => 'Daouda', 'etat'=>1],
        ];
        return $etudiants;
    }

    private function getEtudiantById($id)
    {
        $etudiants = $this->allEtudiant();
        foreach ($etudiants as $etu) {
            if($etu['id']==$id){
                return $etu;
            }
        }
        return null;
    }
}
