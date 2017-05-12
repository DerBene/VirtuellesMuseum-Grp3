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
    }
}
