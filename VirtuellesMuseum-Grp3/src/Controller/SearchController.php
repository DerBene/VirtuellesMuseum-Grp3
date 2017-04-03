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
        $search = $this->paginate = [
            'contain' => ['Epochen', 'Medien', 'Kategorien', 'Geographisch', 'Persoenlichkeiten']
        ];

        $this->set(compact('search'));
        $this->set('_serialize', ['search']);
        
        $searchvalue = $this->request->getData();
        $this->set(compact('searchvalue'));
        $this->set('_serialize', ['searchvalue']);
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
        $epochen = $this->Epochen->get($id, [
            'contain' => []
        ]);

        $this->set('epochen', $epochen);
        $this->set('_serialize', ['epochen']);
    }

}