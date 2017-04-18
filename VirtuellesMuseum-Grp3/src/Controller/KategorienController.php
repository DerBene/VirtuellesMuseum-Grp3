<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kategorien Controller
 *
 * @property \App\Model\Table\KategorienTable $Kategorien
 */
class KategorienController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $kategorien = $this->paginate($this->Kategorien);
		$loginvalue = $this->request->session()->read('Auth.User.username');
		
		if(is_null($loginvalue))
		{
			$login = false;
		}else{
			$login = true;
		}
		$this->set(compact('login'));
		$this->set('_serialize', ['login']);

        $this->set(compact('kategorien'));
        $this->set('_serialize', ['kategorien']);
    }

    /**
     * View method
     *
     * @param string|null $id Kategorien id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kategorien = $this->Kategorien->get($id, [
            'contain' => []
        ]);

        $this->set('kategorien', $kategorien);
        $this->set('_serialize', ['kategorien']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kategorien = $this->Kategorien->newEntity();
        if ($this->request->is('post')) {
            $kategorien = $this->Kategorien->patchEntity($kategorien, $this->request->getData());
            if ($this->Kategorien->save($kategorien)) {
                $this->Flash->success(__('The kategorien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kategorien could not be saved. Please, try again.'));
        }
        $this->set(compact('kategorien'));
        $this->set('_serialize', ['kategorien']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Kategorien id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kategorien = $this->Kategorien->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kategorien = $this->Kategorien->patchEntity($kategorien, $this->request->getData());
            if ($this->Kategorien->save($kategorien)) {
                $this->Flash->success(__('The kategorien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kategorien could not be saved. Please, try again.'));
        }
        $this->set(compact('kategorien'));
        $this->set('_serialize', ['kategorien']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Kategorien id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kategorien = $this->Kategorien->get($id);
        if ($this->Kategorien->delete($kategorien)) {
            $this->Flash->success(__('The kategorien has been deleted.'));
        } else {
            $this->Flash->error(__('The kategorien could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
