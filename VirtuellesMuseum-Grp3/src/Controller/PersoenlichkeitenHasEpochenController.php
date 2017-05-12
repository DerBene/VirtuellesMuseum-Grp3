<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PersoenlichkeitenHasEpochen Controller
 *
 * @property \App\Model\Table\PersoenlichkeitenHasEpochenTable $PersoenlichkeitenHasEpochen
 */
class PersoenlichkeitenHasEpochenController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $persoenlichkeitenHasEpochen = $this->paginate($this->PersoenlichkeitenHasEpochen);

		$loginvalue = $this->request->session()->read('Auth.User.username');
		
		if(is_null($loginvalue))
		{
			$login = false;
		}else{
			$login = true;
		}
		$this->set(compact('login'));
		$this->set('_serialize', ['login']);
		
		
        $this->set(compact('persoenlichkeitenHasEpochen'));
        $this->set('_serialize', ['persoenlichkeitenHasEpochen']);
        
        //raussuchen
        
        $this->paginate = array(
            'Persoenlichkeiten' => array(
                'fields'=>array('Pers_ID','Name'),
                'paramType' => 'querystring'
        ));
        $persoenlichkeiten = $this->paginate('Persoenlichkeiten');
        $this->set('persoenlichkeiten',$persoenlichkeiten);
        
        $this->paginate = array(
            'Epochen' => array(
                'fields'=>array('E_ID','name'),
                'paramType' => 'querystring'
        ));
        $epochen = $this->paginate('Epochen');  //global für Template zur Darstellung
        $this->set('epochen',$epochen);
    }
}
