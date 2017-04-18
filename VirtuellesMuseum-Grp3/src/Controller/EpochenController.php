<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Epochen Controller
 *
 * @property \App\Model\Table\EpochenTable $Epochen
 */
class EpochenController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $epochen = $this->paginate($this->Epochen);
		$loginvalue = $this->request->session()->read('Auth.User.username');
		
		if(is_null($loginvalue))
		{
			$login = false;
		}else{
			$login = true;
		}
		$this->set(compact('login'));
		$this->set('_serialize', ['login']);

        $this->set(compact('epochen'));
        $this->set('_serialize', ['epochen']);
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

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $epochen = $this->Epochen->newEntity();
        if ($this->request->is('post')) {
            $epochen = $this->Epochen->patchEntity($epochen, $this->request->getData());
            if ($this->Epochen->save($epochen)) {
                $this->Flash->success(__('The epochen has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The epochen could not be saved. Please, try again.'));
        }
        $this->set(compact('epochen'));
        $this->set('_serialize', ['epochen']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Epochen id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $epochen = $this->Epochen->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $epochen = $this->Epochen->patchEntity($epochen, $this->request->getData());
            if ($this->Epochen->save($epochen)) {
                $this->Flash->success(__('The epochen has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The epochen could not be saved. Please, try again.'));
        }
        $this->set(compact('epochen'));
        $this->set('_serialize', ['epochen']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Epochen id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $epochen = $this->Epochen->get($id);
        if ($this->Epochen->delete($epochen)) {
            $this->Flash->success(__('The epochen has been deleted.'));
        } else {
            $this->Flash->error(__('The epochen could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
