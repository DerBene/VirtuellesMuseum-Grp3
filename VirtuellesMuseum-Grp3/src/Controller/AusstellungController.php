<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Epochen Controller
 *
 * @property \App\Model\Table\EpochenTable $Epochen
 */
class AusstellungController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()         //rufe alle Freigeschalteten Objekte für die Ausstellung auf
    {
        $this->set(compact('ausstellung'));
        $this->set('_serialize', ['ausstellung']);

        $this->ausstellung('1');
    }

    /**
     * View method
     *
     * @param string|null $id Epochen id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    public function ausstellung($searchvalue)    //Funktion für select aus der datenbank der relevanten Objekte
    {
        $this->paginate = array(
            'Epochen' => array(
                'fields'=>array('E_ID','name','Start','Ende'),
                'paramType' => 'querystring'
        ));
        $epochen = $this->paginate('Epochen');
        $this->set('epochen',$epochen);

        $this->paginate = array(
            'Kategorien' => array(
                'fields'=>array('Kat_ID','Name','Unterkategorie','Beschreibung'),
                'paramType' => 'querystring'
        ));
        $kategorien = $this->paginate('Kategorien');
        $this->set('kategorien',$kategorien);

        $this->paginate = array(
            'Persoenlichkeiten' => array(
                'conditions' => array('Persoenlichkeiten.Freischaltung' => $searchvalue),
                'fields'=>array('Pers_ID','Name','Kurzbeschreibung','Zitat', 'LangerText', 'BiografischeDaten', 'Freischaltung'),
                'paramType' => 'querystring'
        ));
        $persoenlichkeiten = $this->paginate('Persoenlichkeiten');
        $this->set('persoenlichkeiten',$persoenlichkeiten);

        $this->paginate = array(
            'Geographisch' => array(
                'fields'=>array('Graph_ID','Beschreibung','Ort','Land'),
                'paramType' => 'querystring'
        ));
        $geographisch = $this->paginate('Geographisch');
        $this->set('geographisch',$geographisch);

        $this->paginate = array(
            'Medien' => array(
                'conditions' => array('Medien.Freischaltung' => $searchvalue),
                'fields'=>array('Med_ID','Typ','Dateipfad','Urheber', 'Erscheinungsdatum', 'Freischaltung', 'Persoenlichkeiten_Pers_ID'),
                'paramType' => 'querystring'
        ));
        $medien = $this->paginate('Medien');
        $this->set('medien',$medien);

        $this->paginate = array(
            'Werke' => array(
                'conditions' => array('OR' => array(array('Werke.Freischaltung' => $searchvalue))),
                'fields'=>array('Werk_ID','Titel','Typ','Dateipfad', 'Urheber', 'Erscheinungsdatum', 'Freischaltung', 'Geographisch_Graph_ID'),
                'paramType' => 'querystring'
        ));
        $werke = $this->paginate('Werke');
        $this->set('werke',$werke);
    }

}