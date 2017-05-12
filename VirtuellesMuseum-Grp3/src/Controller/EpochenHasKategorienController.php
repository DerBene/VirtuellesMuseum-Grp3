<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EpochenHasKategorien Controller
 *
 * @property \App\Model\Table\EpochenHasKategorienTable $EpochenHasKategorien
 */
class EpochenHasKategorienController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()   //vom Framework zur Verfügung gestellt
    {
        $epochenHasKategorien = $this->paginate($this->EpochenHasKategorien);

		$loginvalue = $this->request->session()->read('Auth.User.username');
		
		if(is_null($loginvalue))
		{
			$login = false;
		}else{
			$login = true;
		}
		$this->set(compact('login'));
		$this->set('_serialize', ['login']);
		
        $this->set(compact('epochenHasKategorien'));
        $this->set('_serialize', ['epochenHasKategorien']);
        
        //raussuchen
        
        $this->paginate = array(
            'Epochen' => array(
                'fields'=>array('E_ID','name'),
                'paramType' => 'querystring'
        ));
        $epochen = $this->paginate('Epochen');  //global für Template zur Darstellung
        $this->set('epochen',$epochen);
        
        $this->paginate = array(
            'Kategorien' => array(
                'fields'=>array('Kat_ID','Name'),
                'paramType' => 'querystring'
        ));
        $kategorien = $this->paginate('Kategorien');
        $this->set('kategorien',$kategorien);
    }
}