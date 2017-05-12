<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WerkeHasPersoenlichkeiten Controller
 *
 * @property \App\Model\Table\WerkeHasPersoenlichkeitenTable $WerkeHasPersoenlichkeiten
 */
class WerkeHasPersoenlichkeitenController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $werkeHasPersoenlichkeiten = $this->paginate($this->WerkeHasPersoenlichkeiten);

		$loginvalue = $this->request->session()->read('Auth.User.username');
		
		if(is_null($loginvalue))
		{
			$login = false;
		}else{
			$login = true;
		}
		$this->set(compact('login'));
		$this->set('_serialize', ['login']);
		
        $this->set(compact('werkeHasPersoenlichkeiten'));
        $this->set('_serialize', ['werkeHasPersoenlichkeiten']);
        
        
        //raussuchen
        
        $this->paginate = array(
            'Persoenlichkeiten' => array(
                'fields'=>array('Pers_ID','Name'),
                'paramType' => 'querystring'
        ));
        $persoenlichkeiten = $this->paginate('Persoenlichkeiten');
        $this->set('persoenlichkeiten',$persoenlichkeiten);
        
        $this->paginate = array(
            'Werke' => array(
                'fields'=>array('Werk_ID','Titel'),
                'paramType' => 'querystring'
        ));
        $werke = $this->paginate('Werke');
        $this->set('werke',$werke);
    }
}
