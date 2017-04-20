<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Epochen Controller
 *
 * @property \App\Model\Table\EpochenTable $Epochen
 */
class SearchController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {        
        $searchvalue = $this->request->getData();  //eingebebene Suche wird in eine Variable gelegt
        $this->set(compact('searchvalue'));
        $this->set('_serialize', ['searchvalue']);  //global verfügbar machen für andere funktionen und des Templates
        
        if(empty($searchvalue['Search']['searchvalue']))  //suche ohne eingabe soll auf falsch laufen
        {
            $suche = false;
        }
        else
        {
            $suche = true;
            $this->search($searchvalue);
        }
        
        $this->set(compact('suche'));
        $this->set('_serialize', ['suche']);
    }

    /**
     * View method
     *
     * @param string|null $id Epochen id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        //template
    }
    
    public function impressum($id = null)
    {
        //platzhalter
    }
    
    public function search($searchvalue)  //Suchfunktion durch die Datenbank
    {
        $this->paginate = array(
            'Epochen' => array(
                'conditions' => array('Epochen.name' => $searchvalue['Search']['searchvalue']),  //Rest für "SELECT FROM epochen WHERE Epochen.name = Suche"
                'fields'=>array('E_ID','name','Start','Ende'),
                'paramType' => 'querystring'
        ));
        $epochen = $this->paginate('Epochen');  //global für Template zur Darstellung
        $this->set('epochen',$epochen);
        
        $this->paginate = array(
            'Kategorien' => array(
                'conditions' => array('Kategorien.Name' => $searchvalue['Search']['searchvalue']),  //Wiederholung oben
                'fields'=>array('Kat_ID','Name','Unterkategorie','Beschreibung'),
                'paramType' => 'querystring'
        ));
        $kategorien = $this->paginate('Kategorien');
        $this->set('kategorien',$kategorien);
        
        $this->paginate = array(
            'Persoenlichkeiten' => array(
                'conditions' => array('Persoenlichkeiten.Name' => $searchvalue['Search']['searchvalue']),
                'fields'=>array('Pers_ID','Name','Kurzbeschreibung','Zitat', 'LangerText', 'BiografischeDaten', 'Freischaltung'),
                'paramType' => 'querystring'
        ));
        $persoenlichkeiten = $this->paginate('Persoenlichkeiten');
        $this->set('persoenlichkeiten',$persoenlichkeiten);
        
        $this->paginate = array(
            'Geographisch' => array(
                'conditions' => array('OR' => array(array('Geographisch.Ort' => $searchvalue['Search']['searchvalue']), array('Geographisch.Land' => $searchvalue['Search']['searchvalue']))),
                'fields'=>array('Graph_ID','Beschreibung','Ort','Land'),
                'paramType' => 'querystring'
        ));
        $geographisch = $this->paginate('Geographisch');
        $this->set('geographisch',$geographisch);
        
        $this->paginate = array(
            'Medien' => array(
                'conditions' => array('Medien.Urheber' => $searchvalue['Search']['searchvalue']),
                'fields'=>array('Med_ID','Typ','Dateipfad','Urheber', 'Erscheinungsdatum', 'Freischaltung', 'Persoenlichkeiten_Pers_ID'),
                'paramType' => 'querystring'
        ));
        $medien = $this->paginate('Medien');
        $this->set('medien',$medien);
        
        $this->paginate = array(
            'Werke' => array(
                'conditions' => array('OR' => array(array('Werke.Urheber' => $searchvalue['Search']['searchvalue']), array('Werke.Titel' => $searchvalue['Search']['searchvalue']))),
                'fields'=>array('Werk_ID','Titel','Typ','Dateipfad', 'Urheber', 'Erscheinungsdatum', 'Freischaltung', 'Geographisch_Graph_ID'),
                'paramType' => 'querystring'
        ));
        $werke = $this->paginate('Werke');
        $this->set('werke',$werke);
    }

}