<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PersoenlichkeitenHasKategorien Controller
 *
 * @property \App\Model\Table\PersoenlichkeitenHasKategorienTable $PersoenlichkeitenHasKategorien
 */
class PersoenlichkeitenHasKategorienController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $persoenlichkeitenHasKategorien = $this->paginate($this->PersoenlichkeitenHasKategorien);

		$loginvalue = $this->request->session()->read('Auth.User.username');
		
		if(is_null($loginvalue))
		{
			$login = false;
		}else{
			$login = true;
		}
		$this->set(compact('login'));
		$this->set('_serialize', ['login']);
		
		
        $this->set(compact('persoenlichkeitenHasKategorien'));
        $this->set('_serialize', ['persoenlichkeitenHasKategorien']);
    }
}
