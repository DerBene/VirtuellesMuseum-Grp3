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

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $persoenlichkeitenHasEpochen = $this->PersoenlichkeitenHasEpochen->newEntity();
        if ($this->request->is('post')) {
            $persoenlichkeitenHasEpochen = $this->PersoenlichkeitenHasEpochen->patchEntity($persoenlichkeitenHasEpochen, $this->request->getData());
            if ($this->PersoenlichkeitenHasEpochen->save($persoenlichkeitenHasEpochen)) {
                $this->Flash->success(__('The persoenlichkeiten has epochen has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The persoenlichkeiten has epochen could not be saved. Please, try again.'));
        }
        $this->set(compact('persoenlichkeitenHasEpochen'));
        $this->set('_serialize', ['persoenlichkeitenHasEpochen']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Persoenlichkeiten Has Epochen id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $persoenlichkeitenHasEpochen = $this->PersoenlichkeitenHasEpochen->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $persoenlichkeitenHasEpochen = $this->PersoenlichkeitenHasEpochen->patchEntity($persoenlichkeitenHasEpochen, $this->request->getData());
            if ($this->PersoenlichkeitenHasEpochen->save($persoenlichkeitenHasEpochen)) {
                $this->Flash->success(__('The persoenlichkeiten has epochen has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The persoenlichkeiten has epochen could not be saved. Please, try again.'));
        }
        $this->set(compact('persoenlichkeitenHasEpochen'));
        $this->set('_serialize', ['persoenlichkeitenHasEpochen']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Persoenlichkeiten Has Epochen id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $persoenlichkeitenHasEpochen = $this->PersoenlichkeitenHasEpochen->get($id);
        if ($this->PersoenlichkeitenHasEpochen->delete($persoenlichkeitenHasEpochen)) {
            $this->Flash->success(__('The persoenlichkeiten has epochen has been deleted.'));
        } else {
            $this->Flash->error(__('The persoenlichkeiten has epochen could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
