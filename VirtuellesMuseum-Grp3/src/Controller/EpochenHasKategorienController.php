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
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()   //vom Framework zur Verfügung gestellt
    {
        $epochenHasKategorien = $this->EpochenHasKategorien->newEntity();
        if ($this->request->is('post')) {
            $epochenHasKategorien = $this->EpochenHasKategorien->patchEntity($epochenHasKategorien, $this->request->getData());
            if ($this->EpochenHasKategorien->save($epochenHasKategorien)) {
                $this->Flash->success(__('The epochen has kategorien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The epochen has kategorien could not be saved. Please, try again.'));
        }
        $this->set(compact('epochenHasKategorien'));
        $this->set('_serialize', ['epochenHasKategorien']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Epochen Has Kategorien id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)   //vom Framework zur Verfügung gestellt
    {
        $epochenHasKategorien = $this->EpochenHasKategorien->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $epochenHasKategorien = $this->EpochenHasKategorien->patchEntity($epochenHasKategorien, $this->request->getData());
            if ($this->EpochenHasKategorien->save($epochenHasKategorien)) {
                $this->Flash->success(__('The epochen has kategorien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The epochen has kategorien could not be saved. Please, try again.'));
        }
        $this->set(compact('epochenHasKategorien'));
        $this->set('_serialize', ['epochenHasKategorien']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Epochen Has Kategorien id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)   //vom Framework zur Verfügung gestellt
    {
        $this->request->allowMethod(['post', 'delete']);
        $epochenHasKategorien = $this->EpochenHasKategorien->get($id);
        if ($this->EpochenHasKategorien->delete($epochenHasKategorien)) {
            $this->Flash->success(__('The epochen has kategorien has been deleted.'));
        } else {
            $this->Flash->error(__('The epochen has kategorien could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}